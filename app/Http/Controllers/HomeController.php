<?php

namespace App\Http\Controllers;

use App\Helpers\QuoteOrderHelper;
use App\Models\ManufacturingTypes;
use App\Models\ProductDesc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request){
        return view('frontend.home');
    }
    public function shared_projects(Request $request){
        return view('frontend.shared_projects');
    }
    public function project_details(Request $request){
        return view('frontend.project_details');
    }
    public function cnc_quote(Request $request){

        $manufacturingTypes = ManufacturingTypes::with([
            'materials.materialTypes.colors',
            'materials.materialTypes.processes',
            'materials.surfaces.surfaceTypes',
        ])->orderBy('name')->get();

        // dd($manufacturingTypes);

        $quoteConfig = [];

        foreach ($manufacturingTypes as $manufacturingType) {
            $serviceKey = Str::contains(strtolower((string) $manufacturingType->name), '3d') ? '3d' : 'cnc';

            $materials = $manufacturingType->materials->map(function ($material) {
                $materialTypes = $material->materialTypes->map(function ($materialType) {
                    return [
                        'id' => $materialType->id,
                        'name' => $materialType->name,
                        'colors' => $materialType->colors
                            ->map(fn ($color) => ['id' => $color->id, 'name' => $color->name, 'code' => $color->code])
                            ->values(),
                        'processes' => $materialType->processes
                            ->map(fn ($process) => ['id' => $process->id, 'name' => $process->name])
                            ->values(),
                    ];
                })->values();

                $surfaceFinishes = $material->surfaces->flatMap(function ($surface) {
                    return $surface->surfaceTypes->map(function ($surfaceType) use ($surface) {
                        return [
                            'category' => $surface->name,
                            'id' => $surfaceType->id,
                            'name' => $surfaceType->name,
                            'description' => $surfaceType->description,
                        ];
                    });
                })->values();

                return [
                    'id' => $material->id,
                    'name' => $material->name,
                    'infill' => $material->infill,
                    'types' => $materialTypes,
                    'surface_finishes' => $surfaceFinishes,
                ];
            })->values();

            $quoteConfig[$serviceKey] = [
                'id' => $manufacturingType->id,
                'name' => $manufacturingType->name,
                'materials' => $materials,
            ];
        }

        $productCategories = ProductDesc::with('children')
            ->whereNull('parent_id')
            ->orderBy('name')
            ->get();
        
        // dd($quoteConfig);

        return view('frontend.cnc_quote', [
            'quoteConfig' => $quoteConfig,
            'productCategories' => $productCategories,
        ]);
    }

    public function submit_cnc_quote(Request $request)
    {
        $partsInput = $request->input('parts');
        if (is_string($partsInput)) {
            $decoded = json_decode($partsInput, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $request->merge(['parts' => $decoded]);
            }
        }

        $validated = $request->validate([
            'parts' => ['required', 'array', 'min:1', 'max:10'],
            'lead_time' => ['nullable', 'string', 'in:3-5,express'],
            'parts.*.part_number' => ['required', 'integer', 'min:1'],
            'parts.*.manufacturing_types_id' => ['nullable', 'integer'],
            'parts.*.cad_files' => ['required', 'array', 'min:1'],
            'parts.*.cad_files.*' => ['required', 'string'],
            'parts.*.technical_drawing_files' => ['nullable', 'array'],
            'parts.*.technical_drawing_files.*' => ['nullable', 'string'],
            'parts.*.quantity' => ['nullable', 'integer', 'min:1'],
            'parts.*.design_unit' => ['nullable', 'string'],
            'parts.*.material' => ['nullable', 'string'],
            'parts.*.custom_material' => ['nullable', 'string'],
            'parts.*.material_type' => ['nullable', 'string'],
            'parts.*.color' => ['nullable', 'string'],
            'parts.*.color_code' => ['nullable', 'string'],
            'parts.*.process' => ['nullable', 'string'],
            'parts.*.surface_finish' => ['nullable', 'string'],
            'parts.*.threads' => ['nullable', 'string'],
            'parts.*.inserts' => ['nullable', 'string'],
            'parts.*.tolerance' => ['nullable', 'string'],
            'parts.*.roughness' => ['nullable', 'string'],
            'parts.*.markings' => ['nullable', 'array'],
            'parts.*.markings.*' => ['nullable', 'string'],
            'parts.*.assembly' => ['nullable', 'string'],
            'parts.*.appearance' => ['nullable', 'string'],
            'parts.*.inspection' => ['nullable', 'string'],
            'parts.*.printing_risk_wall' => ['nullable', 'boolean'],
            'parts.*.printing_risk_threads' => ['nullable', 'boolean'],
            'parts.*.product_category' => ['required', 'string'],
            'parts.*.special_request' => ['nullable', 'string'],
            'cad_uploads' => ['nullable', 'array'],
            'cad_uploads.*' => ['nullable', 'array'],
            'cad_uploads.*.*' => ['nullable', 'file'],
            'drawing_uploads' => ['nullable', 'array'],
            'drawing_uploads.*' => ['nullable', 'array'],
            'drawing_uploads.*.*' => ['nullable', 'file'],
        ]);

        $parts = $validated['parts'];
        $uploadedCadFiles = $request->file('cad_uploads', []);
        $uploadedDrawingFiles = $request->file('drawing_uploads', []);

        // foreach ($parts as $index => &$part) {
        //     $partCadPaths = [];
        //     foreach (($uploadedCadFiles[$index] ?? []) as $file) {
        //         if ($file) {
        //             $partCadPaths[] = $file->store('quotes/cad', 'public');
        //         }
        //     }

        //     if (!empty($partCadPaths)) {
        //         $part['cad_files'] = $partCadPaths;
        //     }

        //     $partDrawingPaths = [];
        //     foreach (($uploadedDrawingFiles[$index] ?? []) as $file) {
        //         if ($file) {
        //             $partDrawingPaths[] = $file->store('quotes/drawings', 'public');
        //         }
        //     }

        //     if (!empty($partDrawingPaths)) {
        //         $part['technical_drawing_files'] = $partDrawingPaths;
        //     }
        // }
        // unset($part);

        foreach ($parts as $index => &$part) {

            $partCadPaths = [];

            foreach (($uploadedCadFiles[$index] ?? []) as $file) {
                if ($file) {

                    $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

                    $partCadPaths[] = $file->storeAs(
                        'quotes/cad',
                        $filename,
                        'public'
                    );
                }
            }

            if (!empty($partCadPaths)) {
                $part['cad_files'] = $partCadPaths;
            }

            $partDrawingPaths = [];

            foreach (($uploadedDrawingFiles[$index] ?? []) as $file) {
                if ($file) {

                    $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

                    $partDrawingPaths[] = $file->storeAs(
                        'quotes/drawings',
                        $filename,
                        'public'
                    );
                }
            }

            if (!empty($partDrawingPaths)) {
                $part['technical_drawing_files'] = $partDrawingPaths;
            }
        }

        unset($part);

        $request->session()->put('cnc_quote_request', [
            'submitted_at' => now()->toDateTimeString(),
            'lead_time' => $validated['lead_time'] ?? '3-5',
            'parts' => $parts,
        ]);

        $orderId = null;
        if (Auth::check() && (string) Auth::user()->user_type === '2') {
            $order = QuoteOrderHelper::storeQuote($parts, Auth::id(), $validated['lead_time'] ?? '3-5');
            $orderId = $order->order_number;
            $request->session()->forget('cnc_quote_request');
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Order placed successfully.',
            'parts_count' => count($parts),
            'order_id' => $orderId,
        ]);
    }
    public function profile(Request $request){
        return view('frontend.profile');
    }
    public function faq(Request $request){
        return view('frontend.faq');
    }
    public function why_us(Request $request){
        return view('frontend.why_us');
    }
    public function contact(Request $request){
        return view('frontend.contact');
    }
    public function cnc_machining(Request $request){
        return view('frontend.cnc_machining');
    }
    public function threed_printing(Request $request){
        return view('frontend.3d-printing');
    }
    public function laser_cutting(Request $request){
        return view('frontend.laser_cutting');
    }
    public function sheet_metal(Request $request){
        return view('frontend.sheet_metal');
    }
    public function wire_cutting(Request $request){
        return view('frontend.wire_cutting');
    }
    
    
    
}

<?php

namespace App\Http\Controllers;

use App\Models\ManufacturingTypes;
use App\Models\ProductDesc;
use Illuminate\Http\Request;
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

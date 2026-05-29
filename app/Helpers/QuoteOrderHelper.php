<?php

namespace App\Helpers;

use App\Models\OrderDetails;
use App\Models\Orders;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuoteOrderHelper
{
    public static function storeQuote(array $parts, ?int $userId = null, ?string $leadTime = null): Orders
    {
        return DB::transaction(function () use ($parts, $userId, $leadTime) {
            $order = Orders::create([
                'user_id' => $userId,
                'order_number' => self::generateOrderNumber(),
                'lead_time' => $leadTime ?: '3-5',
                'subtotal' => 0,
                'discount' => 0,
                'tax' => 0,
                'shipping_charge' => 0,
                'total' => 0,
                'status' => 'pending',
                'payment_status' => 'pending',
                'notes' => 'Quote request created from instant quote form.',
            ]);

            foreach ($parts as $part) {
                $cadFiles = array_values(array_filter((array) Arr::get($part, 'cad_files', [])));
                $drawingFiles = array_values(array_filter((array) Arr::get($part, 'technical_drawing_files', [])));
                $markings = array_values(array_filter((array) Arr::get($part, 'markings', [])));

                OrderDetails::create([
                    'order_id' => $order->id,
                    'manufacturing_types_id' => (int) Arr::get($part, 'manufacturing_types_id', 1),
                    'cad_file' => implode(',', $cadFiles),
                    'quantity' => (string) Arr::get($part, 'quantity', 1),
                    'design_units' => (string) Arr::get($part, 'design_unit', ''),
                    'material' => (string) Arr::get($part, 'material', ''),
                    'material_type' => (string) Arr::get($part, 'material_type', ''),
                    'color' => (string) Arr::get($part, 'color', ''),
                    'color_code' => (string) Arr::get($part, 'color_code', ''),
                    'process' => (string) Arr::get($part, 'process', ''),
                    'infill' => (string) Arr::get($part, 'infill', ''),
                    'technical_drawing_file' => implode(',', $drawingFiles),
                    'threads_and_tapped_holes' => (string) Arr::get($part, 'threads', ''),
                    'tolerance' => (string) Arr::get($part, 'tolerance', ''),
                    'surface_roughness' => (string) Arr::get($part, 'roughness', ''),
                    'inserts' => (string) Arr::get($part, 'inserts', ''),
                    'part_marking' => implode(',', $markings),
                    'parts_assembly' => (string) Arr::get($part, 'assembly', ''),
                    'finished_appearance' => (string) Arr::get($part, 'appearance', ''),
                    'printing_risk' => json_encode([
                        'wall' => (bool) Arr::get($part, 'printing_risk_wall', false),
                        'threads' => (bool) Arr::get($part, 'printing_risk_threads', false),
                    ]),
                    'inspection' => (string) Arr::get($part, 'inspection', ''),
                    'product_desc' => (string) Arr::get($part, 'product_category', ''),
                    'Other_special_request' => (string) Arr::get($part, 'special_request', ''),
                    'full_data' => json_encode($part),
                ]);
            }

            return $order;
        });
    }

    protected static function generateOrderNumber(): string
    {
        do {
            $orderNumber = 'Q' . now()->format('Ymd') . strtoupper(Str::random(6));
        } while (Orders::where('order_number', $orderNumber)->exists());

        return $orderNumber;
    }
}

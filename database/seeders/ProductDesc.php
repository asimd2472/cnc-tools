<?php

namespace Database\Seeders;

use App\Models\ProductDesc as ModelsProductDesc;
use Illuminate\Database\Seeder;

class ProductDesc extends Seeder
{
    public function run(): void
    {

        $json = file_get_contents(database_path('data/product-desc.json'));
        $data = json_decode($json, true);

        foreach ($data as $item) {

            // Insert or update category
            $category = ModelsProductDesc::updateOrCreate(
                ['name' => $item['name'], 'parent_id' => null], // condition
                ['name' => $item['name']] // values to update
            );

            foreach ($item['subcategories'] as $sub) {

                ModelsProductDesc::updateOrCreate(
                    [
                        'name' => $sub['name'],
                        'parent_id' => $category->id
                    ],
                    [
                        'name' => $sub['name']
                    ]
                );
            }
        }

    }

}
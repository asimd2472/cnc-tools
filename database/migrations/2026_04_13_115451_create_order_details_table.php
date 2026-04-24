<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->foreignId('manufacturing_types_id')->constrained()->cascadeOnDelete();
            $table->string('cad_file')->nullable();
            $table->string('quantity')->nullable();
            $table->string('design_units')->nullable();
            $table->string('material')->nullable();
            $table->string('material_type')->nullable();
            $table->string('color')->nullable();
            $table->string('color_code')->nullable();
            $table->string('process')->nullable();
            $table->string('infill')->nullable();
            $table->string('technical_drawing_file')->nullable();
            $table->string('threads_and_tapped_holes')->nullable();
            $table->string('threads_and_tapped_file')->nullable();
            $table->string('tolerance')->nullable();
            $table->string('tolerance_file')->nullable();
            $table->string('surface_roughness')->nullable();
            $table->string('surface_roughness_file')->nullable();
            $table->string('inserts')->nullable();
            $table->string('inserts_file')->nullable();
            $table->string('part_marking')->nullable();
            $table->string('part_marking_file')->nullable();
            $table->string('parts_assembly')->nullable();
            $table->string('parts_assembly_file')->nullable();
            $table->string('finished_appearance')->nullable();
            $table->string('printing_risk')->nullable();
            $table->string('inspection')->nullable();
            $table->string('inspection_file')->nullable();
            $table->string('product_desc')->nullable();
            $table->longText('Other_special_request')->nullable();
            $table->json('full_data')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};

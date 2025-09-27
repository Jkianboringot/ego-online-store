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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('price');
            $table->integer('mileage');
            $table->string('vin');
            $table->string('address');
            $table->string('phone',45);
            $table->longtext('description')->nullable();
            $table->foreignId('maker_id')->constrained();
            $table->foreignId('model_id')->constrained();
            $table->foreignId('car_type_id')->constrained();
            $table->foreignId('fuel_type_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->timestamp('published_at')->nullable();
                $table->softDeletes(); // adds nullable deleted_at column

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};



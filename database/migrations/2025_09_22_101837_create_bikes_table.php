ho<?php

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
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->integer('year')->nullable();
            $table->integer('price');
            $table->string('address')->nullable();
            $table->string('phone',45)->nullable();
            $table->longtext('description')->nullable();
            $table->foreignId('maker_id')->nullable()->constrained();
            $table->foreignId('model_id')->nullable()->constrained();
            $table->foreignId('bike_type_id')->nullable()->constrained();
            $table->foreignId('fuel_type_id')->nullable()->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('bikes');
    }
};



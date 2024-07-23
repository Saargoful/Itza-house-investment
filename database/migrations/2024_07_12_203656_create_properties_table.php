<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 12,2);
           
            $table->string('property_type'); 
            $table->string('images')->nullable();
            $table->string('type')->nullable();
            $table->decimal('rooms',3,0);
            $table->decimal('bathrooms',3,1);
            $table->text('amenities')->nullable();
            $table->string('location')->nullable();
            $table->decimal('land_area')->nullable(); 
            $table->decimal('construction_area')->nullable(); 
            $table->timestamps();
        });
        
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
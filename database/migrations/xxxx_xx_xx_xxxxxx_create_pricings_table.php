<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingsTable extends Migration
{
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->string('base');
            $table->timestamps();
        });

        Schema::create('pricing_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pricing_id')->constrained('pricings')->onDelete('cascade');
            $table->string('feature');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing_features');
        Schema::dropIfExists('pricings');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceYearsTable extends Migration
{
    public function up()
    {
        Schema::create('experience_years', function (Blueprint $table) {
            $table->id();
            $table->integer('total_years');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('experience_years');
    }
}

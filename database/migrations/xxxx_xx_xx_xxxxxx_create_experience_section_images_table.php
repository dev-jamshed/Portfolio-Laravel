<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceSectionImagesTable extends Migration
{
    public function up()
    {
        Schema::create('experience_section_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('experience_section_images');
    }
}

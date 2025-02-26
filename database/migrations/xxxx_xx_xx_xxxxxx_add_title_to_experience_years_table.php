<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToExperienceYearsTable extends Migration
{
    public function up()
    {
        Schema::table('experience_years', function (Blueprint $table) {
            $table->string('title')->nullable()->after('id');
        });
    }

    public function down()
    {
        Schema::table('experience_years', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }
}

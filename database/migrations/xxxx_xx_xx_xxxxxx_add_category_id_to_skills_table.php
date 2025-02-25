<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToSkillsTable extends Migration
{
    public function up()
    {
        Schema::table('skills', function (Blueprint $table) {
            if (!Schema::hasColumn('skills', 'category_id')) {
                $table->foreignId('category_id')->nullable()->constrained('skill_categories')->onDelete('set null');
            }
        });
    }

    public function down()
    {
        Schema::table('skills', function (Blueprint $table) {
            if (Schema::hasColumn('skills', 'category_id')) {
                $table->dropForeign(['category_id']);
                $table->dropColumn('category_id');
            }
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSidebarFieldsToGeneralInfoTable extends Migration
{
    public function up()
    {
        Schema::table('general_infos', function (Blueprint $table) {
            $table->string('sidebar_image')->nullable()->after('footer_desc');
            $table->string('sidebar_title')->nullable()->after('sidebar_image');
            $table->text('sidebar_description')->nullable()->after('sidebar_title');
        });
    }

    public function down()
    {
        Schema::table('general_infos', function (Blueprint $table) {
            $table->dropColumn(['sidebar_image', 'sidebar_title', 'sidebar_description']);
        });
    }
}

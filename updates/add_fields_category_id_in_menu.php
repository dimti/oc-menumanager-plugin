<?php namespace BenFreke\MenuManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddFieldsCategoryIdMenu extends Migration
{

    public function up()
    {
        Schema::table('benfreke_menumanager_menus', function ($table) {
            $table->integer('category_id')->nullable();

        });
    }

    public function down()
    {
        Schema::table('benfreke_menumanager_menus', function ($table) {
            $table->dropColumn('category_id');
        });
    }

}

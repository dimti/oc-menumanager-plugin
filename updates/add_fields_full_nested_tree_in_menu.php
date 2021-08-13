<?php namespace BenFreke\MenuManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddFieldsFullNestedTreeInMenu extends Migration
{

    public function up()
    {
        Schema::table('benfreke_menumanager_menus', function ($table) {
            $table->unsignedTinyInteger('full_nested_tree')->nullable()->default(0);
        });

    }

}

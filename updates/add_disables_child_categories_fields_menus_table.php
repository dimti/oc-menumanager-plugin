<?php namespace BenFreke\MenuManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddDisablesChildCategoriesFieldsMenusTable extends Migration
{

    public function up()
    {
        Schema::table('benfreke_menumanager_menus', function ($table) {
            $table->unsignedTinyInteger('disables_child_categories')->nullable()->default(0);
        });
    }

}

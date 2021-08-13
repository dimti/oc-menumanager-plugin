<?php namespace BenFreke\MenuManager\Models;

use Backend\Models\ExportModel;

class MenuExport extends ExportModel
{
    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [];

    public function exportData($columns, $sessionKey = null)
    {
        $menus = Menu::all();

        $menus->each(function ($menu) use ($columns) {
            $menu->addVisible($columns);
        });

        return $menus->toArray();
    }
}

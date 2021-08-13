<?php namespace BenFreke\MenuManager\Models;

use Backend\Models\ImportModel;

class MenuImport extends ImportModel
{
    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [];

    public function importData($results, $sessionKey = null)
    {
        Menu::query()->delete();

        foreach ($results as $row => $data) {
            try {
                $subscriber = new Menu();
                $subscriber->fill($data);
                $subscriber->save();

                $this->logCreated();
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }

        }
    }
}

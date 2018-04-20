<?php

namespace App\Importer;

use App\Models\Manufacturer;

class ManufacturerImporter extends ItemImporter
{
    public function __construct($filename)
    {
        parent::__construct($filename);
    }

    protected function handle($row)
    {
        parent::handle($row);
        $this->createComponentIfNotExists();
    }

    /**
     * Create a manufacturer if a duplicate does not exist
     *
     * @author Léa Lafon
     * @since 4.0
     */
    public function createConsumableIfNotExists()
    {
        $manufacturer = Manufacturer::where('name', $this->item['name'])->first();
        if ($manufacturer) {
            if (!$this->updating) {
                $this->log('A matching Manufacturer ' . $this->item["name"] . ' already exists.  ');
                return;
            }

            $this->log('Updating Manufacturer');
            $manufacturer->update($this->sanitizeItemForUpdating($manufacturer));
            $manufacturer->save();
            return;
        }
        $this->log("No Matching Manufacturer, Creating a new one");
        $manufacturer = new Manufacturer();
        $manufacturer->fill($this->sanitizeItemForStoring($manufacturer));

        //FIXME: this disables model validation.  Need to find a way to avoid double-logs without breaking everything.
        $manufacturer->unsetEventDispatcher();
        if ($manufacturer->save()) {
            $manufacturer->logCreate('Imported using CSV Importer');
            $this->log("Manufacturer " . $this->item["name"] . ' was created');
            return;
        }
        $this->logError($manufacturer, 'Manufacturer');
        return;
    }
}
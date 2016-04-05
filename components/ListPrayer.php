<?php namespace Corywa\Prayerlist\Components;

use Cms\Classes\ComponentBase;
use Corywa\Prayerlist\Models\Prayer;

class ListPrayer extends ComponentBase
{
    /**
    * Content of prayers
    * @var array
    */
    public $prayers;

    public function componentDetails()
    {
        return [
            'name'        => 'List Prayers',
            'description' => 'Used for Prayer Pages'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->prayers = Prayer::get();
       
    }

}
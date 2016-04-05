<?php namespace Corywa\Prayerlist;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Corywa\Prayerlist\Components\ListPrayer' => 'listPrayer'
    	];
    }

    public function registerSettings()
    {
    	
    }
}

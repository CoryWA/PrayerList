<?php namespace Corywa\Prayerlist\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Prayers extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'corywa.prayerlist.manage_prayers' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Corywa.Prayerlist', 'prayers', 'prayerlist');
    }
}
<?php namespace Milo\Lawyer\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Lawyers Back-end Controller
 */
class Lawyers extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Milo.Lawyer', 'lawyer', 'lawyers');
    }
}

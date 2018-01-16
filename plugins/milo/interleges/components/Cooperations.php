<?php namespace Milo\Interleges\Components;

use Cms\Classes\ComponentBase;
use Milo\Interleges\Models\Partner;

class Cooperations extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Cooperations Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function partner()
    {
        $partner = Partner::all();
        return $partner;
    }
}

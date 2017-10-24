<?php namespace Milo\Lawyer\Components;

use Cms\Classes\ComponentBase;
use Redirect;

class Lawyers extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Lawyers Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['lawyers'] = $this->lawyers();
    }

    public function lawyers()
    {
        $lawyers = \Milo\Lawyer\Models\Lawyer::all();

        return $lawyers;
    }

}

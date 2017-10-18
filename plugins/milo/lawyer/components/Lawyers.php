<?php namespace Milo\Lawyer\Components;

use Cms\Classes\ComponentBase;
use Milo\Lawyer\Models\Lawyer;

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

    public function lawyers()
    {
        $lawyers = Lawyer::all();

        return $lawyers;
    }

    public function lawyer()
    {
        // dd($this->param('slug'));
        $slug = $this->param('slug');
        $lawyer = Lawyer::where('slug', $slug)->first();

        return $lawyer;   
    }
}

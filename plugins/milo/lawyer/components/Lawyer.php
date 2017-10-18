<?php namespace Milo\Lawyer\Components;

use Cms\Classes\ComponentBase;
use Redirect;

class Lawyer extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Lawyer Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        // dd($this->page['lawyer']);
        if ( is_null( $this->lawyer() ) ) {
            return Redirect::to('/anwaelte');
        } else {
            $this->page['lawyer'] = $this->lawyer();
            $this->page->title = $this->lawyer()->name;
        }
    }

    public function lawyer()
    {
        $slug = $this->param('slug');
        $lawyer = \Milo\Lawyer\Models\Lawyer::where('slug', $slug)->first();

        return $lawyer;
       
    }

}

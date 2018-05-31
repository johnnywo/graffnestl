<?php namespace Milo\Interleges;

use Backend;
use System\Classes\PluginBase;

/**
 * Interleges Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Interleges',
            'description' => 'No description provided yet...',
            'author'      => 'Milo',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    public function registerPageSnippets()
    {
        return [
           'Milo\Interleges\Components\Cooperations' => 'cooperations'
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Milo\Interleges\Components\Cooperations' => 'cooperations'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'milo.interleges.some_permission' => [
                'tab' => 'Interleges',
                'label' => 'Verwalte die Kooperationspartner Interleges Group'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'interleges' => [
                'label'       => 'Kooperationen',
                'url'         => Backend::url('milo/interleges/partners'),
                'icon'        => 'icon-leaf',
                'permissions' => ['milo.interleges.*'],
                'order'       => 500,
            ],
        ];
    }
}

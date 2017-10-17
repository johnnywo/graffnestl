<?php namespace Milo\Lawyer;

use Backend;
use System\Classes\PluginBase;

/**
 * Lawyer Plugin Information File
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
            'name'        => 'Lawyer',
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

        return [
            'Milo\Lawyer\Components\Lawyers' => 'lawyers',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'milo.lawyer.some_permission' => [
                'tab' => 'Lawyer',
                'label' => 'Some permission'
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
            'lawyer' => [
                'label'       => 'Lawyer',
                'url'         => Backend::url('milo/lawyer/lawyers'),
                'icon'        => 'icon-leaf',
                'permissions' => ['milo.lawyer.*'],
                'order'       => 500,
            ],
        ];
    }
}

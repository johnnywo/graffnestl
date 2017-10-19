<?php namespace Milo\Contact;

use Backend;
use System\Classes\PluginBase;
use Event;

/**
 * Contact Plugin Information File
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
            'name'        => 'Contact',
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
            'Milo\Contact\Components\ContactForm' => 'contactForm',
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
            'milo.contact.some_permission' => [
                'tab' => 'Nachrichten',
                'label' => 'Nachrichten ansehen und löschen.'
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
            'contact' => [
                'label'       => 'Nachrichten',
                'url'         => Backend::url('milo/contact/contacts'),
                'icon'        => 'icon-envelope',
                'permissions' => ['milo.contact.*'],
                'order'       => 500,
            ],
        ];
    }
}

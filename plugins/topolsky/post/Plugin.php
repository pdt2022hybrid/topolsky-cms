<?php namespace Topolsky\Post;

use Backend;
use System\Classes\PluginBase;

/**
 * Post Plugin Information File
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
            'name'        => 'Post',
            'description' => 'No description provided yet...',
            'author'      => 'Topolsky',
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
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'post' => [
                'label'       => 'Post',
                'url'         => Backend::url('topolsky/post/posts'),
                'icon'        => 'oc-icon-envelope-o',
                'permissions' => ['topolsky.post.*'],
                'order'       => 500,
            ],
        ];
    }
}

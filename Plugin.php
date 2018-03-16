<?php namespace Lzodevelopement\Slider;

use System\Classes\PluginBase;
use Backend\Facades\Backend;
/**
 * Ads Plugin Information File
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
            'name'        => 'Bootstrap Slider',
            'description' => 'Bootstrap slider has caption',
            'author'      => 'Lzodevelopement',
            'icon'        => 'icon-flag'
        ];
    }


    /**
     * @method
     */
    public function registerComponents()
    {
        return [
            'Lzodevelopement\Slider\Components\DisplaySlider' => 'displaySlider'
        ];
    }


    /**
     * @method registerNavigation
     * @params none
     * @description Method for registering backend menus
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'business' => [
                'label'       => 'Slider',
                'url'         => Backend::url('Lzodevelopement/slider/slider'),
                'icon'        => 'icon-globe',
                'permissions' => ['lzodevelopement.slider.*'],
                'order'       => 500,
            ]
        ];
    }

}

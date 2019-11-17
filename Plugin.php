<?php namespace Xitara\ScaffoldReportWidget;

use App;
use Backend;
use System\Classes\PluginBase;

/**
 * ScaffoldReportWidget Plugin Information File
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
            'name' => 'ScaffoldReportWidget',
            'description' => 'No description provided yet...',
            'author' => 'Xitara',
            'icon' => 'icon-leaf',
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
        App::register('\Xitara\ScaffoldReportWidget\Classes\ScaffoldServiceProvider');
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
            'Xitara\ScaffoldReportWidget\Components\MyComponent' => 'myComponent',
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
            'xitara.scaffoldreportwidget.some_permission' => [
                'tab' => 'ScaffoldReportWidget',
                'label' => 'Some permission',
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
        return []; // Remove this line to activate

        return [
            'scaffoldreportwidget' => [
                'label' => 'ScaffoldReportWidget',
                'url' => Backend::url('xitara/scaffoldreportwidget/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['xitara.scaffoldreportwidget.*'],
                'order' => 500,
            ],
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Xitara\ScaffoldReportWidget\ReportWidgets\Test' => [
                'label' => 'Test',
                'context' => 'dashboard',
            ],
        ];
    }
}

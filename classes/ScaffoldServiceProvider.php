<?php namespace Xitara\ScaffoldReportWidget\Classes;

use Illuminate\Support\ServiceProvider;
use Xitara\ScaffoldReportWidget\Classes\CreateReportWidget;

class ScaffoldServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.create.reportwidget', function () {
            return new CreateReportWidget;
        });

        $this->commands('command.create.reportwidget');
    }

    /**
     * Get the services provided by the provider.
     * @return array
     */
    public function provides()
    {
        return [
            'command.create.reportwidget',
        ];
    }
}

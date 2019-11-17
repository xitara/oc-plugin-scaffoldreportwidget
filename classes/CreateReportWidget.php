<?php namespace Xitara\ScaffoldReportWidget\Classes;

use Illuminate\Console\Command;
use October\Rain\Scaffold\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class CreateReportWidget extends GeneratorCommand
{
    /**
     * The console command name.
     */
    protected $name = 'create:reportwidget';

    /**
     * The console command description.
     */
    protected $description = 'Creates a new Report-Widget.';

    /**
     * The console command description.
     */
    protected $type = 'Reportwidget';

    /**
     * @var array A mapping of stub to generated file.
     */
    protected $stubs = [
        'reportwidget/reportwidget.stub' => 'reportwidgets/{{studly_name}}.php',
        'reportwidget/partial.stub' => 'reportwidgets/{{lower_name}}/partials//_{{lower_name}}.htm',
        'reportwidget/stylesheet.stub' => 'reportwidgets/{{lower_name}}/assets/css/{{lower_name}}.css',
        'reportwidget/javascript.stub' => 'reportwidgets/{{lower_name}}/assets/js/{{lower_name}}.js',
    ];

    /**
     * Prepare variables for stubs.
     *
     * return @array
     */
    protected function prepareVars()
    {
        $pluginCode = $this->argument('plugin');

        $parts = explode('.', $pluginCode);
        $plugin = array_pop($parts);
        $author = array_pop($parts);
        $reportwidget = $this->argument('reportwidget');

        return [
            'name' => $reportwidget,
            'author' => $author,
            'plugin' => $plugin,
        ];
    }

    /**
     * Get the console command arguments.
     */
    protected function getArguments()
    {
        return [
            ['plugin', InputArgument::REQUIRED, 'The name of the plugin. Eg: RainLab.Blog'],
            ['reportwidget', InputArgument::REQUIRED, 'The name of the widget. Eg: PostList'],
        ];
    }

    /**
     * Get the console command options.
     */
    protected function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_NONE, 'Overwrite existing files with generated ones.'],
        ];
    }

    /**
     * Get the list of files to scan for translation
     *
     * @return array
     */
    public function getScannedFiles()
    {
        return [];
    }

    /**
     * Get the list of folders to scan recursively for translation
     *
     * @return array
     */
    public function getScannedFolders()
    {
        return [$this->getDestinationPath() . '/reportwidgets'];
    }
}

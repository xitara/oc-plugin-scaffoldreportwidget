<?php namespace Xitara\ScaffoldReportWidget\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

/**
 * test1 Widget
 */
class Test1 extends ReportWidgetBase
{

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'xitara_scaffoldreportwidget_test1';

    /**
     * {@inheritDoc}
     */
    public function init()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('test1');
    }

    /**
     * Prepares the widget view data
     */
    public function prepareVars()
    {
        // $this->vars['foo'] = 'Bar';
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        $this->addCss('css/test1.css', 'Xitara.ScaffoldReportWidget');
        $this->addJs('js/test1.js', 'Xitara.ScaffoldReportWidget');
    }

}

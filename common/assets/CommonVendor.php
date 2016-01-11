<?php
namespace common\assets;

use Yii;
use yii\web\AssetBundle;

class CommonVendor extends AssetBundle
{
    public $basePath;
    public $baseUrl = '/vendor/bower/';
    
    public $css = [
    		'works/calendar/css/fullcalendar.css',
    		'works/calendar/css/fullcalendar.print.css',
    		'works/calendar/css/calendar.css'
    ];
    
    public $js = [
    		'works/calendar/js/jquery.js',
    		'works/calendar/js/angular.js',
    		'works/calendar/js/ui-bootstrap-tpls-0.9.0.js',
    		'works/calendar/js/moment.js',
    		'works/calendar/js/fullcalendar.js',
    		'works/calendar/js/gcal.js',
    		'works/calendar/js/angular-locale_vi-vn.js',
    		'works/calendar/js/calendar.js',
    ];
    
    public $depends = [
    ];
    
    public function __construct($config = array()) {
        parent::__construct($config);
        $this->basePath = str_replace(['work', 'hrm', 'kpi'], ['common'], Yii::getAlias("@webroot"));
    }
}

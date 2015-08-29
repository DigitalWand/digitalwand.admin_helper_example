<?php

namespace DigitalWand\AdminHelperExample\Helper\table;


use DigitalWand\AdminHelper\Helper\AdminEditHelper;

class TableEditHelper extends AdminEditHelper
{
    static protected $model = 'AdminHelperDemo';
    static public $module = 'digitalwand.admin_helper_example';
    static protected $listViewName = 'list';
    static protected $viewName = 'detail';
}
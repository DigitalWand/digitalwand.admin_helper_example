<?php

namespace DigitalWand\AdminHelperExample\Helper\table;

use DigitalWand\AdminHelper\Helper\AdminListHelper;

class TableListHelper extends AdminListHelper
{
    static protected $model = 'AdminHelperDemo';
    static public $module = 'digitalwand.admin_helper_example';
    static protected $viewName = 'list';
    static protected $editViewName = 'detail';
}
<?php

namespace DigitalWand\AdminHelperExample;


use DigitalWand\AdminHelper\Helper\AdminEditHelper;

class CustomEditHelper extends AdminEditHelper
{
    static protected $model = 'AdminHelperDemo';
    static public $module = 'digitalwand.admin_helper_example';
    static protected $listViewName = 'list';
    static protected $viewName = 'detail';
}
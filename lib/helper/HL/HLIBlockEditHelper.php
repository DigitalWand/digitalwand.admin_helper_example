<?php

namespace DigitalWand\AdminHelperExample\Helper\HL;


use DigitalWand\AdminHelper\Helper\AdminEditHelper;

class HLIBlockEditHelper extends AdminEditHelper
{
    static protected $model = 'AdminHelperDemo';
    static public $module = 'digitalwand.admin_helper_example';
    static protected $listViewName = 'list';
    static protected $viewName = 'detail';
}
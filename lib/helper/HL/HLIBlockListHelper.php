<?php

namespace DigitalWand\AdminHelperExample\Helper\HL;

use DigitalWand\AdminHelper\Helper\AdminListHelper;

class HLIBlockListHelper extends AdminListHelper
{
    static protected $model = 'AdminHelperDemo';
    static public $module = 'digitalwand.admin_helper_example';
    static protected $viewName = 'list';
    static protected $editViewName = 'detail';
}
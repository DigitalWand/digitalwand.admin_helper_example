<?php

namespace DigitalWand\AdminHelperExample\Helper\table;

use DigitalWand\AdminHelper\Helper\AdminListHelper;

class TableListHelper extends AdminListHelper
{
    static protected $model = 'DigitalWand\AdminHelperExample\Model\CustomModelTable';
    static public $module = 'digitalwand.admin_helper_example';
    static protected $viewName = 'table_list';
    static protected $editViewName = 'table_detail';
}
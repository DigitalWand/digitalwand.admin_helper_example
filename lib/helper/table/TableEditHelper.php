<?php

namespace DigitalWand\AdminHelperExample\Helper\table;


use DigitalWand\AdminHelper\Helper\AdminEditHelper;

class TableEditHelper extends AdminEditHelper
{
    static protected $model = 'DigitalWand\AdminHelperExample\Model\CustomModelTable';
    static public $module = 'digitalwand.admin_helper_example';
    static protected $listViewName = 'table_list';
    static protected $viewName = 'table_detail';
}
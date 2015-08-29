<?php

use Bitrix\Main\Localization\Loc;
use DigitalWand\AdminHelper\Helper\AdminBaseHelper;
use DigitalWand\AdminHelper\Widget\HLIBlockFieldWidget;
Loc::loadMessages(__FILE__);

AdminBaseHelper::setInterfaceSettings(
    array(
        'FIELDS' => array(
        ),
        'TABS' => array(
            'TAB_ONE' => Loc::getMessage('DW_EX_TAB_ONE'),
            'TAB_ANOTHER' => Loc::getMessage('DW_EX_TAB_ANOTHER'),
        )
    ),
    array(
        'DigitalWand\AdminHelperExample\Helper\table\TableEditHelper',
        'DigitalWand\AdminHelperExample\Helper\table\TableListHelper'
    ),
    'digitalwand.admin_helper_example'
);
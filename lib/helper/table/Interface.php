<?php

use Bitrix\Main\Localization\Loc;
use DigitalWand\AdminHelper\Helper\AdminBaseHelper;
use DigitalWand\AdminHelper\Widget\HLIBlockFieldWidget;
use DigitalWand\AdminHelper\Widget\NumberWidget;
use DigitalWand\AdminHelper\Widget\StringWidget;
use DigitalWand\AdminHelper\Widget\TextAreaWidget;

Loc::loadMessages(__FILE__);

AdminBaseHelper::setInterfaceSettings(
    array(
        'FIELDS' => array(
            'ID' => array(
                'WIDGET' => new NumberWidget(),
                'TITLE' => 'ID',
                'TAB' => 'TAB_ONE'
            ),
            'STRING' => array(
                'WIDGET' => new StringWidget(),
                'TITLE' => 'STRING',
                'TAB' => 'TAB_ONE'
            ),
            'NUMBER' => array(
                'WIDGET' => new NumberWidget(),
                'TITLE' => 'NUMBER',
                'TAB' => 'TAB_ANOTHER'
            ),
            'TEXT' => array(
                'WIDGET' => new TextAreaWidget(),
                'TITLE' => 'TEXT',
                'TAB' => 'TAB_ANOTHER'
            )
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
<?php

use Bitrix\Main\Localization\Loc;
use DigitalWand\AdminHelper\Helper\AdminBaseHelper;
use DigitalWand\AdminHelper\Widget\HLIBlockFieldWidget;
Loc::loadMessages(__FILE__);

AdminBaseHelper::setInterfaceSettings(
    array(
        'FIELDS' => array(
            "UF_VIDEO" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_VIDEO'),
                'TAB' => 'TAB_ONE',
            ),
            "UF_HL_RELATION" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_IBLOCK_ELEMENT'),
                'TAB' => 'TAB_ANOTHER',
            ),
            "UF_STRING" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_STRING'),
                'TAB' => 'TAB_ONE',
            ),
            "UF_STRING_LIST" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_STRING_LIST'),
                'TAB' => 'TAB_ONE',
            ),
            "UF_NUMBER" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_NUMBER'),
                'TAB' => 'TAB_ONE',
            ),
            "UF_INT" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_INT'),
                'TAB' => 'TAB_ONE',
            ),
            "UF_DATETIME" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_DATETIME'),
                'TAB' => 'TAB_ONE',
            ),
            "UF_DATE" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_DATE'),
                'TAB' => 'TAB_ONE',
            ),
            "UF_BOOL" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_BOOL'),
                'TAB' => 'TAB_ANOTHER',
            ),
            "UF_FILE" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_FILE'),
                'TAB' => 'TAB_ONE',
                'FILTER' => false
            ),
            "UF_LIST" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_LIST'),
                'TAB' => 'TAB_ANOTHER',
            ),
            "UF_IBLOCK_SECTION" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_IBLOCK_ELEMENT'),
                'TAB' => 'TAB_ANOTHER',
            ),
            "UF_IBLOCK_ELEMENT" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_IBLOCK_ELEMENT'),
                'TAB' => 'TAB_ANOTHER',
            ),
            "UF_POLL" => array(
                'WIDGET' => new HLIBlockFieldWidget(),
                'TITLE' => Loc::getMessage('DW_EX_IBLOCK_ELEMENT'),
                'TAB' => 'TAB_ANOTHER',
                'FILTER' => false
            ),
        ),
        'TABS' => array(
            'TAB_ONE' => Loc::getMessage('DW_EX_TAB_ONE'),
            'TAB_ANOTHER' => Loc::getMessage('DW_EX_TAB_ANOTHER'),
        )
    ),
    array(
        'DigitalWand\AdminHelperExample\CustomEditHelper',
        'DigitalWand\AdminHelperExample\CustomListHelper'
    ),
    'digitalwand.admin_helper_example'
);
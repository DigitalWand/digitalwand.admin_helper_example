<?
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use DigitalWand\AdminHelperExample\Helper\HL\HLIBlockEditHelper;
use DigitalWand\AdminHelperExample\Helper\HL\HLIBlockListHelper;
use DigitalWand\AdminHelperExample\Helper\table\TableEditHelper;
use DigitalWand\AdminHelperExample\Helper\table\TableListHelper;

Loc::loadMessages(__FILE__);
Loader::includeModule('digitalwand.admin_helper_example');

$aMenu = array(
    array(
        "parent_menu" => "global_menu_services",
        "section" => "dw_ex",
        "sort" => 130,
        "text" => Loc::getMessage('DW_EX_MENU_TEXT'),
        "title" => Loc::getMessage('DW_EX_MENU_TITLE'),
        "icon" => "dw_ex_menu_icon",
        "page_icon" => "dw_ex_page_icon",
        "items_id" => "menu_dw_ex",
        "url" => HLIblockEditHelper::getListPageURL(),
        "more_url" => array(
            HLIBlockListHelper::getEditPageURL()
        ),
    ),
    array(
        "parent_menu" => "global_menu_services",
        "section" => "dw_ex_table",
        "sort" => 140,
        "text" => Loc::getMessage('DW_EX_TABLE_MENU_TEXT'),
        "title" => Loc::getMessage('DW_EX_TABLE_MENU_TITLE'),
        "icon" => "dw_ex_table_menu_icon",
        "page_icon" => "dw_ex_table_page_icon",
        "items_id" => "menu_dw_ex_table",
        "url" => TableEditHelper::getListPageURL(),
        "more_url" => array(
            TableListHelper::getEditPageURL()
        ),
    ),

);

return $aMenu;
?>
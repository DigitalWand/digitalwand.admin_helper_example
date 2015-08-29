<?

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

Loader::includeModule('digitalwand.admin_helper');

Loc::loadMessages(__FILE__);

Loader::registerAutoLoadClasses('digitalwand.admin_helper_example',
    array(
        'DigitalWand\AdminHelperExample\Helper\HL\HLIBlockListHelper' => "lib/helper/HL/HLIBlockListHelper.php",
        'DigitalWand\AdminHelperExample\Helper\HL\HLIBlockEditHelper' => "lib/helper/HL/HLIBlockEditHelper.php",

        'DigitalWand\AdminHelperExample\Helper\table\TableListHelper' => "lib/helper/table/TableListHelper.php",
        'DigitalWand\AdminHelperExample\Helper\table\TableEditHelper' => "lib/helper/table/TableEditHelper.php",

        'DigitalWand\AdminHelperExample\Model\CustomModelTable' => "lib/model/CustomModelTable.php",

        'DigitalWand\AdminHelperExample\Widget\CustomWidget' => "lib/helper/widget/CustomWidget.php",
    )
);


global $APPLICATION;
$isAdminPage = strpos($APPLICATION->GetCurDir(), 'bitrix/admin') !== false;
if ($isAdminPage) {
    Loader::includeModule('digitalwand.admin_helper');
    require_once(__DIR__ . '/lib/helper/HL/Interface.php');
    require_once(__DIR__ . '/lib/helper/table/Interface.php');
}
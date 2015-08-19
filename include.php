<?

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

Loader::includeModule('digitalwand.admin_helper');

Loc::loadMessages(__FILE__);

Loader::registerAutoLoadClasses('digitalwand.admin_helper_example',
    array(
        'DigitalWand\AdminHelperExample\CustomListHelper' => "lib/helper/CustomListHelper.php",
        'DigitalWand\AdminHelperExample\CustomEditHelper' => "lib/helper/CustomEditHelper.php",

        'DigitalWand\AdminHelperExample\Widget\CustomWidget' => "lib/helper/widget/CustomWidget.php",
    )
);


global $APPLICATION;
$isAdminPage = strpos($APPLICATION->GetCurDir(), 'bitrix/admin') !== false;
if ($isAdminPage) {
    Loader::includeModule('digitalwand.admin_helper');
    require_once(__DIR__ . '/lib/helper/Interface.php');
}
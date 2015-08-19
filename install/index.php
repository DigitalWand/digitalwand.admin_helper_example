<?
use Bitrix\Main\Localization\Loc;

global $MESS;

$path = str_replace("\\", "/", __FILE__);
$path = substr($path, 0, strlen($path) - strlen("/index.php"));
include($path . "/version.php");
Loc::loadMessages($path . "/install.php");

if (class_exists("digitalwand_admin_helper_example") OR !class_exists('digitalwand_admin_helper')) {
    return;
}

Class digitalwand_admin_helper_example extends CModule
{
    var $MODULE_ID = "digitalwand.admin_helper_example";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_GROUP_RIGHTS = "Y";
    var $PARTNER_NAME = "DigitalWand";
    var $PARTNER_URI = "";
    var $errors;

    function digitalwand_admin_helper_example()
    {
        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        $arModuleVersion = array();
        include($path . "/version.php");

        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];


        $this->MODULE_NAME = GetMessage("DIGITALWAND_ADMIN_HELPER_EXAMPLE_MODULE_NAME");
        $this->MODULE_DESCRIPTION = GetMessage("DIGITALWAND_ADMIN_HELPER_EXAMPLE_MODULE_DESCRIPTION");

    }

    function InstallDB()
    {
        RegisterModule("digitalwand.admin_helper_example");
        $sqlFiles = array(
            'b_hlblock_entity.sql',
            'b_user_field.sql',
            'b_user_field_enum.sql',
            'digitalwand_admin_helper_demo.sql',
            'digitalwand_admin_helper_demo_uf_hl_relation.sql',
            'digitalwand_admin_helper_demo_uf_string_list.sql',
        );

        global $APPLICATION, $DB;
        foreach ($sqlFiles as $file) {

            $this->errors = $DB->RunSQLBatch(__DIR__ . '/db/' . strtolower($DB->type) . '/' . $file);

            $APPLICATION->ResetException();
            if ($this->errors !== false) {
                $APPLICATION->ThrowException(implode("<br>", $this->errors));
                return false;
            }
        }

        return true;
    }

    function UnInstallDB()
    {
        UnRegisterModule("digitalwand.admin_helper_example");


        global $APPLICATION, $DB;
        $this->errors = $DB->RunSQLBatch(__DIR__ . '/db/' . strtolower($DB->type) . '/uninstall.sql');

        $APPLICATION->ResetException();
        if ($this->errors !== false) {
            $APPLICATION->ThrowException(implode("<br>", $this->errors));
            return false;
        }

        return true;
    }

    function InstallFiles()
    {
        CopyDirFiles(
            __DIR__ . "/admin/",
            $_SERVER["DOCUMENT_ROOT"] . "/bitrix/admin",
            true, true
        );
        return true;
    }

    function UnInstallFiles()
    {
        DeleteDirFiles(__DIR__ . "/admin", $_SERVER["DOCUMENT_ROOT"] . "/bitrix/admin");

        return true;
    }

    function DoInstall()
    {
        global $APPLICATION;

        if (!IsModuleInstalled("digitalwand.admin_helper_example")) {
            $this->InstallDB();
            $this->InstallEvents();
            $this->InstallFiles();
        }

        $APPLICATION->IncludeAdminFile(
            GetMessage("DIGITAL_WAND_ADMIN_HELPER_EXAMPLE_INSTALL_TITLE"),
            __DIR__ . "/step.php"
        );
    }

    function DoUninstall()
    {
        $this->UnInstallDB();
        $this->UnInstallEvents();
        $this->UnInstallFiles();

        global $APPLICATION;
        UnRegisterModule($this->MODULE_ID);
        $APPLICATION->IncludeAdminFile(
            Loc::getMessage("DIGITAL_WAND_ADMIN_HELPER_EXAMPLE_UNINSTALL_TITLE"),
            __DIR__ . "/unstep.php"
        );
    }
}

?>
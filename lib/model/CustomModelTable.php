<?php

namespace DigitalWand\AdminHelperExample\Model;


use Bitrix\Main\Entity\DataManager;

class CustomModelTable extends DataManager
{
    public static function getTableName()
    {
        return 'digitalwand_admin_helper_custom_table_demo';
    }

    public static function getMap()
    {
        $fieldsMap = array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true
            ),
            'STRING' => array(
                'data_type' => 'string'
            ),
            'NUMBER' => array(
                'data_type' => 'integer',
                'values' => array('N', 'Y')
            ),
            'TEXT' => array(
                'data_type' => 'string'
            )
        );
        return $fieldsMap;
    }
}
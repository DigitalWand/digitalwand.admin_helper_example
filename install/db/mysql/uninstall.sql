LOCK TABLES `b_hlblock_entity` WRITE;
DELETE FROM `b_hlblock_entity` WHERE ID = 2000;
UNLOCK TABLES;

LOCK TABLES `b_user_field` WRITE;
DELETE FROM `b_user_field` WHERE ID = 1600;
DELETE FROM `b_user_field` WHERE ID = 1700;
DELETE FROM `b_user_field` WHERE ID = 1800;
DELETE FROM `b_user_field` WHERE ID = 1900;
DELETE FROM `b_user_field` WHERE ID = 2000;
DELETE FROM `b_user_field` WHERE ID = 2100;
DELETE FROM `b_user_field` WHERE ID = 2200;
DELETE FROM `b_user_field` WHERE ID = 2300;
DELETE FROM `b_user_field` WHERE ID = 2400;
DELETE FROM `b_user_field` WHERE ID = 2500;
DELETE FROM `b_user_field` WHERE ID = 2600;
DELETE FROM `b_user_field` WHERE ID = 2700;
DELETE FROM `b_user_field` WHERE ID = 2800;
DELETE FROM `b_user_field` WHERE ID = 2900;
DELETE FROM `b_user_field` WHERE ID = 3000;
UNLOCK TABLES;

LOCK TABLES `b_user_field_enum` WRITE;
DELETE FROM `b_user_field_enum` WHERE USER_FIELD_ID = 2600;
UNLOCK TABLES;

DROP TABLE IF EXISTS `digitalwand_admin_helper_demo`;
DROP TABLE IF EXISTS `digitalwand_admin_helper_demo_uf_hl_relation`;
DROP TABLE IF EXISTS `digitalwand_admin_helper_demo_uf_string_list`;
CREATE TABLE IF NOT EXISTS `digitalwand_admin_helper_custom_table_demo` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `STRING` VARCHAR(128) NULL,
  `NUMBER` INT(11) NULL,
  `TEXT` TEXT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `digitalwand_admin_helper_custom_table_demo_related` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ELEMENT_ID` int(11) UNSIGNED NOT NULL,
  `STRING` INT(11) NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `digitalwand_admin_helper_custom_table_demo_many2many` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ELEMENT_ID` int(11) UNSIGNED NOT NULL,
  `HL_ID` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
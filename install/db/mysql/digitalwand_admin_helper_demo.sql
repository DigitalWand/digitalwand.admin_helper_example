DROP TABLE IF EXISTS `digitalwand_admin_helper_demo`;
CREATE TABLE `digitalwand_admin_helper_demo` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `UF_VIDEO` text COLLATE utf8_unicode_ci,
  `UF_HL_RELATION` text COLLATE utf8_unicode_ci,
  `UF_STRING` text COLLATE utf8_unicode_ci,
  `UF_STRING_LIST` text COLLATE utf8_unicode_ci,
  `UF_NUMBER` int(18) DEFAULT NULL,
  `UF_INT` int(18) DEFAULT NULL,
  `UF_DATETIME` datetime DEFAULT NULL,
  `UF_DATE` date DEFAULT NULL,
  `UF_BOOL` int(18) DEFAULT NULL,
  `UF_FILE` int(18) DEFAULT NULL,
  `UF_LIST` int(18) DEFAULT NULL,
  `UF_IBLOCK_SECTION` int(18) DEFAULT NULL,
  `UF_IBLOCK_ELEMENT` int(18) DEFAULT NULL,
  `UF_TEMPLATE` text COLLATE utf8_unicode_ci,
  `UF_POLL` int(18) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


LOCK TABLES `digitalwand_admin_helper_demo` WRITE;
INSERT INTO `digitalwand_admin_helper_demo` (UF_VIDEO, UF_STRING, UF_NUMBER, UF_INT, UF_DATETIME, UF_DATE, UF_BOOL, UF_FILE, UF_LIST, UF_IBLOCK_SECTION, UF_IBLOCK_ELEMENT, UF_TEMPLATE, UF_POLL)  VALUES ('','12345',0,12,'2015-08-25 23:37:00','2015-08-15',1,0,6,0,17,'',0),('a:8:{s:4:\"path\";s:33:\"/upload/medialibrary/1ac/ml06.jpg\";s:5:\"width\";i:400;s:6:\"height\";i:300;s:5:\"title\";s:53:\"Библиотека на свежем воздухе\";s:8:\"duration\";s:0:\"\";s:6:\"author\";s:0:\"\";s:4:\"date\";s:0:\"\";s:4:\"desc\";s:0:\"\";}','',4,123131,NULL,'2015-08-20',0,285,0,0,17,'',16);
UNLOCK TABLES;
DROP TABLE IF EXISTS `digitalwand_admin_helper_demo_uf_string_list`;
CREATE TABLE `digitalwand_admin_helper_demo_uf_string_list` (
  `ID` int(11) NOT NULL,
  `VALUE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  KEY `IX_UTM_HL1_19_ID` (`ID`),
  KEY `IX_UTM_HL1_19_VALUE` (`VALUE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
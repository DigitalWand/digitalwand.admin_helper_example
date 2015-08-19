DROP TABLE IF EXISTS `digitalwand_admin_helper_demo_uf_hl_relation`;
CREATE TABLE `digitalwand_admin_helper_demo_uf_hl_relation` (
  `ID` int(11) NOT NULL,
  `VALUE` int(11) NOT NULL,
  KEY `IX_UTM_HL1_17_ID` (`ID`),
  KEY `IX_UTM_HL1_17_VALUE` (`VALUE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
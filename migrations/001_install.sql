CREATE TABLE IF NOT EXISTS `abtests` (
    `abte_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `abte_title` varchar(255) NOT NULL,
    `abte_texta` varchar(255) NOT NULL,
    `abte_textb` varchar(255) NOT NULL,
    `abte_inta` int(11),
    `abte_intb` int(11),
    `abte_conversiona` int(11),
    `abte_conversionb` int(11),
    `abte_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
    `abte_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`abte_id`),
    KEY `abte_created_at` (`abte_created_at`),
    KEY `abte_updated_at` (`abte_updated_at`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

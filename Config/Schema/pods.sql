DROP TABLE IF EXISTS `pods`;
CREATE TABLE `pods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NULL,
  `name` varchar(50) NOT NULL,
  `content` text NULL,
  `sequence` int(11) NOT NULL DEFAULT '0',
  `complexity` tinyint(4) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
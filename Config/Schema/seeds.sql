DROP TABLE IF EXISTS `seeds`;
CREATE TABLE `seeds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` longtext NULL,
  `technology` varchar(250) NULL,
  `cost` varchar(20) NULL,
  `url` varchar(250) NULL,
  `repository` varchar(250) NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
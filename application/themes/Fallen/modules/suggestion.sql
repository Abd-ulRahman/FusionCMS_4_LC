DROP TABLE IF EXISTS `suggestion`;
CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` text,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

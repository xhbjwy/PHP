# Host: localhost  (Version: 5.5.53)
# Date: 2018-03-28 20:53:58
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES gb2312 */;

#
# Structure for table "tp"
#

DROP TABLE IF EXISTS `tp`;
CREATE TABLE `tp` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tplj` varchar(255) DEFAULT NULL,
  `tpfl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "tp"
#

/*!40000 ALTER TABLE `tp` DISABLE KEYS */;
INSERT INTO `tp` VALUES (1,'fj/timg.jpg','fj'),(2,'fj/timg.jpg','fj'),(3,'rw/5162356002c6bd114931f1080.jpg','rw');
/*!40000 ALTER TABLE `tp` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'wq','123456');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

# Host: localhost  (Version 5.5.45)
# Date: 2018-04-18 19:12:44
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "uye"
#

DROP TABLE IF EXISTS `uye`;
CREATE TABLE `uye` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kullaniciadi` varchar(255) DEFAULT NULL,
  `sifresi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "uye"
#

INSERT INTO `uye` VALUES (5,'admin','admin');

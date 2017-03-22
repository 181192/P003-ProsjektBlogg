# Dump of table blog_members
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog_members`;

CREATE TABLE `blog_members` (
  `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `blog_members` DISABLE KEYS;

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`)
VALUES
  (1,'demo','$2y$10$Hi2Fk6NYv47ESJuqhSq1aSro38oe','demo@demo.com');

ALTER TABLE `blog_members` ENABLE KEYS;



# Dump of table blog_posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog_posts`;

CREATE TABLE `blog_posts` (
  `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) DEFAULT NULL,
  `postPicture` text,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `blog_posts` DISABLE KEYS;

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postPicture`, `postDesc`, `postCont`, `postDate`)
VALUES
  (1,'Post Tittel','/img/20-03-2017/DSC_0220.JPG','<p>Test beskrivelse</p>','<h2>Test overskrift</h2><p>Dette er en artikkel</p>','2016-03-20 00:00:00');
  
ALTER TABLE `blog_posts` ENABLE KEYS;

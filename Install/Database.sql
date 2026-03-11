CREATE TABLE `i60_quests` (
  `key_quest` bigint unsigned NOT NULL AUTO_INCREMENT,
  `start` timestamp NOT NULL,
  `title` varchar(300) NOT NULL,
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `data` text NOT NULL,
  `mark` tinyint unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`key_quest`)
)
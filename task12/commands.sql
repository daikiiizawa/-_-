create database nowall_bbs_homework_9;

use nowall_bbs_homework_9;

grant all on nowall_bbs_homework_9.* to testuser@localhost identified by '9999';

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `image_type` varchar(50) DEFAULT NULL,
  `image_file` mediumblob,
  `login_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  -- `impression` varchar(32) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `image_type` varchar(50) DEFAULT NULL,
  `image_file` mediumblob,
  -- `user_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


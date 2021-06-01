CREATE TABLE `Users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(100) NOT NULL,
 `first_name` varchar(100) NOT NULL,
 `email` varchar(100) NOT NULL,
 `password` varchar(100) CHARACTER SET utf16 NOT NULL,
 `username` varchar(100) CHARACTER SET utf32 NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `email` (`email`),
 UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8

CREATE TABLE `Ad` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `image` varchar(200) DEFAULT NULL,
 `price` int(11) NOT NULL,
 `location` varchar(100) NOT NULL,
 `status` varchar(100) NOT NULL,
 `type` varchar(100) NOT NULL,
 `address` varchar(100) NOT NULL,
 `surface` int(11) NOT NULL,
 `room_number` int(11) NOT NULL,
 `id_users` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8

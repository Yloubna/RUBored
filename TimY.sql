create database TimY;

use TimY;

CREATE TABLE `Story` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `Time` int(3) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Text` varchar(800) NOT NULL,
  `Url` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
);

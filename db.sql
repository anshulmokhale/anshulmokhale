Database: `newdb`

CREATE DATABASE IF not exists `newdb` default character set latin1 COLLATE latin1_swedish_ci;

use `newdb`;

DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `sname` varchar(50) NOT NULL,
    `email` text UNIQUE ,
    `password` varchar(50) NOT NULL
) ENGINE=MariaDB default CHARSET=latin1;


ALTER TABLE `data`
ADD PRIMARY KEY (`id`);

ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


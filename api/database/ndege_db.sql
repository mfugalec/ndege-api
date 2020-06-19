DROP DATABASE IF EXISTS `ndege_db`;
CREATE DATABASE `ndege_db`;

USE `ndege_db`;

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
	id INT AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30)NOT NULL,
	middlename VARCHAR(30)NOT NULL,
	lastname VARCHAR(30)NOT NULL,
	mobile VARCHAR(30)NOT NULL
) AUTO_INCREMENT 10000;

INSERT INTO `tbl_users`(firstname,middlename,lastname,mobile) 
VALUES 
('Cosmas','Asajile','Mwanyombole','0766434430'),
('Christopher','Aron','Mfugale','0764026271'),
('Metrik','Meshack','Tumsime','0744560852'),
('Iman','Jeremiah','Kasian','065516368'),
('Wenceslaus','Joseph','Mlunguana','0743468854');

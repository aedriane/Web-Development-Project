create database assignment;

use assignment;

create table if not exists items
(
	id int auto_increment not null primary key,
	name varchar(50),
	price varchar(20),
	region varchar(20),
	platform varchar(20),
	genre varchar(20),
	image varchar(50),
	availability varchar(50)
);

insert into items (name, price, region, platform, genre, image, availability)
	values
	('Dark Souls III', '$62.18', 'GLOBAL', 'PC', 'Action', 'darksoulsiii.png', 'Available'),
	('Battlefield 4 (Origin)', '$45.75', 'GLOBAL', 'PC', 'Action', 'battlefield4.png', 'Available'),
	('Battleborn', '$44.82', 'GLOBAL', 'PC', 'Action', 'battleborn.png', 'Available'),
	("Tom Clancy's The Division", '$40.85', 'GLOBAL', 'PC', 'Adventure', 'thedivision.png', 'Availble'),
	('The Elder Scrolls V: Skyrim - Legendary Edition', '$11.36', 'GLOBAL', 'PC', 'Adventure', 'skyrim.png', 'Available'),
	('Ark Survival Evolved EARLY ACCESS', '$34.12', 'GLOBAL', 'PC', 'Adventure', 'ark.png', 'Available'),
	('Fallout 4', '$38.91', 'GLOBAL', 'PC', 'Role-Playing Game', 'fallout4.png', 'Available'),
	('Borderlands 2 GOTY', '$13.14', 'GLOBAL', 'PC', 'Role-Playing Game', 'borderlands.png', 'Available'),
	('Final Fantasy XIV: A Realm Reborn', '$42.19', 'GLOBAL', 'PC', 'Role-Playing Game', "finalfantasyxiv.png", 'Available'),
	('Overwatch: Origins Edition', '$63.57', 'GLOBAL', 'PC', 'Action', 'overwatch.png', 'Upcoming'),
	('Call of Duty: Infinite Warfare Legacy Edition', '$79.47', 'GLOBAL', 'PC', 'Action', 'callofduty.png', 'Upcoming'),
	('Doom', '$52.95', 'GLOBAL', 'PC', 'Action', 'doom.png', 'Upcoming');

create table user
(
  id serial primary key,
  username varchar(20), 
  password char(40));
	
insert into user
	values 
	(null, 'admin', '123');
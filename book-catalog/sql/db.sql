CREATE DATABASE php_lesson_db;

USE php_lesson_db;

CREATE TABLE IF NOT EXISTS author(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255)
);


CREATE TABLE IF NOT EXISTS book(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255),
isbn VARCHAR(255),
author_id INT(6) UNSIGNED,
FOREIGN KEY (author_id) REFERENCES author(id)
);

INSERT INTO author (name) VALUES 
("Andrzej Sapkowski"), ("J. R. R. Tolkien");



INSERT INTO book (title, isbn, author_id)
VALUES
	('The Witcher: The Last Wish', '0-672-131212-8', 1),
	('The Lord of the Rings: The Tow Towers', '1-131-41234231-5',2);



--Adding the book URL to the db--
ALTER TABLE book ADD COLUMN pic_val VARCHAR (255);
UPDATE book SET pic_val = 'images/TheLastWish.jpg' WHERE id = 1;
UPDATE book SET pic_val = 'images/TheTwoTowers.jpg' WHERE id = 2;


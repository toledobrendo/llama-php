CREATE DATABASE bookcatalog;

USE bookcatalog;

CREATE TABLE IF NOT EXISTS author (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS book (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  isbn VARCHAR(255),
  author_id INT(6) UNSIGNED,
  FOREIGN KEY (author_id) REFERENCES author(id)
);





ALTER TABLE book ADD COLUMN pic_url VARCHAR(255);
UPDATE book SET pic_url = '/url.png' WHERE id = 1;

ALTER TABLE author ADD CONSTRAINT un_author_name UNIQUE (name);

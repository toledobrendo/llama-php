CREATE DATABASE php_lesson_db;

USE php_lesson_db;

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

INSERT INTO author (name)
VALUES
  ('Michael Morgan'),
  ('George RR Martin');

INSERT INTO book (title, isbn, author_id)
VALUES
  ('Java for Professional Developers', '0-672-316123-8', 1),
  ('A Game of Thrones', '1-141-5143123-5', 2);

ALTER TABLE book ADD COLUMN image_location VARCHAR(255);

UPDATE book SET image_location = 'https://images-na.ssl-images-amazon.com/images/I/41F6QB7SWFL._SX258_BO1,204,203,200_.jpg' WHERE id=1;

-- image_location value is 252 characters
UPDATE book SET image_location = 'https://kbimages1-a.akamaihd.net/7dca02a4-6278-4389-bbb9-da29b2b48541/1200/1200/False/a-game-of-thrones-the-story-continues-books-1-5-a-game-of-thrones-a-clash-of-kings-a-storm-of-swords-a-feast-for-crows-a-dance-with-dragons-a-song-of-ice-and-fire.jpg' WHERE id=2;

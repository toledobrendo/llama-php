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
  ('Eric Nylund'),
  ('George RR Martin'),
  ('Andrzej Sapkowski');


INSERT INTO book (title, isbn, author_id)
VALUES
  ('Halo: The Fall of Reach', '0-672-316123-8', 1),
  ('A Game of Thrones', '1-141-5143123-5', 2),
  ('The Witcher: The Tower of Swallows', '2-147-6148973-5', 3);


ALTER TABLE book ADD COLUMN pic_url VARCHAR(255);
UPDATE book SET pic_url = 'image/fall_of_reach.jpg' WHERE id = 1;
UPDATE book SET pic_url = 'image/game_of_thrones.jpg' WHERE id = 2;
UPDATE book SET pic_url = 'image/the_tower_of_swallows.jpg' WHERE id = 3;

ALTER TABLE author ADD CONSTRAINT un_author_name UNIQUE (name);

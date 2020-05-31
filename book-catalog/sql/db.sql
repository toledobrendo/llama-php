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
  ('Eiichiro Oda'),
  ('Kishimoto Masashi');

INSERT INTO book (title, isbn, author_id)
VALUES
  ('One Piece', '0-672-316123-8', 1),
  ('Naruto', '1-141-5143123-5', 2);

ALTER TABLE book ADD COLUMN pic_url VARCHAR(255);
UPDATE book SET pic_url = '/url.png' WHERE id = 1;

ALTER TABLE author ADD CONSTRAINT un_author_name UNIQUE (name);

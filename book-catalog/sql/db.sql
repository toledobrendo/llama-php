CREATE DATABASE php_lesson_db;

USE php_lesson_db;

CREATE TABLE IF NOT EXISTS author (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS book (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  ISBN VARCHAR(255),
  author_id INT(6) UNSIGNED,
  FOREIGN KEY (author_id) REFERENCES author(id)
);

INSERT INTO author (name)
  VALUES
  ('Michael Morgan'),
  ('George RR Martin');

INSERT INTO book (title, ISBN, author_id)
  VALUES
  ('Java for Professional Developers', '0-672-316123', 1),
  ('Game of Thrones', '1-141-5143123-5', 2);

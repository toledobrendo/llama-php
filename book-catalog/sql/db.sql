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
  imgSrc VARCHAR(255),
  FOREIGN KEY (author_id) REFERENCES author(id)
);

INSERT INTO author (name)
VALUES
  ('Michael Morgan'),
  ('George RR Martin'),
  ('Kouta Hirano'),
  ('Jinsei Kataoka'),
  ('Hiroshi Sakurazaka');

INSERT INTO book (title, isbn, author_id, imgSrc)
VALUES
  ('Java for Professional Developers', '0-672-316123-8', 1, 'image/JfPD.jpg'),
  ('A Game of Thrones', '1-141-5143123-5', 2, 'image/GoT.jpg'),
  ('Hellsing', '978-1593070564', 3, 'image/Hs.jpg'),
  ('Deadman Wonderland', '978-1421555485', 4, 'image/DmWl.jpg'),
  ('All You Need is Kill', '978-1421527611', 5, 'image/AYNiK.jpg');

-- ALTER TABLE book ADD COLUMN pic_url VARCHAR(255);
-- UPDATE book SET pic_url = '/url.png' WHERE id = 1;
--
-- ALTER TABLE author ADD CONSTRAINT un_author_name UNIQUE (name);
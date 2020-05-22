CREATE DATABASE php_bookcatalog_db;

USE php_bookcatalog_db;

CREATE TABLE IF NOT EXISTS author (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS book (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  isbn VARCHAR(255),
  imgSrc varchar(255),
  author_id INT(6) UNSIGNED,
  FOREIGN KEY (author_id) REFERENCES author(id)
);

INSERT INTO author (id, name)
VALUES
(1, 'Michael Morgan'),
(2, 'George RR Martin'),
(3, 'Sun Tzu');

INSERT INTO book (id, title, isbn, author_id, imgSrc)
VALUES
(1, 'Java for Professional Developers', '0-672-316123-8', 1, 'images/java.jpg'),
(2, 'A Game of Thrones', '1-141-5143123-5', 2, 'images/got.jpg'),
(3, 'Art of War', '978-0877734529', 3, 'images/artofwar.jpg');

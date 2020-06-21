CREATE DATABASE php_lesson_db;

USE php_lesson_db;

CREATE TABLE IF NOT EXISTS author(
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  NAME varchar (255)
);

CREATE TABLE IF NOT EXISTS book(
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  TITLE VARCHAR (255),
  ISBN VARCHAR(255),
  AUTHOR_ID INT(6) UNSIGNED,
  FOREIGN KEY (AUTHOR_ID) REFERENCES AUTHOR(ID)
);

INSERT INTO author (NAME)
VALUES
 ('Michael Morgan'),
 ('George RR Martin');

 INSERT INTO book (TITLE, ISBN, AUTHOR_ID)
 VALUES
  ('Java for Professional Developers', '0-672-316123-8',1),
  ('A Game of Thrones', '1-141-5143123-5',2);

ALTER TABLE book ADD COLUMN pic_url VARCHAR(255);
UPDATE book SET pic_url = 'image/java.jpg' WHERE id = 1;
UPDATE book SET pic_url = 'image/gotbook.jpg' WHERE id = 2;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `author` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `author` VALUES(3, 'Edgar allan Poe');
INSERT INTO `author` VALUES(2, 'George RR Martin');
INSERT INTO `author` VALUES(1, 'Michael Morgan');
INSERT INTO `author` VALUES(4, 'William Shakespeare');

CREATE TABLE `book` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `authorName` varchar(250) NOT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `author_id` int(6) UNSIGNED DEFAULT NULL,
  `pic_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `book` VALUES(1, 'Java for Professional Developers', 'Michael Morgan', '0-672-316123-8', 1, 'image/java.jpg');
INSERT INTO `book` VALUES(2, 'A Game of Thrones', 'George RR Martin', '1-141-5143123-5', 2, 'image/got.jpg');
INSERT INTO `book` VALUES(11, 'The Cask of Amontillado', 'Edgar Allan Poe', '9-781-58341580-1', 3, 'image/tcoa.jpg');
INSERT INTO `book` VALUES(20, 'Romeo and Juliet', 'William Shakespeare', '9-780-00104220-9', 4, 'image/rnj.jpg');


ALTER TABLE `author`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `un_author_name` (`name`);

ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);


ALTER TABLE `author`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `book`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;


ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

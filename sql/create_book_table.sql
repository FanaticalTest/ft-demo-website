DROP TABLE IF EXISTS `books`;

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `books` (`book_id`, `title`, `author`, `edition`) VALUES
(1, 'JavaScript and JSON Essentials', 'Sai Srinivas Sriparasa', 'Packt'),
(2, 'RESTful Web APIs', 'Leonard Richardson', 'Oreilly');
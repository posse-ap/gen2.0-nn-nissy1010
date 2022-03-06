DROP SCHEMA IF EXISTS webapp;

CREATE SCHEMA webapp;

USE webapp;

DROP TABLE IF EXISTS `big_tables`;

CREATE TABLE `person` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
);

INSERT INTO
    `big_questions`
SET
    name = '東京の難読地名クイズ';

INSERT INTO
    `big_questions`
SET
    name = '広島の難読地名クイズ';

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `big_question_id` INT NOT NULL,
    `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
);

INSERT INTO
    `questions`
SET
    `big_question_id` = 1,
    image = 'takanawa.png';

INSERT INTO
    `questions`
SET
    `big_question_id` = 1,
    image = 'kameido.png';

INSERT INTO
    `questions`
SET
    `big_question_id` = 2,
    image = 'mukainada.png';

DROP TABLE IF EXISTS `choices`;

CREATE TABLE `choices` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `question_id` INT NOT NULL,
    `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
    `valid` TINYINT(1) NOT NULL DEFAULT '0'
);

INSERT INTO
    `choices` (`question_id`, `name`, `valid`)
VALUES
    (1, 'たかなわ', 1),
    (1, 'たかわ', 0),
    (1, 'こうわ', 0),
    (2, 'かめと', 0),
    (2, 'かめど', 0),
    (2, 'かめいど', 1),
    (3, 'むこうひら', 0),
    (3, 'むきひら', 0),
    (3, 'むかいなだ', 1);
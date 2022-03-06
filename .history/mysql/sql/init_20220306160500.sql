DROP SCHEMA IF EXISTS webapp;

CREATE SCHEMA webapp;

USE webapp;

DROP TABLE IF EXISTS `person_data`;

CREATE TABLE `person_data` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
    `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
    `lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
    `time` INT NOT NULL
);

INSERT INTO
    `person_data`
SET
    `date` = '2022年 03月 06日'
    `content` = 'N予備校'
    `lang` = 'HTML'
    `time` = 10

INSERT INTO
    `big_questions`
SET
    `date` = '2022年 03月 05日'
    `content` = 'ドットインストール'
    `lang` = 'css'
    `time` = 5

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `person_data_id` INT NOT NULL,
    `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
);

INSERT INTO
    `contents`
SET
    `person_data_id` = 1,
    `content` = 'N予備校';

INSERT INTO
    `contents`
SET
    `big_question_id` = 2,
    `content` = 'ドットインストール';

INSERT INTO
    `contents`
SET
    `big_question_id` = 3,
    image = 'POSSE課題';

DROP TABLE IF EXISTS `langs`;

CREATE TABLE `langs` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `person_data_id` INT NOT NULL,
    `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
);

INSERT INTO
    `langs` (`person_data_id`, `content`)
VALUES
    (1, 'HTML'),
    (2, 'たかわ'),
    (3, 'こうわ'),
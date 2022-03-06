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
    `time` = 10;

INSERT INTO
    `person_data`
SET
    `date` = '2022年 03月 05日'
    `content` = 'ドットインストール'
    `lang` = 'css'
    `time` = 5;

-- DROP TABLE IF EXISTS `contents`;

-- CREATE TABLE `contents` (
--     `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
--     `person_data_id` INT NOT NULL,
--     `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
-- );

-- INSERT INTO
--     `contents`
-- SET
--     `person_data_id` = 1,
--     `content` = 'N予備校';

-- INSERT INTO
--     `contents`
-- SET
--     `big_question_id` = 2,
--     `content` = '';

-- INSERT INTO
--     `questions`
-- SET
--     `big_question_id` = 2,
--     image = 'mukainada.png';

-- DROP TABLE IF EXISTS `choices`;

-- CREATE TABLE `choices` (
--     `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
--     `question_id` INT NOT NULL,
--     `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
--     `valid` TINYINT(1) NOT NULL DEFAULT '0'
-- );

-- INSERT INTO
--     `choices` (`question_id`, `name`, `valid`)
-- VALUES
--     (1, 'たかなわ', 1),
--     (1, 'たかわ', 0),
--     (1, 'こうわ', 0),
--     (2, 'かめと', 0),
--     (2, 'かめど', 0),
--     (2, 'かめいど', 1),
--     (3, 'むこうひら', 0),
--     (3, 'むきひら', 0),
--     (3, 'むかいなだ', 1);
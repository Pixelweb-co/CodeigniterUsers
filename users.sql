CREATE TABLE user (
id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
first_name varchar(255) NOT NULL COLLATE utf8_unicode_ci,
last_name varchar(255) NOT NULL COLLATE utf8_unicode_ci,
email varchar(255) NOT NULL COLLATE utf8_unicode_ci,
gender varchar(255) COLLATE utf8_unicode_ci,
age int(10) NOT NULL COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE DATABASE think5_api CHARSET utf8;

USE think5_api;

CREATE TABLE api_user(
id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
userName char(20) NOT NULL,
passWord char(20) NOT NULL,
gender tinyint(1) NOT NULL default 2 COMMENT '男0女1未知2'
)ENGINE MYISAM CHARSET UTF8;

#添加新闻

CREATE TABLE api_news(
id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
newsTitle VARCHAR(30) NOT NULL ,
author varchar(20) NOT NULL ,
newsContent TEXT NOT NULL,
createTime int(10) UNSIGNED NOT NULL
)ENGINE myisam CHARSET UTF8;


CREATE TABLE api_product(
id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
productName VARCHAR(20) NOT NULL ,
productPrice DOUBLE(10,2) NOT NULL ,
createTime int(10) UNSIGNED NOT NULL
)ENGINE myisam CHARSET UTF8;

CREATE TABLE product_image(
id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
imageName VARCHAR(50) NOT NULL ,
createTime int(10) UNSIGNED NOT NULL,
productId int(10) NOT NULL
)ENGINE myisam CHARSET UTF8;

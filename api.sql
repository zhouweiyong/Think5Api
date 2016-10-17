
CREATE DATABASE think5_api CHARSET utf8;

USE think5_api;

#添加新闻

CREATE TABLE api_news(
id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
newsTitle VARCHAR(30) NOT NULL ,
author varchar(20) NOT NULL ,
newsContent TEXT NOT NULL,
createTime int(10) UNSIGNED NOT NULL
)ENGINE myisam CHARSET UTF8;
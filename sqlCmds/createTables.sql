use yourstudio;
create table visitors(
	id int not null auto_increment,
	name varchar(100) character set utf8 not null,
	email varchar(100),
	PRIMARY KEY(id)
) ENGINE=INNODB;
create table comments(
	id int not null auto_increment,
	subject varchar(150) character set utf8 not null,
	content varchar(500) character set utf8 not null,
	createDate date not null,
	visitorId int not null,
	PRIMARY KEY(id),
	INDEX(visitorId),
	FOREIGN KEY(visitorId) REFERENCES visitors(id)
) ENGINE=INNODB;
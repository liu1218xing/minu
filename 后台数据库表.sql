create table imooc_admin(
	id tinyint unsigned auto_increment key,
	username varchar(40) not null unique,
	password varchar(40) not null,
	email varchar(50) not null
);
create table imooc_cate(
	id smallint unsigned auto_increment key,
	cName varchar(50) unique
);
create table imooc_pro(
	id int unsigned auto_increment key,
	pName varchar(50) not null unique,
	pSn varchar(50) not null,
	pNum int unsigned default 1,
	mPrice decimal(10,2) not null,
	iPrice decimal(10,2) not null,
	pDesc text,
	pImg varchar(50) not null,
	pubTime int unsigned not null,
	isShow tinyint(1) default 1,
	isHot tinyint(1) default 0,
	cId smallint unsigned not null
);
create table imooc_user(
	id int unsigned auto_increment key,
	username varchar(40) not null unique,
	password varchar(40) not null,
	sex enum("男","女","保密") not null default "保密",
	face varchar(50) not null,
	regTime int unsigned not null
);
create table imooc_album(
	id int unsigned auto_increment key,
	pid int unsigned not null,
	albumPath varchar(50) not null
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

create table imooc_cate(
	id smallint unsigned auto_increment key,
	sortid int unsigned not null,
	parentid int unsigned not null,
	parname varchar(50) not null,
	ctitle varchar(200) not null,
	ckey varchar(200) not null,
	cdescription varchar(300) not null,
	csummary varchar(300) not null,
	cdesc text not null,
	isshow tinyint(1) default 0,
	pimg varchar(100) not null,
	cName varchar(50) unique
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

create table parent_cate(
	id smallint unsigned auto_increment key,
	cName varchar(50) unique,
	pImg varchar(50) not null,
	createTime int unsigned not null
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;


create table mind_album(
	id int unsigned auto_increment key,
	pid int unsigned not null,
	albumPath varchar(50) not null
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

alter table product
add ptitle varchar(200) not null,
pkey varchar(200) not null,
pdescription varchar(200) not null,
psummary text not null
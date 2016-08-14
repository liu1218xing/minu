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

/**
 * [ENGINE description]
 * @itype 1 分类图片 2 产品图片  
 * 3 案例，4  新闻等信息
 */
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
--行业分类
create table mind_industry(
	id int unsigned auto_increment key,
	iName varchar(80) not null,
	iDesc text not null,
	createTime int unsigned not null
	)ENGINE=InnoDB  DEFAULT CHARSET=utf8;
---板块分类，例如新闻，服装知识
create table mind_module(
	id int unsigned auto_increment key,
	mName varchar(80) not null,
	createTime int unsigned not null
	)ENGINE=InnoDB  DEFAULT CHARSET=utf8;
--客户案例
create table mind_case(
	id smallint unsigned auto_increment key,
	atitle varchar(300) not null,
	akey varchar(500) not null,
	adescription varchar(500) not null,
	asummary text not null,
	aName varchar(300) not null,
	aType smallint unsigned not null,
	iId int unsigned not null,
	aSource varchar(50) not null,
	aAuthor varchar(50) not null,
	aDesc text not null,
	aHit int unsigned not null,
	createTime int unsigned not null
	)ENGINE=InnoDB  DEFAULT CHARSET=utf8;
-- 新闻，服装知识等
create table mind_article(
	id smallint unsigned auto_increment key,
	atitle varchar(300) not null,
	akey varchar(500) not null,
	adescription varchar(500) not null,
	asummary text not null,
	aName varchar(300) not null,
	aType smallint unsigned not null,
	iId int unsigned not null,
	aSource varchar(50) not null,
	aAuthor varchar(50) not null,
	aDesc text not null,
	aHit int unsigned not null,
	createTime int unsigned not null
	)ENGINE=InnoDB  DEFAULT CHARSET=utf8;
	--公司介绍等信息
create table mind_company(
	id smallint unsigned auto_increment key,
	atitle varchar(300) not null,
	akey varchar(500) not null,
	adescription varchar(500) not null,
	asummary text not null,
	aName varchar(300) not null,
	aType smallint unsigned not null,
	iId int unsigned not null,
	aSource varchar(50) not null,
	aAuthor varchar(50) not null,
	aDesc text not null,
	aHit int unsigned not null,
	createTime int unsigned not null
	)ENGINE=InnoDB  DEFAULT CHARSET=utf8;
	--客户留言等信息
create table mind_message(
	id int unsigned auto_increment key,
	mCustName varchar(80) not null,
	mCustTel varchar(20) not null,
	mCustEmail varchar(80) not null,
	mCustDesc text not null,
	mMark int not null default 0,
	mForllow varchar(300) not null,
	createTime int unsigned not null
	)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

alter table mind_company add isShow int unsigned not null;
alter table mind_case add isShow int unsigned not null;
alter table mind_article add isShow int unsigned not null;
alter table mind_company add aImg varchar(50) not null;
alter table mind_case add aImg varchar(50) not null;
alter table mind_article add aImg varchar(50) not null;

insert into mind_module(mName)value('新闻动态');
insert into mind_module(mName)value('服装知识');
insert into mind_module(mName)value('定做问题');


insert into mind_industry(iName)value('汽车交通');
insert into mind_industry(iName)value('医疗器械');
insert into mind_industry(iName)value('建筑建材');
insert into mind_industry(iName)value('电子信息');
insert into mind_industry(iName)value('国企单位');
insert into mind_industry(iName)value('事业单位');


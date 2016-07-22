
create database imagebbs;

use imagebbs;

grant all on imagebbs.*to testuser@localhost identified by '1234';

create table posts(
id int primary key auto_increment,
name varchar(32),
title varchar(32),
imgdat mediumblob,
mime varchar(64),
created_at date
);



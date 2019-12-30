drop database if exists homework2;
create database homework2;
use homework2;

create table Users(
	id int auto_increment primary key,
    username varchar(255),
    password varchar(255),
    fullName varchar(255)
);

insert into Users values (1,"admin","123","Nguyen A"),
    					 (2,"teo","234","Le Teo");
    

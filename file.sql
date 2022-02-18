CREATE DATABASE lu_store;
create table products(
                         id int auto_increment primary key ,
                         name varchar(100),
                         image varchar(200),
                         price int,
                         quantity int,
                         content varchar(300),
                         shoeType_id int,
                         brand_id int,
                         size_id int
);

create table shoeTypes(
                          id int auto_increment primary key ,
                          name varchar(100)
);

create table brand(
                      id int auto_increment primary key ,
                      name varchar(100)
);

create table size(
                     id int auto_increment primary key ,
                     size int
);

alter table products
    add foreign key (shoeType_id) references shoeTypes(id);

alter table products
    add foreign key (brand_id) references brand(id);

alter table products
    add foreign key (size_id) references size(id);

create table customer (
                          id int auto_increment primary key ,
                          name varchar(100),
                          email varchar(100),
                          password varchar(20)
);

create table admins
(
    id       int auto_increment primary key,
    name     varchar(100),
    email    varchar(100),
    password varchar(20)
);

ALTER TABLE brand
    RENAME TO brands;

ALTER TABLE size
    RENAME TO sizes;

ALTER TABLE customer
    RENAME TO customers;

alter table shoetypes
rename to shoeTypes;

alter table sizes
modify column size float;
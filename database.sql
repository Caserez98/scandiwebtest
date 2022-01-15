create database scandiwebtest;

create table products(
    SKU varchar(15) PRIMARY KEY not null,
    Name varchar(255) NOT NULL,
    Price decimal(10,2) NOT null,
    Description varchar(255) NOT NULL
)
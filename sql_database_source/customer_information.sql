CREATE DATABASE IF NOT EXISTS customer;
USE customer;
CREATE TABLE IF NOT EXISTS information(customer_id int primary key not null auto_increment, name varchar(256) not null, occupation varchar(256) not null, gender varchar(16), contact_no varchar(32) not null);

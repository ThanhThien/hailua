CREATE DATABASE hailua;

USE hailua;

CREATE TABLE users(
user_id int unsigned AUTO_INCREMENT
, user_name varchar(255) not null
, hashedpassword varchar(255) not null
, UNIQUE(user_name)
, PRIMARY KEY(user_id)
);

CREATE TABLE usergroup(
user_id int unsigned
, group_id int unsigned
, PRIMARY KEY(user_id,group_id)
, FOREIGN KEY(user_id) REFERENCES users(user_id)
);

CREATE TABLE products(
product_id int unsigned AUTO_INCREMENT
, product_name varchar(255) 
, description TEXT
,image_url varchar(255)
,price DECIMAL(65,2)
,vendor_id int unsigned
,PRIMARY KEY(product_id)
,FOREIGN KEY(vendor_id) REFERENCES users(user_id)
);

CREATE TABLE orders(
order_id int unsigned AUTO_INCREMENT
, customer_id int unsigned
, product_id int unsigned
, amount int unsigned
, grant_total DECIMAL(65,2)
, PRIMARY KEY(order_id)
, FOREIGN KEY(customer_id) REFERENCES users(user_id)
, FOREIGN KEY(product_id) REFERENCES products(product_id)
);
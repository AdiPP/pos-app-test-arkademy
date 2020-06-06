-- BUAT DATABASE
CREATE DATABASE IF NOT EXISTS db_ark_pos;

-- PILIH DATABASE
USE db_ark_pos;
 
-- BUAT TABEL CATEGORY
CREATE TABLE IF NOT EXISTS Category (
	id int NOT NULL AUTO_INCREMENT,
  name varchar(100),
	PRIMARY KEY (id)
);

-- BUAT TABLE CASHIER
CREATE TABLE IF NOT EXISTS Cashier (
	id int NOT NULL AUTO_INCREMENT,
  name varchar(100),
	PRIMARY KEY (id)
);

-- BUAT TABLE PRODUCT
CREATE TABLE IF NOT EXISTS Product (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(100),
	price decimal(12, 0),
	id_category int NOT NULL,
	id_cashier int NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (id_category) REFERENCES Category(id) ON DELETE CASCADE,
	FOREIGN KEY (id_cashier) REFERENCES Cashier(id) ON DELETE CASCADE
);

-- INSERT DATA KE TABEL CATEGORY
INSERT INTO Category (name) VALUES ('Food');
INSERT INTO Category (name) VALUES ('Drink');

-- INSERT DATA KE TABEL CASHIER
INSERT INTO Cashier (name) VALUES ('Pevita Pearce');
INSERT INTO Cashier (name) VALUES ('Raisa Andriana');
INSERT INTO Cashier (name) VALUES ('Adi Permana Putra');

-- INSERT DATA KE TABEL PRODUCT
INSERT INTO Product (name, price, id_category, id_cashier) VALUES ('Latte', 10000, 2, 1);
INSERT INTO Product (name, price, id_category, id_cashier) VALUES ('Cake', 20000, 1, 2);
INSERT INTO Product (name, price, id_category, id_cashier) VALUES ('Burger', 45000, 1, 3);

-- QUERY UNTUK MENGHASILKAN cashier, product, category, price
SELECT c.name cashier, p.name product, cg.name category, p.price price
FROM Cashier c 
JOIN Product p ON p.id_cashier = c.id 
JOIN Category cg ON cg.id = p.id_category 
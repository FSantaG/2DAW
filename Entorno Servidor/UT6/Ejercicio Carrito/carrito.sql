CREATE DATABASE Carrito;

USE Carrito;

CREATE TABLE Productos(
producto varchar(20),
cantidad int,
precio decimal(7,2),
CONSTRAINT pk_productos PRIMARY KEY (producto)
) Engine="InnoDB";

INSERT INTO productos(producto, cantidad, precio) VALUES ("Plátanos", 10, 1.50);
INSERT INTO productos(producto, cantidad, precio) VALUES ("Manzanas", 20, 1.80);
INSERT INTO productos(producto, cantidad, precio) VALUES ("Peras", 30, 1.40);
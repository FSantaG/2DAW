CREATE DATABASE Ciclos;
USE Ciclos;

CREATE TABLE curso (
    id_curso INT, 
    deno VARCHAR(15), 
    CONSTRAINT pk_curso PRIMARY KEY (id_curso))
Engine="InnoDB";

CREATE TABLE alumno (
    id_al INT, nombre VARCHAR(15), 
    edad INT, id_curso INT,
    CONSTRAINT pk_alumno PRIMARY KEY (id_al),
    CONSTRAINT fk_alumno FOREIGN KEY (id_curso) REFERENCES curso (id_curso))
    ENGINE="InnoDB";

INSERT INTO curso (id_curso, deno) VALUES (1, "DAW1");
INSERT INTO curso (id_curso, deno) VALUES (2, "DAW2");

INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES (1, "Ana", 18, 1);
INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES (2, "Sergio", 18, 1);
INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES (3, "Jorge", 19, 1);
INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES (4, "Maria", 21, 2);
INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES (5, "Pedro", 23, /*3*/2);
INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES (6, "Juan", 21,/*null*/1);

SELECT * FROM alumno WHERE edad=18;
SELECT nombre, edad FROM alumno WHERE edad=18;
SELECT nombre FROM alumno WHERE edad !=18;
SELECT nombre FROM alumno WHERE edad=18 OR edad=21;
SELECT nombre FROM alumno WHERE edad>=18 AND edad <=21;
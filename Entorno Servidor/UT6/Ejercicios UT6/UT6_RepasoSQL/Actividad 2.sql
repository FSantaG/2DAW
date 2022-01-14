CREATE DATABASE Los_Oscar_2020;

USE Los_Oscar_2020;

CREATE TABLE actores(
    id_actor int PRIMARY KEY,
    nacionalidad varchar(30),
    nombre_apellidos varchar(100),
    sexo varchar(1)
)Engine="InnoDB";

CREATE TABLE peliculas (
    titulo varchar(100) PRIMARY KEY,
    genero varchar(20),
    anno_pro int(4)
)Engine="InnoDB";

CREATE TABLE intervencion (
    id_actor int,
    titulo varchar(100),
    CONSTRAINT fk_idActor FOREIGN KEY (id_actor) REFERENCES actores(id_actor),
    CONSTRAINT fk_titulo FOREIGN KEY (titulo) REFERENCES peliculas(titulo)
)Engine="InnoDB";

INSERT INTO actores(id_actor, nacionalidad, nombre_apellidos, sexo) VALUES (00001, "francés", "Jacqueline Bisset", "f");
INSERT INTO actores(id_actor, nacionalidad, nombre_apellidos, sexo) VALUES (00002, "española", "Antonio Banderas", "m");
INSERT INTO actores(id_actor, nacionalidad, nombre_apellidos, sexo) VALUES (00003, "española", "Belén Rueda", "f");
INSERT INTO actores(id_actor, nacionalidad, nombre_apellidos, sexo) VALUES (00004, "estadounidense", "Brad Pitt", "m");
INSERT INTO actores(id_actor, nacionalidad, nombre_apellidos, sexo) VALUES (00005, "estadounidense", "Laura Dern", "f");

INSERT INTO peliculas(titulo, genero, anno_pro) VALUES("Dolor y gloria", "drama", 2019);
INSERT INTO peliculas(titulo, genero, anno_pro) VALUES("Erase una vez...Hollywood", "comedia", 2019);
INSERT INTO peliculas(titulo, genero, anno_pro) VALUES("Historia de un matrimonio", "drama", 2019);
INSERT INTO peliculas(titulo, genero, anno_pro) VALUES("La piel que habito", "thriller", 2011);

INSERT INTO intervencion(id_actor, titulo) VALUES(00002,"Dolor y gloria");
INSERT INTO intervencion(id_actor, titulo) VALUES(00004,"Erase una vez...Hollywood");
INSERT INTO intervencion(id_actor, titulo) VALUES(00005,"Historia de un matrimonio");
INSERT INTO intervencion(id_actor, titulo) VALUES(00002,"La piel que habito");

SELECT * FROM peliculas WHERE genero="drama";
SELECT nombre_apellidos FROM actores WHERE sexo="f";
SELECT count(*) FROM actores WHERE nacionalidad="española";
SELECT titulo from intervencion WHERE id_actor = (SELECT id_actor FROM actores WHERE nombre_apellidos="Antonio Banderas"); 
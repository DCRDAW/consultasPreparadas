CREATE database prueba;

USE prueba;

CREATE TABLE persona(
idPersona tinyInt UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY ,
nombre VARCHAR(20) NOT NULL,
apellido VARCHAR(40) NOT NULL
);
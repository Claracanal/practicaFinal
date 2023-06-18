CREATE DATABASE cursosamsung COLLATE 'utf8mb4_general_ci';

CREATE TABLE `cursosamsung`.`usuarios` 
(`ID` INT NOT NULL AUTO_INCREMENT , 
`NOMBRE` VARCHAR(50) NOT NULL ,
`PRIMER_APELLIDO` VARCHAR(50) NOT NULL ,
`SEGUNDO_APELLIDO` VARCHAR(50) NOT NULL ,
`EMAIL` VARCHAR(150) NOT NULL  ,
`LOGIN` VARCHAR(50) NOT NULL,
'PASSWORD' VARCHAR(8) NOT NULL,
PRIMARY KEY (`ID`),
UNIQUE `EMAIL_UNIQUE` (`EMAIL`)) ENGINE = InnoDB;


INSERT INTO usuarios (NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, EMAIL, LOGIN, PASSWORD) VALUES ('usuario1', 'apellido1', 'segundo-apellido1','usuario1@curso-samsung.es','usuario1_apellido1','12345');
INSERT INTO usuarios (NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, EMAIL, LOGIN, PASSWORD) VALUES ('usuario2', 'apellido2', 'segundo-apellido2', 'usuario2@curso-samsung.es','usuario2_apellido2','12345');
INSERT INTO usuarios (NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, EMAIL, LOGIN, PASSWORD) VALUES ('usuario3', 'apellido3', 'segundo-apellido3','usuario3@curso-samsung.es','usuario3_apellido3','12345');

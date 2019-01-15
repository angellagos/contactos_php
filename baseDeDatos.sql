CREATE SCHEMA sistema1;
USE sistema1;

CREATE TABLE usuario(
cod_usuario INT AUTO_INCREMENT,
nom_usuario VARCHAR(30) UNIQUE,
clave VARCHAR(20),
correo VARCHAR(50) UNIQUE,
alias VARCHAR(30),
PRIMARY KEY(cod_usuario)
);

CREATE TABLE contacto(
indice INT AUTO_INCREMENT,
cod_usuario INT NOT NULL,
nombre varchar(50) NOT NULL,
fec_nacimiento DATE,
correo varchar(70),
telf1 varchar(12),
telf2 varchar(12),
direccion VARCHAR(100),
imagen LONGBLOB,
PRIMARY KEY(indice,cod_usuario)
);

ALTER TABLE contacto ADD FOREIGN KEY (cod_usuario) REFERENCES usuario(cod_usuario);

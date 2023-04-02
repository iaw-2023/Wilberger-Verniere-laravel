#Archivo batch (BaseDeDatosProyectoIAWv2.sql) para la creación de la base de datos

CREATE DATABASE BaseDeDatosProyectoIAWv2;

# selecciono la base de datos sobre la cual voy a hacer modificaciones
USE BaseDeDatosProyectoIAWv2;

#-------------------------------------------------------------------------
# Creación Tablas para las entidades

CREATE TABLE Peliculas (
    idPelicula          INT NOT NULL AUTO_INCREMENT,
    nombrePelicula      VARCHAR(40) NOT NULL,
    precio              DECIMAL(10,2) NOT NULL, /*2 decimales*/

    PRIMARY KEY (idPelicula),
) ENGINE=InnoDB;


CREATE TABLE Clientes (
    nombreUsuario       VARCHAR(20) NOT NULL,
    clave               VARCHAR(20) NOT NULL,
    mail                VARCHAR(45) NOT NULL,
  
    PRIMARY KEY (nombreUsuario)
) ENGINE=InnoDB;

CREATE TABLE Cines (
    idCine              INT NOT NULL AUTO_INCREMENT,
    ubicacion           VARCHAR(40) NOT NULL,
    nroOcupado          INT UNSIGNED NOT NULL,
    capacidadMaxima     INT UNSIGNED NOT NULL,
 
    PRIMARY KEY (idCine)
) ENGINE=InnoDB;

CREATE TABLE Genero (
    nombreGenero    VARCHAR(25) NOT NULL,

    PRIMARY KEY (nombreGenero)
) ENGINE=InnoDB;

/*
CREATE TABLE Administracion (
    nombreUsuarioAdm    VARCHAR(45) NOT NULL,
    claveUsuarioAdm     VARCHAR(45) NOT NULL,
    mail                VARCHAR(45) NOT NULL,

    PRIMARY KEY (nombreUsuarioAdm)
) 
*/

CREATE TABLE Ticket(
    nroTicket           INT NOT NULL AUTO_INCREMENT
    precio              DECIMAL(10,2) NOT NULL, /*2 decimales*/

    PRIMARY KEY (nroTicket)
)
#-------------------------------------------------------------------------
# Creación Tablas para las relaciones

CREATE TABLE Genero_Pelicula(
    pelicula            INT NOT NULL AUTO_INCREMENT,
    genero              VARCHAR(25) NOT NULL,

    FOREIGN KEY pelicula REFERENCES Peliculas(idPelicula)
    FOREIGN KEY genero REFERENCES Genero(nombreGenero)
)

CREATE TABLE Cine_Pelicula(
    pelicula            VARCHAR(40) NOT NULL,
    cine                VARCHAR(25) NOT NULL,
    fechaEstreno        date NOT NULL, 
    horaEstreno         time UNSIGNED NOT NULL,

    PRIMARY KEY (pelicula,cine,fechaEstreno,horaEstreno)
    FOREIGN KEY cine REFERENCES Cines(idCine)
    FOREIGN KEY pelicula REFERENCES Peliculas(idPelicula)
)

CREATE TABLE Inscripciones(
    ticket              INT NOT NULL AUTO_INCREMENT,
    cliente             VARCHAR(20) NOT NULL,

    PRIMARY KEY (ticket)
    FOREIGN KEY cliente REFERENCES Clientes(nombreUsuario)
    FOREIGN KEY ticket  REFERENCES Ticket(nroTicket)
)

CREATE TABLE Tickets_Asociados(
    ticket              INT UNSIGNED NOT NULL,
    pelicula            INT NOT NULL AUTO_INCREMENT,
    cine                INT NOT NULL AUTO_INCREMENT,
    fecha               date NOT NULL, 
    hora                time UNSIGNED NOT NULL, 

    PRIMARY KEY (ticket)
    FOREIGN KEY pelicula REFERENCES Peliculas(idPelicula)
    FOREIGN KEY cine REFERENCES Cines(idCine)
    FOREIGN KEY ticket  REFERENCES Ticket(nroTicket)
)

#-------------------------------------------------------------------------
# Carga de datos de Prueba
    INSERT INTO Cartelerias(nombreCarteleria) VALUES ("Accion");
    INSERT INTO Cartelerias(nombreCarteleria) VALUES ("Comedia");
    INSERT INTO Cartelerias(nombreCarteleria) VALUES ("Drama");
    INSERT INTO Cartelerias(nombreCarteleria) VALUES ("Terror");
    INSERT INTO Cartelerias(nombreCarteleria) VALUES ("Ciencia Ficcion");
    INSERT INTO Cartelerias(nombreCarteleria) VALUES ("Documental");

    INSERT INTO nombre_tabla() VALUES ();

#-------------------------------------------------------------------------
# Creacion de vistas 
    CREATE VIEW ...;

#-------------------------------------------------------------------------
# Creacion de usuarios y otorgamiento de privilegios
    CREATE USER ...;

    GRANT ... ON ... TO '...'@'...';
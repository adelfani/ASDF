DROP DATABASE IF EXISTS basiccrud;

CREATE DATABASE basiccrud;

USE basiccrud;



DROP TABLE IF EXISTS student;

CREATE TABLE student (

                         id INT NOT NULL AUTO_INCREMENT,

                        voornaam VARCHAR(50),

                        achternaam VARCHAR(50),
                        email VARCHAR(50),
                        telefoonnummer VARCHAR(10),
                        straatnaam VARCHAR(50) not null,
                        huisnummer INT not null,
                        huisnummer_toevoeging VARCHAR(10),
                        woonplaats VARCHAR(50) not null,
                        postcode VARCHAR(6) not null,





                         PRIMARY KEY (id)

);
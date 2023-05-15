#   Creation de la base de donnees nommee : site


DROP SCHEMA IF EXISTS site ;
CREATE SCHEMA IF NOT EXISTS site;

# set search_path to site;


# Creation des tables

#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------


CREATE TABLE if not exists site.utilisateur(
    idUtilisateur int (100) Auto_increment  NOT NULL ,
    prenom        Varchar (100) NOT NULL ,
    nom           Varchar (100) NOT NULL ,
    age           Smallint NOT NULL ,
    idLogin       Int NOT NULL,
    UNIQUE(idLogin),
    PRIMARY KEY (idUtilisateur )
);

#------------------------------------------------------------
# Table: Identifiants
#------------------------------------------------------------


CREATE TABLE if not exists site.identifiants(
    idLogin       int (100) Auto_increment  NOT NULL ,
    login         Varchar (200) NOT NULL ,
    password      Text NOT NULL ,
    PRIMARY KEY (idLogin ) ,
    UNIQUE (login)
);

ALTER TABLE site.utilisateur ADD CONSTRAINT FK_Utilisateur_idLogin FOREIGN KEY (idLogin) REFERENCES site.identifiants(idLogin)ON UPDATE cascade ON DELETE cascade;
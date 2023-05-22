#   Creation de la base de donnees nommee : site_efrei


DROP SCHEMA IF EXISTS site_efrei ;
CREATE SCHEMA IF NOT EXISTS site_efrei;

# set search_path to site_efrei;


# Creation des tables

#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------


CREATE TABLE if not exists site_efrei.utilisateur(
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


CREATE TABLE if not exists site_efrei.identifiants(
    idLogin       int (100) Auto_increment  NOT NULL ,
    login         Varchar (200) NOT NULL ,
    password      Text NOT NULL ,
    PRIMARY KEY (idLogin ) ,
    UNIQUE (login)
);

ALTER TABLE site_efrei.utilisateur ADD CONSTRAINT FK_Utilisateur_idLogin FOREIGN KEY (idLogin) REFERENCES site_efrei.identifiants(idLogin)ON UPDATE cascade ON DELETE cascade;
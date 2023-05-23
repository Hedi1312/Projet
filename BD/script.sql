#   Creation de la base de donnees nommee : site_efrei


DROP SCHEMA IF EXISTS site_efrei ;
CREATE SCHEMA IF NOT EXISTS site_efrei;

# set search_path to site_efrei;


# Creation des tables


#------------------------------------------------------------
# Table: acheteurs
#------------------------------------------------------------


CREATE TABLE if not exists site_efrei.acheteurs(
    idAcheteurs     int (100) Auto_increment  NOT NULL ,
    nom             Varchar (100) NOT NULL ,
    prenom          Varchar (100) NOT NULL ,
    pseudo          Varchar (100) NOT NULL ,
    adresse1        Varchar (200) NOT NULL ,
    adresse2        Varchar (200) ,
    ville           Varchar (100) NOT NULL ,
    codepostal      Varchar (5) NOT NULL ,
    pays            Varchar (100) NOT NULL ,
    numero          Varchar (20) NOT NULL ,
    email           Varchar (100) NOT NULL ,
    mdp             Varchar (100) NOT NULL ,
    UNIQUE(email),
    PRIMARY KEY (idAcheteurs)
);
#------------------------------------------------------------
# Table: vendeurs
#------------------------------------------------------------


CREATE TABLE if not exists site_efrei.vendeurs(
    idVendeur     int (100) Auto_increment  NOT NULL ,
    pseudo        Varchar (100) NOT NULL ,
    email         Varchar (100) NOT NULL ,
    nom           Varchar (100) NOT NULL ,
    UNIQUE(email),
    PRIMARY KEY (idVendeur)
);

#   Creation de la base de donnees nommee : site_efrei


DROP SCHEMA IF EXISTS site_efrei ;
CREATE SCHEMA IF NOT EXISTS site_efrei;

# set search_path to site_efrei;


# Creation des tables

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

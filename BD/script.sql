#   Creation de la base de donnees nommee : site_efrei


DROP SCHEMA IF EXISTS site_efrei ;
CREATE SCHEMA IF NOT EXISTS site_efrei;

# set search_path to site_efrei;


# Creation des tables

#------------------------------------------------------------
# Table: admins
#------------------------------------------------------------

CREATE TABLE site_efrei.admins(
      idAdmin       int (100) Auto_increment  NOT NULL ,
      pseudo        Varchar (100) NOT NULL ,
      email         Varchar (100) NOT NULL ,
      mdp           Varchar (100) NOT NULL ,
      UNIQUE(email),
      PRIMARY KEY (idAdmin)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: vendeurs
#------------------------------------------------------------


CREATE TABLE if not exists site_efrei.vendeurs(
      idVendeur     int (100) Auto_increment  NOT NULL ,
      pseudo        Varchar (100) NOT NULL ,
      email         Varchar (100) NOT NULL ,
      nom           Varchar (100) NOT NULL ,
      img           TEXT(500),
      idAdmin       Int,
      UNIQUE(email),
      PRIMARY KEY (idVendeur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: articles
#------------------------------------------------------------


CREATE TABLE if not exists site_efrei.articles(
      idArticle     int (100) Auto_increment  NOT NULL ,
      numeroIdentification Varchar (50) NOT NULL ,
      nomArticle           Varchar (100) NOT NULL ,
      description          Varchar (1000) NOT NULL ,
      photo1               Text NOT NULL ,
      photo2               Text NOT NULL ,
      photo3               Text NOT NULL ,
      video                Text ,
      categorie            Varchar (50) NOT NULL ,
      prix                 Float NOT NULL ,
      idVendeur            Int NOT NULL ,

      PRIMARY KEY (idArticle),
      UNIQUE (numeroIdentification)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: acheteurs
#------------------------------------------------------------


CREATE TABLE if not exists site_efrei.acheteurs(
    idAcheteur      int (100) Auto_increment  NOT NULL ,
    nom             Varchar (100) NOT NULL ,
    prenom          Varchar (100) NOT NULL ,
    pseudo          Varchar (100) NOT NULL ,
    adresse1        Varchar (200) NOT NULL ,
    adresse2        Varchar (200) ,
    ville           Varchar (100) NOT NULL ,
    codePostal      Varchar (5) NOT NULL ,
    pays            Varchar (100) NOT NULL ,
    numero          Varchar (20) NOT NULL ,
    email           Varchar (100) NOT NULL ,
    mdp             Varchar (100) NOT NULL ,
    UNIQUE(email),
    PRIMARY KEY (idAcheteur)
)ENGINE=InnoDB;



ALTER TABLE site_efrei.vendeurs ADD FOREIGN KEY (idAdmin) REFERENCES admins(idAdmin);

ALTER TABLE site_efrei.articles ADD FOREIGN KEY (idVendeur) REFERENCES vendeurs(idVendeur);






DELETE FROM site_efrei.vendeurs;
DELETE FROM site_efrei.acheteurs;
DELETE FROM site_efrei.admins;


#------------------------------------------------------------
#------------- Admin
#------------------------------------------------------------

-- Admin : Admin - admin.admin@efrei.net - Admin2023
INSERT INTO site_efrei.admins(`idAdmin`,`pseudo`,`email`,`mdp`) VALUES (1,'Admin','admin.admin@efrei.net','$2y$10$z/lo9gQl9w0VZP7BypvpFOw//ePSXcZEduRWM9Fx3UWaQmAElLWFK');

-- Admin : Admin2 - admin2.admin2@efrei.net - Admin2023
INSERT INTO site_efrei.admins(`idAdmin`,`pseudo`,`email`,`mdp`) VALUES (2,'Admin2','admin2.admin2@efrei.net','$2y$10$ttIGiCDtCENYBtzAC44/HOziQCi4N2oItnDxKb5tXmEj6Z7AZgnqS');


#------------------------------------------------------------
#------------- Acheteurs
#------------------------------------------------------------

-- MDP -> Hedi9999
INSERT INTO site_efrei.acheteurs(`nom`, `prenom`, `pseudo`, `adresse1`, `ville`, `codePostal`, `pays`, `numero`, `email`, `mdp`) VALUES ('OKBA','Hedi','Pepito','99 Rue de Bobigny','Bobigny','93000','France','0700000000','hedi.okba@efrei.net','$2y$10$j9XILpUu1mAifucUMzp2nuncwnYKGgYFQDr03n4ETWydHbU1mpegC');

-- MDP -> Ilman9999
INSERT INTO site_efrei.acheteurs(`nom`, `prenom`, `pseudo`, `adresse1`,`adresse2`, `ville`, `codePostal`, `pays`, `numero`, `email`, `mdp`) VALUES ('MOHAMMAD AL MOMIN','Ilman','Optik','10 Avenue du Bourget','Etage 3 porte 2','Le Bourget','93350','France','0799999999','ilman.mohammad-al-momin@efrei.net','$2y$10$fX6BcUox5YQJwKsvXVFJke8eOzpm1IQF2VeAO4yJAuAoP.Zf0QbDS');


#------------------------------------------------------------
#------------- Vendeurs
#------------------------------------------------------------




-- Pseudo -> Husna
INSERT INTO `vendeurs`(`pseudo`, `email`, `nom`,`img`,`idAdmin`) VALUES ('Husna','hassane.mohamad@efrei.net','Hassane','Vue/Affichage/img/profil/IMG-01.jpg',1);

-- Pseudo -> Pepito
INSERT INTO `vendeurs`(`pseudo`, `email`, `nom`,`img`,`idAdmin`) VALUES ('Pepito','hedi2.okba@efrei.net','Hedi','Vue/Affichage/img/profil/IMG-01.jpg',2);

-- Pseudo -> Amirovinho
INSERT INTO `vendeurs`(`pseudo`, `email`, `nom`,`img`,`idAdmin`) VALUES ('Amirovinho','amir.thabet@efrei.net','Amir','Vue/Affichage/img/profil/IMG-02.jpg',1);
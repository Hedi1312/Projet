DELETE FROM site_efrei.acheteurs;
DELETE FROM site_efrei.articles;
DELETE FROM site_efrei.vendeurs;
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


#------------------------------------------------------------
#------------- Articles
#------------------------------------------------------------

INSERT INTO articles(idArticle, numeroIdentification, nomArticle, description, photo1, photo2, photo3, video, categorie, prix, idVendeur) VALUES ('1','10','iPhone 14 Pro Max',"L'iPhone 14 Pro Max est le dernier fleuron d'Apple. Performances puissantes, fonctionnalités avancées. 128 Go de stockage généreux. Design élégant en Violet Intense. Écran haute résolution, images nettes, couleurs vibrantes. Appareil photo révolutionnaire, qualité exceptionnelle, même en faible luminosité. Performances fluides et réactives grâce à une puce puissante. Sécurité avancée avec Face ID.",'Vue/Affichage/img/articles/iphone/iphone_1.png','Vue/Affichage/img/articles/iphone/iphone_2.png','Vue/Affichage/img/articles/iphone/iphone_3.png','Vue/Affichage/img/articles/Videos/VID_iphone.mp4','Haut de gamme','1479.99','1');
INSERT INTO articles(idArticle, numeroIdentification, nomArticle, description, photo1, photo2, photo3, video, categorie, prix, idVendeur) VALUES ('2','20','Carte Graphique - Nvidia GeForce RTX 4090 - Asus ROG',"Performances et efficacite energetique jusqu'a 2 fois superieures. Performances IA multipliees par 2. Performances de ray tracing jusqu'a 2 fois superieures. Ventilateurs axiaux permettant d’accroitre de 23 % la circulation de l’air.",'Vue/Affichage/img/articles/carte_graphique/carte_graphique_1.png','Vue/Affichage/img/articles/carte_graphique/carte_graphique_2.png','Vue/Affichage/img/articles/carte_graphique/carte_graphique_3.png','','Rare','3984.99','1');
INSERT INTO articles(idArticle, numeroIdentification, nomArticle, description, photo1, photo2, photo3, video, categorie, prix, idVendeur) VALUES ('3','30','Barette de RAM - Corsair Vengence DDR5 4x48 Go @5200 MHz',"La mémoire Corsair Vengeance DDR5 est optimisee pour les cartes meres Intel et fournit des frequences de fonctionnement elevees, le tout dans un format low profile adapte a la majorite des systemes.",'Vue/Affichage/img/articles/ram/ram_1.png','Vue/Affichage/img/articles/ram/ram_2.png','Vue/Affichage/img/articles/ram/ram_3.png','','Rare','989.95','3');
INSERT INTO articles(idArticle, numeroIdentification, nomArticle, description, photo1, photo2, photo3, video, categorie, prix, idVendeur) VALUES ('4','40','Processeur - Intel Core i9 @5.8 GHz',"Des jeux fluides et un PC qui ne ralentit pas. En offrant encore plus de puissance pour les programmes exigeants et les jeux et plus de coeurs pour les taches de fond, les processeurs Intel Core de 13eme generation vous permettent de faire encore plus de choses et encore plus rapidement.",'Vue/Affichage/img/articles/processeur/processeur_1.png','Vue/Affichage/img/articles/processeur/processeur_2.png','Vue/Affichage/img/articles/processeur/processeur_3.png','','Rare','637.49','2');
INSERT INTO articles(idArticle, numeroIdentification, nomArticle, description, photo1, photo2, photo3, video, categorie, prix, idVendeur) VALUES ('5','50','Laptop - MacBook Pro 16" - M2 Max - 32 Go - SSD 1 To',"Puce Apple M2 Max avec CPU 12 cœurs, GPU 38 cœurs et Neural Engine 16 cœurs 32 Go de memoire unifiee SSD de 1 To.",'Vue/Affichage/img/articles/macbook/macbook_1.png','Vue/Affichage/img/articles/macbook/macbook_2.png','Vue/Affichage/img/articles/macbook/macbook_3.png','Vue/Affichage/img/articles/Videos/VID_macbook.mp4','Haut de gamme','4149.00','2');
INSERT INTO articles(idArticle, numeroIdentification, nomArticle, description, photo1, photo2, photo3, video, categorie, prix, idVendeur) VALUES ('6','60','Frigo - Samsung Smart Fridge - Carbon Black',"91,2x178x71,6 cm - Froid ventile (No Frost) - 36db. Refrigerateur 409L - Congélateur 225L.Twin Cooling Plus: plus de fraicheur. Multi-Flow: meilleure répartition du froid.",'Vue/Affichage/img/articles/frigo/frigo_1.png','Vue/Affichage/img/articles/frigo/frigo_2.png','Vue/Affichage/img/articles/frigo/frigo_3.png','','Haut de gamme','4529.99','3');
INSERT INTO articles(idArticle, numeroIdentification, nomArticle, description, photo1, photo2, photo3, video, categorie, prix, idVendeur) VALUES ('7','70','Casque - Logitech G Pro X - League of Legends Edition',"Son clair et precis : Transducteurs 50mm PRO G avances avec un son clair et precis, avec un rendu des basses ameliore. PRO a conçu des profils EQ à télécharger avec le logiciel Logitech G HUB",'Vue/Affichage/img/articles/casque/casque_1.png','Vue/Affichage/img/articles/casque/casque_2.png','Vue/Affichage/img/articles/casque/casque_3.png','Vue/Affichage/img/articles/Videos/VID_casque.mp4','Regulier','106.47','1');
INSERT INTO articles(idArticle, numeroIdentification, nomArticle, description, photo1, photo2, photo3, video, categorie, prix, idVendeur) VALUES ('8','80','Clavier - Logitech G915 Lightspeed TKL - Switch GL Tactile',"LIGHTSPEED PRO-GRADE SANS FIL : Une performance professionnelle et un taux de rapport de 1 ms. Creez une esthetique epuree et sans fil pour vos stations de combat avec une liberte de gaming ultime",'Vue/Affichage/img/articles/clavier/clavier_1.png','Vue/Affichage/img/articles/clavier/clavier_2.png','Vue/Affichage/img/articles/clavier/clavier_3.png','Vue/Affichage/img/articles/Videos/VID_clavier.mp4','Regulier','157.99','2');
INSERT INTO articles(idArticle, numeroIdentification, nomArticle, description, photo1, photo2, photo3, video, categorie, prix, idVendeur) VALUES ('9','90','Souris - Logitech G502 Lightspeed',"Le design iconique de la souris G502 s'allie à la technologie sans fil professionnelle LIGHTSPEED pour une connectivité ultra-rapide et super fiable. Le capteur HERO 25K dispose d’un suivi au sous-micron pres. Elle est compatible POWERPLAY pour une recharge continue hors utilisation et en jeu.",'Vue/Affichage/img/articles/souris/souris_1.png','Vue/Affichage/img/articles/souris/souris_2.png','Vue/Affichage/img/articles/souris/souris_3.png','Vue/Affichage/img/articles/Videos/VID_souris.mp4','Regulier','159.00','3');
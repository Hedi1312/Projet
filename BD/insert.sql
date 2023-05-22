DELETE FROM site_efrei.utilisateur ;
DELETE FROM site_efrei.identifiants ;


INSERT INTO site_efrei.identifiants(`login`, `password`) VALUES ('hedi@efrei.net','$2y$10$vyFCwdbDgI9XrzJIogw6JOeAOkNuMwhwcL7ymOFavManxEjIIejSq');
INSERT INTO site_efrei.utilisateur (`prenom`, `nom`, `age`, `idLogin`) VALUES ( 'Hedi', 'OKBA', 20, LAST_INSERT_ID() );





DELETE FROM site.utilisateur ;
DELETE FROM site.identifiants ;


INSERT INTO site.identifiants(`login`, `password`) VALUES ('hedi@efrei.net','$2y$10$vyFCwdbDgI9XrzJIogw6JOeAOkNuMwhwcL7ymOFavManxEjIIejSq');
INSERT INTO site.utilisateur (`prenom`, `nom`, `age`, `idLogin`) VALUES ( 'Hedi', 'OKBA', 20, LAST_INSERT_ID() );





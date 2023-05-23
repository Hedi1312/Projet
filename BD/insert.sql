DELETE FROM site_efrei.vendeur ;


-- Mot de passe : Pseudo+1234

INSERT INTO site_efrei.identifiants(`login`, `password`) VALUES ('hedi.okba@efrei.net','$2y$10$XfCW98.cnltHvigdIbokuudnp3D2MiuqiwFxntFtEBdiKq6VnHEn6');
INSERT INTO site_efrei.utilisateur (`typeCompte`, `pseudo`, `idLogin`) VALUES ( 'administrateur', 'Pepito', LAST_INSERT_ID() );

INSERT INTO site_efrei.identifiants(`login`, `password`) VALUES ('hassane.mohamad@efrei.net','$2y$10$xsSSlQx21CY0sUs9SkKgDeKuhjYIGUWYxSiRIWWLCO.ti4SoDc4sW');
INSERT INTO site_efrei.utilisateur (`typeCompte`, `pseudo`, `idLogin`) VALUES ( 'acheteur', 'Hassane', LAST_INSERT_ID() );

INSERT INTO site_efrei.identifiants(`login`, `password`) VALUES ('ilman.al@efrei.net','$2y$10$L5fNRZSv.X05LJfnLOok9ukZ0HrFngl74HLuonoJAUip06C4w9qmy');
INSERT INTO site_efrei.utilisateur (`typeCompte`, `pseudo`, `idLogin`) VALUES ( 'acheteur', 'Ilman', LAST_INSERT_ID() );

INSERT INTO site_efrei.identifiants(`login`, `password`) VALUES ('amir.thabet@efrei.net','$2y$10$bsaCJHwLimnZOIP4FV0OZ.9D52gY67WXJvChoOa.rwjhcMHor/Bja');
INSERT INTO site_efrei.utilisateur (`typeCompte`, `pseudo`, `idLogin`) VALUES ( 'vendeur', 'Amir', LAST_INSERT_ID() );







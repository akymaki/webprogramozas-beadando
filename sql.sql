CREATE DATABASE beadando
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE beadando;

CREATE TABLE felhasznalok (
     id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
     felhasznalo VARCHAR(50) NOT NULL ,
     jelszo VARCHAR(40) NOT NULL ,
     PRIMARY KEY (`id`)
     )
     ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_general_ci;


INSERT INTO felhasznalok (`id`, `felhasznalo`, `jelszo`) VALUES
(0, 'bela', sha1('bela')),
(0, 'jozsi', sha1('jozsi'));


CREATE TABLE uzenetek (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    nev VARCHAR(50) NOT NULL ,
    email VARCHAR(50) NOT NULL ,
    uzenet TEXT NOT NULL ,
    PRIMARY KEY (id)
    )
ENGINE = MyISAM
CHARSET=utf8 COLLATE utf8_general_ci;

INSERT INTO uzenetek (`id`, `nev`, `email`, `uzenet`) VALUES
(0, 'bela', 'bela@bela.hu', 'Ez egy üzenet'),
(0, 'jozsi', 'jozsi@bela.hu', 'Ez kettő üzenet'),
(0, 'peter', 'peter@peter.hu', 'Ez három üzenet'),
(0, 'jalán', 'jalán@jalán.hu', 'Ez négy üzenet');
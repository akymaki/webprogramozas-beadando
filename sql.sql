CREATE DATABASE 'felhasznalok'
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE 'felhasznalok';

CREATE TABLE `beadando`.'felhasznalok' (
    'id' INT unsigned NOT NULL auto_increment,
    'felhasznalo' varchar(50) NOT NULL default '',
    'jelszo' varchar(50) NOT NULL default '',
    PRIMARY KEY ('id')
)
ENGINE= MYISAM

INSERT INTO `felhasznalok`(`id`, `felhasznalo`, `jelszo`) VALUES
(1, 'bela', sha1('bela')),
(2, 'jozsi', sha1('jozsi'))


CREATE TABLE `beadando`.`uzenetek` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    `nev` VARCHAR(50) NOT NULL ,
    `email` VARCHAR(50) NOT NULL ,
    `uzenet` TEXT NOT NULL ,
    PRIMARY KEY (`id`)
    )
ENGINE = MyISAM
CHARSET=utf8 COLLATE utf8_general_ci;

INSERT INTO 'uzenetek' ('id', 'nev', 'email', 'uzenet') VALUES (
(0, 'bela', 'bela@bela.hu', 'Ez egy üzenet'),
(0, 'jozsi', 'jozsi@bela.hu', 'Ez kettő üzenet'),
(0, 'peter', 'peter@peter.hu', 'Ez három üzenet'),
(0, 'jalán', 'jalán@jalán.hu', 'Ez négy üzenet'))
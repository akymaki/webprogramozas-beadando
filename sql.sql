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
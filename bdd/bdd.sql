SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS ARTICLES;
CREATE TABLE ARTICLES (
  ID_ARTICLE int(25) NOT NULL AUTO_INCREMENT,
  TITRE varchar(100) NOT NULL,
  PRIX int(25) NOT NULL,
  DATE datetime NOT NULL,
  REF_TYPE int(11) NOT NULL,
  SHORTDESC varchar(3000) NOT NULL,
  LONGDESC varchar(3000) NOT NULL,
  PRIMARY KEY (ID_ARTICLE),
  KEY TYPE (REF_TYPE),
  CONSTRAINT ARTICLES_ibfk_1 FOREIGN KEY (REF_TYPE) REFERENCES TYPE_ARTICLE (ID_TYPE_ARTICLE)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO ARTICLES (ID_ARTICLE, TITRE, PRIX, DATE, REF_TYPE, SHORTDESC, LONGDESC) VALUES
(1,    'Test',    43,    '2020-02-24 20:17:04',    1,    "petite description à mettre quand on passe la sourie sur l'image du produit dans le catalogue",    'Ceci est une longue description qui s'affiche lorsque l'utilisateur appuie sur un produit du catalogue afin d'obtenir plus de renseignement. Ce champ pourra être découpé en plusieurs autres champs afin d'améliorer le visuel. On y retrouvera les détails techniques par exemple.');

DROP TABLE IF EXISTS IMAGES;
CREATE TABLE IMAGES (
  ID_IMAGE int(11) NOT NULL AUTO_INCREMENT,
  CHEMIN varchar(3000) NOT NULL,
  REF_ARTICLE int(25) NOT NULL,
  PRIMARY KEY (ID_IMAGE),
  KEY REF_ARTICLE (REF_ARTICLE),
  CONSTRAINT IMAGES_ibfk_1 FOREIGN KEY (REF_ARTICLE) REFERENCES ARTICLES (ID_ARTICLE)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS TYPE_ARTICLE;
CREATE TABLE TYPE_ARTICLE (
  ID_TYPE_ARTICLE int(11) NOT NULL,
  NOM_TYPE varchar(100) NOT NULL,
  PRIMARY KEY (ID_TYPE_ARTICLE)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
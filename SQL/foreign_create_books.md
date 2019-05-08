
Concevez une base de données qui pourra être utilisée par un site web de bibliothèque.
Un auteur peut avoir écrit plusieurs livres.

Chaque livre est rangé dans un rayon selon le type d'ouvrage : 'Science-Fiction', 'Références',
'Romans'..
On aura 3 tables, pour les livres, les rayons et les auteurs.

Créez les tables et les relations.
Créez également le diagramme UML de cette base, et ajoutez 5 livres.

À l'aide de PHPMyAdmin, ajoutez quelques livres, auteurs et rayons, ainsi que
les liens entre les différents enregistrements.

SOLUTION SQL 


/**
   Creation des tables 
**/

CREATE TABLE livre
(  
        id INT PRIMARY KEY AUTO_INCREMENT,
        reference VARCHAR(20),
        type VARCHAR(20),
        titre VARCHAR(20)
        id_auteur INT,
        id_rayon INT,
        CONSTRAINT ce_auteur FOREIGN KEY(id_auteur) REFERENCES auteurs(id),
        CONSTRAINT ce_rayon FOREIGN KEY(id_rayon) REFERENCES rayon(id)
)

CREATE TABLE rayon(
       id INT PRIMARY KEY AUTO_INCREMENT,
       Numero_rayon INT
)
CREATE  TABLE  auteurs(
       id INT  PRIMARY KEY  AUTO_INCREMENT ,
       nom VARCHAR(20)
)



/** 

   Insertion des rayons 
**/

INSERT INTO rayon(Numero_rayon) VALUES (1);
INSERT INTO rayon(Numero_rayon) VALUES (2);
INSERT INTO rayon(Numero_rayon) VALUES (3);
INSERT INTO rayon(Numero_rayon) VALUES (4);
INSERT INTO rayon(Numero_rayon) VALUES (5);
INSERT INTO rayon(Numero_rayon) VALUES (6);
INSERT INTO rayon(Numero_rayon) VALUES (7);
INSERT INTO rayon(Numero_rayon) VALUES (8);
INSERT INTO rayon(Numero_rayon) VALUES (9);
INSERT INTO rayon(Numero_rayon) VALUES (10);

 
/** 

   Insertion des auteurs  
**/
INSERT INTO auteurs(nom) VALUES ('Pascal Martin');
INSERT INTO auteurs(nom) VALUES ('Jennifer Marriott');
INSERT INTO auteurs(nom) VALUES ('Cyril Pierre De Geyer');
INSERT INTO auteurs(nom) VALUES ('Jean-Marc Herellier');

INSERT INTO auteurs(nom) VALUES ('Yoran Brault');

INSERT INTO auteurs(nom) VALUES ('Fabien Potencier ');
INSERT INTO auteurs(nom) VALUES ('David Mercer');

INSERT INTO auteurs(nom) VALUES ('Jennifer Marriott');
INSERT INTO auteurs(nom) VALUES ('Jennifer Marriott');
INSERT INTO auteurs(nom) VALUES ('Jennifer Marriott');

/** 

   Insertion dans les livres 
**/

INSERT INTO livre(reference,type,titre,id_auteur,id_rayon) VALUES ("2212143575","Developpement php ","PHP 7 avancé","",1,1);
INSERT INTO livre(reference,type,titre,id_auteur,id_rayon) VALUES ("2744025704 ","CMS ","Joomla",2,2);
INSERT INTO livre(reference,type,titre,id_auteur,id_rayon) VALUES ("2212128002","Developpement php ","Performances PHP",3,3);
INSERT INTO livre(reference,type,titre,id_auteur,id_rayon) VALUES ("274298447X","Developpement php ","Site web marchand en PHP/MySQL",4,4);
INSERT INTO livre(reference,type,titre,id_auteur,id_rayon) VALUES ("2212124651","CMS","Drupal",5,5);
INSERT INTO livre(reference,type,titre,id_auteur,id_rayon) VALUES ("2212124945","Framework","Symfony 1.2",6,6);
INSERT INTO livre(reference,type,titre,id_auteur,id_rayon) VALUES ("2212119321","E-commerce","Réussir son site e-commerce",7,7);

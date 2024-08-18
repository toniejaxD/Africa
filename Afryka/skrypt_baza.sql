CREATE DATABASE afryka;

USE afryka;

CREATE TABLE uzytkownicy (
    id INT NOT NULL AUTO_INCREMENT,
    imie VARCHAR(100) NOT NULL,
    nazwisko VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    haslo VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE typy (
    id INT NOT NULL AUTO_INCREMENT,
    nazwa_typu VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE krolestwa (
    id INT NOT NULL AUTO_INCREMENT,
    nazwa_krolestwa VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE zwierzeta (
    id INT NOT NULL AUTO_INCREMENT,
    nazwa VARCHAR(100) NOT NULL,
    waga DECIMAL,
    id_krolestwa INT NOT NULL,
    id_typu INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_krolestwa) REFERENCES krolestwa(id),
    FOREIGN KEY (id_typu) REFERENCES typy(id)
);


INSERT INTO typy VALUES(NULL, 'miesozerca');
INSERT INTO typy VALUES(NULL, 'roslinozerca');
INSERT INTO typy VALUES(NULL, 'padlinozerca');

INSERT INTO krolestwa VALUES(NULL, 'plaz');
INSERT INTO krolestwa VALUES(NULL, 'gad');
INSERT INTO krolestwa VALUES(NULL, 'ssak');
INSERT INTO krolestwa VALUES(NULL, 'ptak');
INSERT INTO krolestwa VALUES(NULL, 'ryba');
INSERT INTO krolestwa VALUES(NULL, 'bezkręgowiec');

INSERT INTO zwierzeta VALUES(NULL, 'Slon afrykanski', 6000, 3, 1);
INSERT INTO zwierzeta VALUES(NULL, 'Nosorozec bialy', 2300, 3, 1);
INSERT INTO zwierzeta VALUES(NULL, 'Hipopotam nilowy', 1500, 3, 2);
INSERT INTO zwierzeta VALUES(NULL, 'Lew afrykanski', 190, 3, 1);
INSERT INTO zwierzeta VALUES(NULL, 'Afrorudzik', 0.5, 4, 1);
INSERT INTO zwierzeta VALUES(NULL, 'Sep afrykanski', 20, 4, 3);
INSERT INTO zwierzeta VALUES(NULL, 'Zolwiak afrykanski', 80, 2, 1);
INSERT INTO zwierzeta VALUES(NULL, 'Modliszka afrykanska', 0.2, 6, 1);
INSERT INTO zwierzeta VALUES(NULL, 'Blaps binominata', 0.3, 6, 1);
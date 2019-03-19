


CREATE TABLE kategorija(
    sifra_kategorije INTEGER NOT NULL AUTO_INCREMENT,
    naziv VARCHAR(60) NOT NULL,
    PRIMARY KEY(sifra_kategorije)
);


CREATE TABLE proizvod (
    sifra_proizvoda INTEGER NOT NULL AUTO_INCREMENT,
    naziv VARCHAR(60) NOT NULL,
    proizvodjac VARCHAR(60) NOT NULL,
    za_vozila VARCHAR(255) NOT NULL,
    cena FLOAT NOT NULL,
    sifra_kategorije INTEGER,
    PRIMARY KEY(sifra_proizvoda),
    FOREIGN KEY(sifra_kategorije) REFERENCES kategorija(sifra_kategorije)
);


CREATE TABLE uloga (
    sifra_uloge INTEGER NOT NULL AUTO_INCREMENT,
    naziv VARCHAR(60) NOT NULL,
    PRIMARY KEY(sifra_uloge)
);


CREATE TABLE korisnik (
    sifra_korisnika INTEGER NOT NULL AUTO_INCREMENT,
    ime VARCHAR(60) NOT NULL,
    prezime VARCHAR(60) NOT NULL,
    datum_rodjenja VARCHAR(60) NOT NULL,
    korisnicko_ime VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
    sifra VARCHAR(60) NOT NULL,
    pol VARCHAR(7) NOT NULL,
    sifra_uloge INTEGER,
    PRIMARY KEY(sifra_korisnika),
    FOREIGN KEY(sifra_uloge) REFERENCES uloga(sifra_uloge)
);
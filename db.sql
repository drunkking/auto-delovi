


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
    slika VARCHAR(255),
    cena INTEGER NOT NULL,
    sifra_kategorije INTEGER,
    stanje INTEGER,
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
    slika VARCHAR(255),
    datum_rodjenja VARCHAR(60) NOT NULL,
    korisnicko_ime VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
    sifra VARCHAR(60) NOT NULL,
    pol VARCHAR(7) NOT NULL,
    sifra_uloge INTEGER,
    PRIMARY KEY(sifra_korisnika),
    FOREIGN KEY(sifra_uloge) REFERENCES uloga(sifra_uloge)
);

CREATE TABLE narudzbenica (
    sifra_narudzbenice INTEGER NOT NULL AUTO_INCREMENT,
    sifra_interna INTEGER NOT NULL,
    datum_narucivanja DATE NOT NULL,
    sifra_korisnika INTEGER,
    PRIMARY KEY(sifra_narudzbenice),
    FOREIGN KEY(sifra_korisnika) REFERENCES korisnik(sifra_korisnika)
);

CREATE TABLE stavka_narudzbenice (
    sifra_stavke INTEGER NOT NULL AUTO_INCREMENT,
    sifra_narudzbenice INTEGER,
    sifra_proizvoda INTEGER,
    kolicina INTEGER,
    PRIMARY KEY(sifra_stavke),
    FOREIGN KEY(sifra_narudzbenice) REFERENCES narudzbenica(sifra_narudzbenice),
    FOREIGN KEY(sifra_proizvoda) REFERENCES proizvod(sifra_proizvoda)
);
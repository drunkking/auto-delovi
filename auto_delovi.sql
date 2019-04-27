-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 08:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto_delovi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `sifra_kategorije` int(11) NOT NULL,
  `naziv` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`sifra_kategorije`, `naziv`) VALUES
(1, 'Rasveta'),
(2, 'Retrovizori'),
(3, 'Karoserija'),
(4, 'Stakla'),
(5, 'Motor');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `sifra_korisnika` int(11) NOT NULL,
  `ime` varchar(60) NOT NULL,
  `prezime` varchar(60) NOT NULL,
  `slika` varchar(255) DEFAULT NULL,
  `datum_rodjenja` varchar(60) NOT NULL,
  `korisnicko_ime` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `sifra` varchar(60) NOT NULL,
  `pol` varchar(7) NOT NULL,
  `sifra_uloge` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`sifra_korisnika`, `ime`, `prezime`, `slika`, `datum_rodjenja`, `korisnicko_ime`, `email`, `sifra`, `pol`, `sifra_uloge`) VALUES
(2, 'Dusan', 'Kuburic', '07b32365-3f8b-4323-a3f4-baad21ba7e1b.jpg', '1997-04-01', 'dusan97', 'dkdkdkdkdk@gmail.com', '$2y$10$g31XzFJ3KqPLn.A1JGIWSuXWRvqG4CYjna4ln8lYMux9ywC6vOqea', 'MuÅ¡ko', 1),
(3, 'ImeKorisnika', 'PrezimeKorisnika', 'city-minimalism-sv.jpg', '1997-05-05', 'korisnik22', 'asdad23233@mail.ru', '$2y$10$dGbfbwXZdniC5Ke.S5oNC.f/ZH3nriJcc25N8ya6T/yydBQFxPj6O', 'MuÅ¡ko', 2);

-- --------------------------------------------------------

--
-- Table structure for table `narudzbenica`
--

CREATE TABLE `narudzbenica` (
  `sifra_narudzbenice` int(11) NOT NULL,
  `sifra_interna` int(11) NOT NULL,
  `datum_narucivanja` date NOT NULL,
  `sifra_korisnika` int(11) DEFAULT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narudzbenica`
--

INSERT INTO `narudzbenica` (`sifra_narudzbenice`, `sifra_interna`, `datum_narucivanja`, `sifra_korisnika`, `stat`) VALUES
(3, 1405678416, '2019-04-27', 3, 1),
(4, 351702176, '2019-04-27', 2, 0),
(5, 310851732, '2019-04-27', 2, 0),
(6, 1221524993, '2019-04-27', 3, 1),
(7, 605965904, '2019-04-27', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `sifra_proizvoda` int(11) NOT NULL,
  `naziv` varchar(60) NOT NULL,
  `proizvodjac` varchar(60) NOT NULL,
  `za_vozila` varchar(255) NOT NULL,
  `slika` varchar(255) DEFAULT NULL,
  `cena` int(11) NOT NULL,
  `sifra_kategorije` int(11) DEFAULT NULL,
  `stanje` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`sifra_proizvoda`, `naziv`, `proizvodjac`, `za_vozila`, `slika`, `cena`, `sifra_kategorije`, `stanje`) VALUES
(1, 'Far 202309-H - BMW E65/E66 7 05-08', 'Hella', 'BMW 7 Series 2001-2008 (E65/E66)', 'far-202309-h-bmw-e65-e66-7-05-08-ccd08c171997cb8432e85baa81cae5df (1).jpeg', 59904, 1, 10),
(2, 'Far (crni) Mini 10-, Xenon', 'AL', 'Mini Cooper 2010-, Mini One 2010-', 'far-crni-mini-10-xenon-0a21c13b5ff30fab14b156e0a9861f8a.png', 30888, 1, 40),
(3, 'Far (elektriÄni) Mitsubishi L200 05- beli Å¾migavac', 'Depo', 'Mitsubishi L200 2005-2010', 'far-elektricni-mitsubishi-l200-05-beli-zmigavac-8cb9adf28812d6977bfba9402d831f27.jpeg', 8843, 1, 35),
(4, 'Far 13 46 963 - Nissan Pick-up 98', 'Depo', 'Nissan Navara 2002-2005, Nissan Pathfinder 1997-2004, Nissan Pick-Up 1998-2015 (D22-NP300)', 'far-13-46-963-nissan-pick-up-98-48a04c2bb02ce8948d8b780476046a24.jpeg', 7352, 1, 41),
(5, 'Retrovizor (ang. tip) Honda Civic 96- 5V ruÄni', 'View Max', 'Honda Civic 1995-2001, Rover 400 1995-2000', 'retrovizor-ang-tip-honda-civic-96-5v-rucni-de664ec4e7ce037dc6d6e3dbf8317a93.jpeg', 4568, 2, 80),
(6, 'Retrovizor (elektriÄni   crni) Jeep Cherokee/Liberty 01', 'Polcar', 'Jeep Cherokee 2001-2008, Jeep Liberty 2001-2008', 'retrovizor-elektricni-crni-jeep-cherokee-liberty-01-ccd8c85e9b81a9b7b2355b049dc629f8.jpeg', 4060, 2, 23),
(7, 'Retrovizor (elektriÄni) Chevrolet Aveo 03', 'Polcar', 'Chevrolet Aveo 2003-2006, Daewoo Kalos 2003', 'retrovizor-elektricni-chevrolet-aveo-03-e1cc30b031f450b52ce9bb6597ca6e2f.jpeg', 3959, 2, 23),
(8, 'Retrovizor (podesivo) Volkswagen Jetta 10- 9 pinova', 'View Max', 'Volkswagen Jetta 2010', 'retrovizor-podesivo-volkswagen-jetta-10-9-pinova-2892963cf1376418300abe9362efaad7.jpeg', 15228, 2, 38),
(9, 'Hauba motora Peugeot 308 07-13', 'Polcar', 'Peugeot 308 2007-2013', 'hauba-motora-peugeot-308-07-13-099b519d58e44ced885799a611ad9d89.jpeg', 28732, 3, 17),
(10, 'BoÄni nosaÄ branika (pozadi) BMW Serije 5 (E60/61) 03-06', 'Polcar', 'BMW 5 Series 2003-2010 (E60/E61)', 'bocni-nosac-branika-pozadi-bmw-serije-5-e60-61-03-06-f221ccf41f79530ee040292e49fbcb4d.jpeg', 1987, 3, 6),
(11, 'Branik (crni) zadnji Ford Escort 95-99 (kombi)', 'Polcar', 'Ford Escort 1995-2000 (VII)', 'branik-crni-zadnji-ford-escort-95-99-kombi-89cde8404b1f29dc4e88943982c52976.jpeg', 10987, 3, 4),
(12, 'Komplet za popravak mehanizma stakla Fiat Punto 99-10, desno', 'Polcar', 'Fiat Punto 1999-2003, Fiat Punto 2006-2009 (Grande)', 'komplet-za-popravak-mehanizma-stakla-fiat-punto-99-10-desno-f0114d537a9e4738fbe1f40d71ca0e59.png', 762, 3, 18),
(13, 'Donji vezni lim BMW E30 82-90', 'Polcar', 'BMW 3 Series 1983-1994 (E30)', 'donji-vezni-lim-bmw-e30-82-90-f7c54e92d52fa5cd90ed0e4e432742b4.jpeg', 9376, 3, 6),
(14, 'Pumpa (dual) za pranje stakla BMW E36 90-00', 'Polcar', 'BMW 3 Series 1990-1999 (E36 Limo/Wag/Compact), BMW 5 Series 1988-1996 (E34)', 'pumpa-dual-za-pranje-stakla-bmw-e36-90-00-52599281f2c68aed4ac3255bb8706beb.jpeg', 725, 4, 43),
(15, 'Pumpa ranja stakla Hyundai ix55 07-12', 'Polcar', 'Hyundai Grandeur 2005-2011, Hyundai i30 2012-2016, Hyundai ix55 2007-2012, Hyundai Santa Fe 2001-2006, Volvo XC90 2002', 'pumpa-pranja-stakla-hyundai-ix55-07-12-065cf5adc39b2441ac38463b54988f13.jpeg', 1658, 4, 14),
(16, 'Mlaznica za pranje farova B11477 - Å koda, Volkswagen', 'Borsehung', 'Audi A1 2010-2015, Audi A1 2015-, Audi A2 2000-, Audi A3 1996-2003, Audi A3 2003-2008, Audi A3 ', 'mlaznica-za-pranje-farova-b11477-skoda-volkswagen-8bb697ed6f7d825e22e834f1e12da071.jpeg', 1108, 4, 65),
(17, 'Mlaznica za pranje stakla 114275755 - Seat, Å koda, Volkswag', 'Topran', '2016-, Å koda Superb 2008-2013, Å koda Superb 2013-2015, Å koda Yeti 2009-, Volkswagen Amarok 2010-, Volkswagen ', 'mlaznica-za-pranje-stakla-114275755-seat-skoda-volkswagen-ceb77c79d7026e86229e5619553a161a.jpeg', 403, 4, 4),
(18, 'Pumpa visokog pritiska 0261520130 - BMW X6 xDrive 35 i 07-14', 'BOSCH', 'Fiesta 2017-, Ford Focus 2011-2014, Ford Focus 2014-, Ford Galaxy 2006-2015, Ford Kuga 2013', 'pumpa-visokog-pritiska-0261520130-bmw-x6-xdrive-35-i-07-14-e5e1d370b2808c27cd5c98c4d444487f.jpeg', 29937, 5, 15),
(19, 'Alternator Audi A1 10', 'Valeo', 'Audi A1 2015-, Audi A3 2003-2008, Audi A3 2008-2012, Seat Altea 2004-2015, Seat Ibiza 2008-2012, Seat Leon 2005-2012', 'alternator-audi-a1-10-1f69b37fe173d84da2bc425b60c6fd7f.jpeg', 34670, 5, 21),
(20, 'Parkirni senzor Audi, BMW, Peugeot, Land Rover, Seat, Å koda', 'Metzger', 'Audi A6 1997-2001,BMW 3 Series 1999-2003 (E46 Coupe/Cabrio), BMW 3 Series 2001-2005 (E46 Limo/Wagon),Volkswagen Caddy 2004-2010', 'parkirni-senzor-audi-bmw-peugeot-land-rover-seat-skoda-volkswagen-9f8dee3baf415bdc2f5d645357ae8f84.jpeg', 2059, 5, 42),
(21, 'DPF Filter Alfa Romeo GT 03- 2.0 (111kW)', 'Novak IzpuÅ¡ni sistemi', 'Alfa Romeo GT 2003-2010', 'dpf-filter-alfa-romeo-gt-03-20-111kw-61adee5dd188f137175909f2371b29a6.jpeg', 103161, 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `racun`
--

CREATE TABLE `racun` (
  `sifra` int(11) NOT NULL,
  `profit` double NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `racun`
--

INSERT INTO `racun` (`sifra`, `profit`, `vreme`) VALUES
(1, 755.0600000000001, '2019-04-27 02:21:50'),
(2, 10918.16, '2019-04-27 03:20:29'),
(3, 39523.8, '2019-04-27 03:20:29'),
(4, 117603.54000000001, '2019-04-27 03:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `reklamacija`
--

CREATE TABLE `reklamacija` (
  `sifra_reklamacije` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `poruka` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reklamacija`
--

INSERT INTO `reklamacija` (`sifra_reklamacije`, `email`, `poruka`) VALUES
(1, 'sddsadasd@mail.com', 'eqweqweqweq');

-- --------------------------------------------------------

--
-- Table structure for table `stavka_narudzbenice`
--

CREATE TABLE `stavka_narudzbenice` (
  `sifra_stavke` int(11) NOT NULL,
  `sifra_narudzbenice` int(11) DEFAULT NULL,
  `sifra_proizvoda` int(11) DEFAULT NULL,
  `kolicina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stavka_narudzbenice`
--

INSERT INTO `stavka_narudzbenice` (`sifra_stavke`, `sifra_narudzbenice`, `sifra_proizvoda`, `kolicina`) VALUES
(6, 3, 10, 1),
(7, 4, 6, 1),
(8, 5, 10, 3),
(9, 6, 9, 1),
(10, 6, 19, 3),
(11, 6, 21, 3),
(12, 7, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `sifra_uloge` int(11) NOT NULL,
  `naziv` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`sifra_uloge`, `naziv`) VALUES
(1, 'Admin'),
(2, 'Korisnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`sifra_kategorije`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`sifra_korisnika`),
  ADD KEY `sifra_uloge` (`sifra_uloge`);

--
-- Indexes for table `narudzbenica`
--
ALTER TABLE `narudzbenica`
  ADD PRIMARY KEY (`sifra_narudzbenice`),
  ADD KEY `sifra_korisnika` (`sifra_korisnika`);

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`sifra_proizvoda`),
  ADD KEY `sifra_kategorije` (`sifra_kategorije`);

--
-- Indexes for table `racun`
--
ALTER TABLE `racun`
  ADD PRIMARY KEY (`sifra`);

--
-- Indexes for table `reklamacija`
--
ALTER TABLE `reklamacija`
  ADD PRIMARY KEY (`sifra_reklamacije`);

--
-- Indexes for table `stavka_narudzbenice`
--
ALTER TABLE `stavka_narudzbenice`
  ADD PRIMARY KEY (`sifra_stavke`),
  ADD KEY `sifra_narudzbenice` (`sifra_narudzbenice`),
  ADD KEY `sifra_proizvoda` (`sifra_proizvoda`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`sifra_uloge`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `sifra_kategorije` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `sifra_korisnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `narudzbenica`
--
ALTER TABLE `narudzbenica`
  MODIFY `sifra_narudzbenice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `sifra_proizvoda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `racun`
--
ALTER TABLE `racun`
  MODIFY `sifra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reklamacija`
--
ALTER TABLE `reklamacija`
  MODIFY `sifra_reklamacije` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stavka_narudzbenice`
--
ALTER TABLE `stavka_narudzbenice`
  MODIFY `sifra_stavke` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `sifra_uloge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`sifra_uloge`) REFERENCES `uloga` (`sifra_uloge`);

--
-- Constraints for table `narudzbenica`
--
ALTER TABLE `narudzbenica`
  ADD CONSTRAINT `narudzbenica_ibfk_1` FOREIGN KEY (`sifra_korisnika`) REFERENCES `korisnik` (`sifra_korisnika`);

--
-- Constraints for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD CONSTRAINT `proizvod_ibfk_1` FOREIGN KEY (`sifra_kategorije`) REFERENCES `kategorija` (`sifra_kategorije`);

--
-- Constraints for table `stavka_narudzbenice`
--
ALTER TABLE `stavka_narudzbenice`
  ADD CONSTRAINT `stavka_narudzbenice_ibfk_1` FOREIGN KEY (`sifra_narudzbenice`) REFERENCES `narudzbenica` (`sifra_narudzbenice`),
  ADD CONSTRAINT `stavka_narudzbenice_ibfk_2` FOREIGN KEY (`sifra_proizvoda`) REFERENCES `proizvod` (`sifra_proizvoda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

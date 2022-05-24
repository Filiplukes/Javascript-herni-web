-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 22. čen 2021, 20:42
-- Verze serveru: 10.4.19-MariaDB
-- Verze PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `herniweb`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `flappy`
--

CREATE TABLE `flappy` (
  `flappy_id` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `uzivatel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `flappy`
--

INSERT INTO `flappy` (`flappy_id`, `score`, `uzivatel_id`) VALUES
(1, 1, 1),
(2, 181, 1),
(3, 0, 1),
(4, 0, 1),
(5, 8, 1),
(6, 181, 8),
(7, 911, 8),
(8, 181, 8),
(9, 1542, 4),
(10, 269, 4),
(11, 181, 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `padacimic`
--

CREATE TABLE `padacimic` (
  `padacimic_id` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `uzivatel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `padacimic`
--

INSERT INTO `padacimic` (`padacimic_id`, `score`, `uzivatel_id`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 4),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `skakacka`
--

CREATE TABLE `skakacka` (
  `skakacka_id` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `uzivatel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `skakacka`
--

INSERT INTO `skakacka` (`skakacka_id`, `score`, `uzivatel_id`) VALUES
(1, 185, 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatele`
--

CREATE TABLE `uzivatele` (
  `uzivatele_id` int(11) NOT NULL,
  `jmeno` varchar(80) COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(80) COLLATE utf8_czech_ci NOT NULL,
  `datum_narozeni` date NOT NULL,
  `pocet_her` int(11) DEFAULT 0,
  `login` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `heslo` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `admin` int(1) DEFAULT 0,
  `email` varchar(80) COLLATE utf8_czech_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `uzivatele`
--

INSERT INTO `uzivatele` (`uzivatele_id`, `jmeno`, `prijmeni`, `datum_narozeni`, `pocet_her`, `login`, `heslo`, `admin`, `email`) VALUES
(1, 'Filip Lukeš', 'asd', '2020-10-20', 0, 'asd', '7815696ecbf1c96e6894b779456d330e', 0, 'lukes90@seznam.cz'),
(2, 'b', 'b', '2010-10-10', 0, 'b', '92eb5ffee6ae2fec3ad71c777531578f', 0, 'lukes90@seznam.cz'),
(3, 'c', 'c', '2010-10-20', 0, 'c', '4a8a08f09d37b73795649038408b5f33', 0, 'lukes90@seznam.cz'),
(4, 'a', 'a', '0000-00-00', 0, 'a', '0cc175b9c0f1b6a831c399e269772661', 0, 'lukes90@seznam.cz'),
(5, 'Filip Lukeš', 'Lukeš', '1995-10-20', 0, 'test', '098f6bcd4621d373cade4e832627b4f6', 0, 'lukes90@seznam.cz'),
(6, 'v', 'v', '1995-10-23', 0, 'v', '9e3669d19b675bd57058fd4664205d2a', 0, 'lukes90@seznam.cz'),
(7, 'ac', 'ac', '0000-00-00', 0, 'ac', 'e2075474294983e013ee4dd2201c7a73', 0, 'lukes90@seznam.cz'),
(8, 'abcd', '', '0000-00-00', 0, 'abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 0, 'lukes90@seznam.cz');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `flappy`
--
ALTER TABLE `flappy`
  ADD PRIMARY KEY (`flappy_id`),
  ADD KEY `uzivatel_id` (`uzivatel_id`);

--
-- Indexy pro tabulku `padacimic`
--
ALTER TABLE `padacimic`
  ADD PRIMARY KEY (`padacimic_id`),
  ADD KEY `uzivatel_id` (`uzivatel_id`);

--
-- Indexy pro tabulku `skakacka`
--
ALTER TABLE `skakacka`
  ADD PRIMARY KEY (`skakacka_id`),
  ADD KEY `uzivatel_id` (`uzivatel_id`);

--
-- Indexy pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  ADD PRIMARY KEY (`uzivatele_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `flappy`
--
ALTER TABLE `flappy`
  MODIFY `flappy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pro tabulku `padacimic`
--
ALTER TABLE `padacimic`
  MODIFY `padacimic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pro tabulku `skakacka`
--
ALTER TABLE `skakacka`
  MODIFY `skakacka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  MODIFY `uzivatele_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `flappy`
--
ALTER TABLE `flappy`
  ADD CONSTRAINT `flappy_ibfk_1` FOREIGN KEY (`uzivatel_id`) REFERENCES `uzivatele` (`uzivatele_id`) ON DELETE CASCADE;

--
-- Omezení pro tabulku `padacimic`
--
ALTER TABLE `padacimic`
  ADD CONSTRAINT `padacimic_ibfk_1` FOREIGN KEY (`uzivatel_id`) REFERENCES `uzivatele` (`uzivatele_id`) ON DELETE CASCADE;

--
-- Omezení pro tabulku `skakacka`
--
ALTER TABLE `skakacka`
  ADD CONSTRAINT `skakacka_ibfk_1` FOREIGN KEY (`uzivatel_id`) REFERENCES `uzivatele` (`uzivatele_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

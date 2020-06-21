-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: 23178.m.tld.pl
-- Czas generowania: 21 Cze 2020, 02:13
-- Wersja serwera: 5.7.28-31-log
-- Wersja PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza23178_op`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Homework_Wyspian`
--

CREATE TABLE `Homework_Wyspian` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `przedmiot` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `klasa` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `nauczyciel` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `data` datetime NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `Homework_Wyspian`
--

INSERT INTO `Homework_Wyspian` (`id`, `nazwa`, `przedmiot`, `klasa`, `nauczyciel`, `data`, `status`) VALUES
(1, 'test.jpg', 'Geografia', '1AG', 'admin', '0000-00-00 00:00:00', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Homework_Wyspian`
--
ALTER TABLE `Homework_Wyspian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nazwa` (`nazwa`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `Homework_Wyspian`
--
ALTER TABLE `Homework_Wyspian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2331;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: 23178.m.tld.pl
-- Czas generowania: 21 Cze 2020, 02:17
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
-- Struktura tabeli dla tabeli `Wyspian20`
--

CREATE TABLE `Wyspian20` (
  `Id` int(100) NOT NULL,
  `Subject` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `Class` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `Teacher_name` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `Password` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `Email` varchar(300) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `Wyspian20`
--

INSERT INTO `Wyspian20` (`Id`, `Subject`, `Class`, `Teacher_name`, `Password`, `Email`) VALUES
(0, 'Geografia', '1B,1D,1E,1F,1CG,1AG,1BG,1EG,2B,3B', 'admin', 'Geografia20', 'patpij2@gmail.com'),
(1, 'Matematyka', '1AG,1F,2F,3A', 'admin-mat', 'Matematyka20', 'wyspiansmatma@gmail.com'),
(2, 'J.Polski', '2E,2F,3E', 'adminsm-pol', 'Polski20', 'wyspiansmpolski@gmail.com'),
(3, 'J.Polski', '1C,1BG,1EG,3B,3F', 'adminmc-pol', 'Polski20', 'wyspiancmpolski@gmail.com'),
(4, 'Matematyka', '2B,1B,1C,3B', 'adminjj-mat', 'Matematyka20', 'wyspianjjmatma@gmail.com'),
(5, 'Hiszpański', 'HG11,HG12,H11,H12,H13', 'adminer-hiszp', 'Hiszpanski20', 'wyspianshiszpan@gmail.com'),
(6, 'Biologia', '2F,1D,3C,1EG,1CG', 'adminme-bio', 'Biologia20', 'wyspiansbiologia@gmail.com'),
(7, 'Hiszpański', 'HG13', 'adminkl-hiszp', 'Hiszpanski20', 'wyspianklhiszpan@gmail.com'),
(8, 'Angielski', '1AG,1CG,1C,2A,2C,3B', 'adminkd-ang', 'Angielski20', 'wyspiankdang@gmail.com'),
(9, 'Informatyka', '1A,1B,1C,1D', 'test', 'test', ''),
(10, 'PP', '1A,1C,1AG,1BG,1CG,1EG,3B', 'admin-pp', 'Przedsiebiorczosc20', 'wyspianspp@gmail.com'),
(11, 'Chemia', '2F,1D,3C,1AG,1E,1B,1C,1EG,1CG,1BG,1F,1A', 'adminec-chem', 'Chemia20', 'wyspianschemia@gmail.com'),
(12, 'Matematyka', '1D,1BG,3C,3E,3F', 'adminab-mat', 'Matematyka20', 'Nic'),
(12, 'Fizyka', '3A,1C,1E,1A,2C,1B,1EG,1F,1D,1AG,1BG,1CG', 'admindg-fiz', 'Fizyka20wyspian', 'wyspiansfizyka@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

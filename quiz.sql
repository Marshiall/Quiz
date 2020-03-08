-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Mar 2020, 14:55
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `quiz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `quiz_list`
--

CREATE TABLE `quiz_list` (
  `ID` int(11) NOT NULL,
  `pytanie` text COLLATE utf8_polish_ci NOT NULL,
  `odp1` text COLLATE utf8_polish_ci NOT NULL,
  `odp2` text COLLATE utf8_polish_ci NOT NULL,
  `odp3` text COLLATE utf8_polish_ci NOT NULL,
  `odp4` text COLLATE utf8_polish_ci NOT NULL,
  `odp` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `quiz_list`
--

INSERT INTO `quiz_list` (`ID`, `pytanie`, `odp1`, `odp2`, `odp3`, `odp4`, `odp`) VALUES
(1, 'Który piłkarz zdobył złotą piłkę?', 'Lionel Messi', 'Robert Lewandowski', 'Jakub Błaszczykowski', 'Andreas Iniesta', 'odp1');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `quiz_list`
--
ALTER TABLE `quiz_list`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `quiz_list`
--
ALTER TABLE `quiz_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

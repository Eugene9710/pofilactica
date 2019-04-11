-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 11 2019 г., 09:53
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `liceisystem`
--

-- --------------------------------------------------------

--
-- Структура таблицы `classrooms`
--

CREATE TABLE `classrooms` (
  `NomerClass` int(11) NOT NULL,
  `FloorClass` int(11) NOT NULL,
  `Whiteboard` varchar(100) NOT NULL DEFAULT 'Нет',
  `Screen` varchar(100) DEFAULT NULL,
  `TV` varchar(100) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `classrooms`
--

INSERT INTO `classrooms` (`NomerClass`, `FloorClass`, `Whiteboard`, `Screen`, `TV`, `Description`) VALUES
(1, 1, 'no', 'have (small)', 'no', ''),
(7, 1, 'no', 'no', 'have', ''),
(10, 0, 'no', 'no', 'no', 'prolyceum'),
(20, 0, 'no', 'no', 'no', 'prolyceum'),
(30, 0, 'no', 'no', 'no', 'prolyceum'),
(40, 0, 'no', 'no', 'no', 'prolyceum'),
(70, 0, 'no', 'no', 'no', 'prolyceum'),
(80, 0, 'no', 'no', 'no', 'prolyceum'),
(111, 1, '', '', '', ''),
(112, 1, 'have', 'no', 'no', ''),
(113, 1, 'no', 'have', 'no', ''),
(114, 1, 'no', 'have (small)', 'no', ''),
(115, 1, '', '', '', ''),
(116, 1, 'no (under the marker)', 'no', 'Sharp', ''),
(117, 1, 'no (under the marker)', 'no', 'no', ''),
(121, 2, 'n', '', '', ''),
(122, 2, '(for chalk)', '', '', ''),
(123, 2, '', '', '', ''),
(124, 2, '', '', '', ''),
(125, 2, 'Smart board (+ under the marker)', '', '', ''),
(126, 2, '(for chalk)', '', '', ''),
(127, 2, 'no (under the marker)', 'no', 'no', ''),
(131, 3, 'no', 'no', 'no', ''),
(132, 3, 'Smart Board', 'no', 'no', ''),
(133, 3, 'no (for chalk)', 'no', 'no', ''),
(134, 3, 'no (under the marker)', 'no', 'yes', ''),
(135, 3, 'no (under the marker)', 'no', 'no', ''),
(136, 3, 'no (under the marker)', 'no', 'no', ''),
(137, 3, 'no', 'no', 'Rubin (\nvideo tape recorder)', ''),
(138, 3, '', '', 'yes', ''),
(211, 1, 'no (under the marker)', 'no', 'no', ''),
(212, 1, 'no', 'yes', 'no', ''),
(213, 1, '', '', '', ''),
(214, 1, 'no', 'no', 'yes', ''),
(215, 1, 'no', 'no', 'no', ''),
(221, 2, '', '', '', ''),
(222, 2, '', '', '', ''),
(223, 2, '', '', '', ''),
(224, 2, '(for chalk)', '', '', ''),
(225, 2, '(for chalk)', '', '', ''),
(226, 2, 'no (under the marker)', '', '', ''),
(227, 2, 'no (under the marker)', 'no', 'no', ''),
(231, 3, 'smart board', '', '', ''),
(232, 3, 'smart board DViT', '', '', ''),
(233, 3, 'smart board DViT', '', '', ''),
(234, 3, 'Smart Board HITACHI', 'no', 'no', ''),
(235, 3, 'Smart Board', '', 'no', ''),
(236, 3, 'smart board DViT', 'no', 'no', ''),
(237, 3, 'smart board DViT', 'no', 'no', ''),
(238, 3, 'no (under the marker?)', 'no', 'no', '');

-- --------------------------------------------------------

--
-- Структура таблицы `pc`
--

CREATE TABLE `pc` (
  `pcId` int(11) NOT NULL,
  `NomerPC` int(20) DEFAULT NULL,
  `Accessories` varchar(1000) DEFAULT NULL,
  `DescriptionPC` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `preventivew_work`
--

CREATE TABLE `preventivew_work` (
  `pwId` int(11) NOT NULL,
  `NomerClass` int(11) NOT NULL,
  `NamePW` varchar(100) NOT NULL,
  `DateWork` date NOT NULL,
  `DescriptionPW` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `preventivew_work`
--

INSERT INTO `preventivew_work` (`pwId`, `NomerClass`, `NamePW`, `DateWork`, `DescriptionPW`) VALUES
(1, 111, 'продувка', '2019-03-01', 'Продут системный блок'),
(4, 121, 'От вирусов', '2019-04-04', 'Проверил комп от вирусов');

-- --------------------------------------------------------

--
-- Структура таблицы `projector`
--

CREATE TABLE `projector` (
  `ProjectorId` int(11) NOT NULL,
  `NameProjector` varchar(50) NOT NULL,
  `NomerProjector` int(20) DEFAULT NULL,
  `TimeWork` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `transfer_pc`
--

CREATE TABLE `transfer_pc` (
  `TransferPCId` int(11) NOT NULL,
  `pcId` int(11) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `NamePC` varchar(10) DEFAULT NULL,
  `TransferDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `transfer_projector`
--

CREATE TABLE `transfer_projector` (
  `TransferProjectorId` int(11) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `ProjectorId` int(11) NOT NULL,
  `TransferDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`NomerClass`);

--
-- Индексы таблицы `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`pcId`);

--
-- Индексы таблицы `preventivew_work`
--
ALTER TABLE `preventivew_work`
  ADD PRIMARY KEY (`pwId`);

--
-- Индексы таблицы `projector`
--
ALTER TABLE `projector`
  ADD PRIMARY KEY (`ProjectorId`);

--
-- Индексы таблицы `transfer_pc`
--
ALTER TABLE `transfer_pc`
  ADD PRIMARY KEY (`TransferPCId`);

--
-- Индексы таблицы `transfer_projector`
--
ALTER TABLE `transfer_projector`
  ADD PRIMARY KEY (`TransferProjectorId`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pc`
--
ALTER TABLE `pc`
  MODIFY `pcId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `preventivew_work`
--
ALTER TABLE `preventivew_work`
  MODIFY `pwId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `projector`
--
ALTER TABLE `projector`
  MODIFY `ProjectorId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `transfer_pc`
--
ALTER TABLE `transfer_pc`
  MODIFY `TransferPCId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `transfer_projector`
--
ALTER TABLE `transfer_projector`
  MODIFY `TransferProjectorId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

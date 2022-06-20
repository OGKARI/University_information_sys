-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 20 2022 г., 12:22
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practice`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authorization`
--

CREATE TABLE `authorization` (
  `ID_Authorization` int(11) NOT NULL,
  `Login` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ID_Role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `authorization`
--

INSERT INTO `authorization` (`ID_Authorization`, `Login`, `Password`, `ID_Role`) VALUES
(3, 'aryukov@gmail.com', '1234', 3),
(4, 'prof@gmail.com', '1234', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE `department` (
  `ID_Department` int(11) NOT NULL,
  `Name_of_the_department` varchar(200) DEFAULT NULL,
  `ID_Specialization` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`ID_Department`, `Name_of_the_department`, `ID_Specialization`) VALUES
(5, '09.02.07 «Информационные системы и программирование»\r\n', 5),
(6, '09.02.06 «Сетевое и системное администрирование»', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `education`
--

CREATE TABLE `education` (
  `ID_Education` int(11) NOT NULL,
  `Type_of_education` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `education`
--

INSERT INTO `education` (`ID_Education`, `Type_of_education`) VALUES
(1, 'Высшее'),
(2, 'Среднее спициальное'),
(4, 'ФГБОУ ВО \"РЭУ им .Г.В. Плеханова\" Московский приборостроительный техникум, 2020г., специальность: Прикладная информатика (по отраслям); квалификация: техник программист.');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `ID_Feedback` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` int(16) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `messege` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`ID_Feedback`, `name`, `phone`, `mail`, `messege`) VALUES
(1, 'asdf', 0, 'afadf@ads', 'adfaf'),
(2, 'asdad', 213132, 'adsda@sdasd', 'asdads'),
(3, 'фвфыв', 12312, '222@asdad', 'asda'),
(4, 'фывфы', 123123, 'asdad@adasd', 'asdad'),
(5, 'asdasd', 1231, 'aryukov@adasd', 'adasd'),
(6, 'asdas', 123, 'asdds@a', 'asdasdasdasd'),
(7, 'asdasd', 12313, 'asdadaaa@asdad', 'adsada'),
(8, 'asdasd', 1231, 'adad@asdasd', 'asdads'),
(9, 'asdasd', 123, 'AD@asd', 'asda'),
(10, 'asdas', 1231, 'asda@ads', 'asdad'),
(11, 'asdas', 1231, 'asda@ads', 'asdad'),
(12, 'asdasd', 1231, 'asd@asda', 'adsdad'),
(13, 'фвыв', 0, 'dasDas@sd', 'фывфыв');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `ID_Groups` int(11) NOT NULL,
  `Group_namber` char(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`ID_Groups`, `Group_namber`) VALUES
(1, 'ВД50-2-19'),
(2, 'ВД50-1-19');

-- --------------------------------------------------------

--
-- Структура таблицы `professor`
--

CREATE TABLE `professor` (
  `ID_Professor` int(11) NOT NULL,
  `Professor_name` varchar(200) DEFAULT NULL,
  `Last_name_professor` varchar(200) DEFAULT NULL,
  `Middle_name_professor` varchar(200) DEFAULT NULL,
  `Work_experience` varchar(200) DEFAULT NULL,
  `Teaching_experience` varchar(200) DEFAULT NULL,
  `College_work_experience` varchar(200) DEFAULT NULL,
  `photo` varchar(128) NOT NULL,
  `position` varchar(128) NOT NULL,
  `ID_Authorization` int(11) NOT NULL,
  `ID_Education` int(11) NOT NULL,
  `ID_Tables_by_roles` int(11) NOT NULL,
  `Disciplins` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `professor`
--

INSERT INTO `professor` (`ID_Professor`, `Professor_name`, `Last_name_professor`, `Middle_name_professor`, `Work_experience`, `Teaching_experience`, `College_work_experience`, `photo`, `position`, `ID_Authorization`, `ID_Education`, `ID_Tables_by_roles`, `Disciplins`) VALUES
(2, 'Екатерина', 'Кретова', 'Максимовна', '2020г.', '2020г.', '2020г.', '../img/prepod/Ellipse.png', 'Преподователь', 4, 4, 5, 'МДК.05.01 Проектирование и дизайн информационных систем, МДК.08.02 Графический дизайн и мультимедиа, Учебная практика, Производственная практика');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `ID_Role` int(11) NOT NULL,
  `Role_name` varchar(100) NOT NULL,
  `Access level` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`ID_Role`, `Role_name`, `Access level`) VALUES
(3, 'Студент', 10),
(4, 'Преподаватель', 20),
(5, 'Администратор', 100);

-- --------------------------------------------------------

--
-- Структура таблицы `specialization`
--

CREATE TABLE `specialization` (
  `ID_Specialization` int(11) NOT NULL,
  `Name_of_the_specialty` varchar(200) DEFAULT NULL,
  `ID_Groups` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `specialization`
--

INSERT INTO `specialization` (`ID_Specialization`, `Name_of_the_specialty`, `ID_Groups`) VALUES
(4, '09.02.06 Сетевое и системное администрирование\r\n', 2),
(5, '09.02.07(БД) Информационные системы и программирование \r\n- Администратор баз данных', 2),
(6, '09.02.07(ВД) Информационные системы и программирование \r\n- Разработчик веб приложений', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `ID_Student` int(11) NOT NULL,
  `Last_name_student` varchar(200) DEFAULT NULL,
  `Student_name` varchar(200) DEFAULT NULL,
  `Middle_name_students` varchar(200) DEFAULT NULL,
  `photo` varchar(128) NOT NULL,
  `ID_Authorization` int(11) NOT NULL,
  `ID_Department` int(11) NOT NULL,
  `ID_Tables_by_roles` int(11) NOT NULL,
  `ID_specialization` int(11) NOT NULL,
  `ID_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`ID_Student`, `Last_name_student`, `Student_name`, `Middle_name_students`, `photo`, `ID_Authorization`, `ID_Department`, `ID_Tables_by_roles`, `ID_specialization`, `ID_group`) VALUES
(3, 'Арюков', 'Александр', 'Дмитриевич', '../img/personal/Ellipse.svg', 3, 5, 6, 6, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tables_by_roles`
--

CREATE TABLE `tables_by_roles` (
  `ID_Tables_by_roles` int(11) NOT NULL,
  `Page_code` int(64) NOT NULL,
  `Link_table` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tables_by_roles`
--

INSERT INTO `tables_by_roles` (`ID_Tables_by_roles`, `Page_code`, `Link_table`) VALUES
(5, 0, '1Cr9jDCE-rY4dAQlQ2dQNTaYbFVmJFoqLnu0aXDwXEss'),
(6, 400007935, '1Cr9jDCE-rY4dAQlQ2dQNTaYbFVmJFoqLnu0aXDwXEss');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authorization`
--
ALTER TABLE `authorization`
  ADD PRIMARY KEY (`ID_Authorization`),
  ADD KEY `ID_Tables_by_roles` (`ID_Role`),
  ADD KEY `ID_Role` (`ID_Role`);

--
-- Индексы таблицы `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID_Department`),
  ADD KEY `ID_Specialization` (`ID_Specialization`);

--
-- Индексы таблицы `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`ID_Education`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID_Feedback`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`ID_Groups`);

--
-- Индексы таблицы `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`ID_Professor`),
  ADD KEY `ID_Authorization` (`ID_Authorization`,`ID_Education`),
  ADD KEY `ID_Education` (`ID_Education`),
  ADD KEY `ID_Tables_by_roles` (`ID_Tables_by_roles`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID_Role`);

--
-- Индексы таблицы `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`ID_Specialization`),
  ADD KEY `ID_Groups` (`ID_Groups`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID_Student`),
  ADD KEY `ID_Authorization` (`ID_Authorization`,`ID_Department`),
  ADD KEY `ID_Department` (`ID_Department`),
  ADD KEY `ID_Tables_by_roles` (`ID_Tables_by_roles`),
  ADD KEY `ID_specialization` (`ID_specialization`),
  ADD KEY `ID_group` (`ID_group`);

--
-- Индексы таблицы `tables_by_roles`
--
ALTER TABLE `tables_by_roles`
  ADD PRIMARY KEY (`ID_Tables_by_roles`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authorization`
--
ALTER TABLE `authorization`
  MODIFY `ID_Authorization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `department`
--
ALTER TABLE `department`
  MODIFY `ID_Department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `education`
--
ALTER TABLE `education`
  MODIFY `ID_Education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID_Feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `ID_Groups` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `professor`
--
ALTER TABLE `professor`
  MODIFY `ID_Professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `ID_Role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `specialization`
--
ALTER TABLE `specialization`
  MODIFY `ID_Specialization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `ID_Student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tables_by_roles`
--
ALTER TABLE `tables_by_roles`
  MODIFY `ID_Tables_by_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `authorization`
--
ALTER TABLE `authorization`
  ADD CONSTRAINT `authorization_ibfk_1` FOREIGN KEY (`ID_Role`) REFERENCES `role` (`ID_Role`);

--
-- Ограничения внешнего ключа таблицы `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`ID_Specialization`) REFERENCES `specialization` (`ID_Specialization`);

--
-- Ограничения внешнего ключа таблицы `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`ID_Authorization`) REFERENCES `authorization` (`ID_Authorization`),
  ADD CONSTRAINT `professor_ibfk_2` FOREIGN KEY (`ID_Education`) REFERENCES `education` (`ID_Education`),
  ADD CONSTRAINT `professor_ibfk_3` FOREIGN KEY (`ID_Tables_by_roles`) REFERENCES `tables_by_roles` (`ID_Tables_by_roles`);

--
-- Ограничения внешнего ключа таблицы `specialization`
--
ALTER TABLE `specialization`
  ADD CONSTRAINT `specialization_ibfk_2` FOREIGN KEY (`ID_Groups`) REFERENCES `groups` (`ID_Groups`);

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`ID_Department`) REFERENCES `department` (`ID_Department`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`ID_Authorization`) REFERENCES `authorization` (`ID_Authorization`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`ID_Tables_by_roles`) REFERENCES `tables_by_roles` (`ID_Tables_by_roles`),
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`ID_specialization`) REFERENCES `specialization` (`ID_Specialization`),
  ADD CONSTRAINT `student_ibfk_5` FOREIGN KEY (`ID_group`) REFERENCES `groups` (`ID_Groups`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

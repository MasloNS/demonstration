-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 23 2022 г., 22:48
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bikes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bicycles`
--

CREATE TABLE `bicycles` (
  `id` int(11) UNSIGNED NOT NULL,
  `img_path` varchar(50) NOT NULL DEFAULT 'no_ing.png',
  `name` varchar(50) NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `bicycles`
--

INSERT INTO `bicycles` (`id`, `img_path`, `name`, `id_type`, `description`, `cost`) VALUES
(1, 'stark-tank-29.jpg', 'Stark Tank 29.1 D Steel', 1, 'Горный велосипед Stark Tank 29.1 D Steel (2022) относится к категории велосипедов высокой прочности.', 21670),
(2, 'forward-flash-29.jpg', 'Forward Flash 26 2.2 D', 1, 'Горный велосипед Forward Flash 26 2.2 D (2022) – легкая в управлении модель класса хардтейл, которая подарит вам истинное наслаждение своим богатым функционалом.', 15920),
(3, 'aspect-air-27.jpg', 'Aspect Air 27.5', 1, 'Aspect Air 27.5 (2022) разработан с учётом всех современных технологий. Велосипед укомплектован стандартным уровнем оборудования.', 48990),
(4, 'forward-sporting-29xxd.jpg', 'Forward Sporting 29 XX D', 1, 'Горный велосипед Forward Sporting 29 XX D (2022) – ваш выбор, если вы хотите исследовать новые места и ездить по дорогам любого типа. Универсальное спортивное седло позволит избежать дискомфорта и натирания.', 26990),
(5, 'stark-madness-bmx-5.jpg', 'Stark Madness BMX 5', 2, 'Этот велосипед Stark Madness BMX 5 (2022) произведен специально для катания в стиле BMX. В конструкции байка присутствуют ободные механические тормоза Tektro U-983R, которые не подведут даже в плохую и «некатабельную» погоду. ', 23720),
(6, 'forward-zigzag-20.jpg', 'Forward Zigzag 20', 2, 'Forward Zigzag 20 (2022) – это современная и стильная модель BMX. Мощная стальная рама Hi-Ten выдерживает большие нагрузки. Модель оснащена удобной жёсткой вилкой Hi-Ten.', 26630),
(7, 'scott-voltage-yz.jpg', 'Scott Voltage YZ 0.1', 2, 'Экстремальный велосипед Scott Voltage YZ 0.1 (2022) предназначенный для райдеров, увлекающихся катанием в экстремальных стилях. Система SCOTT Cr-Mo 3-piece cranks 170mm выдерживает значительную нагрузку и оптимальна при интенсивном катании.', 153400),
(8, 'haro-[arkway.jpg', 'Haro Parkway', 2, 'Велосипед Haro Parkway (2022) для выполнения трюков и катания в стиле BMX. Ободные механические тормоза 990, U-Brake отвечают за быструю блокировку колес даже на мокром асфальте. ', 21200),
(9, 'schwinn-koen.jpg', 'Schwinn Koen 20', 3, 'Schwinn Koen 20 (2022) – это велосипед, сконструированный для детей, возраст которых 5-9 лет. Рама Schwinn Kids Smart Start, steel изготовлена из стали, поэтому её выносливость находится на очень высоким уровне.', 16650),
(10, 'novatrack-wind-16.jpg', 'Novatrack Wind 16', 3, 'Детский велосипед Novatrack Wind 16\" (2022) станет надежным спутником ребёнка в весёлых играх и поездках с родителями и друзьями.', 7560),
(11, 'aspect-galaxy.jpg', 'Aspect Galaxy', 3, 'Aspect Galaxy (2022) создан, чтобы подарить малышу активное детство! У модели есть задний переключатель Shimano Tourney RD-TY21.', 22990),
(12, 'format-7414.jpg', 'Format 7414', 3, 'Детский велосипед Format 7414 (2022) обязательно придется по душе юному райдеру. Рама 20\", Junior, алюминиевый сплав 6061 отличается высокой сбалансированностью конструкции.', 30990),
(13, 'stinger-stream-pro.jpg', 'Stinger Stream Pro', 4, 'Шоссейный велосипед Stinger Stream Pro (2021) поразит Вас своей динамичностью и возможностями на дороге.', 109700),
(14, 'giant-revolt-2.jpg', 'Giant Revolt 2', 4, 'Стильный гоночный байк Giant Revolt 2 (2022), оснащенный высококачественными рамой и компонентами. Предусмотрен задний переключатель Shimano Sora, long cage. Трансмиссия с шатунами FSA Vero Pro, 32/48 обладает большим запасом прочности.', 134990),
(15, 'forward-impulse-28.jpg', 'Forward Impulse 28', 4, 'Модель Forward Impulse 28 (2022) впечатляет достойными характеристиками для покорения скоростных рекордов.', 38600),
(16, 'cube-attain-sl.jpg', 'Cube Attain SL', 4, 'Шоссейная модель Cube Attain SL (2022) – харизматичный велосипед с великолепной управляемостью и продуманной конструкцией, позволяющей быстро разгоняться и поддерживать высокую скорость.', 263400),
(17, 'volteco-flex.jpg', 'Volteco Flex', 5, 'Volteco Flex (2020) - базовый городской электровелосипед, сочетающий в себе актуальные решения конструкции, дизайна, компактных габаритов и современного электрооборудования.', 62815),
(18, 'scott-addict-eride-20.jpg', 'Scott Addict eRide 20', 5, 'По-настоящему \"заряженный\" велосипед - Scott Addict eRide 20. Компоновка и геометрия велосипеда располагает к тренировочному и спортивному катанию, а электрооборудование позволит не замечать никаких преград и достигать наивысших достижений.', 710440),
(19, 'eltreco-ultra-walter.jpg', 'Eltreco Ultra Walter', 5, 'Eltreco Ultra Walter (2022) предназначен для катания по асфальту. Вилка создаёт хорошую управляемость. Модель седла выполнена с учётом инновационных разработок. Поскольку модель оснащена прочными ободами, вы защищены от рисков образования «восьмерок».', 74990),
(20, 'volteco-cyber.jpg', 'Volteco Cyber', 5, 'Складной велогибрид Multiwatt от компании Eltreco. В своей основе имеет прочную алюминиевую раму, с улучшенной системой складывания рамы и рулевой колонки.', 99990);

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Горный'),
(2, 'Экстремальный'),
(3, 'Детский'),
(4, 'Шоссейный'),
(5, 'Электровелосипед');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Login` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FIO` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Date_birth` date NOT NULL,
  `ID` int(11) NOT NULL,
  `Interests` varchar(255) NOT NULL,
  `VK` varchar(50) NOT NULL,
  `Group_blood` int(11) NOT NULL,
  `RH_factor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Login`, `Password`, `FIO`, `Address`, `Gender`, `Date_birth`, `ID`, `Interests`, `VK`, `Group_blood`, `RH_factor`) VALUES
('user@mail.ru', '6d4a5b12f99d15c8ff8a6c8d341ec058', 'Иванов Иван Иванович', 'Урюпинск', '0', '2022-10-04', 6355, 'Жизнь', 'vk.com/coolman', 2, '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bicycles`
--
ALTER TABLE `bicycles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_1` (`id_type`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bicycles`
--
ALTER TABLE `bicycles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bicycles`
--
ALTER TABLE `bicycles`
  ADD CONSTRAINT `foreign_key` FOREIGN KEY (`id_type`) REFERENCES `types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

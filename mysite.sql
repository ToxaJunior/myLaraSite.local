-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 26 2016 г., 18:35
-- Версия сервера: 5.5.45
-- Версия PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mysite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article_category`
--

CREATE TABLE IF NOT EXISTS `article_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `article_category`
--

INSERT INTO `article_category` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'О нас'),
(2, 0, 'Наши услуги'),
(3, 0, 'Статьи о ремонте'),
(4, 0, 'Ремонт "до" и "после"'),
(5, 0, 'Прайс-листы'),
(6, 0, 'Полезные советы'),
(7, 0, 'Ремонт квартир'),
(8, 3, 'Электромонтаж'),
(9, 3, 'Сантехника'),
(10, 3, 'Демонтаж'),
(11, 3, 'Облицовка'),
(12, 3, 'Утепление'),
(13, 11, 'Мозаика'),
(14, 11, 'Советы бывалого');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `rem_content`
--

CREATE TABLE IF NOT EXISTS `rem_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img_preview` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `created_at` int(100) NOT NULL,
  `updated_at` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `rem_content`
--

INSERT INTO `rem_content` (`id`, `category_id`, `title`, `img_preview`, `preview`, `article`, `created_at`, `updated_at`) VALUES
(3, '1', 'Заголовок статьи', '1465316799.jpeg', 'Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.\n\nДабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключением ', '<p>1</p>\r\n', 2016, 2016),
(4, '1', 'Заголовок статьи 1', '1465318917.jpeg', 'Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.\n\nДабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключением ', '<p>2</p>\r\n', 2016, 2016),
(5, '1', 'Заголовок статьи 2', '1465318948.jpeg', 'Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.\n\nДабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключением ', '<p>3</p>\r\n', 2016, 2016),
(6, '1', 'Заголовок статьи 3', '1465318971.jpeg', 'Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.\n\nДабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключением ', '<p>4</p>\r\n', 2016, 2016),
(7, '1', 'Заголовок статьи 4', '1465319001.jpeg', 'Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.\n\nДабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключением ', '<p>5</p>\r\n', 2016, 2016),
(8, '1', 'Заголовок статьи 5', '1465319023.jpeg', 'Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.\n\nДабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключением ', '<p>6</p>\r\n', 2016, 2016),
(10, '3', '555', '1465373511.jpeg', '555', '<p>555</p>\r\n', 2016, 2016),
(11, '3', 'Заголовок статьи', '1465453826.jpeg', 'Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.\r\n\r\nДабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключение', '<p>Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.</p>\r\n\r\n<p>Дабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключением некоторых), оставил оригиналы заголовков такими, как их обозвал разработчик.</p>\r\n', 2016, 2016),
(12, '3', 'Заголовок статьи 1', '1465453880.jpeg', 'Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.\r\n\r\nДабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключение', '<p>Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.</p>\r\n\r\n<p>Дабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключением некоторых), оставил оригиналы заголовков такими, как их обозвал разработчик.</p>\r\n\r\n<p>Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.</p>\r\n\r\n<p>Дабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключением некоторых), оставил оригиналы заголовков такими, как их обозвал разработчик.</p>\r\n\r\n<p>Сразу хочу обратить ваше внимание на то, что все эти примеры будут корректно работать только в современных браузерах, которые поддерживают свойства CSS3.</p>\r\n\r\n<p>Дабы не ломать общую картину, не стал коверкать машинным переводом названия эффектов(за исключением некоторых), оставил оригиналы заголовков такими, как их обозвал разработчик.</p>\r\n', 2016, 2016),
(13, '5', 'Заголовок статьи 3', '1465473804.jpeg', 'article', '<p>article</p>\r\n', 2016, 2016),
(14, '7', 'статья с картинкой', '1465503829.jpeg', '{{$preview->id}}', '<pre>\r\n{{$preview-&gt;id}}</pre>\r\n', 2016, 2016),
(15, '7', 'Заголовок статьи', '1465504086.jpeg', '''Y-m-d H:i:s'';', '<pre>\r\n&#39;Y-m-d H:i:s&#39;;</pre>\r\n', 2016, 2016),
(16, '3', 'Заголовок статьи', '1465504592.jpeg', 'protected $dateFormat = ''U'';', '<p>protected $dateFormat = &#39;U&#39;;</p>\r\n', 1465504592, 1465504592),
(17, '1', 'Заголовок статьи', '1465504963.jpeg', '''d F Y''', '<pre>\r\n<code>&#39;d F Y&#39;</code></pre>\r\n', 9, 9),
(18, '6', 'Заголовок статьи', '1465506391.jpeg', 'Первое, что вы должны сделать после установки Laravel - установить ключ шифрования сессий и кук. Это случайная строка из 32 символов, находится в файле .env, параметр ''APP_KEY''. Если вы устанавливали Laravel при помощи Composer, то ключ уже сгенерен. Вы м', '<p>Первое, что вы должны сделать после установки Laravel - установить ключ шифрования сессий и кук. Это случайная строка из 32 символов, находится в файле&nbsp;<code>.env</code>, параметр &#39;APP_KEY&#39;. Если вы устанавливали Laravel при помощи Composer, то ключ уже сгенерен. Вы можете сгенерить его вручную artisan-командой<code>key:generate</code>.&nbsp;<strong>Если ключ шифрования отсутствует, ваши сессии, куки другая шифруемая информация не будет зашифрована надежным образом.</strong>.</p>\r\n', 1465506391, 1465506392),
(19, '9', 'Я сантехник', '1466365872.jpeg', 'Достаточно давно на глаза попадался пример кода в котором строилось дерево причем не через рекурсивные вызовы, а банальным циклом в один проход с использованием ссылок. Смутно припоминаю, хотя могу и ошибаться, что исходный массив был простой одномерный в', '<p>Достаточно давно на глаза попадался пример кода в котором строилось дерево причем не через рекурсивные вызовы, а банальным циклом в один проход с использованием ссылок. Смутно припоминаю, хотя могу и ошибаться, что исходный массив был простой одномерный вида&nbsp;<em>id =&gt; parent_id</em>, а через цикл получали иерархию в виде многомерного массива. Сейчас ни где не могу найти подробности этого, поэтому буду благодарен, если кто кинет линк или код.</p>\r\n', 1466365872, 1466365872),
(20, '10', 'Валим крошим', '1466950698.jpeg', 'Очень часто в шаблонах можно встретить выпадающие навигационные элементы. Разработчики используют данный тип скрытых меню для вывода  дополнительных скрытых ссылок, тематически связанных с основным пунктом. Можно найти примеры выскальзывающих панелей или ', '<p>Очень часто в шаблонах можно встретить выпадающие навигационные элементы. Разработчики используют данный тип скрытых меню для вывода&nbsp; дополнительных скрытых ссылок, тематически связанных с основным пунктом. Можно найти примеры выскальзывающих панелей или различных меню в стиле аккордеона, которые реализуют такой принцип навигации.</p>\r\n', 1466950698, 1466950698);

-- --------------------------------------------------------

--
-- Структура таблицы `rem_img`
--

CREATE TABLE IF NOT EXISTS `rem_img` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `rem_img`
--

INSERT INTO `rem_img` (`id`, `category`, `img`) VALUES
(14, 1, '1466948951.jpeg'),
(15, 1, '1466948973.jpeg'),
(16, 1, '1466949015.jpeg'),
(17, 1, '1466949055.jpeg'),
(18, 1, '1466949077.jpeg'),
(19, 1, '1466949109.jpeg'),
(20, 1, '1466949160.jpeg'),
(21, 1, '1466949176.jpeg'),
(22, 1, '1466949227.jpeg'),
(23, 1, '1466949887.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `rem_login`
--

CREATE TABLE IF NOT EXISTS `rem_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Дамп данных таблицы `rem_login`
--

INSERT INTO `rem_login` (`id`, `login`, `password`) VALUES
(32, '2', ''),
(33, '2', ''),
(34, '3', ''),
(35, '4', '$2y$10$7Bx/mwUkHeMEcQtA.6r3D.wQpgSeBn5UcCU3omWMnEb'),
(36, '22', '$2y$10$Dtyabz2VUeN8QYuk96N42uf0bpMYaHoJNhDK0y5bOP3'),
(37, 'admin', '$2y$10$ZbD8zAmeB63ocZyyn293PuHp4dkRCXBWBoecMhTvai0'),
(38, '23', '$2y$10$D0IBzVmk/kfz5Vnk/vKB2Osg1cxNH3j5FofWxRQMrer'),
(39, '34', '$2y$10$cdroCAMfgTqPz7NszOBICODdpmsaC0p8uiVunVOQsZX'),
(40, '123', '$2y$10$1MnS8YZgtqjJJLar0Tfc1.4yC.SsaeTGXcpUtXQal6a'),
(41, '44', '$2y$10$Xbsw.Fcd6IIpU15uU2DJbea/OSoIVzdFjuhPkM1ENBj'),
(42, '444', '$2y$10$zZ83vPsoyNWz/d4QKWTBt.nN/DxqAZKdsUiIjsORgwu'),
(43, '4444', '$2y$10$dWOeb27aR9fvyjB8I4Gb3uzvF/Wa4zFjGmOsSfOBQXy'),
(44, '44443', '$2y$10$dY8.9OxeckpU6FW0AvqEueAZddsip0F95AB703vLBGu'),
(45, '1212', '$2y$10$QFcoEgDz3.LDEky7e.xwMebdv5aIDycj/GWbKxXfRd3'),
(46, 'ц', '$2y$10$pJ6HAHRWnnDBopjmZDOAGu9f8PoJ6KJUFIpVcvqV0jW'),
(47, 'dron', '$2y$10$SxRHXQgzNBF6iM/8i6pLSO8JlGnRLjaVxDAtHRHmivq'),
(48, '455', '$2y$10$8177b6uCNvqnJeEsC5XYc.mcfNX.VQa17IfNjMwuCM7'),
(49, '44444', '$2y$10$ywVnk77ARNRj844xcHn6w.8W1oFix9/ZEs0ExUeGrbI'),
(50, '111111', '$2y$10$JN91kAwMaZwgcscf3o/ja.AzAr6Q32ngqobUFdLi5CU'),
(51, '1111111', '$2y$10$bmmADlo7pkjsRnVnjBAss.jqNj8.uU47jRnLp1v6XUu'),
(52, '111111111', '$2y$10$VIGj/ebXgoB.v4vq0cas5urWSzhAD71MMD.nDVoadzf'),
(53, '7', '$2y$10$8Wn5gLlvXwtEK276er3jN.ZZ1JHZPZPMqUuS5s9efQl'),
(54, '8', '$2y$10$a/klD5g7mYb0MA32o7ky1u9QdJ7ItJM/.tH/ZB9VsHQ'),
(55, '89', '$2y$10$EByqN0rdOK8dIebIkfXSDuguNK/LwtUjybo8jw3c.MX'),
(56, '90', '$2y$10$yBE4lRcxyM8bnDob2pFHrOvZal/fQfBSFghDDQk5Z48'),
(57, '232', '$2y$10$6ht9JH4US56dGBlN5Kzxiea0H1GTePaWepfopi.N1cB'),
(58, '2323', '$2y$10$CD.kHhdEImEGUxszsy8ShO9FV7K5nQTjLxR/i6OU5g7'),
(59, '1234', '$2y$10$128pVMlZ5A4XZUOfwrdVU.7HQn5PXh.SNfnTqr/bq7l'),
(60, '121212', '$2y$10$7zeQR2ZuhRj1hXvXwsJ8aOKoPr8yrxs8hAQDUDn9eVY'),
(61, '777', '$2y$10$lQSSzDV1eATsMnLv5tJP8uDIQz1y8UJuTERFLS1vsXq'),
(62, '7776', '$2y$10$UTB8iOwb93s6weGu1osg5eUCFdZ6mcEWGLfHZlKe4gL'),
(63, '4545454545', '$2y$10$RRY42FUx5dak2xSpo6QsCeHlpN4r1F5/1qOT/7C7QvT'),
(64, '33333333', '$2y$10$4X4c6OOGFhYjJgqWPOafQue0287qnqKbRv9OJQ/a43W'),
(65, '222222222222222222', '$2y$10$N7Jh/lgNxDgR5xbv9H4xauxYS5IgespgRai1e6URyUa'),
(66, '22222222', '$2y$10$u0PVIltH8ShB2Uru.ZS3dO9r/6QG92WdvnSZZChz1JB'),
(67, '121234', '$2y$10$uOXNGc6ZEvrRuvbwQyvImOomqvRUWIRd4.jpuk0WRF9'),
(68, '8787', '$2y$10$HzrbTNhp6MX9gIvysX5cVek.Y2h5yNFFCXNzRgcuBB0'),
(69, '78989', '$2y$10$jcjTUli0Qv10r95Z.OZou.WdpHIJMShGduxUHn9wp1y'),
(70, 'ене', '$2y$10$xnNaL6Ep.3/EGJIocHqxvOJ/vp49bbh9SNHwNrHNZOg'),
(71, '5656р', '$2y$10$/qkJqZYtfFpVnrFxN8uwc.86IuSwxjNA9I6oR5HMifT'),
(72, '676676767', '$2y$10$/505w2a4hqkHVr776XV86eLyrWhRfzBIk.M.627Lqsf'),
(73, 'енен', '$2y$10$q8qJHnHA2FS6X.9PE/UqDuT6MhUSLt7PmBHuotmcej8'),
(74, 'кпупу', '$2y$10$g7IDa0muwqEFSRKKkMu6se5ajGWKIeiE3wUGtj.XUoh'),
(75, 'кекеке', '$2y$10$1PRKmc5En.X70n4sf8IhsOZRcogK8x/LSF/WMfGBQyn'),
(76, 'уауа', '$2y$10$RgP/R5mWARoPU.bQkhZuDeaCX5l/YJ6wCXYwVDhJ/l7'),
(77, 'ППП', '$2y$10$yZ0Bo16R/zvOztGZcnZhU.NlR6sTBW.KedLqM1udDV2'),
(78, 'fgfgf', '$2y$10$ER/Qw5clZC2r0YqF.DsRVungE13/ilzJciYye8gl/ks'),
(79, 'yuyu', '$2y$10$9BixklsGUqidHlTP3rmBweLNP5Rt5h3izcItgKht4fT'),
(80, 'кук', 'dcaa94dd2143c7f429538b6025bd0db4'),
(81, 'ere', '6fa88685bd3771b299b264912827ceec'),
(82, 'c', 'ed108f6919ebadc8e809f8b86ef40b05');

-- --------------------------------------------------------

--
-- Структура таблицы `rem_message`
--

CREATE TABLE IF NOT EXISTS `rem_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `rem_message`
--

INSERT INTO `rem_message` (`id`, `name`, `email`, `tel`, `message`, `created_at`, `updated_at`) VALUES
(1, '1', 'my Email', '3', '4', '2016-05-14 23:41:01', ''),
(2, 'Денис', 'denis.get@mail.ru', '063-074-98-31', 'Позвоните мне пожалуйста вечером 13.07.2089г', '2016-05-14 23:41:01', ''),
(3, 'Света', 'cuwbei@oiwejpw.ru', '702374023704', 'Звоните после 2 часов ночи!!!', '2016-05-14 23:41:01', ''),
(11, '1', 'my Email', '1', '1', '2016-05-14 23:41:01', '2016-05-02 14:11:26'),
(12, '2', 'e@E', '2', '2', '2016-05-14 23:41:01', ''),
(13, 'John', '', '', '', '2016-05-14 23:41:01', ''),
(14, 'John', '', '', '', '2016-05-14 23:41:01', ''),
(15, 'Toshik', '', '', '', '2016-05-14 23:41:01', ''),
(17, 'Антошка', 'amige@nana.com', '2-2-2-2-2-2-2-2-0000', 'Ноччию', '1463253368', '1463253368'),
(21, 'Деня', '23@gogo.ru', '1-1-1-1-1-1-1-1', 'утро', '2016-05-15 10:42:42', '2016-05-15 10:42:42'),
(22, 'Тошик', '23@gogo.ru', '2-2-2-2-2-2-2-2', 'вечер', '2016-05-15 10:43:06', '2016-05-15 10:43:06'),
(23, 'Светик', '23@gogo.ru', '3-3-3-3-3-3-3-3-3', 'днем\r\n', '2016-05-15 10:43:26', '2016-05-15 10:43:26'),
(24, 'Тест', 'amige1@mail.ru', '', 'Тест', '2016-06-11 14:37:30', '2016-06-11 14:37:30'),
(25, 'Антонио', '111@111.com', '', '', '2016-06-25 18:37:31', '2016-06-25 18:37:31'),
(26, 'Антонио', '111@111.com', '083-33-33-333', 'Привет это тест', '2016-06-25 18:38:14', '2016-06-25 18:38:14');

-- --------------------------------------------------------

--
-- Структура таблицы `rem_price`
--

CREATE TABLE IF NOT EXISTS `rem_price` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `count` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', '1@1.com', '$2y$10$HH6goRwCPYxUPJAlM5Yck.AS5Obm5hwC1T8V1o.qHyU67xg1MFLVq', 'XhyNbt5pYFEbIHM6KBo3Ruwp7shEfGYbsHe70xf0XJeJQGvO0RJ0K90dXgc0', '2016-05-10 05:36:09', '2016-05-10 05:54:21'),
(2, 'admin', 'admin@admin.com', '$2y$10$SU55cBs.hAqyDByxUCFp/eMlAF9vKdtY57vxOHR/e7UaFPEYyjeaW', 'vMRk56kNwJMl0HduOGC5df9lNQtfAfg32a710OLg8h94NnySXCjq7YwoyGzZ', '2016-05-10 06:41:11', '2016-05-10 06:45:39'),
(3, '111', '111@111.com', '$2y$10$mFRKWInZ3R.KKbwk22.g0eZ.g4XwQXZt9Jew4cU2fkTq/QPhw5y/S', 'eqQ1DD4VIITRTzOWg3VyseDeXPPANh5II5ZeTDebHs5Sqhcyldyu8MZVR8n7', '2016-05-13 06:43:45', '2016-06-20 20:06:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

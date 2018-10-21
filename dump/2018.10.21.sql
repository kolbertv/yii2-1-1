-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.20-log - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп данных таблицы task_3.migration: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
REPLACE INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1540058095),
	('m181020_175059_create_users_table', 1540058097),
	('m181021_154154_create_roles_table', 1540136935),
	('m181021_174106_create_tasks_table', 1540143986),
	('m181021_192531_create_user_table', 1540150059);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;

-- Дамп данных таблицы task_3.roles: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
REPLACE INTO `roles` (`id`, `role`) VALUES
	(1, 'admin'),
	(2, 'user');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Дамп данных таблицы task_3.tasks: ~10 rows (приблизительно)
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
REPLACE INTO `tasks` (`id`, `title`, `description`, `creator_id`, `updater_id`, `created_at`, `updated_at`) VALUES
	(1, 'таск 1', 'описание таски 1', NULL, NULL, '2018-10-21 21:11:22', NULL),
	(2, 'таск 2', 'описание таски 2', NULL, NULL, '2018-10-21 21:11:22', NULL),
	(3, 'таск 3', 'описание таски 3', NULL, NULL, '2018-10-21 21:11:22', NULL),
	(4, 'таск 4', 'описание таски 4', NULL, NULL, '2018-10-21 21:11:22', NULL),
	(5, 'таск 4', 'описание таски 5 в сентябре', NULL, NULL, '2018-09-21 21:11:22', NULL),
	(6, 'таск 4', 'описание таски 6 в сентбяре', NULL, NULL, '2018-09-21 21:11:22', NULL),
	(7, 'таск 1', 'описание таски 1', NULL, NULL, '2018-10-21 21:17:45', NULL),
	(8, 'таск 2', 'описание таски 2', NULL, NULL, '2018-10-21 21:17:45', NULL),
	(9, 'таск 3', 'описание таски 3', NULL, NULL, '2018-10-21 21:17:45', NULL),
	(10, 'таск 4', 'описание таски 4', NULL, NULL, '2018-10-21 21:17:45', NULL);
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;

-- Дамп данных таблицы task_3.test: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
REPLACE INTO `test` (`id`, `title`, `content`, `created`) VALUES
	(1, 'title1', 'content1', '2018-10-20 20:35:46'),
	(2, 'title2', 'content2', '2018-10-20 20:35:46'),
	(3, 'title3', 'content3', '2018-10-20 20:35:46');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

-- Дамп данных таблицы task_3.user: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `username`, `password`, `authkey`, `accessToken`) VALUES
	(1, 'admin', '111', NULL, NULL),
	(2, 'user', '111', NULL, NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Дамп данных таблицы task_3.users: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `login`, `password`, `role_id`) VALUES
	(2, 'pupkin', '21232f297a57a5a743894a0e4a801fc3', 1),
	(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
	(6, 'admin1', '21232f297a57a5a743894a0e4a801fc3', 1),
	(9, 'admin3', '21232f297a57a5a743894a0e4a801fc3', 1),
	(10, 'user', '34edrfguhijmk,l', 2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

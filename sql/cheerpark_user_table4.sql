-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-12 05:03:10
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `cheerpark_db_class`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `cheerpark_user_table4`
--

CREATE TABLE `cheerpark_user_table4` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flg` int(1) NOT NULL DEFAULT 0,
  `life_flg` int(1) NOT NULL DEFAULT 0,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `cheerpark_user_table4`
--

INSERT INTO `cheerpark_user_table4` (`id`, `name`, `email`, `lid`, `lpw`, `kanri_flg`, `life_flg`, `date`) VALUES
(1, 'test1', '', 'hamataki', 'cheer', 1, 0, NULL),
(2, 'スティーブ・ジョブズ', 'test@gmal.com', 'jobs', 'test2', 0, 0, '2024-07-11 09:18:59'),
(3, 'スティーブ・ジョブズ', 'test@gmal.com', 'jobs', 'thinkdifferent', 0, 0, '2024-07-11 09:37:50');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `cheerpark_user_table4`
--
ALTER TABLE `cheerpark_user_table4`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `cheerpark_user_table4`
--
ALTER TABLE `cheerpark_user_table4`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

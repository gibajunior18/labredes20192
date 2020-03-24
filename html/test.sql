-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Mar-2020 às 04:32
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_cache`
--

CREATE TABLE `kcuq_cache` (
  `id` int(11) NOT NULL,
  `fname` varchar(32) DEFAULT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `time` int(11) NOT NULL DEFAULT 0,
  `uname` varchar(32) DEFAULT NULL,
  `group` varchar(32) DEFAULT NULL,
  `process` int(3) DEFAULT NULL,
  `value` int(32) DEFAULT NULL,
  `dept` int(11) DEFAULT NULL,
  `support_id` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `kcuq_cache`
--

INSERT INTO `kcuq_cache` (`id`, `fname`, `lname`, `time`, `uname`, `group`, `process`, `value`, `dept`, `support_id`) VALUES
(1, 'admin', '', 1585019407, 'admin', 'NO_GROUP', 1, 1, 1, 'KkEtq2SNzvl02OR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_department`
--

CREATE TABLE `kcuq_department` (
  `id` int(11) NOT NULL,
  `dept` varchar(20) DEFAULT NULL,
  `discription` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `kcuq_department`
--

INSERT INTO `kcuq_department` (`id`, `dept`, `discription`) VALUES
(1, 'Admin', 'Head of Department'),
(2, 'support', 'support people'),
(3, 'IT', 'IT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_groups`
--

CREATE TABLE `kcuq_groups` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `groupid` varchar(32) NOT NULL,
  `name` varchar(20) NOT NULL DEFAULT 'Undefined',
  `ctime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `kcuq_groups`
--

INSERT INTO `kcuq_groups` (`id`, `groupid`, `name`, `ctime`) VALUES
('NO_GROUP', '00000000000000000000000000000000', 'Undefined', '2020-03-24 02:45:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_group_users`
--

CREATE TABLE `kcuq_group_users` (
  `id` int(11) NOT NULL,
  `grupid` varchar(32) NOT NULL,
  `users` varchar(32) NOT NULL,
  `lastseen` timestamp NOT NULL DEFAULT current_timestamp(),
  `seens` int(11) NOT NULL DEFAULT 0,
  `notify` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_guest`
--

CREATE TABLE `kcuq_guest` (
  `id` varchar(32) NOT NULL,
  `guest_id` varchar(32) NOT NULL,
  `group_id` varchar(32) DEFAULT NULL,
  `ip` varchar(64) NOT NULL,
  `country_code` varchar(32) DEFAULT NULL,
  `time_zone` varchar(64) DEFAULT NULL,
  `latitude` int(11) DEFAULT NULL,
  `longitude` int(11) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_msgs`
--

CREATE TABLE `kcuq_msgs` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `msg` text NOT NULL,
  `grp_id` varchar(32) NOT NULL,
  `sender_id` varchar(32) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_notification`
--

CREATE TABLE `kcuq_notification` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `url` varchar(64) NOT NULL,
  `notification` varchar(64) NOT NULL,
  `user` varchar(64) NOT NULL,
  `seen` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `kcuq_notification`
--

INSERT INTO `kcuq_notification` (`id`, `time`, `url`, `notification`, `user`, `seen`) VALUES
(1, '2020-03-24 02:45:10', '#', 'You Just Installed KChat', 'KkEtq2SNzvl02OR', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_plotly`
--

CREATE TABLE `kcuq_plotly` (
  `id` int(11) NOT NULL,
  `y` int(11) NOT NULL DEFAULT 0,
  `x` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `kcuq_plotly`
--

INSERT INTO `kcuq_plotly` (`id`, `y`, `x`) VALUES
(1, 0, '2020-03-24 02:45:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_pusers`
--

CREATE TABLE `kcuq_pusers` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `secret` varchar(128) NOT NULL,
  `depart` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_role`
--

CREATE TABLE `kcuq_role` (
  `id` int(11) NOT NULL,
  `dept` varchar(20) DEFAULT NULL,
  `discription` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `kcuq_role`
--

INSERT INTO `kcuq_role` (`id`, `dept`, `discription`) VALUES
(1, 'admin', 'user with all privileges'),
(2, 'user', 'user with few privileges'),
(3, 'guest', 'user with No privileges');

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_setting`
--

CREATE TABLE `kcuq_setting` (
  `id` int(3) NOT NULL,
  `key` varchar(32) DEFAULT NULL,
  `value` varchar(256) DEFAULT NULL,
  `option` varchar(20) DEFAULT NULL,
  `tab` varchar(20) DEFAULT NULL,
  `type` varchar(32) DEFAULT NULL,
  `css` varchar(32) DEFAULT NULL,
  `selecter` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `kcuq_setting`
--

INSERT INTO `kcuq_setting` (`id`, `key`, `value`, `option`, `tab`, `type`, `css`, `selecter`) VALUES
(1, 'headcolor1', '91EBE0', 'Head Color', 'Color Setting', 'color', 'background-color', '#KChat_heading,#kchat_copy'),
(2, 'bordercolor1', 'FFFFFF', 'body Color', 'Color Setting', 'color', 'background-color', '#KChat_scroll_panel'),
(3, 'mesgboxcolor1', 'FFFFFF', 'Message Box Color', 'Color Setting', 'color', 'background-color', '#KChat_textarea'),
(7, 'headclr', '000000', 'Heading Color', 'Color Setting', 'color', 'color', '#KChat_heading_title'),
(8, 'headbdrc', 'BFFFC5', 'Right Box Color', 'Color Setting', 'color', 'background-color', '.message1'),
(9, 'bodybdrp', '002904', 'Right Box text', 'Color Setting', 'color', 'color', '.message1'),
(10, 'bodybdrc', '031A00', 'Right Border Color', 'Color Setting', 'color', 'border-color', '.message1'),
(11, 'inboxbdrp', '1', 'Right Border size', 'Color Setting', 'pixel', 'border-width', '.message1'),
(12, 'inboxbdrc', '30FF65', 'Right anchor Color', 'Color Setting', 'color', 'color', '.message1 a'),
(13, 'headbdrcx', 'FFCFBF', 'Left Box Color', 'Color Setting', 'color', 'background-color', '.message0'),
(14, 'bodybdrpx', '3D0000', 'Left Box text', 'Color Setting', 'color', 'color', '.message0'),
(15, 'bodybdrcx', '0A0000', 'Left Border Color', 'Color Setting', 'color', 'border-color', '.message0'),
(16, 'inboxbdrpx', '1', 'Left Border size', 'Color Setting', 'pixel', 'border-width', '.message0'),
(17, 'inboxbdrcx', 'FF0000', 'Left anchor Color', 'Color Setting', 'color', 'color', '.message0 a'),
(18, 'inboxback', 'FFFFFF', 'Message Box Backgrou', 'Color Setting', 'color', 'background-color', '#KChat_box');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `kcuq_temp`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `kcuq_temp` (
`id` int(11)
,`fname` varchar(32)
,`lname` varchar(32)
,`time` int(11)
,`uname` varchar(32)
,`group` varchar(32)
,`process` int(3)
,`value` int(32)
,`dept` int(11)
,`support_id` varchar(32)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `kcuq_users`
--

CREATE TABLE `kcuq_users` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(3) DEFAULT NULL,
  `dept` int(3) DEFAULT NULL,
  `ctime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `kcuq_users`
--

INSERT INTO `kcuq_users` (`id`, `fname`, `lname`, `email`, `uname`, `password`, `role`, `dept`, `ctime`) VALUES
('KkEtq2SNzvl02OR', 'admin', '', 'admin@mydomain.com', 'admin', 'pass', 1, 1, '2020-03-24 02:45:10');

-- --------------------------------------------------------

--
-- Estrutura para vista `kcuq_temp`
--
DROP TABLE IF EXISTS `kcuq_temp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kcuq_temp`  AS  select `kcuq_cache`.`id` AS `id`,`kcuq_cache`.`fname` AS `fname`,`kcuq_cache`.`lname` AS `lname`,`kcuq_cache`.`time` AS `time`,`kcuq_cache`.`uname` AS `uname`,`kcuq_cache`.`group` AS `group`,`kcuq_cache`.`process` AS `process`,`kcuq_cache`.`value` AS `value`,`kcuq_cache`.`dept` AS `dept`,`kcuq_cache`.`support_id` AS `support_id` from `kcuq_cache` where `kcuq_cache`.`time` > unix_timestamp() - 5 ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `kcuq_cache`
--
ALTER TABLE `kcuq_cache`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`,`process`),
  ADD KEY `group` (`group`),
  ADD KEY `cache_ibfk_2` (`uname`),
  ADD KEY `dept` (`dept`),
  ADD KEY `support_id` (`support_id`),
  ADD KEY `support_id_2` (`support_id`),
  ADD KEY `dept_2` (`dept`);

--
-- Índices para tabela `kcuq_department`
--
ALTER TABLE `kcuq_department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dept` (`dept`);

--
-- Índices para tabela `kcuq_groups`
--
ALTER TABLE `kcuq_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groupid` (`groupid`);

--
-- Índices para tabela `kcuq_group_users`
--
ALTER TABLE `kcuq_group_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupid` (`grupid`),
  ADD KEY `users` (`users`);

--
-- Índices para tabela `kcuq_guest`
--
ALTER TABLE `kcuq_guest`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guest_id` (`guest_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Índices para tabela `kcuq_msgs`
--
ALTER TABLE `kcuq_msgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grp_id` (`grp_id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Índices para tabela `kcuq_notification`
--
ALTER TABLE `kcuq_notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Índices para tabela `kcuq_plotly`
--
ALTER TABLE `kcuq_plotly`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x` (`x`);

--
-- Índices para tabela `kcuq_pusers`
--
ALTER TABLE `kcuq_pusers`
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `secret` (`secret`),
  ADD KEY `depart` (`depart`);

--
-- Índices para tabela `kcuq_role`
--
ALTER TABLE `kcuq_role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dept` (`dept`);

--
-- Índices para tabela `kcuq_setting`
--
ALTER TABLE `kcuq_setting`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `kcuq_users`
--
ALTER TABLE `kcuq_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD KEY `role` (`role`),
  ADD KEY `dept` (`dept`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `kcuq_cache`
--
ALTER TABLE `kcuq_cache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `kcuq_department`
--
ALTER TABLE `kcuq_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `kcuq_group_users`
--
ALTER TABLE `kcuq_group_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `kcuq_msgs`
--
ALTER TABLE `kcuq_msgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `kcuq_notification`
--
ALTER TABLE `kcuq_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `kcuq_plotly`
--
ALTER TABLE `kcuq_plotly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `kcuq_role`
--
ALTER TABLE `kcuq_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `kcuq_setting`
--
ALTER TABLE `kcuq_setting`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `kcuq_cache`
--
ALTER TABLE `kcuq_cache`
  ADD CONSTRAINT `cache_ibfk_1` FOREIGN KEY (`group`) REFERENCES `kcuq_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cache_ibfk_2` FOREIGN KEY (`uname`) REFERENCES `kcuq_users` (`uname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cache_ibfk_3` FOREIGN KEY (`support_id`) REFERENCES `kcuq_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cache_ibfk_4` FOREIGN KEY (`dept`) REFERENCES `kcuq_department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `kcuq_group_users`
--
ALTER TABLE `kcuq_group_users`
  ADD CONSTRAINT `group_users_ibfk_2` FOREIGN KEY (`users`) REFERENCES `kcuq_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group_users_ibfk_3` FOREIGN KEY (`grupid`) REFERENCES `kcuq_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `kcuq_guest`
--
ALTER TABLE `kcuq_guest`
  ADD CONSTRAINT `guest_ibfk_1` FOREIGN KEY (`id`) REFERENCES `kcuq_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guest_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `kcuq_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `kcuq_msgs`
--
ALTER TABLE `kcuq_msgs`
  ADD CONSTRAINT `msgs_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `kcuq_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `msgs_ibfk_3` FOREIGN KEY (`grp_id`) REFERENCES `kcuq_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `kcuq_notification`
--
ALTER TABLE `kcuq_notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`user`) REFERENCES `kcuq_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `kcuq_pusers`
--
ALTER TABLE `kcuq_pusers`
  ADD CONSTRAINT `pusers_ibfk_1` FOREIGN KEY (`depart`) REFERENCES `kcuq_department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `kcuq_users`
--
ALTER TABLE `kcuq_users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`dept`) REFERENCES `kcuq_department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role`) REFERENCES `kcuq_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Abr-2019 às 13:24
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtida`
--

CREATE TABLE `curtida` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curtida`
--

INSERT INTO `curtida` (`id`, `usuario_id`, `tema_id`) VALUES
(1, 3, 1),
(2, 4, 1),
(3, 1, 1),
(4, 5, 1),
(8, 7, 1),
(9, 8, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `mensagem` text NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `data`, `mensagem`, `usuario_id`, `tema_id`) VALUES
(2, '2019-03-21 00:00:00', 'ridindin', 1, 3),
(3, '2019-03-29 17:11:54', 'mamastes', 5, 1),
(4, '2019-04-01 12:49:39', 'dasdsa', 6, 1),
(5, '2019-04-01 13:19:31', 'dsdsad', 8, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tema`
--

CREATE TABLE `tema` (
  `id` int(11) NOT NULL,
  `assunto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tema`
--

INSERT INTO `tema` (`id`, `assunto`) VALUES
(1, 'LoL'),
(2, 'R6'),
(3, 'Cs'),
(4, 'Influenciadores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT 'default.jpg',
  `senha` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `foto`, `senha`) VALUES
(1, 'ffvf', 'vfvf@fdsfd', 'fdfdf.jpg', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'fefef', 'fefe@avgs', 'dsds', 'db44db5275bb760ddfdd44e155dd3e82'),
(3, 'vitor', 'vitorhenrique842@gmail.com', NULL, '202cb962ac59075b964b07152d234b70'),
(4, '', 'a@a', NULL, '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'macaco bola', 'macaco@bola.com', NULL, '202cb962ac59075b964b07152d234b70'),
(6, 'augusto', 'augusto@augusto.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'fon', 'fon@fon', NULL, '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'SADSD', 'd@d', NULL, '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curtida`
--
ALTER TABLE `curtida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tema_id` (`tema_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `tema_id` (`tema_id`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curtida`
--
ALTER TABLE `curtida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `curtida`
--
ALTER TABLE `curtida`
  ADD CONSTRAINT `TEMA_FK` FOREIGN KEY (`tema_id`) REFERENCES `tema` (`id`),
  ADD CONSTRAINT `USUARIO_FK` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_TEMA` FOREIGN KEY (`tema_id`) REFERENCES `tema` (`id`),
  ADD CONSTRAINT `FK_USUARIO` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

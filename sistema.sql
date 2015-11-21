-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 21-Nov-2015 às 20:36
-- Versão do servidor: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
`id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `valortotal` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `usuario`, `data`, `valortotal`) VALUES
(1, 1, '2015-11-18', 0),
(2, 1, '2015-11-18', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `refeicao`
--

CREATE TABLE IF NOT EXISTS `refeicao` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tiporefeicao` int(11) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `refeicao`
--

INSERT INTO `refeicao` (`id`, `nome`, `tiporefeicao`, `valor`) VALUES
(1, 'Lasanha', 1, 10.5),
(2, 'Risoto', 1, 12.95),
(3, 'Sopa', 2, 3.5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `refeicaopedido`
--

CREATE TABLE IF NOT EXISTS `refeicaopedido` (
`id` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `idrefeicao` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `refeicaopedido`
--

INSERT INTO `refeicaopedido` (`id`, `idpedido`, `idrefeicao`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiporefeicao`
--

CREATE TABLE IF NOT EXISTS `tiporefeicao` (
`id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tiporefeicao`
--

INSERT INTO `tiporefeicao` (`id`, `descricao`) VALUES
(1, 'Almoço'),
(2, 'Jantar'),
(3, 'Café da manhã');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `endereco`) VALUES
(1, 'Teste', 'abcd1234', 'Av. São Paulo, 146');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refeicao`
--
ALTER TABLE `refeicao`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refeicaopedido`
--
ALTER TABLE `refeicaopedido`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiporefeicao`
--
ALTER TABLE `tiporefeicao`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `refeicao`
--
ALTER TABLE `refeicao`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `refeicaopedido`
--
ALTER TABLE `refeicaopedido`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tiporefeicao`
--
ALTER TABLE `tiporefeicao`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

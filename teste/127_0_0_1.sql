-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2018 às 15:04
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_loja_sistema`
--
CREATE DATABASE IF NOT EXISTS `a_loja_sistema` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `a_loja_sistema`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `clientes_id` int(11) NOT NULL,
  `produto_idproduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `nascimento` varchar(15) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `tipousuario` varchar(15) DEFAULT NULL,
  `ativo` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sexo`, `nascimento`, `rg`, `cpf`, `celular`, `rua`, `numero`, `bairro`, `estado`, `cidade`, `cep`, `email`, `senha`, `tipousuario`, `ativo`) VALUES
(2, 'Jocimar Caiado Braga', 'Masculino', '1982-11-18', '111.111.111-1', '111.111.111-11', '(21)98045-6567', 'Rua Acapu', '210', 'Marechal Hermes', 'Rio de Janeiro', 'Rio de Janeiro', '21550-570', 'jocimarcaiadobraga@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Adm', 's'),
(3, 'Anderson da Cunha de Carvalho', 'Masculino', '1980-02-28', '12.434.237-9', '082.698.647-14', '(21)97503-8171', 'Amália', '223', 'Quintino', 'Rio de Janeiro', 'Rio de Janeiro', '21380-400', 'cunhacarv@gmail.com', '3521', 'comum', 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `quantidade` int(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `marca`, `modelo`, `preco`, `quantidade`) VALUES
(1, 'sansung', 'Galaxy 9', 1200, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`clientes_id`,`produto_idproduto`),
  ADD KEY `fk_clientes_has_produto_produto1_idx` (`produto_idproduto`),
  ADD KEY `fk_clientes_has_produto_clientes1_idx` (`clientes_id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `fk_clientes_has_produto_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clientes_has_produto_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 05-Abr-2018 às 16:28
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema-center`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `titulos_rec`
--

CREATE TABLE `titulos_rec` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_lanc` date NOT NULL,
  `data_venc` date NOT NULL,
  `data_pag` date DEFAULT NULL,
  `num_nota` varchar(100) DEFAULT NULL,
  `valor_tit` double(11,2) NOT NULL,
  `valor_pago` double(11,2) DEFAULT '0.00',
  `valor_dif` decimal(11,2) DEFAULT '0.00',
  `observacao` varchar(250) DEFAULT NULL,
  `forma_pgto` varchar(100) DEFAULT NULL,
  `pago` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `titulos_rec`
--
ALTER TABLE `titulos_rec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `titulos_rec`
--
ALTER TABLE `titulos_rec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `titulos_rec`
--
ALTER TABLE `titulos_rec`
  ADD CONSTRAINT `titulos_rec_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

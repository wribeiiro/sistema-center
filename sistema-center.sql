-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Abr-2018 às 02:25
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `tipo_pessoa` char(1) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `situacao` char(1) NOT NULL,
  `data_cadastro` date NOT NULL,
  `observacao` text,
  `contato` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senhas` text,
  `valor_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tipo_servico` int(1) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `tipo_pessoa`, `nome`, `telefone`, `cnpj`, `situacao`, `data_cadastro`, `observacao`, `contato`, `email`, `senhas`, `valor_total`, `tipo_servico`) VALUES
(1, '1', 'Wellisson Luiz Antunes Ribeiro', '(47) 9614-2411', '101.483.239-01', '1', '2018-03-08', '', 'Wellisson', 'welleh10@gmail.com', 'Rua Antonio Nunes, 1100\r\nCondominio Jardim America', '1257.33', 3),
(3, '1', 'Bianca Schuatcy', '(47) 8868-3665', '842.357.219-68', '1', '2017-12-11', 'cliente avisou que vem retirar 10/03/2018', 'Bianca', '', '', '80.00', 3),
(4, '1', 'Sirlei ', '(47) 9134-8414', '111.111.111-11', '1', '2018-03-09', '', 'Sirlei ', '', '', '37.50', 3),
(5, '1', 'LARIANE MOREIRA DE ALMEIDA', '(47) 9674-2281', '112.741.949-89', '1', '2018-03-09', '', '', 'larianialmeida07@gmail.com', '', '19.50', 3),
(6, '1', 'MARIA LUISA VEIRA', '(47) 8864-6406', '068.415.659-83', '1', '2018-03-09', '', '', '', '', '7.50', 3),
(7, '1', 'SUELEN FUCHS', '(47) 8415-4795', '047.399.039-38', '2', '2018-03-12', '', '', '', '', '56.00', 3),
(8, '1', 'LUCIANE DA SILVA', '(47) 8831-1901', '070.862.689-09', '2', '2018-03-12', '', '', '', '', '20.00', 3),
(9, '1', 'ALEXSANDRA LORENA', '(47) 9703-2357', '059.879.149-30', '2', '2018-03-12', '', '', '', '', '150.00', 1),
(10, '1', 'VANESSA ROBERTA', '(47) 9962-0017', '005.338.389-32', '1', '2018-03-12', '', '', '', '', '27.00', 1),
(11, '1', 'Aline Silveira', '98442-8449', '085.421.069-54', '2', '2018-03-15', 'Pagou 100, de entrada, vencimento 21/03/2018', 'Aline', '', 'Rua Nair Weber Sokolski, 116    b jardim cristal\r\nMafra -SC', '9000.00', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `logusuarios`
--

CREATE TABLE `logusuarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `data_hora` datetime NOT NULL,
  `ip` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logusuarios`
--

INSERT INTO `logusuarios` (`id`, `id_usuario`, `login`, `data_hora`, `ip`) VALUES
(1, 2, 'Center Collor', '2018-03-07 08:03:16', NULL),
(2, 2, 'Center Collor', '2018-03-07 10:21:58', NULL),
(3, 2, 'Center Collor', '2018-03-07 10:23:12', NULL),
(4, 2, 'Center Collor', '2018-03-08 08:40:13', NULL),
(5, 2, 'Center Collor', '2018-03-08 09:17:15', NULL),
(6, 2, 'Center Collor', '2018-03-08 10:19:35', NULL),
(7, 2, 'Center Collor', '2018-03-08 16:25:20', NULL),
(8, 2, 'Center Collor', '2018-03-08 16:28:55', NULL),
(9, 2, 'Center Collor', '2018-03-09 10:11:31', NULL),
(10, 2, 'Center Collor', '2018-03-09 11:42:20', NULL),
(11, 2, 'Center Collor', '2018-03-09 13:31:21', NULL),
(12, 2, 'Center Collor', '2018-03-09 13:51:23', NULL),
(13, 2, 'Center Collor', '2018-03-09 14:13:40', NULL),
(14, 2, 'Center Collor', '2018-03-09 15:36:32', NULL),
(15, 2, 'Center Collor', '2018-03-09 17:08:20', NULL),
(16, 2, 'Center Collor', '2018-03-10 09:11:15', NULL),
(17, 2, 'Center Collor', '2018-03-10 09:11:23', NULL),
(18, 2, 'Center Collor', '2018-03-10 17:22:41', NULL),
(19, 2, 'Center Collor', '2018-03-12 10:16:39', NULL),
(20, 2, 'Center Collor', '2018-03-12 11:19:52', NULL),
(21, 2, 'Center Collor', '2018-03-12 11:30:07', NULL),
(22, 2, 'Center Collor', '2018-03-12 13:24:41', NULL),
(23, 2, 'Center Collor', '2018-03-13 08:11:40', NULL),
(24, 2, 'Center Collor', '2018-03-13 12:08:18', NULL),
(25, 2, 'Center Collor', '2018-03-13 15:14:38', NULL),
(26, 2, 'Center Collor', '2018-03-13 15:59:12', NULL),
(27, 2, 'Center Collor', '2018-03-14 10:51:29', NULL),
(28, 2, 'Center Collor', '2018-03-14 16:09:05', NULL),
(29, 2, 'Center Collor', '2018-03-15 11:36:19', NULL),
(30, 2, 'Center Collor', '2018-03-15 15:40:26', NULL),
(31, 2, 'Center Collor', '2018-03-16 11:54:57', NULL),
(32, 2, 'Center Collor', '2018-03-22 15:04:25', NULL),
(33, 2, 'Center Collor', '2018-03-26 10:46:20', NULL),
(34, 2, 'Center Collor', '2018-04-04 17:35:44', NULL),
(35, 2, 'Center Collor', '2018-04-04 20:00:28', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acessos`
--

CREATE TABLE `nivel_acessos` (
  `id` int(11) NOT NULL,
  `nome_nivel` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivel_acessos`
--

INSERT INTO `nivel_acessos` (`id`, `nome_nivel`, `created`, `modified`) VALUES
(1, 'Administrador', '2015-09-19 00:00:00', NULL),
(2, 'Usuario', '2015-09-27 17:30:26', '2015-09-27 17:34:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem_servicos`
--

CREATE TABLE `ordem_servicos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `data_inicial` date NOT NULL,
  `data_final` date NOT NULL,
  `garantia` varchar(100) DEFAULT NULL,
  `descricao` varchar(250) NOT NULL,
  `defeito` varchar(250) NOT NULL,
  `laudo` text NOT NULL,
  `observacoes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ordem_servicos`
--

INSERT INTO `ordem_servicos` (`id`, `id_cliente`, `id_usuario`, `status`, `data_inicial`, `data_final`, `garantia`, `descricao`, `defeito`, `laudo`, `observacoes`) VALUES
(21, 88, 2, 3, '2017-04-27', '2017-04-27', 'nao possui', 'Notebook com fonte', 'Notebook nao liga', 'asdasdf', 'asdf'),
(22, 82, 2, 2, '2017-04-27', '2017-04-27', '1 ano', 'Produto teste', 'Verificar entradas usb', 'asd', 'asd'),
(24, 123, 3, 1, '2017-04-27', '2017-04-27', 'teste', 'teste', 'teste', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` double(10,2) NOT NULL,
  `descricao` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `preco`, `descricao`) VALUES
(6, 'Bianca Schuatcy', 80.00, 'FOTOS ESTUDIO DANIEL 11/12'),
(7, 'SIRLEI', 37.50, 'REVELAÃ‡ÃƒO'),
(8, 'LUCIANO PRATA', 33.15, 'REVELAÃ‡ÃƒO'),
(9, 'PATRICIA MOREIRA', 75.00, 'FOTOS COMUNHÃƒO'),
(10, 'WILSON GRAF', 21.00, 'REVELAÃ‡ÃƒO'),
(11, 'ROSINEI MARIA', 112.00, 'FOTOS ESTUDIO DAVI MIGUEL'),
(12, 'ELIZETE ', 80.00, 'FOTOS NATAL 92600368'),
(13, 'GILBERTO DUDAT', 32.00, 'FOTOS ESTUDIO '),
(14, 'KELI DE LIMA', 88.00, 'FOTOS ESTUDIO'),
(15, 'PRISCILA FERNANDES', 10.00, 'FOTOS ESTUDIO'),
(16, 'SUELEN FUCHS', 56.00, 'FOTOS ESTUDIO'),
(17, 'LUCIANE DA SILVA', 20.00, 'FOTOS ESTUDIO'),
(18, 'ALEXSANDRA LORENA', 105.00, 'FOTOS ESTUDIO');

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
  `valor_pago` double(11,2) DEFAULT NULL,
  `observacao` varchar(250) DEFAULT NULL,
  `forma_pgto` varchar(100) DEFAULT NULL,
  `pago` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `titulos_rec`
--

INSERT INTO `titulos_rec` (`id`, `id_cliente`, `data_lanc`, `data_venc`, `data_pag`, `num_nota`, `valor_tit`, `valor_pago`, `observacao`, `forma_pgto`, `pago`) VALUES
(1, 1, '2018-04-04', '2018-04-25', NULL, 'nt0-2018', 250.00, NULL, 'Titulo lancado para teste', 'dinheiro', 'N'),
(3, 11, '2018-04-04', '2019-05-05', '1969-12-31', 'dchq2332', 2505.55, 0.00, 'teste lancamento', 'dinheiro', 'N'),
(4, 5, '2018-04-04', '2018-05-09', '0000-00-00', '2323', 458.66, 0.00, 'teste', 'cheque', 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`, `nivel_acesso_id`, `created`, `modified`) VALUES
(2, 'Center Collor', 'centercollorrionegro@gmail.com', 'center', 'f3bde234e85f27447efb394753daeefb', 1, '2017-01-16 10:09:24', '2018-03-06 16:57:32'),
(4, 'amanda', 'amandaa__becker@hotmail.com', 'amanda', '1ecc062e66a0a6582713abed7d4f2d61', 1, '2017-04-26 08:48:17', '2018-03-06 16:57:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Indexes for table `logusuarios`
--
ALTER TABLE `logusuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario_fk` (`id_usuario`);

--
-- Indexes for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordem_servicos`
--
ALTER TABLE `ordem_servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titulos_rec`
--
ALTER TABLE `titulos_rec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `logusuarios`
--
ALTER TABLE `logusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordem_servicos`
--
ALTER TABLE `ordem_servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `titulos_rec`
--
ALTER TABLE `titulos_rec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `titulos_rec`
--
ALTER TABLE `titulos_rec`
  ADD CONSTRAINT `titulos_rec_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Maio-2022 às 03:45
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja_veiculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` smallint(6) NOT NULL,
  `nome_cliente` varchar(30) NOT NULL,
  `endereco_cliente` varchar(80) NOT NULL,
  `telefone_cliente` int(11) NOT NULL,
  `rg_cliente` varchar(9) NOT NULL,
  `cpf_cliente` int(11) NOT NULL,
  `nasc_cliente` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `endereco_cliente`, `telefone_cliente`, `rg_cliente`, `cpf_cliente`, `nasc_cliente`) VALUES
(4, 'Lucas', 'rua', 121212, '2', 12121212, '0000-00-00'),
(5, 'Roger guedes', 'rua ', 121212, '21212x', 212112222, '0000-00-00'),
(6, 'Joao Felipe', 'Rua dos andradas', 121212222, '21414x', 2147483647, '2022-05-20'),
(7, 'José Arcanjo', '15 de novembro', 121212, '566212x', 212121121, '2004-06-15'),
(8, 'Nina Isadora', 'Rua Cem', 0, '16.522.58', 2147483647, '2021-05-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id_veiculo` smallint(6) NOT NULL,
  `fabricante` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `ano_fab_veiculo` year(4) DEFAULT NULL,
  `ano_mod_veiculo` year(4) DEFAULT NULL,
  `cor_veiculo` varchar(25) NOT NULL,
  `placa_veiculo` varchar(7) NOT NULL,
  `cidade_veiculo` varchar(30) NOT NULL,
  `renavam_veiculo` varchar(11) NOT NULL,
  `valor_veiculo` decimal(8,2) NOT NULL,
  `opcionais_veiculo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id_veiculo`, `fabricante`, `modelo`, `ano_fab_veiculo`, `ano_mod_veiculo`, `cor_veiculo`, `placa_veiculo`, `cidade_veiculo`, `renavam_veiculo`, `valor_veiculo`, `opcionais_veiculo`) VALUES
(4, 'fiat', 'uno', 2122, 2121, 'azul', 'asja23', 'asahsua', '2121', '212.00', 'ffdsfd'),
(5, 'fiat', 'uno', 2122, 2121, 'azul', 'asja23', 'asahsua', '2121', '21212.00', 'faasd'),
(6, 'fiat', 'uno', 2122, 2121, 'azul', 'asja23', 'asahsua', '2121', '21212.00', 'faasd'),
(7, 'fiat', 'uno', 2122, 2121, '', 'asja23', 'asahsua', '2121', '21212.00', 'faasd'),
(8, 'fiat', 'uno', 2000, 2000, 'dsdsd', 'asja23', 'asahsua', '21212', '2121.00', 'fsf'),
(9, 'fiat', 'uno', 2000, 2000, 'dsdsd', 'asja23', '', '21212', '2121.00', 'fsf'),
(10, 'fiat', 'uno', 2000, 2000, 'dsdsd', 'asja23', '', '21212', '2121.00', 'fsf'),
(11, 'fiat', 'uno', 2000, 2000, 'dsdsd', 'asja23', '', '21212', '2121.00', 'fsf'),
(12, 'fiat', 'uno', 2000, 2000, 'dsdsd', 'asja23', 'dsds', '21212', '2121.00', 'fsf'),
(13, 'Volks', 'Gol', 2000, 2005, 'Verde', '12212c', 'Porto Feirreira', '123456789', '999999.99', 'dswd'),
(14, 'Volks', 'Gol quadrado', 1999, 2000, 'Verde', '12212c', 'Leme', '90828765', '999999.99', 'sdsds');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_vendas` smallint(6) NOT NULL,
  `id_vendedor` smallint(6) DEFAULT NULL,
  `id_cliente` smallint(6) DEFAULT NULL,
  `id_veiculo` smallint(6) DEFAULT NULL,
  `data_compra` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `id_vendedor` smallint(6) NOT NULL,
  `nome_vendedor` varchar(30) NOT NULL,
  `endereco_vendedor` varchar(80) NOT NULL,
  `tel_vendedor` int(11) NOT NULL,
  `rg_vendedor` varchar(9) NOT NULL,
  `cpf_vendedor` varchar(11) NOT NULL,
  `nasc_vendedor` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id_vendedor`, `nome_vendedor`, `endereco_vendedor`, `tel_vendedor`, `rg_vendedor`, `cpf_vendedor`, `nasc_vendedor`) VALUES
(29, 'Lucas', 'rua teste', 21261212, '212121', '212121', '2022-05-20'),
(30, 'Lucas', 'rua teste', 1212121, '212121', '212121212', '2022-05-07'),
(31, 'Cleber almeida', 'rua duck de caxias', 2147483647, '212121', '1212121', '1996-03-03'),
(32, 'Manuel Carlos da Rocha', 'Rua Seis', 0, '397259098', '19180918972', '1988-02-06'),
(33, 'Laura Isabela', 'Rua Teixeira Guerra', 952968, '100988635', '06936660720', '1999-03-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id_veiculo`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_vendas`),
  ADD KEY `id_vendedor` (`id_vendedor`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_veiculo` (`id_veiculo`);

--
-- Índices para tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id_veiculo` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_vendas` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id_vendedor` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedores` (`id_vendedor`),
  ADD CONSTRAINT `vendas_ibfk_3` FOREIGN KEY (`id_veiculo`) REFERENCES `veiculos` (`id_veiculo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jul-2022 às 22:19
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

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
(10, 'Nome Tereza Tereza Nogueira', 'Rua Água Marinha', 27, '328200578', 2147483647, '1968-03-21'),
(11, 'Brenda Sônia da Rocha', 'Rua Amapá', 67, '335112092', 2147483647, '1974-07-16'),
(12, 'Murilo Benjamin Rezende', 'Rua Nova Aliança', 96, '343843493', 2147483647, '1977-05-12');

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
(16, 'PORSCHE', 'MACAN', 2018, 2018, 'AZUL', 'DWF23', 'Ribeirão Preto, SP', '723567185', '335000.00', 'Utilitário esportivo'),
(17, 'HYUNDAI', 'SANTA FÉ', 2014, 2015, 'PRATA', 'SCVG3', 'Curitiba, PR', '27362376', '96900.00', 'Airbag, freio ABS'),
(18, 'BMW', 'M 135i', 2015, 2015, 'PRETA', 'CJAJD3', 'São Paulo, SP', '7836713571', '184980.00', 'Teto solar, Travas elétricas'),
(19, 'LAND ROVER', 'DISCOVERY SPORT', 2017, 2017, 'PRATA', 'JKB32', 'Curitiba, PR', '9372836278', '209900.00', 'Sensor de chuva,  Alarme');

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

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_vendas`, `id_vendedor`, `id_cliente`, `id_veiculo`, `data_compra`) VALUES
(1, 36, 12, 19, '2022-06-14'),
(2, 38, 11, 17, '2022-06-23'),
(3, 37, 10, 18, '2022-06-06');

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
(35, 'Nair Eduarda Fernandes', 'Rua 21', 85, '400182518', '43716781061', '1954-04-26'),
(36, 'Emanuelly Lara Márcia Nogueira', 'Rua Praia de Ipanema', 11, '438551722', '52957012472', '1963-04-10'),
(37, 'Anderson Renato Moreira', 'Avenida Urupá', 69, '396167573', '81575400898', '1952-06-21'),
(38, 'Daniel Thales Matheus Teixeira', 'Rua Antonio José de Melo', 82, '143453051', '20484488015', '1988-07-22');

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
  MODIFY `id_cliente` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id_veiculo` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_vendas` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id_vendedor` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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

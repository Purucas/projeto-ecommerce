-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Maio-2018 às 00:28
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS "usuario" (
  "cpf" varchar(20) NOT NULL,
  "nome" varchar(50) NOT NULL,
  "telefone" int(11) NOT NULL,
  "email" varchar(50) NOT NULL,
  "cep" bigint(11) NOT NULL,
  "endereco" varchar(100) NOT NULL,
  "senha" varchar(12) NOT NULL,
  "tipo" varchar(12) NOT NULL,
  "datanascimento" date NOT NULL,
  "sexo" varchar(1) NOT NULL
);

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cpf`, `nome`, `telefone`, `email`, `cep`, `endereco`, `senha`, `tipo`, `datanascimento`, `sexo`) VALUES
('111.111.111.11', 'Carlos Lopes', 11111111, 'carlos@email.com', 11111111, 'rua 1 casa 1 ', 'carlos123', 'cliente', '2000-05-03', 'm'),
('222.222.222.22', 'Ryan Gracie', 22222222, 'ryan@email.com', 22222222, 'rua 2 casa 2', 'ryan123', 'vendedor', '1080-05-07', 'm'),
('333.333.333.33', 'Carlson Gracie', 33333333, 'calson@email.com', 33333333, 'rua 3 casa 3', 'carlson123', 'vendedor', '1950-05-03', 'm'),
('444.444.444.44', 'Tank Abbot', 44444444, 'tank@email.com', 44444444, 'rua 4 casa 4', 'tank123', 'cliente', '1970-05-03', 'm'),
('555.555.555.55', 'Mark Kerr', 55555555, 'mark@email.com', 55555555, 'rua 5 casa 5', 'mark123', 'cliente', '1980-04-07', 'm'),
('666.666.666.66', 'Anderson Silva', 66666666, 'anderson@email.com', 66666666, 'rua 6 casa 6', 'anderson123', 'cliente', '1988-04-07', 'm'),
('777.777.777.77', 'Ivete Sangalo', 77777777, 'ivete@email.com', 77777777, 'rua 7 casa 7', 'ivete123', 'cliente', '1970-05-02', 'f'),
('888.888.888.88', 'Silvia Saint', 88888888, 'silvia@email.com', 88888888, 'rua 8 casa 8', 'silvia123', 'vendedor', '1975-05-31', 'f'),
('999.999.999.99', 'Hal Jordan', 99999999, 'hal@email.com', 99999999, 'rua 9 casa 9', 'hal123', 'vendedor', '1966-05-21', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY ("cpf");

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

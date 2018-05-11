-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2018 às 21:27
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--
CREATE DATABASE IF NOT EXISTS `projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE projeto;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE "produtos" ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `codigodoproduto`, `marcaproduto`, `modeloproduto`, `nomeproduto`, `categoriaproduto`, `estoqueprodutos`, `precoproduto`, `fotodoproduto`) VALUES
(1, 'c1', '....', 'preto', 'camisa akira', 'camisas', 10, 10, 'camisa1'),
(2, 'l1', '...', '...', 'O cavaleiro da morte', 'livros', 50, 40, 'livro1'),
(3, 'l2', '...', '...', 'A menina que roubava livros', 'livros', 5, 25, 'livro2'),
(4, 'l3', '...', '...', 'Dead Zone', 'livros', 7, 12, 'livro3'),
(5, 'l4', '...', '...', 'O guerreiro pagão', 'livros', 2, 20, 'livro4'),
(6, 'c2', '...', 'amarelo', 'camisa mulher maravilha', 'camisas', 45, 36, 'camisa2'),
(7, 'c3', '...', 'preto', 'camisa sasuke', 'camisas', 12, 25, 'camisa3'),
(8, 'c4', '...', 'branco', 'camisa goku', 'camisas', 6, 14, 'camisa4'),
(9, 'c5', '...', 'preto', 'camisa iron', 'camisas', 2, 50, 'camisa5'),
(10, 'cel1', 'samsung', 'galaxy J1', 'Smartphone Samsung Galaxy J1', 'celular', 30, 500, 'cel1'),
(11, 'cel2', 'Apple', 'Iphone', 'Iphone 6', 'celular', 12, 600, 'cel2\r\n'),
(12, 'cel3', 'LG', 'K8', 'Smartphone LG K8 Dourado', 'celular', 32, 500, 'cel3'),
(13, 'cel4', 'Samsung', 'Galaxy A9', 'Smartphone Samsung Galaxy A9 Dourado', 'celular', 66, 500, 'cel4'),
(14, 'cel5', 'Motorola', 'Moto G4', 'Smartphone Moto G4', 'celular', 12, 800, 'cel5'),
(15, 'con1', 'Sony', 'PS4', 'Console PS4 1TB', 'games', 4, 1000, 'con1'),
(16, 'con2', 'Microsoft', 'Xbox One', 'Console Xbox One 1TB', 'games', 55, 1000, 'con2\r\n'),
(17, 'con3', 'Microsoft', 'Xbox One S', 'Console Xbox One S 500 GB', 'games', 6, 1000, 'con3'),
(18, 'con4', 'Microsoft', 'Xbox 360', 'Console Xbox 360 Fat', 'games', 6, 600, 'con4'),
(19, 'con5', 'Microsoft', 'Xbox 360 Slim', 'Console Xbox 360 Slim', 'games', 7, 600, 'con5'),
(20, 'ele1', 'Eletrolux', 'RDE33', 'Refrigerador Eletrolux RDE33', 'eletrodomésticos', 3, 2000, 'ele1'),
(21, 'ele2', 'Brastemp', '6 bocas', 'Fogão Brastemp 6 bocas', 'eletrodomésticos', 6, 300, 'ele2'),
(22, 'ele3', 'Eletrolux', 'LT10B Turbo', 'Lavadora de Roupas Electrolux 10 kg LT10B Turbo', 'eletrodomésticos', 8, 1000, 'ele3'),
(23, 'ele4', ' Panasonic', 'NN-ST254', 'Forno de Micro-ondas Panasonic Dia-a-Dia com Desodorizador e Receitas Pré-programadas NN-ST254', 'eletrodomésticos', 1, 200, 'ele4'),
(24, 'ele5', 'Samsung', 'Inverter Frio', 'Ar-Condicionado Split Samsung Inverter Frio 9.000 BTUs', 'eletrodomésticos', 2, 1000, 'ele5'),
(25, 'inf1', 'Lenovo', 'Dual Core 4GB', 'Notebook Lenovo Dual Core 4GB 1TB Tela 15.6', 'informática', 12, 1500, 'inf1'),
(26, 'inf2', 'AOC', 'HD E970SWNL', 'Monitor Widescreen LCD LED 18.5” AOC HD E970SWNL', 'informática', 3, 600, 'inf2'),
(27, 'inf3', 'HP ', 'DeskJet Ink Advantage 2136', 'Multifuncional HP DeskJet Ink Advantage 2136', 'informática', 6, 300, 'inf3'),
(28, 'inf4', 'Sandisk', 'Cruzer Fit', 'Pendrive Sandisk Cruzer Fit Z33 16GB', 'informática', 2, 10, 'inf4'),
(29, 'inf5', 'Toshiba', 'Canvio Basics', 'HD Externo Toshiba 1TB Portátil Canvio Basics Preto USB 3.0', 'informática', 1, 300, 'inf5'),
(30, 'mov1', 'Luana', 'Conquista', 'Cama Bibox Solteiro Imbuia/Branco/Preto Juvenil Luana - Conquista', 'moveis', 3, 500, 'mov1'),
(31, 'mov2', 'Ortobom ', 'Union Ortopedic', 'Cama Box Conjugada Casal Ortobom Union Ortopedic com Espuma D28 55 x 138 x 188 cm - Branco/Preto', 'moveis', 6, 1000, 'mov2'),
(32, 'mov3', 'Imcal', '2 Portas Monalisa', 'Cristaleira 2 Portas Monalisa Castanho Texturizado - Imcal ', 'moveis', 2, 500, 'mov3\r\n'),
(33, 'mov4', 'Astra', 'A21', 'Armário A21 Branco de Sobrepor para Banheiro Astra', 'moveis', 7, 300, 'mov4'),
(34, 'mov5', 'Eclipse', 'Mão e Formão', 'Poltrona Eclipse Mão e Formão', 'moveis', 6, 800, 'mov5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE "usuario" ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cpf`, `nome`, `telefone`, `email`, `cep`, `endereco`, `senha`, `tipo`, `datanascimento`, `sexo`) VALUES
('111.111.111.11', 'Carlos Lopes', 111111111, 'carlos@email.com', 11111111111, 'rua 1 casa 1 ', 'carlos123', 'cliente', '2000-05-03', 'm'),
('222.222.222.22', 'Ryan Gracie', 22222222, 'ryan@email.com', 22222222222, 'rua 2 casa 2', 'ryan123', 'vendedor', '1080-05-07', 'm'),
('333.333.333.33', 'Carlson Gracie', 33333333, 'calson@email.com', 33333333333, 'rua 3 casa 3', 'carlson123', 'vendedor', '1950-05-03', 'm'),
('444.444.444.44', 'Tank Abbot', 44444444, 'tank@email.com', 44444444444, 'rua 4 casa 4', 'tank123', 'cliente', '1970-05-03', 'm'),
('555.555.555.55', 'Mark Kerr', 55555555, 'mark@email.com', 55555555555, 'rua 5 casa 5', 'mark123', 'cliente', '1980-04-07', 'm'),
('666.666.666.66', 'Anderson Silva', 66666666, 'anderson@email.com', 66666666666, 'rua 6 casa 6', 'anderson123', 'cliente', '1988-04-07', 'm'),
('777.777.777.77', 'Ivete Sangalo', 77777777, 'ivete@email.com', 77777777, 'rua 7 casa 7', 'ivete123', 'cliente', '1970-05-02', 'f'),
('888.888.888.88', 'Silvia Saint', 88888888, 'silva@email.com', 88888888, 'rua 8 casa 8', 'silvia123', 'vendedor', '1975-05-31', 'f'),
('999.999.999.99', 'Hal Jordan', 99999999, 'hal@email.com', 99999999, 'rua 9 casa 9', 'hal123', 'vendedor', '1966-05-21', 'm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

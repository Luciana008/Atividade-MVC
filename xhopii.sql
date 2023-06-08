-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jun-2023 às 00:43
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
('12300025262', 'Casimiro', 'Migel', '1993-10-20', '18996320412', 'ceze@outlook.com', 'ceze123'),
('12312312310', 'Roguer', 'Guedes', '1992-03-12', '18912312312', 'guedes10@gmail.com', 'amem123'),
('77700707007', 'Cristiano', 'Ronaldo', '1987-07-07', '18900070707', 'cr7@gmail.com', 'sete7');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `cpf` varchar(20) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `salario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `salario`) VALUES
('32012902790', 'Sandra', 'Sampaio', '2023-06-22', '18 997880999', 'sdandra@gmail.com', 500),
('99312312388', 'Sofia', 'Williams', '2008-06-28', '1898811199', 'swaa@gmail.com', 6000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `nome` varchar(70) NOT NULL,
  `fabricante` varchar(30) NOT NULL,
  `descricao` varchar(90) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`nome`, `fabricante`, `descricao`, `valor`) VALUES
('Produto 1', 'SDA', 'AAAA', 10),
('produto 2', 'asfg', 'ssss', 200),
('produto 3', 'fhcc', 'aaaet', 40),
('produto 4', 'fhcc', 'aaaet', 50);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

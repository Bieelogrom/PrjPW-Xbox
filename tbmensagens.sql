-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Tempo de geração: 23-Jun-2023 às 03:51
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdxbox`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmensagens`
--

CREATE TABLE `tbmensagens` (
  `ID_usuarios` int(11) NOT NULL,
  `nome` varchar(124) NOT NULL,
  `email` varchar(124) NOT NULL,
  `motcont` varchar(124) NOT NULL,
  `comentario` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbmensagens`
--

INSERT INTO `tbmensagens` (`ID_usuarios`, `nome`, `email`, `motcont`, `comentario`) VALUES
(6, 'Gabriel Ferreira Amorim', 'Gabrielamorim15436@gmail.com', 'Reclamações', 'por favor, adicionar mais conteúdo ao site.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbmensagens`
--
ALTER TABLE `tbmensagens`
  ADD PRIMARY KEY (`ID_usuarios`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbmensagens`
--
ALTER TABLE `tbmensagens`
  MODIFY `ID_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/08/2025 às 19:26
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `idLivro` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`idLivro`, `titulo`, `link`) VALUES
(1, '20th century boys v1', '20th-century-boys-v1.png'),
(2, 'ataque ao titã v1', 'ataque-ao-tita-v1.png'),
(3, 'avatar v1', 'avatar-v1.png'),
(4, 'berseak v1', 'berserk-v1.png'),
(5, 'bleach v1', 'bleach-v1.png'),
(6, 'dandadan v1', 'dandadan-v1.png'),
(7, 'death note v1', 'death-note-v1.png'),
(8, 'demon slayer v1', 'demon-slayer-v1.png'),
(9, 'diário de uma apotecaria v1', 'diario-de-uma-apotecaria-v01.png'),
(10, 'dragon ball z v1', 'dragon-ball-z-v1.png'),
(11, 'frierem v1', 'frieren-v1.png'),
(12, 'hunter x hunter v1', 'hunter-x-hunter-v1.png'),
(13, 'Jujutsu Kaisen v1', 'Jujutsu_Kaisen_v1.png'),
(14, 'one piece volume v1', 'livro-manga-one-piece-volume-1.png'),
(15, 'mob psycho 100 v1', 'mob-psycho-100-v01.png'),
(16, 'one punch man v1', 'one-punch-man-v1.png'),
(17, 'pokemon rgb v1', 'pokemon-rgb-v1.png'),
(18, 'ranma v1', 'ranma-v1.png'),
(19, 'record of ragnarok v1', 'record-of-ragnarok-v1.png'),
(20, 'spy x family v1', 'spy-x-family-v01.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`idLivro`);

--
-- Índices de tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

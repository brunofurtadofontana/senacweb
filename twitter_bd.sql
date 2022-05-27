-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Maio-2022 às 02:20
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `twitter_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_tweet` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `mensagem` longtext NOT NULL,
  `dataComentario` date NOT NULL,
  `horaComentario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_tweet`, `id_usuario`, `mensagem`, `dataComentario`, `horaComentario`) VALUES
(1, 65, 5, 'asdasd', '2022-05-27', '01:06:20'),
(2, 65, 5, 'teste sem imagem comentario', '2022-05-27', '01:08:58'),
(3, 64, 5, 'asdsadsad asd asd as', '2022-05-27', '01:15:51'),
(4, 53, 5, 'arvores', '2022-05-27', '01:16:12'),
(5, 65, 5, 'asdsad', '2022-05-27', '01:21:30'),
(6, 65, 5, 'ultimo comentario', '2022-05-27', '01:40:20'),
(7, 65, 1, 'Comentario do bruno', '2022-05-27', '01:46:05'),
(8, 66, 1, 'serie b', '2022-05-27', '02:00:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tweet`
--

CREATE TABLE `tweet` (
  `id_tweet` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `tweet` varchar(255) NOT NULL,
  `data_inclusao` date NOT NULL,
  `hora_inclusao` time NOT NULL,
  `image_tweet` varchar(255) NOT NULL,
  `curtir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `id_usuario`, `tweet`, `data_inclusao`, `hora_inclusao`, `image_tweet`, `curtir`) VALUES
(16, 1, 'Tweet sobre a natureza', '2022-05-20', '02:04:28', '2022.05.20-02.04.28.jpg', 0),
(17, 1, 'Mais um teste com imagem', '2022-05-20', '02:05:27', '2022.05.20-02.05.27.jpg', 0),
(24, 5, 'Post do jose', '2022-05-24', '02:06:16', '2022.05.24-02.06.16.jpg', 0),
(25, 1, 'aishduiashd', '2022-05-24', '02:23:15', '2022.05.24-02.23.15.jpg', 0),
(26, 1, 'asdsadsadsadsadsad asd asd asd asdsadsad asd asd', '2022-05-24', '02:23:20', '2022.05.24-02.23.20', 0),
(27, 1, 'asdsad asd asd asd', '2022-05-24', '02:24:40', '2022.05.24-02.24.40', 0),
(28, 1, 'teste img', '2022-05-24', '02:25:22', '2022.05.24-02.25.22', 0),
(29, 1, 'asdasd as', '2022-05-24', '02:26:22', '2022.05.24-02.26.22', 0),
(30, 1, 'asdasd as', '2022-05-24', '02:26:34', '2022.05.24-02.26.34', 0),
(31, 1, 'img', '2022-05-24', '02:27:10', '2022.05.24-02.27.10', 0),
(32, 1, 'img', '2022-05-24', '02:29:03', '', 0),
(33, 1, '', '2022-05-24', '02:29:07', '', 0),
(34, 1, 'asdfgg', '2022-05-24', '02:29:19', '', 0),
(35, 1, 'asdfgg', '2022-05-24', '02:29:57', '', 0),
(36, 1, 'asdfgg', '2022-05-24', '02:30:21', '', 0),
(37, 1, 'asdfgg', '2022-05-24', '02:30:37', '', 0),
(38, 1, 'asdfgg', '2022-05-24', '02:30:59', '2022.05.24-02.30.59', 1),
(39, 1, 'asdfgg', '2022-05-24', '02:31:17', '2022.05.24-02.31.17', 0),
(40, 1, 'asdfgg', '2022-05-24', '02:31:34', '2022.05.24-02.31.34', 0),
(41, 1, 'a', '2022-05-24', '02:31:36', '2022.05.24-02.31.36', 0),
(42, 1, 'a', '2022-05-24', '02:32:18', '2022.05.24-02.32.18', 0),
(43, 1, 'a', '2022-05-24', '02:32:53', '', 0),
(44, 1, 'asda', '2022-05-24', '02:32:56', '', 0),
(45, 1, 'teste', '2022-05-24', '02:33:27', '2022.05.24-02.33.27', 0),
(46, 1, 'asdasd teste', '2022-05-24', '02:33:57', '', 0),
(47, 1, 'asdkkk', '2022-05-24', '02:34:26', '', 0),
(48, 1, 'ultimo', '2022-05-24', '02:35:32', 'NULL', 0),
(49, 1, 'feitp', '2022-05-24', '02:36:43', 'NULL', 0),
(50, 1, 'asdasd', '2022-05-24', '02:41:21', '2022.05.24-02.41.21.jpg', 0),
(51, 1, 'asdasd', '2022-05-24', '02:41:21', 'NULL', 0),
(52, 1, 'asdasd', '2022-05-24', '02:43:25', '2022.05.24-02.43.25.jpg', 4),
(53, 1, 'teste com imagem', '2022-05-24', '02:43:42', '2022.05.24-02.43.42.jpg', 9),
(61, 5, 'Natureza é linda!', '2022-05-25', '01:16:17', '2022.05.25-01.16.17.jpg', 0),
(63, 5, 'teste com imagem', '2022-05-25', '01:20:21', '2022.05.25-01.20.21.jpg', 0),
(64, 5, 'Teste sem imagem', '2022-05-25', '01:21:54', 'NULL', 1),
(65, 5, 'teste com imagem', '2022-05-25', '01:22:20', '2022.05.25-01.22.20.jpg', 6),
(66, 1, 'Testando um tweet na quinta feira', '2022-05-27', '01:55:35', '2022.05.27-01.55.35.png', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `dataNasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `dataNasc`) VALUES
(1, 'Bruno Fontana', 'bruno@gmail.com', '123123', '1996-04-17'),
(2, 'Maria', 'maria@gmail.com', '4321', '2000-06-01'),
(3, 'asdsad', 'asdas@asdas.com', '2468', '2000-02-12'),
(4, '', '', '', '0000-00-00'),
(5, 'Jose', 'jose@gmail.com', '54321', '2001-05-15');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Índices para tabela `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id_tweet`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id_tweet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

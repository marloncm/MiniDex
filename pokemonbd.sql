-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2023 às 01:55
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pokemonbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carrossel`
--

CREATE TABLE `tb_carrossel` (
  `id_carrossel` int(11) NOT NULL COMMENT 'id do pokemon',
  `nome` varchar(20) NOT NULL COMMENT 'nome do pokemon',
  `url_img` varchar(300) NOT NULL COMMENT 'url da imagem',
  `descricao` varchar(300) NOT NULL COMMENT 'descricao do pokemon',
  `posicao` int(11) NOT NULL COMMENT 'posição da imagem no carrossel'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_carrossel`
--

INSERT INTO `tb_carrossel` (`id_carrossel`, `nome`, `url_img`, `descricao`, `posicao`) VALUES
(1, 'Gardevoir', 'https://archives.bulbagarden.net/media/upload/thumb/f/f8/0282Gardevoir.png/250px-0282Gardevoir.png', 'Gardevoir, the Embrace Pokémon. Gardevoir will use all of its psychic energy to protect a Trainer it has made a deep connection with.', 1),
(2, 'Lapras', 'https://archives.bulbagarden.net/media/upload/thumb/9/99/0131Lapras.png/250px-0131Lapras.png', 'Extremely intelligent, able to understand human speech. A Pokémon that has been over-hunted almost to extinction. It can ferry people over water.', 2),
(3, 'Vaporeon', 'https://archives.bulbagarden.net/media/upload/thumb/6/6d/0134Vaporeon.png/250px-0134Vaporeon.png', 'Lives close to water. Its long tail is ridged with a fin which is often mistaken for a mermaid\'s.', 3),
(4, 'Aron', 'https://archives.bulbagarden.net/media/upload/thumb/3/38/0304Aron.png/250px-0304Aron.png', 'This Pokémon has a body of steel. To make its body, Aron feeds on iron ore that it digs from mountains. Occasionally, it causes major trouble by eating bridges and rails', 4),
(5, 'Dunsparce', 'https://archives.bulbagarden.net/media/upload/thumb/c/c0/0206Dunsparce.png/250px-0206Dunsparce.png', 'Dunsparce has a drill for its tail. It uses this tail to burrow into the ground backwards. This Pokémon is known to make its nest in complex shapes deep under the ground.', 5),
(6, 'Eevee', 'https://archives.bulbagarden.net/media/upload/thumb/4/4c/0133Eevee.png/250px-0133Eevee.png', 'Eevee, the Evolution Pokémon. It has the potential to evolve into any one of three different Pokémon.', 6),
(7, 'Pikachu', 'https://archives.bulbagarden.net/media/upload/thumb/2/21/0025Pikachu-Original.png/110px-0025Pikachu-Original.png', 'Pikachu, the Mouse Pokémon. It can generate electric attacks from the electric pouches located in both of its cheeks.', 7),
(9, 'Mudkip', 'https://archives.bulbagarden.net/media/upload/thumb/2/26/0258Mudkip.png/250px-0258Mudkip.png', '	In water, Mudkip breathes using the gills on its cheeks. If it is faced with a tight situation in battle, this Pokémon will unleash its amazing power - it can crush rocks bigger than itself.', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(130) NOT NULL,
  `username` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `tipo_usuario` varchar(1) NOT NULL COMMENT '"A" admin, "U" usuário'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `username`, `senha`, `tipo_usuario`) VALUES
(1, 'Fulano', 'user', 'user', 'U'),
(2, 'Marlon', 'admin', 'admin', 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_carrossel`
--
ALTER TABLE `tb_carrossel`
  ADD PRIMARY KEY (`id_carrossel`),
  ADD UNIQUE KEY `posicao` (`posicao`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_carrossel`
--
ALTER TABLE `tb_carrossel`
  MODIFY `id_carrossel` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id do pokemon', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

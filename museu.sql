-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2019 às 04:42
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `colecao`
--

CREATE TABLE `colecao` (
  `id_colecao` varchar(45) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `num_total_itens_CAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `colecao`
--

INSERT INTO `colecao` (`id_colecao`, `descricao`, `num_total_itens_CAT`) VALUES
('256554', 'ColeÃ§Ã£o A', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `Num_Telefone_fixo` int(11) DEFAULT NULL,
  `Num_Telefone_Cell` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `Usuario_CPF` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` varchar(45) NOT NULL,
  `imagem_localizacao` varchar(300) NOT NULL,
  `Item_id_item` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id_item` varchar(45) NOT NULL,
  `tombo` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `largura` varchar(10) DEFAULT NULL,
  `altura` varchar(10) DEFAULT NULL,
  `profundidade` varchar(10) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `obs` varchar(500) DEFAULT NULL,
  `conservacao` varchar(45) NOT NULL,
  `data_criacao` date NOT NULL,
  `autor_descobridor` varchar(45) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `tecnica` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `reserva` tinyint(1) NOT NULL,
  `img` varchar(200) NOT NULL,
  `colecao_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `idLocal` varchar(45) NOT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `nome_local` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE `permissao` (
  `idpermissao` varchar(45) NOT NULL,
  `criar_item` tinyint(1) NOT NULL,
  `criar_sala` tinyint(1) NOT NULL,
  `criar_colecao` tinyint(1) NOT NULL,
  `editar_sala` tinyint(1) NOT NULL,
  `editar_item` tinyint(1) NOT NULL,
  `editar_colecao` tinyint(1) NOT NULL,
  `pesquisar` tinyint(1) NOT NULL,
  `excluir_item` tinyint(1) NOT NULL,
  `exluir_sala` tinyint(1) NOT NULL,
  `excluir_colecao` tinyint(1) NOT NULL,
  `criar_usuario` tinyint(1) NOT NULL,
  `editar_usuario` tinyint(1) NOT NULL,
  `excluir_usuario` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `permissao`
--

INSERT INTO `permissao` (`idpermissao`, `criar_item`, `criar_sala`, `criar_colecao`, `editar_sala`, `editar_item`, `editar_colecao`, `pesquisar`, `excluir_item`, `exluir_sala`, `excluir_colecao`, `criar_usuario`, `editar_usuario`, `excluir_usuario`) VALUES
('1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacaosecaocolecao`
--

CREATE TABLE `relacaosecaocolecao` (
  `Local_idLocal` varchar(45) NOT NULL,
  `colecao_id_colecao` varchar(45) NOT NULL,
  `saidaOuEntrada` tinyint(1) DEFAULT NULL,
  `data_movimento` date DEFAULT NULL,
  `Item_id_item` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cpf` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` tinyint(4) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `pergunta` varchar(60) NOT NULL,
  `resposta` varchar(45) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `id_permissao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cpf`, `senha`, `nome`, `email`, `data_nascimento`, `cidade`, `bairro`, `rua`, `numero`, `complemento`, `cep`, `pergunta`, `resposta`, `tipo`, `id_permissao`) VALUES
('46920024845', '123', 'Lucas', 'ronaldojr20@hotmail.com', '1998-03-20', 'dasdas', 'ddasd', 'rteste', 15, 'sdadasd', '468547123', 'Nome da mÃ£e', 'selma', 'Administrador', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colecao`
--
ALTER TABLE `colecao`
  ADD PRIMARY KEY (`id_colecao`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`Usuario_CPF`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`,`Item_id_item`),
  ADD KEY `fk_imagem_Item_idx` (`Item_id_item`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`,`colecao_id`),
  ADD KEY `fk_Item_colecao1_idx` (`colecao_id`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`idLocal`);

--
-- Indexes for table `permissao`
--
ALTER TABLE `permissao`
  ADD PRIMARY KEY (`idpermissao`);

--
-- Indexes for table `relacaosecaocolecao`
--
ALTER TABLE `relacaosecaocolecao`
  ADD PRIMARY KEY (`Local_idLocal`,`colecao_id_colecao`,`Item_id_item`),
  ADD KEY `fk_relacaoSecaoCategoria_colecao1_idx` (`colecao_id_colecao`),
  ADD KEY `fk_relacaoSecaoColecao_Item1_idx` (`Item_id_item`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`,`id_permissao`),
  ADD KEY `fk_Usuario_permissao1_idx` (`id_permissao`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `fk_Contato_Usuario1` FOREIGN KEY (`Usuario_CPF`) REFERENCES `usuario` (`CPF`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `fk_imagem_Item` FOREIGN KEY (`Item_id_item`) REFERENCES `item` (`id_item`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_Item_colecao1` FOREIGN KEY (`colecao_id`) REFERENCES `colecao` (`id_colecao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `relacaosecaocolecao`
--
ALTER TABLE `relacaosecaocolecao`
  ADD CONSTRAINT `fk_relacaoSecaoCategoria_Local1` FOREIGN KEY (`Local_idLocal`) REFERENCES `local` (`idLocal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_relacaoSecaoCategoria_colecao1` FOREIGN KEY (`colecao_id_colecao`) REFERENCES `colecao` (`id_colecao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_relacaoSecaoColecao_Item1` FOREIGN KEY (`Item_id_item`) REFERENCES `item` (`id_item`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_permissao1` FOREIGN KEY (`id_permissao`) REFERENCES `permissao` (`idpermissao`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

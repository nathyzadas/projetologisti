-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Maio-2023 às 17:05
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id12834938_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cnpj` varchar(50) DEFAULT NULL,
  `uf` varchar(3) DEFAULT NULL,
  `tipo_estabelecimento` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `nome`, `cnpj`, `uf`, `tipo_estabelecimento`) VALUES
(1, 'PROHALL COSMETIC LTDA.', '24.815.160/0001-57', 'SP', 'Loja'),
(2, 'WELLA BRASIL LTDA.', '37.374.821/0001-06', 'SP', 'Empresa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacoes`
--

CREATE TABLE `movimentacoes` (
  `entrada` int(11) DEFAULT NULL,
  `saida` int(11) DEFAULT NULL,
  `devolucao` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `movimentacoes`
--

INSERT INTO `movimentacoes` (`entrada`, `saida`, `devolucao`) VALUES
(0, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacoes_estoque`
--

CREATE TABLE `movimentacoes_estoque` (
  `id` int(11) NOT NULL,
  `produto` int(11) DEFAULT NULL,
  `quant_mov` decimal(10,0) DEFAULT NULL,
  `motivo` varchar(500) DEFAULT NULL,
  `data_mov` datetime NOT NULL DEFAULT current_timestamp(),
  `movimentacao` int(11) NOT NULL,
  `responsavel` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `movimentacoes_estoque`
--

INSERT INTO `movimentacoes_estoque` (`id`, `produto`, `quant_mov`, `motivo`, `data_mov`, `movimentacao`, `responsavel`) VALUES
(1, 1, '10', 'jjhjk', '2023-05-19 12:02:17', 1, 'Richard'),
(2, 1, '10', 'nenhum', '2023-05-19 12:02:36', 0, 'Richard');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigo` int(11) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `quantidade` decimal(10,0) DEFAULT NULL,
  `unidade` varchar(60) DEFAULT NULL,
  `tipo` varchar(60) DEFAULT NULL,
  `fornecedor` varchar(100) NOT NULL,
  `data_cadastro` datetime DEFAULT current_timestamp(),
  `data_alteracao` datetime DEFAULT NULL,
  `responsavel` varchar(60) DEFAULT NULL,
  `valor_unidade` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo`, `descricao`, `quantidade`, `unidade`, `tipo`, `fornecedor`, `data_cadastro`, `data_alteracao`, `responsavel`, `valor_unidade`) VALUES
(1, 'Shampoo Degan Limpeza Profunda Detox Vagano 1L', '100', 'Unidade', 'Shampoo', '1', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '99.90'),
(2, 'Shampoo Home Care Biomask 300ml', '100', 'Unidade', 'Shampoo', '1', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '34.90'),
(3, 'Condicionador ou Leave-in Extreme Repair Macadâmia 300ml', '100', 'Unidade', 'Condicionador', '1', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '39.90'),
(4, 'Condicionador Home Care Biomask 300ml', '50', 'Unidade', 'Condicionador', '1', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '34.90'),
(5, 'Condicionador Pós Química Select Care 300ml', '100', 'Unidade', 'Condicionador', '1', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '34.90'),
(6, 'Máscara Neutralizadora de PH Equalize Mask 500g', '100', 'Unidade', 'Máscara', '1', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '74.90'),
(7, 'Máscara Neutralizadora de PH Equalize Mask 500g', '100', 'Unidade', 'Máscara', '1', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '55.90'),
(8, 'Shampoo Matizador e Manutenção para Loiros All Blond 300ml', '40', 'Unidade', 'Shampoo', '1', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '24.90'),
(9, 'Máscara de Reconstrução SOS Proboo Fiber 500g', '100', 'Unidade', 'Máscara', '1', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '69.90'),
(10, 'Óleo Reparador de Pontas Sérum Absolut Oil 60ml', '100', 'Unidade', 'Óleo', '1', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '7.90'),
(11, 'Condicionador Nutri-Enrich Wella 1L', '100', 'Unidade', 'Condicionador', '2', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '125.04'),
(12, 'Shampoo Wella Nutri-Enrich 1L', '100', 'Unidade', 'Shampoo', '2', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '118.90'),
(13, 'Máscara Wella Professionals Invigo Nutri-Enrich 150ml', '40', 'Unidade', 'Máscara', '2', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '72.90'),
(14, 'Invigo Nutri-Enrich Wonder Balm Leave in Spray 250ml', '100', 'Unidade', 'Spray', '2', '2023-05-19 10:00:00', '0000-00-00 00:00:00', 'Richard', '51.80');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorios`
--

CREATE TABLE `relatorios` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `relatorios`
--

INSERT INTO `relatorios` (`id`, `nome`) VALUES
(1, 'Relatorio Estoque - Produto por ordem alfabetica'),
(2, 'Relatorio Estoque - Produto por menor  quantidade em estoque'),
(3, 'Relatorio Estoque - Produto por maior quantidade em estoque'),
(4, 'Relatorio Estoque - Produto por data de cadastro'),
(5, 'Relatorio Estoque - Produto por data de alteracao'),
(6, 'Relatorio Estoque - Produto por codigo'),
(7, 'Relatorio Estoque - Produto por unidade'),
(8, 'Relatorio Estoque - Produto por tipo de produto'),
(9, 'Relatorio Estoque - Produto por excesso de estoque'),
(10, 'Relatorio Estoque - Produto por estoque minimo'),
(11, 'Relatorio Estoque - Produto por responsavel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `suporte`
--

CREATE TABLE `suporte` (
  `id` int(11) NOT NULL,
  `mensagem` varchar(900) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'Richard', '25d55ad283aa400af464c76d713c07ad');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `movimentacoes_estoque`
--
ALTER TABLE `movimentacoes_estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `suporte`
--
ALTER TABLE `suporte`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `movimentacoes_estoque`
--
ALTER TABLE `movimentacoes_estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `relatorios`
--
ALTER TABLE `relatorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `suporte`
--
ALTER TABLE `suporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

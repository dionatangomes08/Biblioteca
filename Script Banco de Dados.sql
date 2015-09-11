CREATE DATABASE biblioteca;
USE biblioteca;
-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE IF NOT EXISTS `livro` (
  `idlivro` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `escritor` varchar(100) NOT NULL,
  `anoedicao` smallint(6) NOT NULL,
  `classificacao` smallint(6) NOT NULL,
  PRIMARY KEY (`idlivro`)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `idpessoa` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `datanascimento` date NOT NULL,
  `cpf` varchar(14) NOT NULL,
  PRIMARY KEY (`idpessoa`)
);


-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE IF NOT EXISTS `emprestimo` (
  `idemprestimo` bigint(20) NOT NULL AUTO_INCREMENT,
  `dataemprestimo` date NOT NULL,
  `datahoradevolucao` timestamp NOT NULL,
  `idpessoa` bigint(20) NOT NULL,
  `idlivro` bigint(20) NOT NULL,
  PRIMARY KEY (`idemprestimo`),
  KEY `emprestimo_livro` (`idlivro`),
  KEY `emprestimo_pessoa` (`idpessoa`),
  CONSTRAINT `emprestimo_livro` FOREIGN KEY (`idlivro`) REFERENCES `livro` (`idlivro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `emprestimo_pessoa` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`idpessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
);


INSERT INTO `livro` (`nome`, `escritor`, `anoedicao`, `classificacao`) VALUES
('O Código Da Vinci', 'Dan Brown', 2007, 18),
('Anjos e Demonios', 'Dan Brown', 2005, 18),
('Histórias Infantis', 'Historiador', 2015, 8);





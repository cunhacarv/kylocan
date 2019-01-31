-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Jan-2019 às 14:14
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `idFilme` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `duracao` varchar(20) NOT NULL,
  `sinopse` text NOT NULL,
  `diretor` varchar(100) NOT NULL,
  `faixaEtaria` varchar(20) NOT NULL,
  `inicioCartaz` varchar(15) NOT NULL,
  `fimCartaz` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`idFilme`, `titulo`, `duracao`, `sinopse`, `diretor`, `faixaEtaria`, `inicioCartaz`, `fimCartaz`) VALUES
(3, 'Homem-Aranha', '2h13min', 'Depois de atuar ao lado dos Vingadores, chegou a hora do pequeno Peter Parker (Tom Holland) voltar para casa e para a sua vida, já não mais tão normal. Lutando diariamente contra pequenos crimes nas redondezas, ele pensa ter encontrado a missão de sua vida quando o terrível vilão Abutre (Michael Keaton) surge amedrontando a cidade. O problema é que a tarefa não será tão fácil como ele imaginava.', '', '', '', ''),
(4, 'X-men', '2h', 'X-Men é uma série de filmes americana de super-heróis baseada equipe homônima criada por Stan Lee e Jack Kirby e que aparece nas revistas em quadrinhos publicadas pela Marvel Comics.', '', '', '', ''),
(5, 'Valkyrie', '1h50min', '2ª Guerra Mundial. Claus von Stauffenberg (Tom Cruise) é um coronel que retorna à Alemanha gravemente ferido, devido à guerra na África. Ao chegar ele se envolve em uma conspiração para acabar com o governo local, que tem por objetivo matar Adolph Hitler (David Bamber). O objetivo do grupo é pôr em prática a Operação Valquíria, um plano já existente que prevê a implementação de um governo que conduza a Alemanha após a morte de seu líder. Aos poucos o coronel Claus ganha destaque na organização, sendo encarregado para que cometa o assassinato de Hitler.', '', '', '', ''),
(6, 'Gladiador', '2h50min', 'Commodus toma o poder e se livra de Maximus, um dos generais favoritos de seu predecessor e pai, o grande filósofo, rei e imperador Marcus Aurelius. O bravo guerreiro é forçado a se tornar gladiador nas arenas e precisa lutar pela vida.', '', '', '', ''),
(7, 'A era do Gelo', '1h21min', 'O mamute Manny (Ray Romano/Diogo Vilela), o tigre de dente de sabre Diego (Dennis Leary/Márcio Garcia) e a preguiça-gigante Sid (John Leguizamo/Tadeu Melo) são amigos em uma época muito distante dos dias atuais e vivem suas vidas em meio a muito gelo. Até o dia em que eles encontram um menino esquimó totalmente sozinho, longe de seus pais, e decidem que precisam ajudá-lo a achar a sua família. Enquanto isso, o esquilo pré-histórico Scrat segue na sua saga para manter sua amada noz protegida de outros predadores.', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme_genero`
--

CREATE TABLE `filme_genero` (
  `idFilme_Genero` int(11) NOT NULL,
  `idFilme` int(11) NOT NULL,
  `idGenero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `idGenero` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `idPagamento` int(11) NOT NULL,
  `idForma` int(11) NOT NULL,
  `qtdAssentos` int(11) NOT NULL,
  `valorRecebido` double NOT NULL,
  `dataPagamento` date NOT NULL,
  `idSessao` int(11) NOT NULL,
  `idOrigem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento_formas`
--

CREATE TABLE `pagamento_formas` (
  `idForma` int(11) NOT NULL,
  `nomeForma` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento_origens`
--

CREATE TABLE `pagamento_origens` (
  `idOrigem` int(11) NOT NULL,
  `nomeOrigem` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `idSala` int(11) NOT NULL,
  `numSala` int(11) NOT NULL,
  `assentos` int(11) NOT NULL,
  `tipoFilme` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessao`
--

CREATE TABLE `sessao` (
  `idSessao` int(11) NOT NULL,
  `horaInicio` date NOT NULL,
  `idSala` int(11) NOT NULL,
  `idFilme` int(11) NOT NULL,
  `dublado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`idFilme`);

--
-- Indexes for table `filme_genero`
--
ALTER TABLE `filme_genero`
  ADD PRIMARY KEY (`idFilme_Genero`),
  ADD KEY `idGenero_FK` (`idGenero`),
  ADD KEY `idFilme2_FK` (`idFilme`) USING BTREE;

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`idPagamento`),
  ADD KEY `idSessao_FK` (`idSessao`),
  ADD KEY `idOrigem_FK` (`idOrigem`),
  ADD KEY `idForma_FK` (`idForma`);

--
-- Indexes for table `pagamento_formas`
--
ALTER TABLE `pagamento_formas`
  ADD PRIMARY KEY (`idForma`);

--
-- Indexes for table `pagamento_origens`
--
ALTER TABLE `pagamento_origens`
  ADD PRIMARY KEY (`idOrigem`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`idSala`);

--
-- Indexes for table `sessao`
--
ALTER TABLE `sessao`
  ADD PRIMARY KEY (`idSessao`),
  ADD KEY `idSala_FK` (`idSala`),
  ADD KEY `idFilme_FK` (`idFilme`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `idFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `filme_genero`
--
ALTER TABLE `filme_genero`
  MODIFY `idFilme_Genero` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `idPagamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagamento_formas`
--
ALTER TABLE `pagamento_formas`
  MODIFY `idForma` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagamento_origens`
--
ALTER TABLE `pagamento_origens`
  MODIFY `idOrigem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `idSala` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sessao`
--
ALTER TABLE `sessao`
  MODIFY `idSessao` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `filme_genero`
--
ALTER TABLE `filme_genero`
  ADD CONSTRAINT `idFilme2_FK` FOREIGN KEY (`idFilme`) REFERENCES `filme` (`idFilme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idGenero_FK` FOREIGN KEY (`idGenero`) REFERENCES `genero` (`idGenero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `idForma_FK` FOREIGN KEY (`idForma`) REFERENCES `pagamento_formas` (`idForma`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idOrigem_FK` FOREIGN KEY (`idOrigem`) REFERENCES `pagamento_origens` (`idOrigem`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idSessao_FK` FOREIGN KEY (`idSessao`) REFERENCES `sessao` (`idSessao`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `sessao`
--
ALTER TABLE `sessao`
  ADD CONSTRAINT `idFilme_FK` FOREIGN KEY (`idFilme`) REFERENCES `filme` (`idFilme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idSala_FK` FOREIGN KEY (`idSala`) REFERENCES `sala` (`idSala`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

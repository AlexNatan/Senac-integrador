-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Jan-2024 às 14:46
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetosenac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `turma` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cargahoraria` int(11) NOT NULL,
  `hentrada` time NOT NULL,
  `hsaida` time NOT NULL,
  `dentrada` date NOT NULL,
  `dsaida` date NOT NULL,
  `presenca` varchar(50) NOT NULL,
  `situacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `turma`, `nome`, `cargahoraria`, `hentrada`, `hsaida`, `dentrada`, `dsaida`, `presenca`, `situacao`) VALUES
(1, '1', 'programador fullstack', 300, '10:00:00', '16:00:00', '2024-01-01', '2024-01-31', 'presente', 'cursando'),
(2, '2', 'design', 200, '10:11:49', '17:23:49', '2024-02-01', '2024-02-29', 'Ausente', 'cursando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosaluno`
--

CREATE TABLE `dadosaluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `oemissor` varchar(50) NOT NULL,
  `ufdocumento` varchar(50) NOT NULL,
  `dnascimento` date NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `telefone` int(50) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `ufaluno` varchar(50) NOT NULL,
  `cidadealuno` varchar(50) NOT NULL,
  `nomemãe` varchar(50) NOT NULL,
  `nomepai` varchar(50) NOT NULL,
  `estadocivil` varchar(50) NOT NULL,
  `deficiencia` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `numero` int(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `ufendereco` varchar(50) NOT NULL,
  `cidadeendereco` varchar(50) NOT NULL,
  `escolaridade` varchar(50) NOT NULL,
  `tinstituicao` varchar(50) NOT NULL,
  `formacao` varchar(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `ufcurso` varchar(50) NOT NULL,
  `cidadecurso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dadosaluno`
--

INSERT INTO `dadosaluno` (`id`, `nome`, `cpf`, `oemissor`, `ufdocumento`, `dnascimento`, `sexo`, `email`, `senha`, `telefone`, `nacionalidade`, `ufaluno`, `cidadealuno`, `nomemãe`, `nomepai`, `estadocivil`, `deficiencia`, `cep`, `numero`, `complemento`, `logradouro`, `bairro`, `ufendereco`, `cidadeendereco`, `escolaridade`, `tinstituicao`, `formacao`, `curso`, `ufcurso`, `cidadecurso`) VALUES
(1, 'Carlos Germano', '55555555555', 'Alunooemissor', 'Alunoufdocumento', '2024-01-11', 'Alunoseco', 'aluno@aluno.com', 'Alunosenha', 999999999, 'Alunonacionalidade', 'AlunoUF', 'Alunocidade', 'Alunonomemãe', 'Alunonomepai', 'Alunoestadocivil', 'Alunodeficiencia', 'Alunocep', 9999999, 'Alunocomplemento', 'Alunologradouro', 'Alunobairro', 'Alunoufendereco', 'Alunocidadeendereco', 'Alunoescolaridade', 'Alunoinstituição', 'Alunoformacao', 'Alunocurso', 'Alunoufcurso', 'Alunocidadecurso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `financeiro`
--

CREATE TABLE `financeiro` (
  `id` int(11) NOT NULL,
  `situacao` varchar(50) NOT NULL,
  `financiador` varchar(50) NOT NULL,
  `vencimento` date NOT NULL,
  `fpagamento` varchar(50) NOT NULL,
  `parcela` int(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `acoes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quadrodehorarios`
--

CREATE TABLE `quadrodehorarios` (
  `id` int(11) NOT NULL,
  `hentrada` time(6) NOT NULL,
  `UC` varchar(50) NOT NULL,
  `sala` varchar(50) NOT NULL,
  `docente` varchar(50) NOT NULL,
  `local` varchar(50) NOT NULL,
  `hsaida` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dadosaluno`
--
ALTER TABLE `dadosaluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `financeiro`
--
ALTER TABLE `financeiro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quadrodehorarios`
--
ALTER TABLE `quadrodehorarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `dadosaluno`
--
ALTER TABLE `dadosaluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `financeiro`
--
ALTER TABLE `financeiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `quadrodehorarios`
--
ALTER TABLE `quadrodehorarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

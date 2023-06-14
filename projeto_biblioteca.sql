-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 14-Jun-2023 às 11:12
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_biblioteca`
--
CREATE DATABASE IF NOT EXISTS `projeto_biblioteca` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projeto_biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acervo`
--

DROP TABLE IF EXISTS `acervo`;
CREATE TABLE `acervo` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `anoPublicado` int(11) NOT NULL,
  `sinopse` varchar(3500) NOT NULL,
  `capaLivro` varchar(75) NOT NULL,
  `qtdLivros` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acervo`
--

INSERT INTO `acervo` (`id`, `nome`, `genero`, `autor`, `anoPublicado`, `sinopse`, `capaLivro`, `qtdLivros`) VALUES
(13, 'Harry Potter: A pedra filosofal', 'Fantasia', 'J. K. Rowling', 2001, 'Harry Potter Ã© um garoto Ã³rfÃ£o que vive infeliz com seus tios, os Dursleys. Ele recebe uma carta contendo um convite para ingressar em Hogwarts, uma famosa escola especializada em formar jovens bruxos. Inicialmente, Harry Ã© impedido de ler a carta por seu tio, mas logo recebe a visita de Hagrid, o guarda-caÃ§a de Hogwarts, que chega para levÃ¡-lo atÃ© a escola. Harry adentra um mundo mÃ¡gico que jamais imaginara, vivendo diversas aventuras com seus novos amigos, Rony Weasley e Hermione Granger.', '41897yAI4LL._SY344_BO1,204,203,200_QL70_ML2_.jpg', 10),
(14, 'Percy jackson o ladrao de raios', 'AÃ§Ã£o', 'Rick Riordan', 2014, 'O adolescente Percy Jackson descobre que os deuses gregos e as criaturas mitolÃ³gicas sÃ£o reais. Ele Ã© filho de uma divindade e logo entra para um acampamento de treinamento para semideuses. Enquanto tenta se adaptar a seus novos poderes e amigos, ele descobre que o Raio-Mestre do poderoso Zeus foi roubado e ele Ã© o principal suspeito. Assim, ele tenta solucionar o mistÃ©rio junto com seus novos colegas, Grover e Annabeth.', '51yvcUb5tFL._SX323_BO1,204,203,200_.jpg', 10),
(15, 'DiÃ¡rio de um banana dias de cÃ£es', 'ComÃ©dia', 'Jeff Kinney', 2011, 'O livroâ€ diÃ¡rio de banana â€ conta sobre o Greg que Ã© um garoto, que sempre da quase tudo errado com ele, ele tenta impressionar uma menina bonita que ele gosta dÃªs do jardim de infÃ¢ncia e sempre que ele tem a chance de falar com ela acontece alguma coisa constrangedora com ele.', '51ksMLmVv9L._SY344_BO1,204,203,200_QL70_ML2_.jpg', 10),
(16, 'A volta dos que nÃ£o foram', 'Drama', 'Luciane Tonon', 2015, 'A volta dos que nÃ£o foram: HistÃ³rias reais de pessoas inadmitidas em paÃ­ses estrangeiros eBook Kindle. O livro relata alguns depoimentos de pessoas que tiveram suas viagens interrompidas nas alfÃ¢ndegas de destino. O tratamento que recebem como "personas non gratas", revela falta de critÃ©rios seletivos.', '51ACiqhiCxL._SY346_.jpg', 10),
(17, 'A revoluÃ§Ã£o dos bichos', 'FÃ¡bula', 'George Orwell', 2007, 'A clÃ¡ssica obra do autor inglÃªs George Orwell narra a jornada de um grupo de animais que decide se rebelar contra o dono da fazendo, o Sr. Jones, e com a exploraÃ§Ã£o dos humanos. Ã‰ uma alegoria Ã© uma sÃ¡tira sobre o totalitarismo, mais especificamente com os rumos tomados pela RevoluÃ§Ã£o Russa, de 1917.\r\n', '61owA5ey3iL._SX324_BO1,204,203,200_.jpg', 10),
(18, 'O Senhor dos AnÃ©is - A Sociedade do Anel', 'Aventura', 'John Ronald Reuel Tolkien', 2002, 'Em uma terra fantÃ¡stica e Ãºnica, um hobbit recebe de presente de seu tio um anel mÃ¡gico e maligno que precisa ser destruÃ­do antes que caia nas mÃ£os do mal. Para isso, o hobbit Frodo tem um caminho Ã¡rduo pela frente, onde encontra perigo, medo e seres bizarros. Ao seu lado para o cumprimento desta jornada, ele aos poucos pode contar com outros hobbits, um elfo, um anÃ£o, dois humanos e um mago, totalizando nove seres que formam a Sociedade do Anel.\r\n', '51yxqpcD9iL._SX327_BO1,204,203,200_.jpg', 10),
(19, 'CabeÃ§a Fria, CoraÃ§Ã£o Quente', 'biografia', 'Abel Ferreira', 2022, 'Escrito em primeira pessoa pela equipa tÃ©cnica liderada pelo treinador Abel Ferreira, o livro â€œCabeÃ§a fria, coraÃ§Ã£o quenteâ€ faz uma viagem pelos bastidores das conquistas do Palmeiras nas temporadas de 2020 e 2021, culminando no bicampeonato da Copa Libertadores da AmÃ©rica.\r\n', '413zVMkCRVL._SX346_BO1,204,203,200_.jpg', 10),
(20, 'ExtraordinÃ¡rio', 'Drama', 'Raquel Jaramillo PalÃ¡cio', 2013, 'Todo mundo sabe que Ã© difÃ­cil ser um aluno novo, mais ainda quando se tem um rosto tÃ£o diferente. Prestes a comeÃ§ar o quinto ano em um colÃ©gio particular de Nova York, Auggie tem uma missÃ£o nada fÃ¡cil pela frente: convencer os colegas de que, apesar da aparÃªncia incomum, ele Ã© um menino igual a todos os outros.', '41--5-gbIhL._SX346_BO1,204,203,200_.jpg', 10),
(21, 'Amor & Gelato', 'FicÃ§Ã£o', 'Jenna Evans Welch', 2017, 'Uma trajetÃ³ria que farÃ¡ Lina descobrir o amor, a si mesma e tambÃ©m aprender a lidar com a perda. Amor & Gelato Ã© uma deliciosa viagem pelos mais romÃ¢nticos pontos turÃ­sticos italianos, com direito a tudo de mais intenso que o lugar tem a oferecer: desde paixÃµes atÃ© coraÃ§Ãµes partidos.\r\n', '41WSqO6wTeL._SX331_BO1,204,203,200_.jpg', 10),
(22, 'Rita Lee - uma autobiografia', 'Autobiografia', 'Rita Lee', 2016, 'Rita Lee conta sobre a infÃ¢ncia e os primeiros passos na vida artÃ­stica; sua prisÃ£o em 1976; o encontro de almas com Roberto de Carvalho; o nascimento dos filhos, das mÃºsicas e dos discos clÃ¡ssicos; os tropeÃ§os e as glÃ³rias. Do primeiro disco voador ao Ãºltimo porre, Rita Ã© consistente. Corajosa. Sem culpa nenhuma.', '51VIERsohGL._SX348_BO1,204,203,200_.jpg', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `dataN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `ativo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `dataN`, `cpf`, `telefone`, `endereco`, `email`, `senha`, `ativo`) VALUES
(7, 'Felipe', '2005-08-20 03:00:00', '071.906.339-60', '47984197654', 'Rua Idalino JoÃ£o de Oliveira, 156', 'root@gmial.com', '123', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acervo`
--
ALTER TABLE `acervo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acervo`
--
ALTER TABLE `acervo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

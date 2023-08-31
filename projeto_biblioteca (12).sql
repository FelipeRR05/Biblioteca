-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 31-Ago-2023 às 15:07
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
  `nome` varchar(100) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `anoPublicado` int(11) NOT NULL,
  `sinopse` varchar(3500) NOT NULL,
  `capaLivro` varchar(60000) NOT NULL,
  `rua` int(4) NOT NULL,
  `prateleira` varchar(4) NOT NULL,
  `fileira` int(4) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `editora` varchar(50) NOT NULL,
  `paginas` int(10) NOT NULL,
  `estoque` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acervo`
--

INSERT INTO `acervo` (`id`, `nome`, `genero`, `autor`, `anoPublicado`, `sinopse`, `capaLivro`, `rua`, `prateleira`, `fileira`, `isbn`, `editora`, `paginas`, `estoque`) VALUES
(19, 'CabeÃ§a Fria, CoraÃ§Ã£o Quente', 'Biografia', 'Abel Ferreira', 2022, 'Escrito em primeira pessoa pela equipa tÃ©cnica liderada pelo treinador Abel Ferreira, o livro â€œCabeÃ§a fria, coraÃ§Ã£o quenteâ€ faz uma viagem pelos bastidores das conquistas do Palmeiras nas temporadas de 2020 e 2021, culminando no bicampeonato da Copa Libertadores da AmÃ©rica.\r\n\r\nA obra traz as experiÃªncias e os desafios enfrentados pelos profissionais portugueses ao longo de seus 13 primeiros meses no futebol brasileiro, com revelaÃ§Ãµes inÃ©ditas sobre o pensamento, a filosofia e os mÃ©todos de trabalho da comissÃ£o â€“ incluindo detalhes inÃ©ditos da preparaÃ§Ã£o de 16 jogos-chave, com exercÃ­cios e as respectivas anÃ¡lises prÃ© e pÃ³s-jogo.', '81BZ7-zIeCL._AC_UF1000,1000_QL80_.jpg', 0, '', 0, '14214', 'asd', 0, 48),
(23, 'Dom Quixote', 'Romance', 'Miguel de Cervantes', 1605, 'A histÃ³ria do engenhoso fidalgo Dom Quixote e de seu fiel escudeiro Sancho PanÃ§a conquista leitores geraÃ§Ã£o apÃ³s geraÃ§Ã£o. O clÃ¡ssico de Miguel de Cervantes Ã© considerado o expoente mÃ¡ximo da literatura espanhola e, em 2002, foi eleito por uma comissÃ£o de escritores de 54 paÃ­ses o melhor livro de ficÃ§Ã£o de todos os tempos. Em homenagem aos 400 anos de morte de Miguel de Cervantes, a Nova Fronteira traz ao pÃºblico esta ediÃ§Ã£o especial, com a obra integral em dois volumes. O texto de Cervantes Ã© acompanhado das belÃ­ssimas ilustraÃ§Ãµes do francÃªs Gustave DorÃ©, um dos mais fantÃ¡sticos artistas do sÃ©culo XIX.', 'dom_quixote_hq_9788525433633_hd.jpg', 0, '', 0, '', '', 0, 0),
(24, 'Um Conto de Duas Cidades', 'Romance', 'Charles Dickens', 1859, 'Dickens embarca aqui em uma emocionante pintura da RevoluÃ§Ã£o Francesa. A peculiaridade deste romance comeÃ§a na condiÃ§Ã£o indissociÃ¡vel da escrita de Charles Dickens: Ã© obviamente com o olhar estrangeiro e nÃ£o raro antagÃ´nico de um inglÃªs que ele dÃ¡ vazÃ£o Ã  sua trama. O autor evita o posicionamento polÃ­tico, centrando a narrativa nas observaÃ§Ãµes de cunho social e no impacto individual que aquele processo impingiu a pessoas de todas as camadas. O aristocrata, o burguÃªs, o camponÃªs, o malandro, o vagabundo. EstÃ£o todos ali. De um lado, encontramos personagens como o ex-prisioneiro da Bastilha, doutor Manette; Charles Darnay, o aristocrata que rompe com a famÃ­lia e com sua classe social; o senhor Lorry, a personificaÃ§Ã£o do inglÃªs sistemÃ¡tico e virtuoso; a senhora Defarge, face cruel e impiedosa das jacqueries; o enigmÃ¡tico Sidney Carton, aquele que confere Ã  trama o que ela tem de mais romanesco e sem dÃºvida um dos grandes personagens da literatura inglesa. Todos eles de personalidades marcantes, na melhor tradiÃ§Ã£o do romance folhetinesco. De outro lado, contrapÃµe-se a multidÃ£o: o povo miserÃ¡vel de Paris e de seus arrabaldes, ora animalizado na pobreza Ã  qual os empurrou uma voraz aristocracia, ora plateia ensandecida do espetÃ¡culo dantesco de "La Guillotine".', '61fD+SMxHeL._AC_UF1000,1000_QL80_.jpg', 0, '', 0, '', '', 0, 0),
(25, 'O Senhor dos AnÃ©is', 'Fantasia', 'J. R. R. Tolkien', 1954, 'Este volume estÃ¡ composto pela primeira (A Sociedade do Anel), segunda (As Duas Torres) e terceira parte (O Retorno do Rei) da grande obra de ficÃ§Ã£o fantÃ¡stica de J. R. R. Tolkien, O Senhor dos AnÃ©is.\r\nÃ‰ impossÃ­vel transmitir ao novo leitor todas as qualidades e o alcance do livro. Alternadamente cÃ´mica, singela, Ã©pica, monstruosa e diabÃ³lica, a narrativa desenvolve-se em meio a inÃºmeras mudanÃ§as de cenÃ¡rios e de personagens, num mundo imaginÃ¡rio absolutamente convincente em seus detalhes. Nas palavras do romancista Richard Hughes, â€œquanto Ã  amplitude imaginativa, a obra praticamente nÃ£o tem paralelos e Ã© quase igualmente notÃ¡vel na sua vividez e na habilidade narrativa, que mantÃªm o leitor preso pÃ¡gina apÃ³s pÃ¡ginaâ€.\r\nTolkien criou em O Senhor dos AnÃ©is uma nova mitologia num mundo inventado que demonstrou possuir um poder de atraÃ§Ã£o atemporal.', '71ZLavBjpRL._AC_UF1000,1000_QL80_.jpg', 0, '', 0, '', '', 0, 1),
(26, 'O Pequeno PrÃ­ncipe', 'Literatura Infantil', 'Antoine de Saint-ExupÃ©ry', 1943, 'O Pequeno PrÃ­ncipe Ã© uma obra prima que conduz o leitor a uma viagem de descobertas pela essÃªncia humana. Este clÃ¡ssico atemporal de Antoine de Saint-ExupÃ©ry narra a histÃ³ria sobre o encontro de um aviador e um menino com â€œcabelos da cor do ouroâ€. Ã€ medida que o principezinho conta ao aviador sobre sua rotina no asteroide B 612, sua rosa Ãºnica, o perigo dos baobÃ¡s, sua raposa e os moradores de outros planetas, um novo olhar sobre a vida e o mundo Ã© revelado.', 'O-pequeno-prÃ­ncipe.jpg', 0, '', 0, '', '', 0, 0),
(27, 'Harry Potter e a Pedra Filosofal', 'Fantasia', 'J.K. Rowling', 1997, 'Harry Potter Ã© um garoto cujos pais, feiticeiros, foram assassinados por um poderosÃ­ssimo bruxo quando ele ainda era um bebÃª. Ele foi levado, entÃ£o, para a casa dos tios que nada tinham a ver com o sobrenatural. Pelo contrÃ¡rio. AtÃ© os 10 anos, Harry foi uma espÃ©cie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha Ã³culos remendados e era tratado como um estorvo. No dia de seu aniversÃ¡rio de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no paÃ­s das maravilhas, que o conduz a um mundo mÃ¡gico. Descobre sua verdadeira histÃ³ria e seu destino: ser um aprendiz de feiticeiro atÃ© o dia em que terÃ¡ que enfrentar a pior forÃ§a do mal, o homem que assassinou seus pais. O menino de olhos verde, magricela e desengonÃ§ado, tÃ£o habituado Ã  rejeiÃ§Ã£o, descobre, tambÃ©m, que Ã© um herÃ³i no universo dos magos. Potter fica sabendo que Ã© a Ãºnica pessoa a ter sobrevivido a um ataque do tal bruxo do mal e essa Ã© a causa da marca em forma de raio que ele carrega na testa. Ele nÃ£o Ã© um garoto qualquer, ele sequer Ã© um feiticeiro qualquer ele Ã© Harry Potter, sÃ­mbolo de poder, resistÃªncia e um lÃ­der natural entre os sobrenaturais. A fÃ¡bula, recheada de fantasmas, paredes que falam, caldeirÃµes, sapos, unicÃ³rnios, dragÃµes e gigantes, nÃ£o Ã©, entretanto, apenas um passatempo.', 'Harry-Potter-e-a-Pedra-Filosofal-livro.jpg', 0, '', 0, '', '', 0, 0),
(28, 'O Hobbit', 'Romance', 'J. R. R. Tolkien', 1937, 'Bilbo Bolseiro era um dos mais respeitÃ¡veis hobbits de todo o Condado atÃ© que, um dia, o mago Gandalf bate Ã  sua porta. A partir de entÃ£o, toda sua vida pacata e campestre soprando anÃ©is de fumaÃ§a com seu belo cachimbo comeÃ§a a mudar. Ele Ã© convocado a participar de uma aventura por ninguÃ©m menos do que Thorin Escudo-de-Carvalho, um prÃ­ncipe do poderoso povo dos AnÃ£os.\r\n\r\nEsta jornada farÃ¡ Bilbo, Gandalf e 13 anÃ£os atravessarem a Terra-mÃ©dia, passando por inÃºmeros perigos, como os imensos trols, as Montanhas Nevoentas infestadas de gobelins ou a muito antiga e misteriosa Trevamata, atÃ© chegarem (se conseguirem) na Montanha SolitÃ¡ria. LÃ¡ estÃ¡ um incalculÃ¡vel tesouro, mas hÃ¡ um porÃ©m. Deitado em cima dele estÃ¡ Smaug, o Dourado, um dragÃ£o malicioso que... bem, vocÃª terÃ¡ que ler para descobrir.\r\n\r\nLanÃ§ado em 1937, O Hobbit Ã© um divisor de Ã¡guas na literatura de fantasia mundial. Mais de 80 anos apÃ³s a sua publicaÃ§Ã£o, o livro que antecede os ocorridos em O Senhor dos AnÃ©is continua arrebatando fÃ£s de todas as idades, talvez pelo seu tom brincalhÃ£o com uma pitada de magia Ã©lfica, ou talvez porque J.R.R. Tolkien tenha escrito o melhor livro infantojuvenil de todos os tempos.', '91M9xPIf10L._AC_UF1000,1000_QL80_.jpg', 0, '', 0, '', '', 0, 3),
(29, 'As CrÃ´nicas de NÃ¡rnia', 'Fantasia', 'C. S. Lewis', 1949, 'Viagens ao fim do mundo, criaturas fantÃ¡sticas e batalhas Ã©picas entre o bem e o mal - o que mais um leitor poderia querer de um livro? O livro que tem tudo isso Ã© "O leÃ£o, a feiticeira e o guarda-roupa", escrito em 1949 por Clive Staples Lewis. MasLewis nÃ£o parou por aÃ­. Seis outros livros vieram depois e, juntos, ficaram conhecidos como "As crÃ´nicas de NÃ¡rnia". Nos Ãºltimos cinqÃ¼enta anos, "As crÃ´nicas de NÃ¡rnia" transcenderam o gÃªnero da fantasia para se tornar parte do cÃ¢none da literaturaclÃ¡ssica. Cada um dos sete livros Ã© uma obra-prima, atraindo o leitor para um mundo em que a magia encontra a realidade, e o resultado Ã© um mundo ficcional que tem fascinado geraÃ§Ãµes. Esta ediÃ§Ã£o apresenta todas as sete crÃ´nicas integralmente, num Ãºnico volume. Os livros sÃ£o apresentados de acordo com a ordem de preferÃªncia de Lewis, cada capÃ­tulo com uma ilustraÃ§Ã£o do artista original, Pauline Baynes. Enganosamente simples e direta, "As crÃ´nicas de NÃ¡rnia" continuam cativando os leitores com aventuras, personagens e fatos que falam a pessoas de todas as idades.', '71yJLhQekBL._AC_UF1000,1000_QL80_.jpg', 0, '', 0, '', '', 0, 1),
(30, 'A HipÃ³tese do Amor', 'Romance', 'Ali Hazelwood', 2022, 'Quando um namoro de mentira entre cientistas encontra a irresistÃ­vel forÃ§a da atraÃ§Ã£o, todas as teorias cuidadosamente calculadas sobre o amor sÃ£o postas Ã  prova.', 'Hipotese.jpg', 1, 'A', 2, '123456', 'Editora Arqueiro', 453, 2),
(31, 'Como eu era antes de vocÃª', 'Romance', 'Jojo Moyes', 2016, 'Aos 26 anos, Louisa Clark nÃ£o tem muitas ambiÃ§Ãµes. Ela mora com os pais, a irmÃ£ mÃ£e solteira, o sobrinho pequeno e um avÃ´ que precisa de cuidados constantes desde que sofreu um derrame. AlÃ©m disso, trabalha como garÃ§onete num cafÃ©, um emprego que ela adora e que, apesar de nÃ£o pagar muito, ajuda nas despesas. E namora Patrick, um triatleta que nÃ£o parece interessado nela. NÃ£o que ela se importe.', 'comoera.jpg', 0, '', 0, '', '', 0, 2),
(32, 'Amor e Gelato', 'Romance', 'Jenna Evans Welch', 2017, 'Atendendo ao Ãºltimo desejo da mÃ£e, Lina decide passar o Ãºltimo verÃ£o antes da faculdade em Roma, onde descobre o amor, muitas aventuras e a paixÃ£o pelo gelato. Assista o quanto quiser. Baseada no best-seller de Jenna Evans Welch, esta comÃ©dia romÃ¢ntica ambientada na ItÃ¡lia Ã© estrelada por Susanna Skaggs', 'amorge.jpg', 0, '', 0, '', '', 0, 0),
(33, 'Teto para Dois', 'Romance', 'Beth OLeary', 2019, 'Tiffy finalmente sai do apartamento do ex-namorado, Contrariando os amigos, ela topa um acordo bastante inusitado.\r\n\r\nLeon estÃ¡ enrolado com questÃµes financeiras e tem uma ideia pouco convencional para arranjar dinheiro rÃ¡pido: sublocar seu apartamento, sÃ³ que tem um detalhe importante: o lugar tem apenas uma cama.', 'teto.jpg', 0, '', 0, '', '', 0, 0),
(34, 'Assim que Acaba', 'Romance', 'Collen Hoover', 2018, 'Lily, uma jovem que se mudou de uma cidadezinha do Maine para Boston, se formou em marketing e abriu a prÃ³pria floricultura. E Ã© em um dos terraÃ§os de Boston que ela conhece Ryle, um neurocirurgiÃ£o confiante, teimoso e talvez atÃ© um pouco arrogante, com uma grande aversÃ£o a relacionamentos, mas que se sente muito atraÃ­do por ela.\r\n\r\nQuando os dois se apaixonam, Lily se vÃª no meio de um relacionamento turbulento que nÃ£o Ã© o que ela esperava. Mas serÃ¡ que ela conseguirÃ¡ enxergar isso, por mais doloroso que seja?', 'acaba.jpg', 0, '', 0, '', '', 0, 0),
(35, 'VocÃª ligou para Sam', 'Romance', 'Dustin Thao', 2022, 'A jovem de dezessete anos Julie Clarke tinha toda a sua vida planejada ao lado do namorado, Sam. Mas ele morre em um acidente de carro e tudo perde o sentido. Devastada pela dor, ela comeÃ§a a se livrar de todas as coisas dele e enterrar as memÃ³rias que dividiam. Mas Julie decide que precisa ouvir a voz do namorado pela Ãºltima vez, nem que seja a mensagem gravada da caixa postal. Por isso, Julie liga para ele. E Sam atende.', '', 1, 'A', 3, '14104', '', 1000, 10),
(36, 'Eu e esse meu CoraÃ§Ã£o', 'Romance', 'C.C Hunter', 2018, 'Com seu tipo sanguÃ­neo raro, um transplante Ã© como um sonho distante. Conformada, ela tenta se esquecer de que estÃ¡ com os dias contados, criando uma lista de â€œcoisas para fazer antes de morrerâ€.\r\n\r\nDe repente, Leah recebe uma segunda chance: hÃ¡ um coraÃ§Ã£o disponÃ­vel! O problema Ã© quando ela descobre que o doador Ã© um garoto da sua escola â€“ e que supostamente se matou!\r\n\r\nMatt, o irmÃ£o gÃªmeo do doador, se recusa a acreditar que Eric se suicidou. Quando Leah o procura, eles descobrem que ambos tÃªm sonhos semelhantes que podem ter pistas do que realmente aconteceu a Eric.\r\n\r\nEnquanto tentam desvendar esse mistÃ©rio, Matt e Leah se apaixonam e nÃ£o querem correr o risco de perder um ao outro. Mas nem a vida nem um coraÃ§Ã£o transplantado vem com garantias.', 'coracao.jpg', 0, '', 0, '', '', 0, 0),
(37, 'Orgulho e Preconceito', 'Romance', 'Jane Austen', 2018, 'Ã© uma obra clÃ¡ssica da renomada autora Jane Austen, que cativa leitores hÃ¡ mais de dois sÃ©culos com sua histÃ³ria envolvente e personagens inesquecÃ­veis. Ambientado na Inglaterra do sÃ©culo XIX, este romance de Ã©poca nos transporta para um mundo de etiqueta, amor e desafios sociais.A histÃ³ria gira em torno da encantadora e inteligente Elizabeth Bennet, uma jovem de espÃ­rito livre e opiniÃµes fortes, e do misterioso e aristocrÃ¡tico Sr. Darcy. Com diÃ¡logos brilhantes e uma narrativa envolvente, Jane Austen nos conduz por um jogo de encontros e desencontros, preconceitos e descobertas, enquanto os personagens enfrentam as complexidades das relaÃ§Ãµes sociais e os dilemas do coraÃ§Ã£o.', 'orgulho.jpg', 0, '', 0, '', '', 0, 0),
(38, 'Vermelho Branco Sangue Azul', 'Romance', 'Casey McQuiston', 2021, 'Quando sua mÃ£e foi eleita presidenta dos Estados Unidos, Alex Claremont-Diaz se tornou o novo queridinho da mÃ­dia norte-americana. Bonito, carismÃ¡tico e com personalidade forte, Alex tem tudo para seguir os passos de seus pais e conquistar uma carreira na polÃ­tica, como tanto deseja. Mas quando sua famÃ­lia Ã© convidada para o casamento real do prÃ­ncipe britÃ¢nico Philip, Alex tem que encarar o seu primeiro desafio diplomÃ¡tico: lidar com Henry, irmÃ£o mais novo de Philip, o prÃ­ncipe mais adorado do mundo, com quem ele Ã© constantemente comparado â€• e que ele nÃ£o suporta.', 'vemrelho.jpg', 0, '', 0, '', '', 0, 0),
(39, 'O Acordo', 'Romance', 'Elle Kennedy', 2021, 'Mas o que era apenas uma troca de favores entre dois opostos acaba se tornando uma amizade inesperada. AtÃ© que um beijo faz que Hannah e Garret precisem repensar os termos de seu acordo.', 'acordo.jpg', 0, '', 0, '', '', 0, 0),
(40, 'Duna', 'Fantasia', 'Frank Herbert', 2017, 'Uma estonteante mistura de aventura e misticismo, ecologia e polÃ­tica, este romance ganhador dos prÃªmios Hugo e Nebula deu inÃ­cio a uma das mais Ã©picas histÃ³rias de toda a ficÃ§Ã£o cientÃ­fica. Duna Ã© um triunfo da imaginaÃ§Ã£o, que influenciarÃ¡ a literatura para sempre.Esta ediÃ§Ã£o inÃ©dita, com introduÃ§Ã£o de Neil Gaiman, apresenta ao leitor o universo fantÃ¡stico criado por Herbert e que serÃ¡ adaptado ao cinema por Denis Villeneuve, diretor de A chegada e de Blade Runner 2.', 'duna.jpg', 0, '', 0, '', '', 0, 0),
(41, 'A princesa das Cinzas', 'Fantasia', 'Laura Sebatian', 2018, 'Theodosia era a herdeira do trono de Astrea quando seu reino foi invadido, deixando um rastro de destruiÃ§Ã£o.\r\n\r\nDez anos depois, a princesa, Ã³rfÃ£, prisioneira e subjugada, percebe que nÃ£o lhe resta mais nada, a nÃ£o ser lutar pela prÃ³pria liberdade.\r\n\r\nO passado, que por tanto tempo ficou enterrado, agora precisa vir Ã  tona para mostrar a Theodosia os caminhos que poderÃ£o levÃ¡-la de volta ao trono.', 'cinza.jpg', 0, '', 0, '', '', 0, 0),
(42, 'Divergente', 'Fantasia', 'Veronica', 2012, 'Uma escolha pode te transformar. Nesta versÃ£o futurista da cidade de Chicago, a sociedade se divide em cinco facÃ§Ãµes dedicadas ao cultivo de uma virtude â€“ a AbnegaÃ§Ã£o, a Amizade, a AudÃ¡cia, a Franqueza e a ErudiÃ§Ã£o. Aos dezesseis anos, numa grande cerimÃ´nia de iniciaÃ§Ã£o, os jovens sÃ£o submetidos a um teste de aptidÃ£o e devem escolher a que grupo querem se unir para passar o resto de suas vidas. Para Beatrice, a difÃ­cil decisÃ£o Ã© entre ficar com sua famÃ­lia ou ser quem ela realmente Ã© â€“ nÃ£o pode ter os dois. EntÃ£o, faz uma escolha que surpreende a todos, inclusive a ela mesma. Durante a iniciaÃ§Ã£o altamente competitiva que se segue, Beatrice muda seu nome para Tris e se esforÃ§a para decidir quem sÃ£o realmente seus amigos â€“ e onde se encaixa na sua nova vida um romance com um rapaz fascinante, porÃ©m perturbador. ', 'divergente.jpg', 0, '', 0, '', '', 0, 0),
(43, 'Um tom mais escuro de magia', 'Fantasia', 'V.E Schwab', 2016, 'Kell Ã© um dos Ãºltimos Viajantes - magos com uma habilidade rara e cobiÃ§ada de viajar entre universos paralelos conectados por uma cidade mÃ¡gica. Existe a Londres Cinza, suja e enfadonha, sem magia alguma e com um rei louco - George III. A Londres Vermelha, onde vida e magia sÃ£o reverenciadas, e onde Kell foi criado ao lado de Rhy Maresh, o boÃªmio herdeiro de um impÃ©rio prÃ³spero. A Londres Branca: um lugar onde se luta para controlar a magia, e onde a magia reage, drenando a cidade atÃ© os ossos. ', 'tom.jpg', 0, '', 0, '', '', 0, 0),
(44, 'A Rebelde do Deserto', 'Fantasia', 'Alwyn Hamilton', 2008, 'O destino do deserto estÃ¡ nas mÃ£os de Amani Alâ€™Hiza â€• uma garota feita de fogo e pÃ³lvora, com o dedo sempre no gatilho. O deserto de Miraji Ã© governado por mortais, mas criaturas mÃ­ticas rondam as Ã¡reas mais selvagens e remotas, e hÃ¡ boatos de que, em algum lugar, os djinnis ainda praticam magia. De toda maneira, para os humanos o deserto Ã© um lugar impiedoso, principalmente se vocÃª Ã© pobre, Ã³rfÃ£o ou mulher. Amani Alâ€™Hiza Ã© as trÃªs coisas. ', 'deserto.jpg', 0, '', 0, '', '', 0, 0),
(45, 'As Brumas de Avalon', 'Fantasia', 'Marion Zimmer Bradley', 2018, 'Por sÃ©culos, as lendas arturianas povoaram o imaginÃ¡rio de leitores de todo o mundo. As brumas de Avalon Ã© considerado por muitos a versÃ£o literÃ¡ria definitiva do mito e muitas geraÃ§Ãµes de mulheres se deixaram arrebatar pela escrita envolvente de Marion Zimmer Bradley.\r\nPelos olhos de mulheres complexas e poderosas como Morgana das Fadas, Viviane, a Senhora do Lago, Igraine, Morgause e Gwenhwyfar, os reinos de Camelot e de Avalon sÃ£o revisitados neste clÃ¡ssico, repleto de magia, sensibilidade e intrigas.', 'ava.jpg', 0, '', 0, '', '', 0, 0),
(46, 'Em algum lugar nas estrelas', 'Fantasia', 'Clare Vanderpool', 2016, 'Um romance intenso sobre a difÃ­cil arte de crescer em um mundo que nem sempre parece satisfeito com a nossa presenÃ§a.Pelo menos Ã© desse jeito que as coisas tÃªm acontecido para Jack Baker. A Segunda Guerra Mundial estava no fim, mas ele nÃ£o tinha motivos para comemorar. Sua mÃ£e morreu e seu pai... bem, seu pai nunca demonstrou se preocupar muito com o filho. Jack Ã© entÃ£o levado para um internato no Maine (o mesmo estado onde vivem Stephen King e boa parte de seus personagens). ', 'algum.jpg', 0, '', 0, '', '', 0, 0),
(47, 'O Olho do Mundo', 'Fantasia', 'Robert Jordan', 2013, 'Um dia houve uma guerra tÃ£o definitiva que rompeu o mundo, e no girar da Roda do Tempo o que ficou na memÃ³ria dos homens virou esteio das lendas. Como a que diz que, quando as forÃ§as tenebrosas se reerguerem, o poder de combatÃª-las renascerÃ¡ em um Ãºnico homem, o DragÃ£o, que trarÃ¡ de volta a guerra, e, de novo, tudo se fragmentarÃ¡.', 'olho.jpg', 0, '', 0, '', '', 0, 0),
(48, 'O Nome do Vento', 'Fantasia', 'Patrick Rothfuss', 2009, 'NinguÃ©m sabe ao certo quem Ã© o herÃ³i ou o vilÃ£o desse fascinante universo criado por Patrick Rothfuss. Na realidade, essas duas figuras se concentram em Kote, um homem enigmÃ¡tico que se esconde sob a identidade de proprietÃ¡rio da hospedaria Marco do Percurso.', 'vento.jpg', 0, '', 0, '', '', 0, 0),
(49, 'Sombra e Ossos', 'Fantasia', 'Leigh Bardugo', 2021, 'Em um paÃ­s dividido pela Dobra das Sombras â€“ uma faixa de terra povoada por monstros sombrios â€“ e no qual a corte real estÃ¡ repleta de pessoas com poderes mÃ¡gicos, Alina Starkov pode se considerar uma garota comum. Seus dias consistem em trabalhar como cartÃ³grafa no ExÃ©rcito e em tentar esconder de seu melhor amigo, Maly, o que sente por ele.', 'osso.jpg', 0, '', 0, '', '', 0, 0),
(50, 'Trono de Vidro', 'Fantasia', 'Sarah J. Maas', 2013, 'Nas sombrias e sujas minas de sal de Endovier, um jovem de 18 anos estÃ¡ cumprindo sua sentenÃ§a. Celaena Ã© uma assassina, e a melhor de Adarlan. Aprisionada e fraca, ela estÃ¡ quase perdendo as esperanÃ§as quando recebe uma proposta. TerÃ¡ de volta sua liberdade se representar o prÃ­ncipe de Adarlan em uma competiÃ§Ã£o, lutando contra os mais habilidosos assassinos e larÃ¡pios do reino. Endovier Ã© uma sentenÃ§a de morte, e cada duelo em Adarlan serÃ¡ para viver ou morrer. Mas se o preÃ§o Ã© ser livre, ela estÃ¡ disposta a tudo.', 'trono.jpg', 0, '', 0, '', '', 0, 0),
(51, 'It: A Coisa', 'Terror', 'Stephen King', 2014, 'Durante as fÃ©rias de 1958, em uma pacata cidadezinha chamada Derry, um grupo de sete amigos comeÃ§a a ver coisas estranhas. Um conta que viu um palhaÃ§o, outro que viu uma mÃºmia. Finalmente, acabam descobrindo que estavam todos vendo a mesma coisa: um ser sobrenatural e maligno que pode assumir vÃ¡rias formas. Ã‰ assim que Bill, Beverly, Eddie, Ben, Richie, Mike e Stan enfrentam a Coisa pela primeira vez.', 'it.jpg', 0, '', 0, '', '', 0, 0),
(52, 'O Vilarejo', 'Terror', 'Raphael Montes', 2015, 'Em 1589, o padre e demonologista Peter Binsfeld fez a ligaÃ§Ã£o de cada um dos pecados capitais a um demÃ´nio, supostamente responsÃ¡vel por invocar o mal nas pessoas. Ã‰ a partir daÃ­ que Raphael Montes cria sete histÃ³rias situadas em um vilarejo isolado, apresentando a lenta degradaÃ§Ã£o dos moradores do lugar, e pouco a pouco o prÃ³prio vilarejo vai sendo dizimado, maculado pela neve e pela fome.', 'vilas.jpg', 0, '', 0, '', '', 0, 0),
(53, 'O Livro Maldito', 'Educacional', 'David Herick', 2019, '. SÃ£o mais de 70 histÃ³rias curtas de terror que vÃ£o do sobrenatural atÃ© coisas terrÃ­veis que os seres humanos podem fazer. E quando eu digo terrÃ­veis, quero dizer para ter cuidado antes de realmente ler um tÃ­tulo de MALDITO. Talvez vocÃª termine de ler essas linhas aterradoras sem confiar em mais ninguÃ©m ou quem sabe achando que estÃ¡ sozinho quando na verdade tem alguÃ©m invisÃ­vel perto de vocÃª: O livro Ã© maldito.', '', 0, '', 0, '', '', 0, 0),
(54, 'O que Aconteceu com Annie', 'Terror', 'C. J Tudor', 2019, 'Quando Joe Thorne era adolescente, sua irmÃ£ mais nova desapareceu. Vinte e cinco anos depois, um e-mail anÃ´nimo o leva mais uma vez ao passado: â€œEu sei o que aconteceu com sua irmÃ£. EstÃ¡ acontecendo de novo.â€\r\n\r\nAtolado em dÃ­vidas e bem longe do vilarejo onde cresceu, Joe precisa escapar das pessoas perigosas que estÃ£o atrÃ¡s dele, mas tambÃ©m vÃª a oportunidade de resolver o que arrasta consigo hÃ¡ mais de duas dÃ©cadas. Retornar a Arnhill parece a Ãºnica opÃ§Ã£o.', 'aniie.jpg', 0, '', 0, '', '', 0, 0),
(55, 'HP 2', '', 'JK', 2007, 'Bruxdo', '', 1, 'A', 4, '142', 'Rocco', 1420, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `ativo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `senha`, `ativo`) VALUES
(1, 'adm', 'adm', 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clube`
--

DROP TABLE IF EXISTS `clube`;
CREATE TABLE `clube` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `turma` int(5) NOT NULL,
  `pagina` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clube`
--

INSERT INTO `clube` (`id`, `titulo`, `nome`, `turma`, `pagina`) VALUES
(2, 'CabeÃ§a Fria, CoraÃ§Ã£o Quente', 'Neymar', 305, 0),
(4, 'O Hobbit', 'Ronaldo', 305, 120),
(13, 'A HipÃ³tese do Amor', 'Bernas', 201, 0),
(15, 'A HipÃ³tese do Amor', 'Payet', 201, 0),
(25, 'A HipÃ³tese do Amor', 'Gabriel Pec', 305, 0),
(26, 'A HipÃ³tese do Amor', 'Gabriel Pec', 305, 0),
(28, 'Como eu era antes de vocÃª', 'Felipe', 201, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

DROP TABLE IF EXISTS `emprestimo`;
CREATE TABLE `emprestimo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `inicioEmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fimEmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `renovado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`id`, `titulo`, `nome`, `inicioEmp`, `fimEmp`, `renovado`) VALUES
(39, 'CabeÃ§a Fria, CoraÃ§Ã£o Quente', 'Bernas', '2023-08-17 03:00:00', '2023-08-31 03:00:00', 0),
(40, 'A HipÃ³tese do Amor', 'Gabriel Pec', '2023-08-17 03:00:00', '2023-08-31 03:00:00', 0),
(41, 'A HipÃ³tese do Amor', 'Payet', '2023-08-17 03:00:00', '2023-08-31 03:00:00', 0),
(42, 'A HipÃ³tese do Amor', 'Payet', '2023-08-17 03:00:00', '2023-08-31 03:00:00', 0),
(43, 'CabeÃ§a Fria, CoraÃ§Ã£o Quente', 'Dassa', '2023-08-31 03:00:00', '2023-09-15 03:00:00', 0),
(44, 'A HipÃ³tese do Amor', 'Bernas', '2023-08-31 03:00:00', '2023-09-15 03:00:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hora`
--

DROP TABLE IF EXISTS `hora`;
CREATE TABLE `hora` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `turma` int(5) NOT NULL,
  `pagina` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `hora`
--

INSERT INTO `hora` (`id`, `titulo`, `nome`, `turma`, `pagina`) VALUES
(1, 'CabeÃ§a Fria, CoraÃ§Ã£o Quente', 'Felipe', 202, 90),
(3, 'O Acordo', 'Hec', 305, 80),
(7, 'A HipÃ³tese do Amor', 'Bernas', 201, 0),
(13, 'A HipÃ³tese do Amor', 'Bernas', 201, 0),
(14, 'A HipÃ³tese do Amor', 'Gabriel Pec', 305, 0),
(15, 'A HipÃ³tese do Amor', 'Payet', 201, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

DROP TABLE IF EXISTS `turma`;
CREATE TABLE `turma` (
  `id` int(11) NOT NULL,
  `turma` int(5) NOT NULL,
  `serie` varchar(15) NOT NULL,
  `turno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `turma`, `serie`, `turno`) VALUES
(2, 201, '2Âº Ano - EF', 'Vespertino'),
(3, 202, '2Âº Ano - EM', 'Noturno'),
(4, 305, '3Âº Ano - EM', 'Matutino');

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
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `ativo` varchar(1) NOT NULL,
  `turma` int(5) NOT NULL,
  `idade` int(3) NOT NULL,
  `matricula` int(10) NOT NULL,
  `serie` varchar(15) NOT NULL,
  `emp` tinyint(1) NOT NULL,
  `clube` tinyint(1) NOT NULL,
  `hora` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `dataN`, `cpf`, `telefone`, `endereco`, `email`, `senha`, `ativo`, `turma`, `idade`, `matricula`, `serie`, `emp`, `clube`, `hora`) VALUES
(7, 'Felipe', '2023-08-31 11:44:28', '071.906.339-60', '47984197654', 'Rua Idalino JoÃ£o de Oliveira, 156', 'felipe@gmail.com', '123', 's', 201, 17, 123456789, '', 5, 1, 1),
(12, 'Dassa', '2023-08-31 11:08:45', '071.906.339-60', '47984197654', 'Rua Idalino JoÃ£o de Oliveira, 156', 'root@gmial.com', '123', 's', 0, 0, 0, '0', 4, 1, 1),
(13, 'Bernas', '2023-08-31 11:44:43', '071.906.339-60', '47984197654', 'Rua Idalino JoÃ£o de Oliveira, 156', 'root@gmail.com', '123', 's', 0, 0, 0, '0', 0, 0, 0),
(14, 'Hec', '2023-06-25 17:06:34', '071.906.339-60', '9999999999', 'aaaaaaaaaaaaa', 'hec@gmail.com', '123', 's', 0, 0, 0, '0', 0, 0, 0),
(24, 'Kaka', '2023-08-10 13:49:54', '071.906.339-60', '9999999999', 'aaaaaaaaaaaaa', 'koka@gmail.com', '123', 's', 201, 0, 0, '', 0, 0, 0),
(27, 'Neymar', '2023-08-17 19:19:01', '071.309.150-86', '(47) 9 8415-9356', 'Rua Idalino Joao De Oliveira, 156', 'ney@gmail.com', '123', 's', 203, 18, 1234567890, '2Âº Ano - EM', 0, 0, 0),
(28, 'Ronaldo', '2023-08-17 19:19:09', '071.309.150-86', '(47) 9 8415-9356', 'Rua Idalino Joao De Oliveira, 156', 'r9@gmail.com', '123', 's', 202, 15, 1234567890, '2Âº Ano - EM', 0, 0, 0),
(29, 'Gabriel Pec', '2023-08-17 20:11:28', '071.309.150-86', '(47) 9 8415-9356', 'Rua Idalino Joao De Oliveira, 156', 'pec@gmail.com', '123', 's', 305, 21, 1234567890, '5Âº Ano - EF', 4, -3, 0),
(30, 'Payet', '2023-08-17 19:34:19', '071.309.150-86', '(47) 9 8415-9356', 'Rua Idalino Joao De Oliveira, 156', 'payet10@gmail.com', '123', 's', 305, 36, 1234657890, '3Âº Ano - EM', 3, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acervo`
--
ALTER TABLE `acervo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clube`
--
ALTER TABLE `clube`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hora`
--
ALTER TABLE `hora`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `clube`
--
ALTER TABLE `clube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `hora`
--
ALTER TABLE `hora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

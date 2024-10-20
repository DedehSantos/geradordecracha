-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/10/2024 às 20:28
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
-- Banco de dados: `sistemafrequencia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunosnovos2024`
--

CREATE TABLE `alunosnovos2024` (
  `id` int(11) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `turma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunosnovos2024`
--

INSERT INTO `alunosnovos2024` (`id`, `matricula`, `nome`, `turma`) VALUES
(1, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r'),
(2, '51863', 'Alanderson Freire da Silva', '1º A Programação de Jogos Digitais\r'),
(3, '51864', 'Angela Adrielly Gonçalves da Silva', '1º A Programação de Jogos Digitais\r'),
(4, '51865', 'Anna Beatriz Silvestre de Moura', '1º A Programação de Jogos Digitais\r'),
(5, '51866', 'Anna Julia Oliveira Nogueira', '1º A Programação de Jogos Digitais\r'),
(6, '51867', 'Anne Kendolly Dias Gomes', '1º A Programação de Jogos Digitais\r'),
(7, '51868', 'Antonio Marcus Cardoso da S. Costa', '1º A Programação de Jogos Digitais\r'),
(8, '51869', 'Arthur Fernandes Alves', '1º A Programação de Jogos Digitais\r'),
(9, '51870', 'Bruno Alysson Souza Valentin Filho', '1º A Programação de Jogos Digitais\r'),
(10, '51871', 'Cauan Jonathas Almeida Ataide Alves', '1º A Programação de Jogos Digitais\r'),
(11, '51872', 'Enailly da Silva Marques', '1º A Programação de Jogos Digitais\r'),
(12, '51873', 'Gabriel Farias Patricio', '1º A Programação de Jogos Digitais\r'),
(13, '51874', 'Gabriel Lacerda Costa', '1º A Programação de Jogos Digitais\r'),
(14, '51875', 'Ian Davi Rodrigues Paiva', '1º A Programação de Jogos Digitais\r'),
(15, '51876', 'Jaine Libna Cordão Costa e Silva', '1º A Programação de Jogos Digitais\r'),
(16, '51877', 'Jânio Chaves Cordeiro Filho', '1º A Programação de Jogos Digitais\r'),
(17, '51878', 'João Henrique dos Santos Cabral', '1º A Programação de Jogos Digitais\r'),
(18, '51879', 'João Pedro de Barros Silva', '1º A Programação de Jogos Digitais\r'),
(19, '51880', 'João Ricardo do Nascimento Silva', '1º A Programação de Jogos Digitais\r'),
(20, '51881', 'João Victor Dias Ribeiro', '1º A Programação de Jogos Digitais\r'),
(21, '51882', 'José Diego de guiar Souto', '1º A Programação de Jogos Digitais\r'),
(22, '51883', 'Kelvin Bezerra Rodrigues', '1º A Programação de Jogos Digitais\r'),
(23, '51884', 'Lais Aline Monteiro Julião', '1º A Programação de Jogos Digitais\r'),
(24, '51885', 'Luiz Felipe Ferreira de Gouveia', '1º A Programação de Jogos Digitais\r'),
(25, '51886', 'Mateus Henrique Carvalho Matos', '1º A Programação de Jogos Digitais\r'),
(26, '51887', 'Matheus Vinicius Santana de Medeiros', '1º A Programação de Jogos Digitais\r'),
(27, '51888', 'Miguel Alexandro Queiroz de Souza', '1º A Programação de Jogos Digitais\r'),
(28, '51889', 'Nicolas Gomes Lucena de Morais', '1º A Programação de Jogos Digitais\r'),
(29, '51890', 'Pedro Henrique Sant\'anna Gomes', '1º A Programação de Jogos Digitais\r'),
(30, '51891', 'Pyetro Phelipe Mota de Sousa', '1º A Programação de Jogos Digitais\r'),
(31, '51892', 'Renan Gustavo Lira Barbosa', '1º A Programação de Jogos Digitais\r'),
(32, '51893', 'Robert Vinicius de Oliveira Silva Lima', '1º A Programação de Jogos Digitais\r'),
(33, '51894', 'Ryan Silva Azevedo', '1º A Programação de Jogos Digitais\r'),
(34, '51895', 'Silvia Cabral Araujo', '1º A Programação de Jogos Digitais\r'),
(35, '51896', 'Suellen Souto Cavalcante', '1º A Programação de Jogos Digitais\r'),
(36, '51897', 'Thomas Pierre de Aquino Figueiredo', '1º A Programação de Jogos Digitais\r'),
(37, '51898', 'Yarllei Victor Santos Ferreira', '1º A Programação de Jogos Digitais\r'),
(38, '51899', 'Yasmin Cartaxo do Rego', '1º A Programação de Jogos Digitais\r'),
(39, '51900', 'Adnaelly Vitória de Aquino Silva', '1º B Programação de Jogos Digitais\r'),
(40, '51901', 'Adriano Melo Queiroga dos Santos', '1º B Programação de Jogos Digitais\r'),
(41, '51902', 'Aleff Gabriel Albuquerque de Morais', '1º B Programação de Jogos Digitais\r'),
(42, '51903', 'Alexsandro Francisco Porto Basilio', '1º B Programação de Jogos Digitais\r'),
(43, '51904', 'Ana Beatriz Leal da Fonseca', '1º B Programação de Jogos Digitais\r'),
(44, '51905', 'Ana Sofia Pereira Lima', '1º B Programação de Jogos Digitais\r'),
(45, '51906', 'Arthur Aragão Thamay Medeiros', '1º B Programação de Jogos Digitais\r'),
(46, '51907', 'Arthur Cavalcanti Oliveira', '1º B Programação de Jogos Digitais\r'),
(47, '51908', 'Caio Vinicius Araujo de Andrade', '1º B Programação de Jogos Digitais\r'),
(48, '51909', 'Carolina Silva Gonçalves', '1º B Programação de Jogos Digitais\r'),
(49, '51910', 'Cauã Nunes Gonçalves de Brito', '1º B Programação de Jogos Digitais\r'),
(50, '51911', 'Daniela Camila Vieira Mendonça', '1º B Programação de Jogos Digitais\r'),
(51, '51912', 'Emmanuele Michievicy Contente', '1º B Programação de Jogos Digitais\r'),
(52, '51913', 'Gabriel Douglas Guedes Almeida', '1º B Programação de Jogos Digitais\r'),
(53, '51914', 'Henry Evangelista de Almeida Araújo', '1º B Programação de Jogos Digitais\r'),
(54, '51915', 'Jefferson Vieira Virginio', '1º B Programação de Jogos Digitais\r'),
(55, '51916', 'Jhonata Gabriel Ferreira e Silva', '1º B Programação de Jogos Digitais\r'),
(56, '51917', 'João Vitor Queiroz Silva', '1º B Programação de Jogos Digitais\r'),
(57, '51918', 'Kaiky Fernandes de Araujo', '1º B Programação de Jogos Digitais\r'),
(58, '51919', 'Kevem Matheus Ramos do Nascimento', '1º B Programação de Jogos Digitais\r'),
(59, '51920', 'Lara Barbosa de Vasconcelos', '1º B Programação de Jogos Digitais\r'),
(60, '51921', 'Maria Fernanda Cândido Santos', '1º B Programação de Jogos Digitais\r'),
(61, '51922', 'Mariana Rocha Gomes', '1º B Programação de Jogos Digitais\r'),
(62, '51923', 'Matheus Vinicius da Silva Brito', '1º B Programação de Jogos Digitais\r'),
(63, '51924', 'Maycon Vinicios de Azevedo Souza', '1º B Programação de Jogos Digitais\r'),
(64, '51925', 'Nathan Araújo Luna', '1º B Programação de Jogos Digitais\r'),
(65, '51926', 'Pedro Henrique de Melo Souza Pereira', '1º B Programação de Jogos Digitais\r'),
(66, '51927', 'Pedro Miguel de Oliveira Silva', '1º B Programação de Jogos Digitais\r'),
(67, '51928', 'Rallyson Pereira Vasconcelos', '1º B Programação de Jogos Digitais\r'),
(68, '51929', 'Rian Neves Patricio', '1º B Programação de Jogos Digitais\r'),
(69, '51930', 'Ronald Nathanael Silva', '1º B Programação de Jogos Digitais\r'),
(70, '51931', 'Sara Camile de Lima Santos', '1º B Programação de Jogos Digitais\r'),
(71, '51932', 'Severino Felipe Camelo da Silva', '1º B Programação de Jogos Digitais\r'),
(72, '51933', 'Thiago Santana de Sá Filho', '1º B Programação de Jogos Digitais\r'),
(73, '51934', 'Thomas Rafael Ribeiro A. Marques', '1º B Programação de Jogos Digitais\r'),
(74, '51935', 'Vitor Colaço de Lima', '1º B Programação de Jogos Digitais\r'),
(75, '51936', 'Vitoria Colaço de Lima', '1º B Programação de Jogos Digitais\r'),
(76, '51937', 'Yago Silva de Souza', '1º B Programação de Jogos Digitais\r'),
(77, '51938', 'Ygor Fernnando Lima Martins', '1º B Programação de Jogos Digitais\r'),
(78, '51939', 'Adrielly Loranny Ferreira da Silva', '1º A Design Gráfico\r'),
(79, '51940', 'Aghata Martins de Sousa', '1º A Design Gráfico\r'),
(80, '51941', 'Aline Surama Rocha Barreto', '1º A Design Gráfico\r'),
(81, '51942', 'Ana Luiza Henriques da Silva', '1º A Design Gráfico\r'),
(82, '51943', 'Anderson Henrique de Sousa', '1º A Design Gráfico\r'),
(83, '51944', 'Anna Beatriz Silva Lucena', '1º A Design Gráfico\r'),
(84, '51945', 'Anna Liz da Silva Farias', '1º A Design Gráfico\r'),
(85, '51946', 'Caio Pereira Soares', '1º A Design Gráfico\r'),
(86, '51947', 'Camila Rodrigues Cardoso', '1º A Design Gráfico\r'),
(87, '51948', 'Denner Alves Serafim', '1º A Design Gráfico\r'),
(88, '51949', 'Emilly Marques Moreira', '1º A Design Gráfico\r'),
(89, '51950', 'Fernando Gabriel Tomaz da Silva', '1º A Design Gráfico\r'),
(90, '51951', 'Giovanna da Silva Santos', '1º A Design Gráfico\r'),
(91, '51952', 'Guilherme Samuel Lima Simões', '1º A Design Gráfico\r'),
(92, '51953', 'Hellen Kamilly N. de Vasconcelos Silva', '1º A Design Gráfico\r'),
(93, '51954', 'Izabel Cristina M. Conserva Souza', '1º A Design Gráfico\r'),
(94, '51955', 'Julia Moura Pereira', '1º A Design Gráfico\r'),
(95, '51956', 'Julia Pereira Barbosa', '1º A Design Gráfico\r'),
(96, '51957', 'Keicy Gabrielly Lopes Bandeira', '1º A Design Gráfico\r'),
(97, '51958', 'Kerllon Hanry Ferreira Silva de Melo', '1º A Design Gráfico\r'),
(98, '51959', 'Kézia Vitória dos Santos Silva', '1º A Design Gráfico\r'),
(99, '51960', 'Kleber Messias Barbosa Pereira', '1º A Design Gráfico\r'),
(100, '51961', 'Laura Vivian Felix de Lima', '1º A Design Gráfico\r'),
(101, '51962', 'Livia Custódio Rocha', '1º A Design Gráfico\r'),
(102, '51963', 'Livya Victorya Muniz Sales Gonzaga', '1º A Design Gráfico\r'),
(103, '51964', 'Lorena Kelly Gregório Neres', '1º A Design Gráfico\r'),
(104, '51965', 'Luan Guilherme Oliveira Ferreira', '1º A Design Gráfico\r'),
(105, '51966', 'Maira Evelyn Ferreira Alves', '1º A Design Gráfico\r'),
(106, '51967', 'Maria Eduarda Lisbôa Paulino', '1º A Design Gráfico\r'),
(107, '51968', 'Maria Gabriela Brito Pereira', '1º A Design Gráfico\r'),
(108, '51969', 'Maria Julia Guedes dos Santos', '1º A Design Gráfico\r'),
(109, '51970', 'Maria Laura Barbosa Xavier', '1º A Design Gráfico\r'),
(110, '51971', 'Matheus Marques Policarpo', '1º A Design Gráfico\r'),
(111, '51972', 'Mathews Augusto Lima Araújo', '1º A Design Gráfico\r'),
(112, '51973', 'Nathalia Rodrigues Sousa', '1º A Design Gráfico\r'),
(113, '51974', 'Pedro Arthur Freire da Silva', '1º A Design Gráfico\r'),
(114, '51975', 'Riquelme Ribeiro Nunes', '1º A Design Gráfico\r'),
(115, '51976', 'Rute Cristina de Souza Pereira', '1º A Design Gráfico\r'),
(116, '51977', 'Sabrina Marianny Santos Diniz', '1º A Design Gráfico\r'),
(117, '51978', 'Welker Yuri Santos Diniz', '1º A Design Gráfico\r'),
(118, '51979', 'Yasmin Ketly Bezerra de Farias', '1º A Design Gráfico\r'),
(119, '51980', 'Ygor Santos da Silva', '1º A Design Gráfico\r'),
(120, '51981', 'Adrielly Nicole Barreto Silva', '1º B Design Gráfico\r'),
(121, '51982', 'Adryan Victor Silva Matias', '1º B Design Gráfico\r'),
(122, '51983', 'Ana Beatriz de Araujo Inácio', '1º B Design Gráfico\r'),
(123, '51984', 'Anna Livia dos Santos Barros Silva', '1º B Design Gráfico\r'),
(124, '51985', 'Arthur Tavares de Oliveira', '1º B Design Gráfico\r'),
(125, '51986', 'Danyella Wadja de Carvalho Oliveira', '1º B Design Gráfico\r'),
(126, '51987', 'Debora Tayna Lima Ferreira', '1º B Design Gráfico\r'),
(127, '51988', 'Elis Araujo Andriola Silva', '1º B Design Gráfico\r'),
(128, '51989', 'Emily Yasmin Velez Pereira', '1º B Design Gráfico\r'),
(129, '51990', 'Esther Mirelly Mendes de Brito', '1º B Design Gráfico\r'),
(130, '51991', 'Evellyn Laviny Campos do Ó', '1º B Design Gráfico\r'),
(131, '51992', 'Felipe Henrique Neri de Souza', '1º B Design Gráfico\r'),
(132, '51993', 'Gabriela Ferreira Araújo', '1º B Design Gráfico\r'),
(133, '51994', 'Heloisa Nascimento Soares', '1º B Design Gráfico\r'),
(134, '51995', 'Italo Gabriel de Sousa Domingos', '1º B Design Gráfico\r'),
(135, '51996', 'Jardson de Oliveira Silva', '1º B Design Gráfico\r'),
(136, '51997', 'Jhenyffer da Silva Figueiredo', '1º B Design Gráfico\r'),
(137, '51998', 'João Gabriel Marques Gervázio', '1º B Design Gráfico\r'),
(138, '51999', 'João Pedro da Silva de Oliveira Barros', '1º B Design Gráfico\r'),
(139, '52000', 'João Victor Gomes Travassos', '1º B Design Gráfico\r'),
(140, '52001', 'Jonathan Igor Paulo Santos', '1º B Design Gráfico\r'),
(141, '52002', 'Jose David de Lima', '1º B Design Gráfico\r'),
(142, '52003', 'Julya Flávia de Prado Moraes', '1º B Design Gráfico\r'),
(143, '52004', 'Kaio Lucas Costa Medeiros', '1º B Design Gráfico\r'),
(144, '52005', 'Leticia Lima Marcelino', '1º B Design Gráfico\r'),
(145, '52006', 'Livia Freitas Santos', '1º B Design Gráfico\r'),
(146, '52007', 'Lucas Gabriel Apolinário Silva', '1º B Design Gráfico\r'),
(147, '52008', 'Maria Clara dos Santos Correia', '1º B Design Gráfico\r'),
(148, '52009', 'Maria Luiza Araujo Costa', '1º B Design Gráfico\r'),
(149, '52010', 'Murilo Alves de Souza Florêncio', '1º B Design Gráfico\r'),
(150, '52011', 'Pedro Henrique Farias Ribeiro', '1º B Design Gráfico\r'),
(151, '52012', 'Rayssa Freitas Rodrigues', '1º B Design Gráfico\r'),
(152, '52013', 'Samira Silva Oliveira', '1º B Design Gráfico\r'),
(153, '52014', 'Sophia Rodrigues Sales', '1º B Design Gráfico\r'),
(154, '52015', 'Tamyres Alves Costa', '1º B Design Gráfico\r'),
(155, '52016', 'Vinicius José Bezerra Silva', '1º B Design Gráfico\r'),
(156, '52017', 'Vitor Mohandas Ramalho Nunes', '1º B Design Gráfico\r'),
(157, '52018', 'Weslley Davi Costa Araujo', '1º B Design Gráfico\r'),
(158, '52019', 'Yaslan da Silva Farias', '1º B Design Gráfico\r'),
(159, '52020', 'Abraão Gonçalves dos Santos', '1º A Publicidade\r'),
(160, '52021', 'Acsa Leticia Simplicio Eduardo', '1º A Publicidade\r'),
(161, '52022', 'Ana Beatriz Diniz de Araujo', '1º A Publicidade\r'),
(162, '52023', 'Ana Clara Santos Marques', '1º A Publicidade\r'),
(163, '52024', 'Anny Vitoria Rodrigues Luna Almeida', '1º A Publicidade\r'),
(164, '52025', 'Ashley Fernanda Oliveira Mendes', '1º A Publicidade\r'),
(165, '52026', 'Beatriz Figueiredo Daniel dos Santos', '1º A Publicidade\r'),
(166, '52027', 'Bianca Costa de Freitas', '1º A Publicidade\r'),
(167, '52028', 'Bruno Guimarães Bandeira', '1º A Publicidade\r'),
(168, '52029', 'Byanca Renally Diniz de Araujo', '1º A Publicidade\r'),
(169, '52030', 'Debora Costa Araujo', '1º A Publicidade\r'),
(170, '52031', 'Geislayne Carvalho Costa', '1º A Publicidade\r'),
(171, '52032', 'Guilherme Alves Guimarães', '1º A Publicidade\r'),
(172, '52033', 'Guilherme Cruz da Silva', '1º A Publicidade\r'),
(173, '52034', 'Heloise de Lacerda Barros', '1º A Publicidade\r'),
(174, '52035', 'Ingrid Beatriz Alves dos Santos', '1º A Publicidade\r'),
(175, '52036', 'Jhennifer Rayssa Amorim Silva', '1º A Publicidade\r'),
(176, '52037', 'João Gabriel Moreira Cruz', '1º A Publicidade\r'),
(177, '52038', 'José Araujo da Silva Neto', '1º A Publicidade\r'),
(178, '52039', 'Jullye Suivia dos Santos Silva', '1º A Publicidade\r'),
(179, '52040', 'Kaio Gabriel Menezes de Farias', '1º A Publicidade\r'),
(180, '52041', 'Karollyne Victorya Fragoso Gregório', '1º A Publicidade\r'),
(181, '52042', 'Kemilly Isabelle Lourenço Barbosa', '1º A Publicidade\r'),
(182, '52043', 'Kethley Beatriz Silva Martins', '1º A Publicidade\r'),
(183, '52044', 'Lais Gabrielle Medeiros Herculano', '1º A Publicidade\r'),
(184, '52045', 'Larah Walkyria Khaly Monteiro', '1º A Publicidade\r'),
(185, '52046', 'Maria Laura Cassimiro Maciel', '1º A Publicidade\r'),
(186, '52047', 'Maria Vitoria Eustaquio da Silva', '1º A Publicidade\r'),
(187, '52048', 'Natálye Hozana da Costa Fernandes', '1º A Publicidade\r'),
(188, '52049', 'Nicholas Levi Oliveira Santos', '1º A Publicidade\r'),
(189, '52050', 'Rávila Drielly Rodrigues Maciel', '1º A Publicidade\r'),
(190, '52051', 'Rosimery de Sousa Amarante', '1º A Publicidade\r'),
(191, '52052', 'Sofia Carolina de Albuquerque Santos', '1º A Publicidade\r'),
(192, '52053', 'Sthefanny da Silva Souza', '1º A Publicidade\r'),
(193, '52054', 'Taylor Nunes Santos', '1º A Publicidade\r'),
(194, '52055', 'Thaina Alves de Lima', '1º A Publicidade\r'),
(195, '52056', 'Thays Alves de Lima', '1º A Publicidade\r'),
(196, '52057', 'Vinicius Araujo dos Santos', '1º A Publicidade\r'),
(197, '52058', 'Vitor Rafael de Souza', '1º A Publicidade\r'),
(198, '52059', 'Yasmim Kelly Gomes Albuquerque', '1º A Publicidade\r'),
(199, '52060', 'Yasmin Sofia Lourenço', '1º A Publicidade\r'),
(200, '52061', 'Agatha Vitoria Cosme Paz', '1º B Publicidade\r'),
(201, '52062', 'Alyce Rafaella Barbosa Costa', '1º B Publicidade\r'),
(202, '52063', 'Ana Clara Cardoso Ferreira', '1º B Publicidade\r'),
(203, '52064', 'Ana Clara de Souza', '1º B Publicidade\r'),
(204, '52065', 'Ana Livia Almeida C. Araujo', '1º B Publicidade\r'),
(205, '52066', 'Ana Livia Moreira de Barros', '1º B Publicidade\r'),
(206, '52067', 'Ana Livia Santos Costa', '1º B Publicidade\r'),
(207, '52068', 'Anna Beatriz Martins dos Santos', '1º B Publicidade\r'),
(208, '52069', 'Ariel Abrantes Aciole Nascimento', '1º B Publicidade\r'),
(209, '52070', 'Caio Miguel Sales Menschhein', '1º B Publicidade\r'),
(210, '52071', 'Camila Vitória dos Santos Figueiredo', '1º B Publicidade\r'),
(211, '52072', 'Emmelliny Silva Dias Farias', '1º B Publicidade\r'),
(212, '52073', 'Guilherme Marinho do ó', '1º B Publicidade\r'),
(213, '52074', 'Iasmin Gizely Barbosa Alves', '1º B Publicidade\r'),
(214, '52075', 'Ilary Lhara Augusto Lima', '1º B Publicidade\r'),
(215, '52076', 'João Pedro da Silva Alves', '1º B Publicidade\r'),
(216, '52077', 'Kaliandra Raissa do Nascimento Souza', '1º B Publicidade\r'),
(217, '52078', 'Kemilly Victória Dantas Cazé', '1º B Publicidade\r'),
(218, '52079', 'Lais Julia Silva Guedes', '1º B Publicidade\r'),
(219, '52080', 'Lara Gabrielly Leite Soares', '1º B Publicidade\r'),
(220, '52081', 'Lavinia Nascimento Silva', '1º B Publicidade\r'),
(221, '52082', 'Laysa Araújo Oliveira', '1º B Publicidade\r'),
(222, '52083', 'Leticia Gabriely S. M. de Vasconcelos', '1º B Publicidade\r'),
(223, '52084', 'Maria Clara Apolinário da Silva', '1º B Publicidade\r'),
(224, '52085', 'Maria Clara da Silva Lima Borges', '1º B Publicidade\r'),
(225, '52086', 'Maria Clara Leonardo da Cruz', '1º B Publicidade\r'),
(226, '52087', 'Maria Eduarda da Silva Santiago', '1º B Publicidade\r'),
(227, '52088', 'Maria Eduarda Fernandes B. Oliveira', '1º B Publicidade\r'),
(228, '52089', 'Maria Heloisa Freire Martins', '1º B Publicidade\r'),
(229, '52090', 'Maria Luiza Lima Marques', '1º B Publicidade\r'),
(230, '52091', 'Maria Luiza Teixeira Gomes', '1º B Publicidade\r'),
(231, '52092', 'Maria Rita de Cassia Azevedo Alves', '1º B Publicidade\r'),
(232, '52093', 'Marília Eduarda da Silva Santos', '1º B Publicidade\r'),
(233, '52094', 'Nathalia Farias de Oliveira Silva', '1º B Publicidade\r'),
(234, '52095', 'Otavio Lucas Cabral Lourenço', '1º B Publicidade\r'),
(235, '52096', 'Pedro Lucas de Araujo Dutra Veras', '1º B Publicidade\r'),
(236, '52097', 'Raiff Ygor Lima Queiroz', '1º B Publicidade\r'),
(237, '52098', 'Renata Andrade da Silva', '1º B Publicidade\r'),
(238, '52099', 'Renato Rizork Souto Maior Gomes', '1º B Publicidade\r'),
(239, '52100', 'Sophia Andrade Amorim', '1º B Publicidade\r'),
(240, '52101', 'Victor Emanuel Pereira de Lira', '1º B Publicidade\r'),
(241, '52102', 'Vitória Santos Rodrigues', '1º B Publicidade\r'),
(242, '52103', 'Yanni Dantas Chaves', '1º B Publicidade\r'),
(243, '52104', 'Alex Ranyê Guilherme Cristino', '2º A Programação de Jogos Digitais\r'),
(244, '52105', 'Ana beatriz Araújo Salvino', '2º A Programação de Jogos Digitais\r'),
(245, '52106', 'Ana Clara Oliveira das Chagas', '2º A Programação de Jogos Digitais\r'),
(246, '52107', 'Ana Flávia Ribeiro Gomes Nascimento', '2º A Programação de Jogos Digitais\r'),
(247, '52108', 'Ana Luiza Almeida Maia', '2º A Programação de Jogos Digitais\r'),
(248, '52109', 'Andrei Bernado Nascimento da Silva', '2º A Programação de Jogos Digitais\r'),
(249, '52110', 'Arthur Juan Costa Araújo', '2º A Programação de Jogos Digitais\r'),
(250, '52111', 'Daniel Dantas da Silva', '2º A Programação de Jogos Digitais\r'),
(251, '52112', 'Erick Gabriel Araújo Leandro', '2º A Programação de Jogos Digitais\r'),
(252, '52113', 'Eugênio Genuíno Mota', '2º A Programação de Jogos Digitais\r'),
(253, '52114', 'Gabriel de Sousa Gonzaga', '2º A Programação de Jogos Digitais\r'),
(254, '52115', 'Giullia Barros Pietoso Camara', '2º A Programação de Jogos Digitais\r'),
(255, '52116', 'Gleiciane Almeida de Lima', '2º A Programação de Jogos Digitais\r'),
(256, '52117', 'Gustavo Oliviera de Menezes', '2º A Programação de Jogos Digitais\r'),
(257, '52118', 'Heitor Gênuíno Mota', '2º A Programação de Jogos Digitais\r'),
(258, '52119', 'Júlia da Costa Silva Cruz', '2º A Programação de Jogos Digitais\r'),
(259, '52120', 'Laura Lima Pires', '2º A Programação de Jogos Digitais\r'),
(260, '52121', 'Lucas Abrantes Rêgo', '2º A Programação de Jogos Digitais\r'),
(261, '52122', 'Luiz Alberto Medeiros Soares', '2º A Programação de Jogos Digitais\r'),
(262, '52123', 'Maria Alice Borba Agra', '2º A Programação de Jogos Digitais\r'),
(263, '52124', 'Maria Clara Alves de Lima', '2º A Programação de Jogos Digitais\r'),
(264, '52125', 'Maria Clara dos  Reis Silva', '2º A Programação de Jogos Digitais\r'),
(265, '52126', 'Maria Evelyn da Silva Almeida', '2º A Programação de Jogos Digitais\r'),
(266, '52127', 'Marina Venâncio Oliveira', '2º A Programação de Jogos Digitais\r'),
(267, '52128', 'Pedro Elias Barbosa de Sousa', '2º A Programação de Jogos Digitais\r'),
(268, '52129', 'Pedro Henrique dos Santos Sousa', '2º A Programação de Jogos Digitais\r'),
(269, '52130', 'Pedro Víctor de Farias Almeida', '2º A Programação de Jogos Digitais\r'),
(270, '52131', 'Pedro Welisson de Lima Araújo', '2º A Programação de Jogos Digitais\r'),
(271, '52132', 'Rebeca Kemylly Vasquez Mendes', '2º A Programação de Jogos Digitais\r'),
(272, '52133', 'Renan Victor Rocha Pessoa', '2º A Programação de Jogos Digitais\r'),
(273, '52134', 'Reuel Rodrigues Ferreira', '2º A Programação de Jogos Digitais\r'),
(274, '52135', 'Samara Rafaelly Brandão Rocha', '2º A Programação de Jogos Digitais\r'),
(275, '52136', 'Samuel Fontes Lima', '2º A Programação de Jogos Digitais\r'),
(276, '52137', 'Thifany Tayane Pereira Galdino', '2º A Programação de Jogos Digitais\r'),
(277, '52138', 'Victor Gabriel Clementino Lima', '2º A Programação de Jogos Digitais\r'),
(278, '52139', 'Vitória Cristina Rodrigues Amancio Vieira', '2º A Programação de Jogos Digitais\r'),
(279, '52140', 'Adrean Danilo Alves Lima', '2º B Programação de Jogos Digitais\r'),
(280, '52141', 'Alberto Victor Barbosa Pereira', '2º B Programação de Jogos Digitais\r'),
(281, '52142', 'Aleff Silva Lima', '2º B Programação de Jogos Digitais\r'),
(282, '52143', 'Ana Carolini da Silva Sousa', '2º B Programação de Jogos Digitais\r'),
(283, '52144', 'Anna Carolina Cavalcante Lira', '2º B Programação de Jogos Digitais\r'),
(284, '52145', 'Anna Vitória Dantas de Sousa Silva', '2º B Programação de Jogos Digitais\r'),
(285, '52146', 'Daniel Nascimento de Lima', '2º B Programação de Jogos Digitais\r'),
(286, '52147', 'Daniel Weslley Pinto Cavalcante', '2º B Programação de Jogos Digitais\r'),
(287, '52148', 'David Vinicíus Silva Souza', '2º B Programação de Jogos Digitais\r'),
(288, '52149', 'Deborah Thamyris Araujo Primo', '2º B Programação de Jogos Digitais\r'),
(289, '52150', 'Eloyse Sthefanny da Silva Cavalcante', '2º B Programação de Jogos Digitais\r'),
(290, '52151', 'Enzo Nícollas Martins de Andrade', '2º B Programação de Jogos Digitais\r'),
(291, '52152', 'Evandro Gomes da Silva Filho', '2º B Programação de Jogos Digitais\r'),
(292, '52153', 'Iasmin Noelly Santos Ramos', '2º B Programação de Jogos Digitais\r'),
(293, '52154', 'Ibrahimovic Negreiros Guedes de Andrade', '2º B Programação de Jogos Digitais\r'),
(294, '52155', 'Isabella Albuquerque Araujo Gomes', '2º B Programação de Jogos Digitais\r'),
(295, '52156', 'Italo Matheus da Silva Ramos', '2º B Programação de Jogos Digitais\r'),
(296, '52157', 'Ivny de Lima Silva', '2º B Programação de Jogos Digitais\r'),
(297, '52158', 'João Matheus Souto Neves', '2º B Programação de Jogos Digitais\r'),
(298, '52159', 'João Victor Machado Gomes', '2º B Programação de Jogos Digitais\r'),
(299, '52160', 'Keila Andrade da Silva', '2º B Programação de Jogos Digitais\r'),
(300, '52161', 'Levi Dantas Peres', '2º B Programação de Jogos Digitais\r'),
(301, '52162', 'Maiza Gabriela da Silva Moreira', '2º B Programação de Jogos Digitais\r'),
(302, '52163', 'Maria Aymê de Sousa Silva', '2º B Programação de Jogos Digitais\r'),
(303, '52164', 'Mariana Araujo Azevedo', '2º B Programação de Jogos Digitais\r'),
(304, '52165', 'Matheus Barbosa Escorel Lopes', '2º B Programação de Jogos Digitais\r'),
(305, '52166', 'Pâmela Yohanna Bezerra Belo', '2º B Programação de Jogos Digitais\r'),
(306, '52167', 'Rayssa da Silva Nunes', '2º B Programação de Jogos Digitais\r'),
(307, '52168', 'Raul Medeiros de Sousa', '2º B Programação de Jogos Digitais\r'),
(308, '52169', 'Samuel Ferreira Vasconcelos Alves', '2º B Programação de Jogos Digitais\r'),
(309, '52170', 'Sarah Nunes Magalhães', '2º B Programação de Jogos Digitais\r'),
(310, '52171', 'Victor Coriolano Maciel', '2º B Programação de Jogos Digitais\r'),
(311, '52172', 'Vinícius Zidane Vieira Ferreira', '2º B Programação de Jogos Digitais\r'),
(312, '52173', 'Wagner Kennedy Pereira Rodrigues', '2º B Programação de Jogos Digitais\r'),
(313, '52174', 'Ana Beatriz de Araújo Abrantes', '2º A Design de Calçados\r'),
(314, '52175', 'Ana Clara Lauriano Gomes dos Santos', '2º A Design de Calçados\r'),
(315, '52176', 'Clarisse Sousa Alves', '2º A Design de Calçados\r'),
(316, '52177', 'Eduarda da Silva Raposo', '2º A Design de Calçados\r'),
(317, '52178', 'Emilly Michele Santos Meira', '2º A Design de Calçados\r'),
(318, '52179', 'Emilly Nathália Pereira Tavares', '2º A Design de Calçados\r'),
(319, '52180', 'Evillyn Isadora da Silva', '2º A Design de Calçados\r'),
(320, '52181', 'Giullia Borges Martins de Oliveira', '2º A Design de Calçados\r'),
(321, '52182', 'Guilherme Cândido da Silva Rodrigues', '2º A Design de Calçados\r'),
(322, '52183', 'Ingryd Keittyanne Sales Arruda', '2º A Design de Calçados\r'),
(323, '52184', 'Isaac de Oliveira Alves', '2º A Design de Calçados\r'),
(324, '52185', 'Júlia Mariana Clementino Oliveira', '2º A Design de Calçados\r'),
(325, '52186', 'Letícia Carvalho Silva Farias', '2º A Design de Calçados\r'),
(326, '52187', 'Lindsay Sofie Araujo Alves', '2º A Design de Calçados\r'),
(327, '52188', 'Luana Rodrigues Guedes da Silva', '2º A Design de Calçados\r'),
(328, '52189', 'Maria Clara de Oliveira Souza', '2º A Design de Calçados\r'),
(329, '52190', 'Maria Fernanda Pires de Farias', '2º A Design de Calçados\r'),
(330, '52191', 'Maria Heloisa Ferreira dos Santos', '2º A Design de Calçados\r'),
(331, '52192', 'Maria Laura Santros Ferreira', '2º A Design de Calçados\r'),
(332, '52193', 'Mariana Carvalho Silva Farias', '2º A Design de Calçados\r'),
(333, '52194', 'Mirely Santana Farias', '2º A Design de Calçados\r'),
(334, '52195', 'Rafaelle Kymmi Carvalho Melo', '2º A Design de Calçados\r'),
(335, '52196', 'Rayssa Lima Travassos de Albuquerque', '2º A Design de Calçados\r'),
(336, '52197', 'Rhanna Nicolle Santos Silva', '2º A Design de Calçados\r'),
(337, '52198', 'Sara Clara Oliveira Farias', '2º A Design de Calçados\r'),
(338, '52199', 'Sarah Evelyn Albuquerque da Silva', '2º A Design de Calçados\r'),
(339, '52200', 'Thays Emanuelly Laureano Silva', '2º A Design de Calçados\r'),
(340, '52201', 'Víctor Gabriel Souza Rocha de Lemos', '2º A Design de Calçados\r'),
(341, '52202', 'Yasmin da Silva Mouzinho', '2º A Design de Calçados\r'),
(342, '52203', 'Allan Matheus Nascimento de V. Gomes', '3º A Programação de Jogos Digitais\r'),
(343, '52204', 'Ana Clara Belmino Freire', '3º A Programação de Jogos Digitais\r'),
(344, '52205', 'Ana Clara da Silva Ribeiro Oliveira de Morais', '3º A Programação de Jogos Digitais\r'),
(345, '52206', 'Ana Luísa Batista de Lima', '3º A Programação de Jogos Digitais\r'),
(346, '52207', 'Ana Luisa da Costa Alves', '3º A Programação de Jogos Digitais\r'),
(347, '52208', 'Anna Julya Ribeiro Tomé', '3º A Programação de Jogos Digitais\r'),
(348, '52209', 'Anna Luiza Silvestre de Moura', '3º A Programação de Jogos Digitais\r'),
(349, '52210', 'Anna Luysa Ferreira  da Silva Sousa', '3º A Programação de Jogos Digitais\r'),
(350, '52211', 'Antuany Fernando Pereira da Silva', '3º A Programação de Jogos Digitais\r'),
(351, '52212', 'Arthur de Souza Faustino', '3º A Programação de Jogos Digitais\r'),
(352, '52213', 'Arthur Miguel Galvão', '3º A Programação de Jogos Digitais\r'),
(353, '52214', 'Arthur Ruan Alves da Silva', '3º A Programação de Jogos Digitais\r'),
(354, '52215', 'Bruno Renan Silva Fernandes de Paula', '3º A Programação de Jogos Digitais\r'),
(355, '52216', 'Camila Steffany Campos da Silva', '3º A Programação de Jogos Digitais\r'),
(356, '52217', 'Dandara Gomes Silva', '3º A Programação de Jogos Digitais\r'),
(357, '52218', 'Daniel Aguiar Saraiva', '3º A Programação de Jogos Digitais\r'),
(358, '52219', 'Davi Mariz Martins Cantalice', '3º A Programação de Jogos Digitais\r'),
(359, '52220', 'Emilly Joyce Tavares da Silva', '3º A Programação de Jogos Digitais\r'),
(360, '52221', 'Felipe Adriel da Silva', '3º A Programação de Jogos Digitais\r'),
(361, '52222', 'Felipe Emanuel Ponciano de Mello', '3º A Programação de Jogos Digitais\r'),
(362, '52223', 'Felipe Matheus Santos', '3º A Programação de Jogos Digitais\r'),
(363, '52224', 'Fernanda Araújo Souza', '3º A Programação de Jogos Digitais\r'),
(364, '52225', 'Fillipe Costa Silva', '3º A Programação de Jogos Digitais\r'),
(365, '52226', 'Gabriel Cardoso Ferreira', '3º A Programação de Jogos Digitais\r'),
(366, '52227', 'Gabriel Henrique Santana de Brito', '3º A Programação de Jogos Digitais\r'),
(367, '52228', 'Geovanna Emilly Tomé Gomes', '3º A Programação de Jogos Digitais\r'),
(368, '52229', 'Gustavo Do Nascimento Silva', '3º A Programação de Jogos Digitais\r'),
(369, '52230', 'Henrique César dos Santos Dias', '3º A Programação de Jogos Digitais\r'),
(370, '52231', 'Henrique Souza Santos', '3º A Programação de Jogos Digitais\r'),
(371, '52232', 'Hiago Claus Farias Azevedo', '3º A Programação de Jogos Digitais\r'),
(372, '52233', 'Iasmyn Vitória Viturino da Silva', '3º A Programação de Jogos Digitais\r'),
(373, '52234', 'José Augusto Cisino Bezerra de Oliveira', '3º A Programação de Jogos Digitais\r'),
(374, '52235', 'Júlia Lethicia Ferreira Santos', '3º A Programação de Jogos Digitais\r'),
(375, '52236', 'Kervin Thayrone Santana Virginio', '3º A Programação de Jogos Digitais\r'),
(376, '52237', 'Larissa Correia Silva', '3º A Programação de Jogos Digitais\r'),
(377, '52238', 'Larissa Emanuela Lima Araújo', '3º A Programação de Jogos Digitais\r'),
(378, '52239', 'Letícia Evellyn Agostinho do Nascimento', '3º A Programação de Jogos Digitais\r'),
(379, '52240', 'Maria Luiza Cabral Ventura', '3º A Programação de Jogos Digitais\r'),
(380, '52241', 'Oscar Henrique O Maciel', '3º A Programação de Jogos Digitais\r'),
(381, '52242', 'Pedro Henrique Bezerra Gonçalves', '3º A Programação de Jogos Digitais\r'),
(382, '52243', 'Rafael Fernandes Herculano da Silva', '3º A Programação de Jogos Digitais\r'),
(383, '52244', 'Samuel da Silva Martins', '3º A Programação de Jogos Digitais\r'),
(384, '52245', 'Vinicius Santos Sousa', '3º A Programação de Jogos Digitais\r'),
(385, '52246', 'Carla Beatriz dos Santos Ventura', ' 3º B Programação de Jogos Digitais\r'),
(386, '52247', 'Cauan Tavares Pereira', ' 3º B Programação de Jogos Digitais\r'),
(387, '52248', 'Cleiton Mikael de Menezes Aguiar', ' 3º B Programação de Jogos Digitais\r'),
(388, '52249', 'Daniel Santos de Oliveira', ' 3º B Programação de Jogos Digitais\r'),
(389, '52250', 'David Maxwell Pereira Silva', ' 3º B Programação de Jogos Digitais\r'),
(390, '52251', 'Denilson Quaresma da Silva Filho', ' 3º B Programação de Jogos Digitais\r'),
(391, '52252', 'Deyvisson Lucas Correia do Nascimento', ' 3º B Programação de Jogos Digitais\r'),
(392, '52253', 'Diego Gonzaga Cavalcante Rodrigues', ' 3º B Programação de Jogos Digitais\r'),
(393, '52254', 'Dowglas Kauan Barbosa Costa', ' 3º B Programação de Jogos Digitais\r'),
(394, '52255', 'Éllysson Emanuel Silva Melo de Sousa', ' 3º B Programação de Jogos Digitais\r'),
(395, '52256', 'Eloyzi Nayana Braz de Sousa', ' 3º B Programação de Jogos Digitais\r'),
(396, '52257', 'Emanuelle Sales Galisa', ' 3º B Programação de Jogos Digitais\r'),
(397, '52258', 'Emersson Luiz Santos de Oliveira', ' 3º B Programação de Jogos Digitais\r'),
(398, '52259', 'Emily dos Santos Trajano', ' 3º B Programação de Jogos Digitais\r'),
(399, '52260', 'Erick Lira Mendes', ' 3º B Programação de Jogos Digitais\r'),
(400, '52261', 'Evellyn Rillary Costa Rodrigues da Silva', ' 3º B Programação de Jogos Digitais\r'),
(401, '52262', 'Evellyn Thaffiny Barbosa Macimiro Santos', ' 3º B Programação de Jogos Digitais\r'),
(402, '52263', 'Gabriel Alves Pereira', ' 3º B Programação de Jogos Digitais\r'),
(403, '52264', 'Gustavo Galdino Santos', ' 3º B Programação de Jogos Digitais\r'),
(404, '52265', 'Iêgo Cawhê  Augusto da costa', ' 3º B Programação de Jogos Digitais\r'),
(405, '52266', 'Isaac Pessoa Souza', ' 3º B Programação de Jogos Digitais\r'),
(406, '52267', 'Isaque Silva de Araújo', ' 3º B Programação de Jogos Digitais\r'),
(407, '52268', 'João Caetano de Oliveira Silva', ' 3º B Programação de Jogos Digitais\r'),
(408, '52269', 'João Gabriel Ramalho Batista', ' 3º B Programação de Jogos Digitais\r'),
(409, '52270', 'João Kelby Coutinho Castro', ' 3º B Programação de Jogos Digitais\r'),
(410, '52271', 'João Rafael Barbosa Silva', ' 3º B Programação de Jogos Digitais\r'),
(411, '52272', 'João Victor Duarte de Oliveira', ' 3º B Programação de Jogos Digitais\r'),
(412, '52273', 'John Lucas Fernandes Alves', ' 3º B Programação de Jogos Digitais\r'),
(413, '52274', 'Jorge Eduardo Barroso Barreto', ' 3º B Programação de Jogos Digitais\r'),
(414, '52275', 'José Arley Silva Oliveira', ' 3º B Programação de Jogos Digitais\r'),
(415, '52276', 'José Jonatias Pereira de lima Neto', ' 3º B Programação de Jogos Digitais\r'),
(416, '52277', 'José Lucas Laurindo Silva', ' 3º B Programação de Jogos Digitais\r'),
(417, '52278', 'José Lucas Pereira Silva', ' 3º B Programação de Jogos Digitais\r'),
(418, '52279', 'José Mateus Lima Teodulino Gondim', ' 3º B Programação de Jogos Digitais\r'),
(419, '52280', 'Júlia Alves da Silva Almeida', ' 3º B Programação de Jogos Digitais\r'),
(420, '52281', 'Letícia Rodrigues da Silva', ' 3º B Programação de Jogos Digitais\r'),
(421, '52282', 'Luís Eduardo Soares Oliveira', ' 3º B Programação de Jogos Digitais\r'),
(422, '52283', 'Pedro Felipe Lisboa de Brito', ' 3º B Programação de Jogos Digitais\r'),
(423, '52284', 'Pedro Henrique de Sousa Campos', ' 3º B Programação de Jogos Digitais\r'),
(424, '52285', 'Rhanderson César da Silva Pereira', ' 3º B Programação de Jogos Digitais\r'),
(425, '52286', 'Tiago Gonzaga Cavalcante Rodrigues', ' 3º B Programação de Jogos Digitais\r'),
(426, '52287', 'Wictor Miguel Lopes dos Santos', ' 3º B Programação de Jogos Digitais\r'),
(427, '52288', 'Ana Luiza Oliveira de Lima', ' 3º C Programação de Jogos Digitais\r'),
(428, '52289', 'Andrey Silva Araújo', ' 3º C Programação de Jogos Digitais\r'),
(429, '52290', 'Davi Sergio Silva Filho', ' 3º C Programação de Jogos Digitais\r'),
(430, '52291', 'Eduarda Eshley Sousa', ' 3º C Programação de Jogos Digitais\r'),
(431, '52292', 'Elton Cipriano de Lucena', ' 3º C Programação de Jogos Digitais\r'),
(432, '52293', 'Emanuel Filipe Alves de Andrade', ' 3º C Programação de Jogos Digitais\r'),
(433, '52294', 'Emilly Jolie da Silva Caiana', ' 3º C Programação de Jogos Digitais\r'),
(434, '52295', 'Erick Maicon Batista Freitas', ' 3º C Programação de Jogos Digitais\r'),
(435, '52296', 'Fellipe Eduardo Alves da Silva', ' 3º C Programação de Jogos Digitais\r'),
(436, '52297', 'Gabriel Matias Feitosa', ' 3º C Programação de Jogos Digitais\r'),
(437, '52298', 'Heverton Ramos Oliveira', ' 3º C Programação de Jogos Digitais\r'),
(438, '52299', 'João Victor  Silva de Albuquerque', ' 3º C Programação de Jogos Digitais\r'),
(439, '52300', 'João Victor De Arruda Dias', ' 3º C Programação de Jogos Digitais\r'),
(440, '52301', 'José Kelvyn Barbosa Vidal de Negreiros', ' 3º C Programação de Jogos Digitais\r'),
(441, '52302', 'Júlio César da Silva', ' 3º C Programação de Jogos Digitais\r'),
(442, '52303', 'Kamille Ferreira da Costa Coutinho', ' 3º C Programação de Jogos Digitais\r'),
(443, '52304', 'Kauan Eduardo Rodrigues de Brito', ' 3º C Programação de Jogos Digitais\r'),
(444, '52305', 'Kauan Israel Dias de Oliveira', ' 3º C Programação de Jogos Digitais\r'),
(445, '52306', 'Larissa Kathleen Corrêa de Sousa', ' 3º C Programação de Jogos Digitais\r'),
(446, '52307', 'Leonardo Guimarães Alves', ' 3º C Programação de Jogos Digitais\r'),
(447, '52308', 'Leonardo Pereira Neiva', ' 3º C Programação de Jogos Digitais\r'),
(448, '52309', 'Luan Benedito de Brito Marques', ' 3º C Programação de Jogos Digitais\r'),
(449, '52310', 'Lucas Henrique Figueiredo Gomes', ' 3º C Programação de Jogos Digitais\r'),
(450, '52311', 'Luís Gabriel Cabral Leal', ' 3º C Programação de Jogos Digitais\r'),
(451, '52312', 'Luiza Beatriz Barbosa dos Santos', ' 3º C Programação de Jogos Digitais\r'),
(452, '52313', 'Maria Clara Gonzaga da Silva', ' 3º C Programação de Jogos Digitais\r'),
(453, '52314', 'Maria Eduarda André Lopes Santos', ' 3º C Programação de Jogos Digitais\r'),
(454, '52315', 'Mariana Kelly de Brito Soares', ' 3º C Programação de Jogos Digitais\r'),
(455, '52316', 'Milena Karoline dos Santos Souza', ' 3º C Programação de Jogos Digitais\r'),
(456, '52317', 'Mokly Ellen Gomes de Lima', ' 3º C Programação de Jogos Digitais\r'),
(457, '52318', 'Newmany Henrique Borgo Cavalcanti', ' 3º C Programação de Jogos Digitais\r'),
(458, '52319', 'Pedro Bezerra Sobrinho Filho', ' 3º C Programação de Jogos Digitais\r'),
(459, '52320', 'Pedro Gabriel de Souza Rodrigues', ' 3º C Programação de Jogos Digitais\r'),
(460, '52321', 'Pedro Victor de Sena Ferreira', ' 3º C Programação de Jogos Digitais\r'),
(461, '52322', 'Rafael Vieira do Nascimento', ' 3º C Programação de Jogos Digitais\r'),
(462, '52323', 'Raynnara Mariane Diniz Lima', ' 3º C Programação de Jogos Digitais\r'),
(463, '52324', 'Yasmin Cardoso Soares', ' 3º C Programação de Jogos Digitais\r'),
(464, '52325', 'Adriano da Silva Medeiros', '3º A Design de Calçados\r'),
(465, '52326', 'Alicia Camille Eulálio de Castro', '3º A Design de Calçados\r'),
(466, '52327', 'Anna Vitória Silva Nogueira', '3º A Design de Calçados\r'),
(467, '52328', 'Antonio Cleston Figuereido Formiga', '3º A Design de Calçados\r'),
(468, '52329', 'Bárbarah Barbosa Rodrigues', '3º A Design de Calçados\r'),
(469, '52330', 'Beatriz Moitinho Barbosa', '3º A Design de Calçados\r'),
(470, '52331', 'Bruna Bianca Ferreira de Sousa', '3º A Design de Calçados\r'),
(471, '52332', 'Bruna Letícia Mendonça Leite', '3º A Design de Calçados\r'),
(472, '52333', 'Camila Moura Pereira', '3º A Design de Calçados\r'),
(473, '52334', 'Eloisa Beatriz Martins Rodrigues', '3º A Design de Calçados\r'),
(474, '52335', 'Ester Rósteny de Morais Oliveira', '3º A Design de Calçados\r'),
(475, '52336', 'Evellyn Vitoria Ribeiro Pereira', '3º A Design de Calçados\r'),
(476, '52337', 'Everton Ryckardo Oliveira Santos', '3º A Design de Calçados\r'),
(477, '52338', 'Evyllin Kellen Rocha Alves', '3º A Design de Calçados\r'),
(478, '52339', 'Gabriel Oliveira Marinho', '3º A Design de Calçados\r'),
(479, '52340', 'Hazael Nascimento Sousa Lourenço', '3º A Design de Calçados\r'),
(480, '52341', 'Hillen Silva Castro Barbosa', '3º A Design de Calçados\r'),
(481, '52342', 'Ícaro Agra de Melo Matias', '3º A Design de Calçados\r'),
(482, '52343', 'Joel Araújo Ferreira', '3º A Design de Calçados\r'),
(483, '52344', 'Lívia  Maria Santana Rolim', '3º A Design de Calçados\r'),
(484, '52345', 'Maria Eduarda Deodato de Brito', '3º A Design de Calçados\r'),
(485, '52346', 'Maria Eduarda Guimarães Barbosa', '3º A Design de Calçados\r'),
(486, '52347', 'Maria Eduarda Menezes de Farias', '3º A Design de Calçados\r'),
(487, '52348', 'Maria Luísa da Silva', '3º A Design de Calçados\r'),
(488, '52349', 'Maria Luíza Ramos Silva Barbosa', '3º A Design de Calçados\r'),
(489, '52350', 'Rayla Magalhães de Morais', '3º A Design de Calçados\r'),
(490, '52351', 'Rayssa Victória de Moura Santos', '3º A Design de Calçados\r'),
(491, '52352', 'Rhyan henry Melo Costa ', '3º A Design de Calçados\r'),
(492, '52353', 'Samuel Marques Nascimento', '3º A Design de Calçados\r'),
(493, '52354', 'Sarah Silveira Santino do Nascimento', '3º A Design de Calçados\r'),
(494, '52355', 'Silmara Bezerra Santos', '3º A Design de Calçados\r'),
(495, '52356', 'Soiane Helen da Silva Ribeiro', '3º A Design de Calçados\r'),
(496, '52357', 'Vitória Rodriques dos Santos', '3º A Design de Calçados\r'),
(497, '52358', 'Wislany de Sousa Silva', '3º A Design de Calçados\r'),
(498, '52359', 'Ana Beatriz Candido Costa ', '3º B Design de Calçados\r'),
(499, '52360', 'Camila Nascimento Cândido', '3º B Design de Calçados\r'),
(500, '52361', 'Cauet José Vieira Feijó', '3º B Design de Calçados\r'),
(501, '52362', 'Clara Beatriz Gonçalves Silva', '3º B Design de Calçados\r'),
(502, '52363', 'Daniel Farias Gonçalves', '3º B Design de Calçados\r'),
(503, '52364', 'Eufrasio Arruda Neto', '3º B Design de Calçados\r'),
(504, '52365', 'Giullia Palmeira de Souza Seabra', '3º B Design de Calçados\r'),
(505, '52366', 'Ismênia Rebeca Pereira Barbosa', '3º B Design de Calçados\r'),
(506, '52367', 'Ivnny Maria de Oliveira Albuqueque', '3º B Design de Calçados\r'),
(507, '52368', 'Joshua Lucas Clementino Oliveira', '3º B Design de Calçados\r'),
(508, '52369', 'Júlia Laurian dos Santos Lima', '3º B Design de Calçados\r'),
(509, '52370', 'Kauê Iago Queiroz Oliveira', '3º B Design de Calçados\r'),
(510, '52371', 'Larissa Gonçalves Pereira', '3º B Design de Calçados\r'),
(511, '52372', 'Laura Oliveira Rodrigues', '3º B Design de Calçados\r'),
(512, '52373', 'Letícia Isabely Cavalcanti dos Anjos', '3º B Design de Calçados\r'),
(513, '52374', 'Lívia gonçalves Pereira', '3º B Design de Calçados\r'),
(514, '52375', 'Lívia Pereira dos Santos', '3º B Design de Calçados\r'),
(515, '52376', 'Lorena Cavalcanti Candido', '3º B Design de Calçados\r'),
(516, '52377', 'Lyandra Sophya Gonçalves da Silva', '3º B Design de Calçados\r'),
(517, '52378', 'Maria Clara Nascimento Lourenço', '3º B Design de Calçados\r'),
(518, '52379', 'Maria Clara Machado Santos', '3º B Design de Calçados\r'),
(519, '52380', 'Maria Eduarda Vieira Araújo', '3º B Design de Calçados\r'),
(520, '52381', 'Maria Luiza Batista Nunes', '3º B Design de Calçados\r'),
(521, '52382', 'Maria Luiza Rufino Ferreira', '3º B Design de Calçados\r'),
(522, '52383', 'Nicolas Caio da Silva Santos', '3º B Design de Calçados\r'),
(523, '52384', 'Pâmela Jeniffer de Oliveira Freitas', '3º B Design de Calçados\r'),
(524, '52385', 'Samuel Ramos Salustiano', '3º B Design de Calçados\r'),
(525, '52386', 'Sarah Fontes Lima', '3º B Design de Calçados\r'),
(526, '52387', 'Sarah Rivicka Martins Alexandrino', '3º B Design de Calçados\r'),
(527, '52388', 'Tainá Yasmin Silva Soares', '3º B Design de Calçados\r'),
(528, '52389', 'Thássya Thalya de Negreiros Gomes', '3º B Design de Calçados\r'),
(529, '52390', 'Victor Lucas Montini dos Santos Ribeiro', '3º B Design de Calçados\r'),
(530, '52391', 'Vinícius Gabriel da Costa Agostinho', '3º B Design de Calçados\r'),
(531, '52392', 'Vitoria Schafer Araujo', '3º B Design de Calçados\r'),
(532, '52393', 'Weslley Iury Santos Gomes', '3º B Design de Calçados\r'),
(533, '52394', 'Yasmin Vitória Santos de Oliveira', '3º B Design de Calçados\r');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro_de_atrasos`
--

CREATE TABLE `registro_de_atrasos` (
  `id` int(11) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `turma` varchar(50) NOT NULL,
  `data_atraso` varchar(50) NOT NULL,
  `hora_atraso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `registro_de_atrasos`
--

INSERT INTO `registro_de_atrasos` (`id`, `matricula`, `nome`, `turma`, `data_atraso`, `hora_atraso`) VALUES
(8, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '12:43:47'),
(9, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '12:44:21'),
(10, '51876', 'Jaine Libna Cordão Costa e Silva', '1º A Programação de Jogos Digitais\r', '2024/09/30', '12:49:42');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro_de_entradas`
--

CREATE TABLE `registro_de_entradas` (
  `id` int(11) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `turma` varchar(50) NOT NULL,
  `data_entrada` varchar(50) NOT NULL,
  `hora_entradas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `registro_de_entradas`
--

INSERT INTO `registro_de_entradas` (`id`, `matricula`, `nome`, `turma`, `data_entrada`, `hora_entradas`) VALUES
(1, '51863', 'Alanderson Freire da Silva', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:39:07'),
(2, '51863', 'Alanderson Freire da Silva', '1º A Programação de Jogos Digitais\r', '2024/10/01', '15:40:22'),
(3, '51872', 'Enailly da Silva Marques', '1º A Programação de Jogos Digitais\r', '2024/10/01', '10:34:25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro_de_saidas`
--

CREATE TABLE `registro_de_saidas` (
  `id` int(11) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `turma` varchar(50) NOT NULL,
  `data_saida` varchar(50) NOT NULL,
  `hora_saida` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `registro_de_saidas`
--

INSERT INTO `registro_de_saidas` (`id`, `matricula`, `nome`, `turma`, `data_saida`, `hora_saida`) VALUES
(1, '51876', 'Jaine Libna Cordão Costa e Silva', '1º A Programação de Jogos Digitais\r', '2024/09/30', '12:53:15'),
(2, '51876', 'Jaine Libna Cordão Costa e Silva', '1º A Programação de Jogos Digitais\r', '2024/09/30', '12:55:01'),
(3, '51876', 'Jaine Libna Cordão Costa e Silva', '1º A Programação de Jogos Digitais\r', '2024/09/30', '12:58:21'),
(4, '51876', 'Jaine Libna Cordão Costa e Silva', '1º A Programação de Jogos Digitais\r', '2024/09/30', '13:13:22'),
(5, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '13:24:32'),
(6, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '13:24:39'),
(7, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '13:25:13'),
(8, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '13:25:18'),
(9, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '13:25:55'),
(10, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '13:28:05'),
(11, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '13:58:23'),
(12, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '14:11:41'),
(13, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '14:14:26'),
(14, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '14:16:48'),
(15, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '14:50:24'),
(16, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '14:50:43'),
(17, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:07:17'),
(18, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:25:11'),
(19, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:28:36'),
(20, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:28:50'),
(21, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:29:29'),
(22, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:34:45'),
(23, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:36:47'),
(24, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:37:04'),
(25, '51863', 'Alanderson Freire da Silva', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:39:43'),
(26, '51863', 'Alanderson Freire da Silva', '1º A Programação de Jogos Digitais\r', '2024/10/01', '15:40:28'),
(27, '51862', 'Adryan Gabriel Santos Nascimento', '1º A Programação de Jogos Digitais\r', '2024/09/30', '15:55:46'),
(28, '51872', 'Enailly da Silva Marques', '1º A Programação de Jogos Digitais\r', '2024/10/01', '10:34:43'),
(29, '51872', 'Enailly da Silva Marques', '1º A Programação de Jogos Digitais\r', '2024/10/01', '10:35:07');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunosnovos2024`
--
ALTER TABLE `alunosnovos2024`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registro_de_atrasos`
--
ALTER TABLE `registro_de_atrasos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registro_de_entradas`
--
ALTER TABLE `registro_de_entradas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registro_de_saidas`
--
ALTER TABLE `registro_de_saidas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunosnovos2024`
--
ALTER TABLE `alunosnovos2024`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=534;

--
-- AUTO_INCREMENT de tabela `registro_de_atrasos`
--
ALTER TABLE `registro_de_atrasos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `registro_de_entradas`
--
ALTER TABLE `registro_de_entradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `registro_de_saidas`
--
ALTER TABLE `registro_de_saidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

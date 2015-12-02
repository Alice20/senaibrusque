-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sistemasenai`
--
CREATE DATABASE `sistemasenai` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sistemasenai`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(60) NOT NULL,
  `cod` varchar(40) NOT NULL,
  `situacao` tinyint(1) NOT NULL DEFAULT '0',
  `dtCadastro` datetime NOT NULL,
  `dtAtualizacao` datetime DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `cod` int(11) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `resumo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`cod`, `titulo`, `resumo`, `texto`, `data`) VALUES
(1, 'Novos cursos em Concórdia, Timbó e Rio do Sul', 'A partir do primeiro semestre de 2016, estudantes de Concórdia, Timbó e Rio do Sul poderão contar com novos cursos técnicos do SENAI, entidade da FIESC.', 'A partir do primeiro semestre de 2016, estudantes de Concórdia, Timbó e Rio do Sul poderão contar com novos cursos técnicos do SENAI, entidade da FIESC. A oferta dessas formações foi aprovada em reunião do conselho regional do SENAI, realizada na última quinta-feira (19). Ao todo, 140 vagas serão oferecidas nestes cursos.                                                   Em Concórdia, o SENAI passa a ter curso técnico em informática. No município de Timbó, a entidade oferecerá técnico em automação industrial. Já em Rio do Sul, atendendo a uma demanda identificada em painel do Programa de Desenvolvimento Industrial Catarinense, o SENAI passa a oferecer técnico em design de móveis.                                 Além destes cursos, o SENAI também tem inscrições abertas para outras formações técnicas presenciais e a distância, em todas as regiões do Estado. São mais de uma centena de opções em programas que permitem o acesso a carreiras industriais com maior índice de e', '2015-12-01'),
(2, 'Mais de 5,5 mil vagas para Cursos Técnicos', 'O SENAI/SC, entidade da FIESC, abriu inscrições para 5,5 mil vagas em cursos técnicos presenciais e a distância, em todas as regiões do Estado.', 'O SENAI/SC, entidade da FIESC, abriu inscrições para 5,5 mil vagas em cursos técnicos presenciais e a distância, em todas as regiões do Estado. São mais de uma centena de opções em programas que permitem o acesso a carreiras industriais com maior índice de empregabilidade e com remuneração mais elevada que a média. As inscrições podem ser feitas até 27 de julho, no site www.sc.senai.br/cursos2015 ou nas unidades da instituição. Informações pelo 0800 48 1212.                                             “A indústria tem precisado cada vez mais de especialistas, em tecnologia, em processos, em gestão; os cursos técnicos dão essa oportunidade para as pessoas desenvolverem capacidades específicas sobre determinadas áreas de atuação”, afirma o diretor regional do SENAI/SC, Jefferson de Oliveira Gomes.', '2015-10-21'),
(3, 'EnModa 2015', 'A décima segunda edição do EnModa traz como novidade o aprofundamento da parceria entre faculdade e indústria, realizado pelo curso superior em Tecnologia em Design de Moda do SENAI em Criciúma.', 'A décima segunda edição do EnModa traz como novidade o aprofundamento da parceria entre faculdade e indústria. Realizado pelo curso superior em Tecnologia em Design de Moda do SENAI em Criciúma, em parceria com a Unesc, o evento será realizado na próxima quarta-feira, dia 2, no Siso’s Hall. Nesta edição, que traz as macrotendências para o inverno 2017, os modelos que serão exibidos na passarela foram concebidos em conjunto com 23 empresas ligadas ao setor do vestuário. A partir dos projetos realizados pelos acadêmicos da sexta fase do curso, cada empresa escolheu três looks para apoiar a criação, sendo dois com conceito comercial e um conceitual.', '2015-10-12'),
(4, 'Exposição de produções em desenho animado', 'Produções em desenho animado desenvolvidas por estudantes do SENAI em Florianópolis serão apresentadas às 19h30min da próxima segunda-feira (15/11)', 'Produções em desenho animado desenvolvidas por estudantes do SENAI em Florianópolis serão apresentadas às 19h30min da próxima segunda-feira, dia 15, no Centro Integrado de Cultura (CIC), na Capital. Serão apresentados mais de 20 trabalhos, criados por estudantes desde 2011, quando a instituição lançou o primeiro curso na área. Em Santa Catarina, o SENAI integra a Federação das Indústrias (FIESC).                                      Os trabalhos foram produzidos por mais de 80 alunos de cursos de aprendizagem, técnico e de qualificação profissional. Esses cursos são ministrados no SENAI em Florianópolis, localizado no bairro Saco Grande.', '2015-11-17'),
(5, 'Ações de Design em Florianópolis, Criciúma e  Jraguá do sul', 'Atividades integram a programação paralela da Bienal Brasileira de Design Floripa 2015, que será realizada de 15 de maio a 12 de julho.', 'As unidades do SENAI na Capital, Criciúma e Jaraguá do Sul preparam mais de uma dezena de atividades paralelas à Bienal Brasileira de Design 2015, que será realizada em Florianópolis, de 15 de maio a 12 de julho. O evento pretende promover o debate sobre os conceitos do design como estratégia de negócios. As ações paralelas complementam a programação principal, composta por exposições, mostras, workshops, palestras e debates. As ações programadas pelo SENAI, entidade que integra a FIESC, estão relacionadas aos setores de atuação de cada unidade.', '2015-11-15'),
(6, 'SESI Educação infantil', 'Desenvolver habilidades, descobrir novas possibilidades e se aventurar no inusitado. Foi neste cenário que professores, pais, alunos e comunidade estiveram reunidos em uma tarde de integração no SESI Escola Educação Infantil.', 'Desenvolver habilidades, descobrir novas possibilidades e se aventurar no inusitado. Foi neste cenário que professores, pais, alunos e comunidade estiveram reunidos em uma tarde de integração no SESI Escola Educação Infantil, em Criciúma, neste sábado (28). A mostra A vida da criança na Escola, um cotidiano extraordinário visou compartilhar o trabalho desenvolvido ao longo deste ano na instituição junto com os alunos.  Em 2015, o SESI iniciou o desenvolvimento de um projeto piloto na escola de Criciúma com o propósito de implementar um Centro de Referência em Educação Infantil e buscou inspiração na prática educativa de Reggio Emilia, cidade italiana que é referência mundial em educação para a infância.', '2015-11-30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(220) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Tutorial PagSeguro', '#FFD700', '2019-05-21 15:00:00', '2019-05-21 16:00:00'),
(2, 'Tutorial FullCalendar editar detalhes do evento', '#0071c5', '2019-05-30 15:00:00', '2019-05-30 00:00:00'),
(3, 'Tutorial FullCalendar Visualizar detalhes do evento', '#0071c5', '2019-05-23 15:00:00', '2019-05-23 16:00:00'),
(4, 'Reuniao 3', '#40e0d0', '2019-05-17 17:00:00', '2019-05-17 18:00:00'),
(5, 'Reuniao 4', '#0071c5', '2019-05-17 15:00:00', '2019-05-17 16:00:00'),
(6, 'Reuniao 5', '#FFD700', '2019-05-17 13:00:00', '2019-05-17 14:00:00'),
(7, 'Reuniao 6', '#0071c5', '2019-05-17 11:00:00', '2019-05-17 12:00:00'),
(8, 'Reuniao 7', '#40e0d0', '2019-05-17 09:00:00', '2019-05-17 10:00:00'),
(9, 'Tutorial', '#228B22', '2019-09-12 00:00:00', '2019-09-13 00:00:00'),
(10, 'Tutorial 2', '#FF4500', '2019-09-13 15:10:10', '2019-09-13 17:15:15'),
(11, 'ReuniÃ£o 15', '#436EEE', '2019-10-09 15:30:00', '2019-10-09 17:00:00'),
(13, 'Hackahon', '#436EEE', '2022-10-19 00:00:00', '2022-10-22 00:00:00'),
(21, 'intensivão', '#228B22', '2022-10-25 00:00:00', '2022-10-29 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_anuncio`
--

CREATE TABLE `tb_anuncio` (
  `id` int(11) NOT NULL,
  `nm_anuncio` mediumtext NOT NULL,
  `ds_anuncio` longtext NOT NULL,
  `path` varchar(100) NOT NULL,
  `path_slide` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_anuncio`
--

INSERT INTO `tb_anuncio` (`id`, `nm_anuncio`, `ds_anuncio`, `path`, `path_slide`) VALUES
(51, 'Alívio da pandemia não significa fim do impacto para educação, diz pesquisador', 'A pandemia pode ter acabado, mas os efeitos que ela trouxe à educação do Brasil, não. Essa é a avaliação do diretor-executivo do Todos pela Educação, Olavo Nogueira Filho.  \n\nEm entrevista à CNN Rádio, o pesquisador afirma que os impactos “terão repercussão duradoura”, reforçando que “não podemos achar que, passada a pandemia, tudo voltará aos eixos de maneira automática”.', 'arquivos/635330de736d6.jpg', ''),
(52, 'Educação é assunto mais comentado em discussões sobre eleições no Twitter', 'A educação foi o tema mais comentado por usuários do Twitter sobre as eleições deste ano desde o final do primeiro turno.\n\nEntre os assuntos que mais geraram publicações na rede social estão as perspectivas de investimento no ensino superior e as pessoas que, no primeiro turno, votaram nas escolas que estudaram, explica a Head de Comunicação do Twitter no Brasil, Ticá Almeida.', 'arquivos/6353311abdc7f.jpg', ''),
(53, 'USP aparece como melhor universidade da América Latina em ranking global', 'A Universidade de São Paulo (USP) foi tida como a melhor universidade latino-americana no ranking World University Rankings, elaborado pela consultoria britânica Times Higher Education (THE).\n\nA lista contempla com outras instituições brasileiras, como a Universidade Estadual de Campinas (Unicamp) que é a segunda da América Latina mais bem posicionada na lista.', 'arquivos/63533143ca22d.jpg', ''),
(57, 'Faculdade de Direito nos EUA envia 4 mil cartas de aceitação por engano', 'O curso de direito da Northeastern University, em Boston (EUA), aprovou “por engano” a admissão na instituição de cerca de 4 mil alunos que buscavam uma vaga. O e-mail de aceitação, segundo comunicado da faculdade à CNN, foi enviado por conta de um “erro técnico”.\r\n\r\nNo último processo seletivo, cerca de 205 candidatos receberam o e-mail errado. A universidade relatou ainda que, em 2021, o número de candidatos aprovados erroneamente foi de 3.930.', 'arquivos/635332875b351.jpg', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_anuncio`
--
ALTER TABLE `tb_anuncio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tb_anuncio`
--
ALTER TABLE `tb_anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;
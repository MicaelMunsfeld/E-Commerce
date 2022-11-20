-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2022 às 00:39
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meu_commerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `caracteristicas` varchar(3000) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `estoque` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `resumo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `descricao`, `caracteristicas`, `categoria_id`, `valor`, `estoque`, `imagem`, `resumo`) VALUES
(1, 'Smartphone Redmi Note 10s 128GB/6GB global Onyx Gray', 'Armazenamento e ram 6 gb Ram + 128GB Rom Processador - MediaTek Helio G95 - cpu: frequência máxima da cpu de 2,05 GHz - gpu: arm Mali-G76 MC4 - Bateria e carregamento: 5.000 mAh (typ) - Carregamento rápido de 33 w Câmera - Câmera grande angular de 64 mp - Tamanho do sensor: 1/1,97\" - Tamanho do pixel: 0,7 m - f/1,79 - Câmera ultra-angular de 8 mp - fov 118° - f/2,2 - Câmera macro de 2 mp - f/2,4 - Sensor de profundidade de 2 mp - f/2,4 - Recursos de fotografia da câmera traseira - Modo de 64 mp - Modo noturno - Embelezador ia - Modo retrato com ia, bokeh e controle de profundidade - Recursos de vídeo da câmera traseira - Modo macro de vídeo - Vídeo em time-lapse pro - Vídeo em câmera lenta - Gravação de vídeo com a câmera traseira 4K, 3840 x 2160 a 30 fps 1080p, 1920 x 1080 a 60 fps 1080p, 1920 x 1080 a 30 fps - Câmera frontal de 13 mp - f/2,45 - Recursos de fotografia da câmera frontal - Disparo contínuo - Embelezador ia - Modo retrato com ia, bokeh e controle de profundidade - Recursos de vídeo da câmera frontal - Time-lapse - Gravação de vídeo com a câmera frontal 1080p, 1920 x 1080 a 30 fps 720p, 1280 x 720 a 30 fps Segurança: - Sensor de impressão digital no arco lateral - Desbloqueio por reconhecimento facial com ia Rede e conectividade: - Dual sim - Bandas de rede: - 2G: gsm 850, 900, 1.800, 1.900 MHz - 3G: wcdma B1/2/4/5/8 - 4G: lte fdd B1/2/3/4/5/7/8/20/28 - 4G: lte tdd B38/40/41 (de 2535 a 2655 MHz) - Redes sem fio - Wi-Fi de 2,4 GHz/5 GHz - Bluetooth 5.0 Navegação e posicionamento: - gps: L1 - Galileo: E1, Glonass: G1, Beidou Áudio: - Alto-falante duplo - Entrada para fone de ouvido de 3,5 mm - Certificação de áudio de alta resolução Sensores: - Sensor de proximidade - Sensor de luz ambiente - Acelerômetro - Giroscópio - Bússola eletrônica - Motor de vibração linear - ir Blaster Sistemas operacionais: - miui 12,5 no Android 11Dimensões - Altura: 160,46 mm - Largura: 74,5 mm - Espessura: 8,29 mm - Peso: 178,8 gConteúdo da embalagem: - Redmi Note 10S - Adaptador - Cabo USB Tipo c - Ferramenta de ejeção de sim - Capa de proteção - Guia de início rápido - Cartão de garantiaGarantia do Fornecedor 3 mesesItens Inclusos 1x Redmi Note 10S 128gb 6gb Cinza - Fonte - Cabo carregador - Extrator de chip - Capinha - ManualModelo Redmi Note 10S', 2, 1599, 10, 'img/10s.jpg', 'Armazenamento e ram 6 gb Ram + 128GB Rom Processador - MediaTek Helio G95'),
(2, 'Smartphone Samsung Galaxy A53', 'Smartphone Samsung Galaxy A53 128GB Preto 5G - 8GB RAM 6,5” Câm. Quádrupla + Selfie 32MP', 2, 1799, 7, 'img/a53.jpg', 'Ele é dual chip com tecnologia 5G e vem na cor preto. Conta com tela Super AMOLED de 6,5\" que faz com que você tenha espaço para ver e fazer mais. A elegância predomina com a câmera que se integra de mofo fluído, tornando o aparelho elegante e funcional, com maior capacidade de bateria dentro de uma'),
(3, 'Smartphone Samsung Galaxy S20', 'Esse produto da Samsung é tudo que você pediu de um celular e com uma experiência revolucionária! Um enorme avanço na resolução de fotografias, entregando fotos profissionais a qualquer hora, pois o Galaxy S20 FE conta com um conjunto de três câmeras na parte de trás, permitindo cliques perfeitos e sem grande esforço, independente do ambiente. A câmera frontal de 32 megapixels oferece tecnologia de nível profissional, para que as selfies tenham o máximo de criatividade. Com 128GB de armazenamento interno, ele é perfeito para guardar todas suas fotos, músicas ou vídeos. Se ainda achar pouco, utilize um cartão MicroSD de até 1TB para expandir essa capacidade! Seu processador é Qualcomm Snapdragon 865 Octa-Core e em conjunto dos 6GB de memória RAM melhoram sua experiência de uso devido a sua combinação poderosa de hardware e software. Sua tela de 6,5\" com resolução FHD+, Super AMOLED entregam um display grande e imersivo ao assistir seus filmes e suas séries favoritas com o máximo de qualidade. Permaneça sempre conectado nas redes sociais com a tecnologia 5G em um aparelho dual chip! Sua bateria é de 4500mAh, lembrando que a duração da bateria pode variar de acordo com o uso. Este celular tem proteção personalizada com leitor de impressão digital na tela, deixando seus conteúdos e dados confidenciais protegidos com máxima segurança.', 2, 899, 3, 'img/s10.jpg', 'Smartphone Samsung Galaxy S20 FE 5G 128GB Branco - Octa-Core 6GB RAM 6,5” Câm. Tripla + Selfie 32MP');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_produtos_categorias` (`categoria_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `FK_produtos_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: adelmo
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_submissions`
--

DROP TABLE IF EXISTS `contact_submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_submissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_submissions`
--

LOCK TABLES `contact_submissions` WRITE;
/*!40000 ALTER TABLE `contact_submissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_page_settings`
--

DROP TABLE IF EXISTS `home_page_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_page_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) NOT NULL,
  `site_tagline` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `theme_colors` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`theme_colors`)),
  `nav_links` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`nav_links`)),
  `nav_cta_label` varchar(255) DEFAULT NULL,
  `nav_cta_href` varchar(255) DEFAULT NULL,
  `hero_badge` varchar(255) DEFAULT NULL,
  `hero_title` text DEFAULT NULL,
  `hero_description` text DEFAULT NULL,
  `hero_primary_cta_label` varchar(255) DEFAULT NULL,
  `hero_primary_cta_href` varchar(255) DEFAULT NULL,
  `hero_secondary_cta_label` varchar(255) DEFAULT NULL,
  `hero_secondary_cta_href` varchar(255) DEFAULT NULL,
  `hero_notes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`hero_notes`)),
  `hero_panel_label` varchar(255) DEFAULT NULL,
  `hero_panels` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`hero_panels`)),
  `hero_stats` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`hero_stats`)),
  `trust_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`trust_items`)),
  `about_badge` varchar(255) DEFAULT NULL,
  `about_title` text DEFAULT NULL,
  `about_description` text DEFAULT NULL,
  `about_points` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`about_points`)),
  `services_badge` varchar(255) DEFAULT NULL,
  `services_title` text DEFAULT NULL,
  `services_description` text DEFAULT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services`)),
  `tvde_badge` varchar(255) DEFAULT NULL,
  `tvde_title` text DEFAULT NULL,
  `tvde_description` text DEFAULT NULL,
  `tvde_points` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tvde_points`)),
  `tvde_metrics` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tvde_metrics`)),
  `results_badge` varchar(255) DEFAULT NULL,
  `results_title` text DEFAULT NULL,
  `results_description` text DEFAULT NULL,
  `results` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`results`)),
  `process_badge` varchar(255) DEFAULT NULL,
  `process_title` text DEFAULT NULL,
  `process_description` text DEFAULT NULL,
  `process_steps` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`process_steps`)),
  `testimonials_badge` varchar(255) DEFAULT NULL,
  `testimonials_title` text DEFAULT NULL,
  `testimonials_description` text DEFAULT NULL,
  `testimonials` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`testimonials`)),
  `contact_badge` varchar(255) DEFAULT NULL,
  `contact_title` text DEFAULT NULL,
  `contact_description` text DEFAULT NULL,
  `contact_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`contact_details`)),
  `contact_form_button_label` varchar(255) DEFAULT NULL,
  `contact_form_note` text DEFAULT NULL,
  `contact_success_message` text DEFAULT NULL,
  `footer_text` text DEFAULT NULL,
  `footer_copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_page_settings`
--

LOCK TABLES `home_page_settings` WRITE;
/*!40000 ALTER TABLE `home_page_settings` DISABLE KEYS */;
INSERT INTO `home_page_settings` VALUES (1,'Adelmo Top','Consultadoria prática e executiva','Adelmo Top | Consultoria Executiva e Gestão TVDE','Consultoria prática e executiva para estruturar operações, otimizar processos e aumentar a rentabilidade, com especialização em gestão de frotas TVDE.','{\"bg\":\"#f8fafc\",\"primary\":\"#1e293b\",\"primary_deep\":\"#0f172a\",\"graphite\":\"#334155\",\"text\":\"#0f172a\",\"text_soft\":\"#475569\",\"accent\":\"#16a34a\",\"accent_dark\":\"#15803d\"}','[{\"label\":\"Sobre\",\"href\":\"#sobre\"},{\"label\":\"Servi\\u00e7os\",\"href\":\"#servicos\"},{\"label\":\"TVDE\",\"href\":\"#tvde\"},{\"label\":\"Processo\",\"href\":\"#processo\"},{\"label\":\"Contactos\",\"href\":\"#contactos\"}]','Agendar Reunião','#contactos','Consultadoria prática e executiva','Gestão e consultoria para negócios que precisam de resultados, não de teoria.','Entramos, estruturamos e fazemos o negócio funcionar. Otimizamos processos, clarificamos controlo operacional e acompanhamos a execução com especialização forte em gestão de frotas TVDE.','Agendar Reunião','#contactos','Falar com um Consultor','#servicos','[{\"icon\":\"plus\",\"text\":\"Organiza\\u00e7\\u00e3o operacional com foco em rentabilidade\"},{\"icon\":\"check\",\"text\":\"Especialistas em opera\\u00e7\\u00f5es TVDE\"}]','Operação com controlo','[{\"title\":\"Decis\\u00e3o baseada em n\\u00fameros, processos e acompanhamento real.\",\"description\":\"Do diagn\\u00f3stico inicial \\u00e0 implementa\\u00e7\\u00e3o, a interven\\u00e7\\u00e3o \\u00e9 pr\\u00e1tica, mensur\\u00e1vel e orientada \\u00e0 execu\\u00e7\\u00e3o.\"},{\"title\":\"Porta de entrada transversal. Especializa\\u00e7\\u00e3o clara.\",\"description\":\"Consultoria operacional para v\\u00e1rias empresas, com um posicionamento particularmente forte no universo TVDE.\"}]','[{\"value\":\"+200\",\"label\":\"Viaturas acompanhadas\"},{\"value\":\"+250\",\"label\":\"Motoristas coordenados\"},{\"value\":\"+18%\",\"label\":\"Efici\\u00eancia operacional\"}]','[{\"title\":\"Controlo\",\"description\":\"Leitura operacional clara para corrigir falhas rapidamente.\"},{\"title\":\"Execu\\u00e7\\u00e3o\",\"description\":\"Mais do que aconselhar, acompanhamos a implementa\\u00e7\\u00e3o.\"},{\"title\":\"Rentabilidade\",\"description\":\"Custos, opera\\u00e7\\u00e3o e margem alinhados com objetivos reais.\"},{\"title\":\"Escala\",\"description\":\"Estrutura preparada para crescer sem perder controlo.\"}]','Sobre a Adelmo Top','Experiência real na gestão de negócios, com foco na operação.','A Adelmo Top nasce da prática. Entramos no negócio, analisamos o que está a falhar, estruturamos o que falta e acompanhamos a implementação das soluções para que o resultado apareça na operação e não apenas no papel.','[{\"icon\":\"plus\",\"text\":\"Diagn\\u00f3stico objetivo dos pontos cr\\u00edticos do neg\\u00f3cio.\"},{\"icon\":\"check\",\"text\":\"Organiza\\u00e7\\u00e3o de processos, controlo e responsabilidades.\"},{\"icon\":\"chart-bar\",\"text\":\"Apoio \\u00e0 gest\\u00e3o com m\\u00e9tricas, prioridade e cad\\u00eancia de execu\\u00e7\\u00e3o.\"},{\"icon\":\"squares\",\"text\":\"Interven\\u00e7\\u00e3o pensada para criar base s\\u00f3lida e crescimento sustent\\u00e1vel.\"}]','Serviços','Consultoria geral para empresas que precisam de estrutura, clareza e acompanhamento.','A consultoria é a porta de entrada. O trabalho centra-se em organizar a operação, melhorar o controlo e criar um modelo de gestão mais leve, previsível e rentável.','[{\"icon\":\"chart-bar\",\"title\":\"Consultoria estrat\\u00e9gica\",\"description\":\"Leitura global do neg\\u00f3cio para alinhar objetivos, prioridades operacionais e decis\\u00f5es de gest\\u00e3o com impacto real.\"},{\"icon\":\"bars\",\"title\":\"Organiza\\u00e7\\u00e3o de processos\",\"description\":\"Defini\\u00e7\\u00e3o de fluxos, rotinas, responsabilidades e mecanismos de controlo para reduzir ru\\u00eddo e aumentar consist\\u00eancia.\"},{\"icon\":\"arrow-shrink\",\"title\":\"Redu\\u00e7\\u00e3o de custos operacionais\",\"description\":\"Identifica\\u00e7\\u00e3o de desperd\\u00edcios, revis\\u00e3o de estrutura e otimiza\\u00e7\\u00e3o de recursos para proteger margem sem comprometer o servi\\u00e7o.\"},{\"icon\":\"clipboard\",\"title\":\"Implementa\\u00e7\\u00e3o de sistemas de controlo\",\"description\":\"Cria\\u00e7\\u00e3o de mapas de gest\\u00e3o, leitura financeira e indicadores operacionais para acompanhar desempenho com regularidade.\"},{\"icon\":\"plus\",\"title\":\"Apoio \\u00e0 gest\\u00e3o di\\u00e1ria\",\"description\":\"Acompanhamento pr\\u00f3ximo da opera\\u00e7\\u00e3o para garantir ritmo de execu\\u00e7\\u00e3o, resposta r\\u00e1pida e disciplina nos processos definidos.\"},{\"icon\":\"arrow-right\",\"title\":\"Estrutura\\u00e7\\u00e3o operacional\",\"description\":\"Prepara\\u00e7\\u00e3o do neg\\u00f3cio para crescer com m\\u00e9todo, controlo interno e capacidade de decis\\u00e3o sustentada por dados.\"}]','Especialização TVDE','Gestão profissional de frotas TVDE com foco em rentabilidade, controlo e escala.','É aqui que a Adelmo Top se diferencia com maior força. A lógica de gestão TVDE exige disciplina operacional, leitura financeira diária e um modelo capaz de coordenar viaturas, motoristas e plataformas sem perder margem.','[{\"icon\":\"user\",\"text\":\"Gest\\u00e3o de motoristas com regras claras, acompanhamento e maior previsibilidade operacional.\"},{\"icon\":\"calendar\",\"text\":\"Controlo de receitas e despesas por viatura, per\\u00edodo e motorista.\"},{\"icon\":\"trending-up\",\"text\":\"Otimiza\\u00e7\\u00e3o de opera\\u00e7\\u00e3o em Uber e Bolt com base em performance e disponibilidade.\"},{\"icon\":\"chart-up\",\"text\":\"Estrutura\\u00e7\\u00e3o de crescimento da frota com vis\\u00e3o de escala e controlo financeiro.\"}]','[{\"value\":\"+200\",\"description\":\"Viaturas com an\\u00e1lise operacional e controlo de rentabilidade.\"},{\"value\":\"+250\",\"description\":\"Motoristas geridos com foco em consist\\u00eancia e desempenho.\"},{\"value\":\"360\\u00b0\",\"description\":\"Vis\\u00e3o completa sobre receitas, custos, escalas e efici\\u00eancia.\"},{\"value\":\"Escala\",\"description\":\"Modelo pensado para crescer sem perder disciplina operacional.\"}]','Resultados','Números que reforçam a diferença entre gestão reativa e operação estruturada.','Quando existe processo, leitura de dados e acompanhamento contínuo, a operação deixa de depender da improvisação e passa a trabalhar com previsibilidade.','[{\"value\":\"+200\",\"title\":\"Viaturas geridas\",\"description\":\"Opera\\u00e7\\u00f5es acompanhadas com foco em rentabilidade por unidade e controlo di\\u00e1rio.\"},{\"value\":\"+250\",\"title\":\"Motoristas coordenados\",\"description\":\"Organiza\\u00e7\\u00e3o operacional suportada por regras, acompanhamento e m\\u00e9tricas claras.\"},{\"value\":\"+250 mil \\u20ac\",\"title\":\"Fatura\\u00e7\\u00e3o analisada\",\"description\":\"Leitura financeira orientada para reduzir falhas e proteger margem operacional.\"},{\"value\":\"+18%\",\"title\":\"Aumento de efici\\u00eancia\",\"description\":\"Impacto obtido atrav\\u00e9s de melhor controlo, rotina e disciplina de gest\\u00e3o.\"}]','Como funciona','Um processo simples, rigoroso e orientado à execução.','Cada projeto segue uma sequência clara para garantir leitura objetiva do negócio, intervenção ajustada e acompanhamento consistente até os resultados se consolidarem.','[{\"icon\":\"search\",\"title\":\"Diagn\\u00f3stico do neg\\u00f3cio\",\"description\":\"Levantamento r\\u00e1pido do estado atual da opera\\u00e7\\u00e3o, principais falhas, custos ocultos e prioridades de interven\\u00e7\\u00e3o.\"},{\"icon\":\"bars\",\"title\":\"Plano de a\\u00e7\\u00e3o\",\"description\":\"Defini\\u00e7\\u00e3o das decis\\u00f5es, rotinas, indicadores e prioridades com maior impacto na melhoria da opera\\u00e7\\u00e3o.\"},{\"icon\":\"check\",\"title\":\"Implementa\\u00e7\\u00e3o\",\"description\":\"Entrada na opera\\u00e7\\u00e3o para ajustar processos, criar controlo e garantir que o plano passa do papel \\u00e0 pr\\u00e1tica.\"},{\"icon\":\"clock\",\"title\":\"Acompanhamento cont\\u00ednuo\",\"description\":\"Monitoriza\\u00e7\\u00e3o regular para corrigir desvios, consolidar processos e manter a opera\\u00e7\\u00e3o em melhoria cont\\u00ednua.\"}]','Credibilidade','Confiança construída com clareza, proximidade e execução.','Testemunhos de perfil realista para transmitir o tipo de relação e impacto esperado no terreno.','[{\"quote\":\"A opera\\u00e7\\u00e3o passou a ter m\\u00e9todo. Em poucas semanas ficou claro onde est\\u00e1vamos a perder margem e o que precisava de ser corrigido primeiro.\",\"name\":\"Rui Almeida\",\"role\":\"Gestor operacional, pequena empresa de servi\\u00e7os\",\"engagement\":\"Projeto de reorganiza\\u00e7\\u00e3o\"},{\"quote\":\"Na frota TVDE, o maior ganho foi o controlo. Hoje sabemos por viatura o que rende, o que falha e onde agir sem perder tempo.\",\"name\":\"Mariana Lopes\",\"role\":\"Respons\\u00e1vel de frota TVDE\",\"engagement\":\"Otimiza\\u00e7\\u00e3o operacional\"},{\"quote\":\"N\\u00e3o recebemos apenas recomenda\\u00e7\\u00f5es. Houve acompanhamento real, decis\\u00f5es pr\\u00e1ticas e uma estrutura de gest\\u00e3o muito mais s\\u00f3lida.\",\"name\":\"Daniel Martins\",\"role\":\"Administrador, neg\\u00f3cio em crescimento\",\"engagement\":\"Apoio \\u00e0 gest\\u00e3o\"}]','Contactos','Vamos perceber onde está o bloqueio e o que precisa de ser estruturado.','Se procura uma consultoria próxima da operação, orientada para ação e com capacidade para organizar o negócio de forma concreta, este é o ponto de partida.','[{\"icon\":\"mail\",\"title\":\"Email\",\"value\":\"geral@adelmotop.pt\"},{\"icon\":\"phone\",\"title\":\"Telefone\",\"value\":\"+351 910 000 000\"},{\"icon\":\"map-pin\",\"title\":\"Atua\\u00e7\\u00e3o\",\"value\":\"Portugal, com acompanhamento operacional e reuni\\u00f5es por marca\\u00e7\\u00e3o.\"}]','Falar com um Consultor','Responderemos com brevidade após a análise inicial do pedido.','Mensagem enviada com sucesso. Entraremos em contacto em breve.','Consultadoria prática e executiva. Entramos, estruturamos e fazemos o negócio funcionar.','© 2026 Adelmo Top. Todos os direitos reservados.','2026-04-21 10:30:49','2026-04-21 10:30:49');
/*!40000 ALTER TABLE `home_page_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_04_21_112308_create_contact_submissions_table',1),(5,'2026_04_21_112308_create_home_page_settings_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('febOCDRcTQHUzlZKoOtKwptEzP54fnSkOaw6ZWCq',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMTNGNG1sbElUVjg1cnRkazNPdFlaUjE3R09od0I5WUlzeGhpTlNmdyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODA4MC9hZG1pbi9ob21lcGFnZS9nZXJhbCI7czo1OiJyb3V0ZSI7czozNToiZmlsYW1lbnQuYWRtaW4ucGFnZXMuaG9tZXBhZ2UuZ2VyYWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiJiYjBiYjcxNGRhODBkMTIzMjhjMDQ2MjhhNDdiMGE3NDkzOTlhNjE5MWE0YjNlMmQ3YTMxMmU3NzYyMzRjNWQzIjtzOjY6InRhYmxlcyI7YToxOntzOjQwOiJjMmFlNDEyZjZhMWMzNGUwZDk3ZGM3OTcwNTY3NDE1N19jb2x1bW5zIjthOjU6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJuYW1lIjtzOjU6ImxhYmVsIjtzOjQ6Ik5vbWUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjc6ImNvbXBhbnkiO3M6NToibGFiZWwiO3M6NzoiRW1wcmVzYSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToiZW1haWwiO3M6NToibGFiZWwiO3M6NToiRW1haWwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InBob25lIjtzOjU6ImxhYmVsIjtzOjg6IlRlbGVmb25lIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoiY3JlYXRlZF9hdCI7czo1OiJsYWJlbCI7czo4OiJSZWNlYmlkbyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319fX0=',1776937627),('pPBfI1Mv9QRXF9mGQlyV0NA3sBcsWwTxX1lT4Ta8',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoiNWlZRVNUelpRaGxGMlZXaEJxejZsMXBaWkIyYm5RNUQ1VkJab1FRNyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9ob21lcGFnZS9oZXJvIjtzOjU6InJvdXRlIjtzOjM0OiJmaWxhbWVudC5hZG1pbi5wYWdlcy5ob21lcGFnZS5oZXJvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjQ6ImJiMGJiNzE0ZGE4MGQxMjMyOGMwNDYyOGE0N2IwYTc0OTM5OWE2MTkxYTRiM2UyZDdhMzEyZTc3NjIzNGM1ZDMiO3M6NjoidGFibGVzIjthOjI6e3M6NDA6ImMyYWU0MTJmNmExYzM0ZTBkOTdkYzc5NzA1Njc0MTU3X2NvbHVtbnMiO2E6NTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6Im5hbWUiO3M6NToibGFiZWwiO3M6NDoiTm9tZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NzoiY29tcGFueSI7czo1OiJsYWJlbCI7czo3OiJFbXByZXNhIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJlbWFpbCI7czo1OiJsYWJlbCI7czo1OiJFbWFpbCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToicGhvbmUiO3M6NToibGFiZWwiO3M6ODoiVGVsZWZvbmUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjg6IlJlY2ViaWRvIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiIxMjQ2MWI2ZmE2ODhhY2E2ZmVlYmNhOTBkNzQ5NjYzMF9jb2x1bW5zIjthOjI6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJzaXRlX25hbWUiO3M6NToibGFiZWwiO3M6NDoiTm9tZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IkF0dWFsaXphZG8iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fX19',1776776414);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Adelmo Top Admin','admin@adelmotop.test',NULL,'$2y$12$VrDem5cWTeLl2nCKQL4V3.AVcw9DGa8O/7I/fbGXv8VzwSs3.u3b6','yCLgBkILPZVNQNjAUN3JvEK5Vw657kJCbyqWw7CGUouPr8wkoEXTUT285IBs','2026-04-21 10:30:49','2026-04-21 10:30:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'adelmo'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-04-26  6:22:06

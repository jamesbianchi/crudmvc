-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela loglab.tbl_fechamento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_fechamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_fechamento` ENABLE KEYS */;

-- Copiando dados para a tabela loglab.tbl_propostaos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_propostaos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_propostaos` ENABLE KEYS */;

-- Copiando dados para a tabela loglab.tbl_saldoinicial: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_saldoinicial` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_saldoinicial` ENABLE KEYS */;

-- Copiando dados para a tabela loglab.tbl_servicos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_servicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_servicos` ENABLE KEYS */;

-- Copiando dados para a tabela loglab.tbl_tiposervico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_tiposervico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tiposervico` ENABLE KEYS */;

-- Copiando dados para a tabela loglab.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `password`, `birthdate`, `token`) VALUES
	(1, 'James Bianchi', 'james.bianchi@gmail.com', '$2y$10$5ART3boHMUzVgfiv58mk4.p', '1970-09-08', '13662d6b68a7b9014f5201e0d7acb096'),
	(2, 'Maria Cala O P Bianchi', 'mclaraopb@hotmail.com', '$2y$10$6alT1FRyY62zh39sQuPVW.3', '1969-09-01', '44ac6e19edf3372bf28ddb1021f4635f'),
	(3, 'Gabriela Bianchi', 'gabriela@gmail.com', '$2y$10$y5iN4R1RRLBUuWPRgKJs9.q', '2003-09-06', '0d36f773a0fb6812e0fdf33a70811d53'),
	(4, 'Maria C O P Bianchi', 'mclaraopb@gmail.com', '$2y$10$AVlmiDyhKqsYKa5kiBA0EOA', '1969-09-01', '7a3e5b5753d06845915ed70523590c4f'),
	(5, 'James Bianchi', 'james.bianchi@gmail.com.br', '$2y$10$QyH/DgJ73kCxGZ7eQOFcseB', '1970-09-01', '93d545026e9c4d5db928a4ba7b290956'),
	(6, 'Felipe Onoda', 'onoda@gmail.com', '$2y$10$78V/1YgPDN7R5mXwo3V1GOD', '2003-03-03', 'f0e69fc03b7821541acaef746191ea02'),
	(7, 'Bianchi', 'bianchi@gmail.com', '$2y$10$k0WKIZZm6HnpHkNVPtyYnu.', '1970-09-08', NULL),
	(8, 'James Bianchi', 'james.bianchi@delage.com.br', '$2y$10$fhSdWOEHtKOOR9TzMrtCpeZ', '1970-09-01', '97a4b0d3893ed1e31125fe8328aa28fa');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando dados para a tabela loglab.usuarios: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT IGNORE INTO `usuarios` (`id`, `nome`, `email`) VALUES
	(1, 'James Bianchi ', 'james.bianchi@delage.com.br'),
	(2, 'Maria Clara O P Bianchi', 'mclaraopb@gmail.com'),
	(4, 'Felipe Onoda', 'onoda@gmail.com.br'),
	(5, 'Gabriela Onoda P Bianchi', 'gabizinha@gmail.com'),
	(6, 'Gabriela Bianchi', 'gabriela.bianchi@gmail.com'),
	(7, 'Julia Bianchi Pessanha Cardoso', 'Julia.bianchi@gmail.com'),
	(8, 'Saulo Bucão P de Lima', 'saulo.lima@uol.com.br'),
	(9, 'Carlos Eduardo P de Lima', 'carlos.eduardo@yahoo.com.br'),
	(10, 'Ana Beatriz P de Lima', 'anab@gmail.com'),
	(11, 'Thiago P de Lima', 'thiago.lima@gmail.com');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

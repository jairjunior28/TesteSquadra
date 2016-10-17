CREATE TABLE `sistema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `justificativa` varchar(500) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=155 DEFAULT CHARSET=utf8;

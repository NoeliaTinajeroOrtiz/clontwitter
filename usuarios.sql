CREATE TABLE `usuarios_twitter`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `telefono` INT NOT NULL,
  `dni` VARCHAR(9) NOT NULL,
  `pass` CHAR(60) NOT NULL,
  `createDate` DATE NULL,
  PRIMARY KEY (`id`));
CREATE SCHEMA `bd_pitangueira` ;

CREATE TABLE `bd_pitangueira`.`tb_clientes` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(45) NOT NULL,
  `telefone_cliente` VARCHAR(16) NULL,
  PRIMARY KEY (`id_cliente`));

CREATE TABLE `bd_pitangueira`.`tb_atendimentos` (
  `id_atendimento` INT NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(45) NOT NULL,
  `nome_tecnico` VARCHAR(45) NOT NULL,
  `tipo_atendimento` VARCHAR(45) NOT NULL,
  `observacao` VARCHAR(100) NULL,
  `dataExecucao` DATE NOT NULL,
  PRIMARY KEY (`id_atendimento`));

CREATE TABLE `bd_pitangueira`.`tb_tecnico` (
  `id_tecnico` INT NOT NULL,
  `nome_tecnico` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `funcao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tecnico`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC) VISIBLE);

port 3307

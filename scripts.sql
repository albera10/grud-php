CREATE TABLE `personal`.`personas` (`id` INT NOT NULL AUTO_INCREMENT , 
									`nombre` VARCHAR(50) NOT NULL , 
									`correo` VARCHAR(50) NOT NULL , 
									`telefono` VARCHAR(20) NOT NULL , 
									`estado_civil` VARCHAR(10) NOT NULL , 
									`hijos` VARCHAR(5) NOT NULL , 
									`intereses` VARCHAR(50) NOT NULL , 
									`estado` TINYINT(1) NOT NULL , 
									PRIMARY KEY (`id`)) ENGINE = InnoDB;
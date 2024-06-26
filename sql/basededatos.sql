-- Base de datos para ABP Semana Ignaciana 1DAW (reconocimientos a alumnos), Módulos: LLMM y BBDD
-- CREATE DATABASE abpSemIgnacian1daw DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
-- USE abp1dawbbddllmm;

-- Tabla alumno
CREATE TABLE alumno (
  idAlumno tinyint unsigned NOT NULL, -- Número de alumno en clase
  nombre varchar(80) NOT NULL,
  correo varchar(255) NOT NULL,
  contrasenia varchar(100) NOT NULL,
  webReconocimiento varchar(50),
  constraint pk_usuario PRIMARY KEY (idAlumno),
  constraint correo_unico UNIQUE(correo),
  constraint WEB_unicA UNIQUE(webReconocimiento)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Tabla reconocimiento
CREATE TABLE reconocimiento (
    idReconocimiento smallint unsigned AUTO_INCREMENT,
    categoria char(11) NOT NULL,
    momento varchar(100) NOT NULL,
    descripcion varchar(255) NOT NULL,
    idAlumEnvia tinyint unsigned NOT NULL,
    idAlumRecibe tinyint unsigned NOT NULL,
	  constraint pk_recon PRIMARY KEY (idReconocimiento),
    constraint fk_alumno_env FOREIGN KEY (idAlumEnvia) REFERENCES alumno(idAlumno),
    constraint fk_alumno_rec FOREIGN KEY (idAlumRecibe) REFERENCES alumno(idAlumno)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE INDEX ix_alumno_nombre ON alumno(nombre);

/*INSERT INTO alumno (idAlumno, nombre, correo, contrasenia, webReconocimiento) VALUES
(1, 'Juan Pérez', 'juanperez1@gmail.com', 'password123', 'www.juanperez.com'),
(2, 'María García', 'maria.garcia2@gmail.com', 'securepass', 'www.mariagarcia.com'),
(3, 'Pedro López', 'pedro.lopez3@gmail.com', 'mypass123', NULL),
(4, 'Ana Martínez', 'anamartinez4@gmail.com', 'abc123', 'www.anamartinez.com'),
(5, 'Carlos Rodríguez', 'carlosr5@gmail.com', 'password', NULL),
(6, 'Laura Sánchez', 'lauras6@gmail.com', '123456', 'www.laurasanchez.com'),
(7, 'Diego Gómez', 'diego.gomez7@gmail.com', 'password321', NULL),
(8, 'Sofía Fernández', 'sfernandez8@gmail.com', 'pass123', 'www.sofiafernandez.com'),
(9, 'Javier Ruiz', 'javi.ruiz9@gmail.com', 'securepassword', NULL),
(10, 'Isabel García', 'isabelg10@gmail.com', 'abcxyz', 'www.isabelgarcia.com'),
(11, 'Martín Pérez', 'martinp11@gmail.com', 'passpass', NULL),
(12, 'Lucía Martínez', 'luciamartinez12@gmail.com', 'mysecurepass', 'www.luciamartinez.com'),
(13, 'Alejandro Rodríguez', 'ale.rodriguez13@gmail.com', 'abcdef', NULL),
(14, 'Elena López', 'elena.lopez14@gmail.com', 'passwordabc', 'www.elenalopez.com'),
(15, 'Manuel Gómez', 'manuel.gomez15@gmail.com', 'securepass123', NULL),
(16, 'Carmen Sánchez', 'carmen.sanchez16@gmail.com', '123abc', 'www.carmensanchez.com'),
(17, 'Daniel Fernández', 'danielf17@gmail.com', 'passpass123', NULL),
(18, 'Natalia Pérez', 'nataliap18@gmail.com', 'abc123xyz', 'www.nataliaperez.com'),
(19, 'Pablo Martínez', 'pablom19@gmail.com', 'mypassword', NULL),
(20, 'Adriana Ruiz', 'adriana.ruiz20@gmail.com', 'passwordxyz', 'www.adrianaruiz.com');*/

/*INSERT INTO reconocimiento (categoria, momento, descripcion, idAlumEnvia, idAlumRecibe) VALUES
('Logro', 'clase', 'Excelente trabajo en el proyecto final', 5, 12),
('Agradecimiento', 'clase', 'Gracias por tu ayuda en la clase de diseño', 10, 3),
('Reconocimiento', 'clase', 'Has demostrado un gran esfuerzo en tu participación en clase', 14, 8),
('Motivación', 'clase', 'Sigue así, tu progreso es notable', 1, 17),
('Colaboración', 'clase', 'Trabajo en equipo excepcional en el proyecto de Programación', 6, 15);*/
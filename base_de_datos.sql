-- ============================================================
-- Base de datos: php_intermedio
-- Curso PHP Intermedio - Colegio Hogwarts de Magia y Hechicería
-- ============================================================

CREATE DATABASE IF NOT EXISTS php_intermedio
    DEFAULT CHARACTER SET utf8mb4
    DEFAULT COLLATE utf8mb4_general_ci;

USE php_intermedio;

-- ------------------------------------------------------------
-- Tabla: administradores
-- Usuarios que pueden acceder al sistema
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS administradores (
    dni INT PRIMARY KEY,
    clave VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Usuario por defecto (contraseña: admin1234)
INSERT INTO administradores (dni, clave) VALUES
    (12345678, 'admin1234');

-- ------------------------------------------------------------
-- Tabla: personajes
-- Personajes del mundo Harry Potter
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS personajes (
    id_per INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    imagen VARCHAR(100) NOT NULL,
    descripcion TEXT,
    estado ENUM('procesando', 'finalizado') DEFAULT 'procesando'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

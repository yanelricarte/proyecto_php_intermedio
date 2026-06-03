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
-- La contraseña se guarda HASHEADA con password_hash() (nunca en texto plano).
-- VARCHAR(255) para que entre cualquier hash que genere PHP.
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS administradores (
    dni INT PRIMARY KEY,
    clave VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Usuario por defecto (contraseña en claro: admin1234)
-- El valor insertado es el hash bcrypt de "admin1234" generado con password_hash().
INSERT INTO administradores (dni, clave) VALUES
    (12345678, '$2y$10$Q/94FQ2MSK4A5WLcCAJRKexQSpG2Q31EnBjQ4DOvHEsi6mtlAZl9e');

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

DROP DATABASE IF EXISTS `singular_db`;
CREATE DATABASE `singular_db`;
USE `singular_db`;

CREATE TABLE `users` (
    `id` BIGINT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `level` TINYINT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL
);

CREATE TABLE `address` (
    `id` BIGINT PRIMARY KEY,
    `neighborhood` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `state` VARCHAR(255) NOT NULL,
    `country` VARCHAR(255) NOT NULL DEFAULT "Brasil",
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL
);

CREATE TABLE `classroom_groups` (
    `id` BIGINT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL
);

CREATE TABLE `courses` (
    `id` BIGINT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `course_period` TINYINT UNSIGNED NOT NULL COMMENT '0=MORNING, 1=AFTERNOON, 2=NIGHT, 3=FULLTIME',
    `modality` VARCHAR(100) NOT NULL,
    `course_total_load` INT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL
);

CREATE TABLE `disciplines` (
    `id` BIGINT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `course_id` BIGINT NOT NULL,
    `discipline_total_load` INT NOT NULL,
    `period_start` DATE NOT NULL,
    `period_end` DATE,
    `available` BOOLEAN DEFAULT TRUE,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL,

    CONSTRAINT `fk_disciplines_course` FOREIGN KEY (`course_id`) REFERENCES `courses`(`id`)
);

CREATE TABLE `students` (
    `id` BIGINT PRIMARY KEY,
    `user_id` BIGINT NOT NULL,
    `classroom_group_id` BIGINT NOT NULL,
    `plan_expires_at` DATE NOT NULL,
    `phone` VARCHAR(100),
    `cpf` CHAR(11) NOT NULL UNIQUE,
    `rg` CHAR(9) NOT NULL UNIQUE,
    `address_id` BIGINT NOT NULL,
    `born_date` DATE NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL,

    CONSTRAINT `fk_students_user` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
    CONSTRAINT `fk_students_classroom` FOREIGN KEY (`classroom_group_id`) REFERENCES `classroom_groups`(`id`),
    CONSTRAINT `fk_students_address` FOREIGN KEY (`address_id`) REFERENCES `address`(`id`)
);

CREATE TABLE `teachers` (
    `id` BIGINT PRIMARY KEY,
    `user_id` BIGINT NOT NULL,
    `phone` VARCHAR(100),
    `cpf` CHAR(11) NOT NULL UNIQUE,
    `rg` CHAR(9) NOT NULL UNIQUE,
    `address_id` BIGINT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL,

    CONSTRAINT `fk_teachers_user` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
    CONSTRAINT `fk_teachers_address` FOREIGN KEY (`address_id`) REFERENCES `address`(`id`)
);

CREATE TABLE `coordinators` (
    `id` BIGINT PRIMARY KEY,
    `user_id` BIGINT NOT NULL,
    `phone` VARCHAR(100),
    `cpf` CHAR(11) NOT NULL UNIQUE,
    `rg` CHAR(9) NOT NULL UNIQUE,
    `address_id` BIGINT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL,

    CONSTRAINT `fk_coordinators_user` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
    CONSTRAINT `fk_coordinators_address` FOREIGN KEY (`address_id`) REFERENCES `address`(`id`)
);

CREATE TABLE `lessons` (
    `id` BIGINT PRIMARY KEY,
    `discipline_id` BIGINT NOT NULL,
    `classroom_group_id` BIGINT NOT NULL,
    `period_start` DATE NOT NULL,
    `period_end` DATE,
    `lesson_type` TINYINT UNSIGNED NOT NULL COMMENT '0=THEORETICAL, 1=PRACTICAL, 2=REPLACEMENT, 3=EVALUATIVE',
    `status` TINYINT UNSIGNED NOT NULL DEFAULT 0 COMMENT '0=PENDING, 1=MINISTERED, 2=CANCELED',
    `content` TEXT NOT NULL,
    `local` VARCHAR(100) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT `fk_lessons_discipline` FOREIGN KEY (`discipline_id`) REFERENCES `disciplines`(`id`),
    CONSTRAINT `fk_lessons_classroom` FOREIGN KEY (`classroom_group_id`) REFERENCES `classroom_groups`(`id`)
);

CREATE TABLE `materials` (
    `id` BIGINT PRIMARY KEY,
    `title` VARCHAR(100) NOT NULL,
    `course_id` BIGINT NOT NULL,
    `classroom_group_id` BIGINT NOT NULL,
    `discipline_id` BIGINT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL,

    CONSTRAINT `fk_materials_course` FOREIGN KEY (`course_id`) REFERENCES `courses`(`id`),
    CONSTRAINT `fk_materials_classroom` FOREIGN KEY (`classroom_group_id`) REFERENCES `classroom_groups`(`id`),
    CONSTRAINT `fk_materials_discipline` FOREIGN KEY (`discipline_id`) REFERENCES `disciplines`(`id`)
);

-- Inserção de dados de exemplo

-- Cursos
INSERT INTO `courses` (`id`, `name`, `course_period`, `modality`, `course_total_load`, `status`)
VALUES
(1, 'Ensino Médio, Pré-Vestibulinho', 0, 'Presencial', 3000, TRUE),
(2, 'Pré-Vestibular', 2, 'Presencial', 800, TRUE),
(3, 'Empreendedorismo', 1, 'Online', 600, TRUE);

-- Turmas
INSERT INTO `classroom_groups` (`id`, `name`, `status`)
VALUES
(1, 'Turma EM A', TRUE),
(2, 'Turma PV A', TRUE),
(3, 'Turma EMP A', TRUE);

-- Usuários (professores)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `status`)
VALUES
(101, 'Prof. Ana Souza', 'ana@escola.com', 'senha123', 2, TRUE),
(102, 'Prof. Bruno Lima', 'bruno@escola.com', 'senha123', 2, TRUE),
(103, 'Prof. Carla Dias', 'carla@escola.com', 'senha123', 2, TRUE),
(104, 'Prof. Diego Luz', 'diego@escola.com', 'senha123', 2, TRUE),
(105, 'Prof. Elisa Nunes', 'elisa@escola.com', 'senha123', 2, TRUE);

-- Endereços genéricos para professores e alunos
INSERT INTO `address` (`id`, `neighborhood`, `city`, `state`, `status`)
VALUES
(1, 'Centro', 'São Paulo', 'SP', TRUE),
(2, 'Jardins', 'São Paulo', 'SP', TRUE),
(3, 'Bela Vista', 'São Paulo', 'SP', TRUE),
(4, 'Pinheiros', 'São Paulo', 'SP', TRUE),
(5, 'Moema', 'São Paulo', 'SP', TRUE),
(6, 'Aclimação', 'São Paulo', 'SP', TRUE),
(7, 'Lapa', 'São Paulo', 'SP', TRUE),
(8, 'Santana', 'São Paulo', 'SP', TRUE),
(9, 'Ipiranga', 'São Paulo', 'SP', TRUE),
(10, 'Tatuapé', 'São Paulo', 'SP', TRUE),
(11, 'Butantã', 'São Paulo', 'SP', TRUE),
(12, 'Liberdade', 'São Paulo', 'SP', TRUE),
(13, 'Vila Mariana', 'São Paulo', 'SP', TRUE),
(14, 'Brooklin', 'São Paulo', 'SP', TRUE),
(15, 'Consolação', 'São Paulo', 'SP', TRUE);

-- Professores
INSERT INTO `teachers` (`id`, `user_id`, `cpf`, `rg`, `address_id`, `status`)
VALUES
(1, 101, '00000000101', '123456789', 1, TRUE),
(2, 102, '00000000102', '123456788', 2, TRUE),
(3, 103, '00000000103', '123456787', 3, TRUE),
(4, 104, '00000000104', '123456786', 4, TRUE),
(5, 105, '00000000105', '123456785', 5, TRUE);

-- Disciplinas
INSERT INTO `disciplines` (`id`, `name`, `course_id`, `discipline_total_load`, `period_start`, `period_end`, `status`)
VALUES
(1, 'Matemática', 1, 200, '2025-02-01', '2025-06-30', TRUE),
(2, 'Português', 1, 200, '2025-02-01', '2025-06-30', TRUE),
(3, 'Biologia', 2, 150, '2025-03-01', '2025-07-31', TRUE),
(4, 'Redação', 2, 100, '2025-03-01', '2025-07-31', TRUE),
(5, 'Gestão de Negócios', 3, 180, '2025-01-15', '2025-06-15', TRUE);

-- Usuários (alunos)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `status`)
VALUES
(201, 'Aluno A', 'alunoa@email.com', 'senha123', 0, TRUE),
(202, 'Aluno B', 'alunob@email.com', 'senha123', 0, TRUE),
(203, 'Aluno C', 'alunoc@email.com', 'senha123', 0, TRUE),
(204, 'Aluno D', 'alunod@email.com', 'senha123', 0, TRUE),
(205, 'Aluno E', 'alunoe@email.com', 'senha123', 0, TRUE),
(206, 'Aluno F', 'alunof@email.com', 'senha123', 0, TRUE),
(207, 'Aluno G', 'alunog@email.com', 'senha123', 0, TRUE),
(208, 'Aluno H', 'alunoh@email.com', 'senha123', 0, TRUE),
(209, 'Aluno I', 'alunoi@email.com', 'senha123', 0, TRUE),
(210, 'Aluno J', 'alunoj@email.com', 'senha123', 0, TRUE);

-- Alunos
INSERT INTO `students` (`id`, `user_id`, `classroom_group_id`, `plan_expires_at`, `phone`, `cpf`, `rg`, `address_id`, `born_date`, `status`)
VALUES
(1, 201, 1, '2025-12-31', '11999990001', '11111111101', '111111111', 6, '2006-01-01', TRUE),
(2, 202, 1, '2025-12-31', '11999990002', '11111111102', '111111112', 7, '2006-02-01', TRUE),
(3, 203, 2, '2025-12-31', '11999990003', '11111111103', '111111113', 8, '2005-03-01', TRUE),
(4, 204, 2, '2025-12-31', '11999990004', '11111111104', '111111114', 9, '2005-04-01', TRUE),
(5, 205, 3, '2025-12-31', '11999990005', '11111111105', '111111115', 10, '2003-05-01', TRUE),
(6, 206, 3, '2025-12-31', '11999990006', '11111111106', '111111116', 11, '2003-06-01', TRUE),
(7, 207, 1, '2025-12-31', '11999990007', '11111111107', '111111117', 12, '2006-07-01', TRUE),
(8, 208, 2, '2025-12-31', '11999990008', '11111111108', '111111118', 13, '2005-08-01', TRUE),
(9, 209, 3, '2025-12-31', '11999990009', '11111111109', '111111119', 14, '2003-09-01', TRUE),
(10, 210, 1, '2025-12-31', '11999990010', '11111111110', '111111120', 15, '2006-10-01', TRUE);

-- Materiais
INSERT INTO `materials` (`id`, `title`, `course_id`, `classroom_group_id`, `discipline_id`, `status`)
VALUES
(1, 'Apostila de Matemática - Volume 1', 1, 1, 1, TRUE),
(2, 'Resumo de Biologia Celular', 2, 2, 3, TRUE),
(3, 'Guia de Plano de Negócios', 3, 3, 5, TRUE);


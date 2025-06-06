DROP DATABASE IF EXISTS `singular_db`;
CREATE DATABASE `singular_db`;
USE `singular_db`;

CREATE TABLE `users` (
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `level` TINYINT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL
);

CREATE TABLE `address` (
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
    `neighborhood` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `state` VARCHAR(255) NOT NULL,
    `country` VARCHAR(255) NOT NULL DEFAULT "Brasil",
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL
);

CREATE TABLE `classroom_groups` (
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL
);

CREATE TABLE `courses` (
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `course_period` TINYINT UNSIGNED NOT NULL COMMENT '0=MORNING, 1=AFTERNOON, 2=NIGHT, 3=FULLTIME',
    `modality` VARCHAR(100) NOT NULL,
    `course_total_load` INT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` BOOLEAN NOT NULL
);

CREATE TABLE `disciplines` (
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
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
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
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
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
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
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
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
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
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
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
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

CREATE TABLE enrollments (
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
    `student_id` BIGINT NOT NULL,
    `course_id` BIGINT NOT NULL,
    `classroom_group_id` BIGINT NOT NULL,
    `enrollment_date` DATE NOT NULL
);

CREATE TABLE enrollment_disciplines (
    `enrollment_id` BIGINT,
    `discipline_id` BIGINT,
    PRIMARY KEY (`enrollment_id`, `discipline_id`),
    FOREIGN KEY (`enrollment_id`) REFERENCES `enrollments`(`id`),
    FOREIGN KEY (`discipline_id`) REFERENCES `disciplines`(`id`)
);

-- Inserção de dados de exemplo

-- Cursos
INSERT INTO `courses` (`name`, `course_period`, `modality`, `course_total_load`, `status`)
VALUES
('Ensino Médio, Pré-Vestibulinho', 0, 'Presencial', 3000, TRUE),
('Pré-Vestibular', 2, 'Presencial', 800, TRUE),
('Empreendedorismo', 1, 'Online', 600, TRUE);

-- Turmas
INSERT INTO `classroom_groups` (`name`, `status`)
VALUES
('Turma EM A', TRUE),
('Turma PV A', TRUE),
('Turma EMP A', TRUE);

-- Usuários (professores)
INSERT INTO `users` (`name`, `email`, `password`, `level`, `status`)
VALUES
('Prof. Ana Souza', 'ana@escola.com', 'senha123', 2, TRUE),
('Prof. Bruno Lima', 'bruno@escola.com', 'senha123', 2, TRUE),
('Prof. Carla Dias', 'carla@escola.com', 'senha123', 2, TRUE),
('Prof. Diego Luz', 'diego@escola.com', 'senha123', 2, TRUE),
('Prof. Elisa Nunes', 'elisa@escola.com', 'senha123', 2, TRUE);

-- Endereços genéricos para professores e alunos
INSERT INTO `address` (`neighborhood`, `city`, `state`, `status`)
VALUES
('Centro', 'São Paulo', 'SP', TRUE),
('Jardins', 'São Paulo', 'SP', TRUE),
('Bela Vista', 'São Paulo', 'SP', TRUE),
('Pinheiros', 'São Paulo', 'SP', TRUE),
('Moema', 'São Paulo', 'SP', TRUE),
('Aclimação', 'São Paulo', 'SP', TRUE),
('Lapa', 'São Paulo', 'SP', TRUE),
('Santana', 'São Paulo', 'SP', TRUE),
('Ipiranga', 'São Paulo', 'SP', TRUE),
('Tatuapé', 'São Paulo', 'SP', TRUE),
('Butantã', 'São Paulo', 'SP', TRUE),
('Liberdade', 'São Paulo', 'SP', TRUE),
('Vila Mariana', 'São Paulo', 'SP', TRUE),
('Brooklin', 'São Paulo', 'SP', TRUE),
('Consolação', 'São Paulo', 'SP', TRUE);

-- Professores
INSERT INTO `teachers` (`user_id`, `cpf`, `rg`, `address_id`, `status`)
VALUES
(1, '00000000101', '123456789', 1, TRUE),
(2, '00000000102', '123456788', 2, TRUE),
(3, '00000000103', '123456787', 3, TRUE),
(4, '00000000104', '123456786', 4, TRUE),
(5, '00000000105', '123456785', 5, TRUE);

-- Disciplinas
INSERT INTO `disciplines` (`name`, `course_id`, `discipline_total_load`, `period_start`, `period_end`, `status`)
VALUES
('Matemática', 1, 200, '2025-02-01', '2025-06-30', TRUE),
('Português', 1, 200, '2025-02-01', '2025-06-30', TRUE),
('Biologia', 2, 150, '2025-03-01', '2025-07-31', TRUE),
('Redação', 2, 100, '2025-03-01', '2025-07-31', TRUE),
('Gestão de Negócios', 3, 180, '2025-01-15', '2025-06-15', TRUE);

-- Usuários (alunos)
INSERT INTO `users` (`name`, `email`, `password`, `level`, `status`)
VALUES
('Aluno A', 'alunoa@email.com', 'senha123', 0, TRUE),
('Aluno B', 'alunob@email.com', 'senha123', 0, TRUE),
('Aluno C', 'alunoc@email.com', 'senha123', 0, TRUE),
('Aluno D', 'alunod@email.com', 'senha123', 0, TRUE),
('Aluno E', 'alunoe@email.com', 'senha123', 0, TRUE),
('Aluno F', 'alunof@email.com', 'senha123', 0, TRUE),
('Aluno G', 'alunog@email.com', 'senha123', 0, TRUE),
('Aluno H', 'alunoh@email.com', 'senha123', 0, TRUE),
('Aluno I', 'alunoi@email.com', 'senha123', 0, TRUE),
('Aluno J', 'alunoj@email.com', 'senha123', 0, TRUE);

-- Alunos
INSERT INTO `students` (`user_id`, `classroom_group_id`, `plan_expires_at`, `phone`, `cpf`, `rg`, `address_id`, `born_date`, `status`)
VALUES
(6, 1, '2025-12-31', '11999990001', '11111111101', '111111111', 6, '2006-01-01', TRUE),
(7, 2, '2025-12-31', '11999990002', '11111111102', '111111112', 7, '2006-02-01', TRUE),
(8, 1, '2025-12-31', '11999990003', '11111111103', '111111113', 8, '2005-03-01', TRUE),
(9, 3, '2025-12-31', '11999990004', '11111111104', '111111114', 9, '2005-04-01', TRUE),
(10, 1, '2025-12-31', '11999990005', '11111111105', '111111115', 10, '2003-05-01', TRUE),
(11, 2, '2025-12-31', '11999990006', '11111111106', '111111116', 11, '2003-06-01', TRUE),
(12, 3, '2025-12-31', '11999990007', '11111111107', '111111117', 12, '2006-07-01', TRUE),
(13, 1, '2025-12-31', '11999990008', '11111111108', '111111118', 13, '2005-08-01', TRUE),
(14, 2, '2025-12-31', '11999990009', '11111111109', '111111119', 14, '2003-09-01', TRUE),
(15, 1, '2025-12-31', '11999990010', '11111111110', '111111120', 15, '2006-10-01', TRUE);

-- Materiais
INSERT INTO `materials` (`title`, `course_id`, `classroom_group_id`, `discipline_id`, `status`)
VALUES
('Apostila de Matemática - Volume 1', 1, 1, 1, TRUE),
('Resumo de Biologia Celular', 2, 2, 3, TRUE),
('Guia de Plano de Negócios', 3, 3, 5, TRUE);

-- Matrículas
INSERT INTO `enrollments` (`student_id`, `course_id`, `classroom_group_id`, `enrollment_date`)
VALUES
(1, 1, 1, '2025-01-10'),
(2, 1, 1, '2025-01-10'),
(3, 2, 2, '2025-02-10'),
(4, 2, 2, '2025-02-10'),
(5, 3, 3, '2025-01-20');

-- Disciplinas das matrículas
INSERT INTO `enrollment_disciplines` (`enrollment_id`, `discipline_id`)
VALUES
(1, 1), (1, 2),
(2, 1), (2, 2),
(3, 3), (3, 4),
(4, 3), (4, 4),
(5, 5);

-- Aulas
INSERT INTO `lessons` (`discipline_id`, `classroom_group_id`, `period_start`, `period_end`, `lesson_type`, `status`, `content`, `local`)
VALUES
(1, 1, '2025-02-05', '2025-02-05', 0, 1, 'Revisão de equações do 1º grau', 'Sala 101'),
(2, 1, '2025-02-06', '2025-02-06', 0, 1, 'Interpretação de texto e gramática', 'Sala 102'),
(3, 2, '2025-03-10', '2025-03-10', 1, 1, 'Estudo de células e tecidos', 'Laboratório Biologia'),
(4, 2, '2025-03-11', '2025-03-11', 3, 0, 'Avaliação diagnóstica de redação', 'Sala 201'),
(5, 3, '2025-02-01', '2025-02-01', 0, 1, 'Introdução à gestão estratégica', 'Auditório A');


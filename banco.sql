-- Criar banco e tabelas
CREATE DATABASE veterinaria;
USE veterinaria;

CREATE TABLE Animal 
( 
 Raca VARCHAR(50),  
 Nome VARCHAR(50),  
 ID_Animal INT PRIMARY KEY AUTO_INCREMENT,  
 Idade INT,  
 Sexo VARCHAR(10),  
 Especie VARCHAR(50),  
 Peso DECIMAL(5,2),  
 Observacao VARCHAR(255),  
 idDono_animal INT  
); 

CREATE TABLE Funcionario 
( 
 ID_veterinario INT PRIMARY KEY AUTO_INCREMENT,  
 CRMV VARCHAR(20),  
 Nome VARCHAR(80),  
 Email VARCHAR(100),  
 Telefone VARCHAR(20),  
 Especialidade VARCHAR(50),  
 Horario VARCHAR(30),  
 Sexo VARCHAR(10),  
 Data_Nascimento DATE,  
 CPF VARCHAR(14)  
); 

CREATE TABLE Dono_animal 
( 
 Telefone VARCHAR(20),  
 Nome VARCHAR(80),  
 ID_Dono_animal INT PRIMARY KEY AUTO_INCREMENT,  
 Email VARCHAR(100),  
 CPF VARCHAR(14),  
 Endereco VARCHAR(255)  
); 

CREATE TABLE usuario
( 
 ID_usuario INT PRIMARY KEY AUTO_INCREMENT,
 Telefone VARCHAR(20),  
 Tipo VARCHAR(20),  
 CPF VARCHAR(14),  
 Email VARCHAR(100),
 Senha VARCHAR(255),  
 Nome VARCHAR(80)  
); 

CREATE TABLE consulta 
( 
 ID_consulta INT PRIMARY KEY AUTO_INCREMENT,  
 Data_consulta DATE,  
 Procedimento VARCHAR(100),  
 Horario VARCHAR(30),  
 Observacao VARCHAR(255),  
 ID_Animal INT,  
 ID_veterinario INT  
); 

-- Criar relacionamentos
ALTER TABLE Animal 
ADD FOREIGN KEY (idDono_animal) REFERENCES Dono_animal (ID_Dono_animal);

ALTER TABLE consulta 
ADD FOREIGN KEY(ID_Animal) REFERENCES Animal (ID_Animal);

ALTER TABLE consulta 
ADD FOREIGN KEY(ID_veterinario) REFERENCES Funcionario (ID_veterinario);

-- Inserir dados simples
INSERT INTO Dono_animal (Nome, Telefone, Email, CPF, Endereco) VALUES 
('João', '(11) 9999-8888', 'joao@email.com', '123.456.789-00', 'Rua das Flores, 100'),
('Maria', '(11) 7777-6666', 'maria@email.com', '987.654.321-00', 'Av. Central, 200');

INSERT INTO Animal (Nome, Especie, Raca, Idade, Sexo, Peso, Observacao, idDono_animal) VALUES 
('Rex', 'Cachorro', 'Labrador', 5, 'Macho', 25.5, 'Saudável', 1),
('Mimi', 'Gato', 'Siamês', 3, 'Fêmea', 4.2, 'Alergia leve', 2);

INSERT INTO Funcionario (CRMV, Nome, Email, Telefone, Especialidade, Horario, Sexo, Data_Nascimento, CPF) VALUES 
('12345-SP', 'Dr. Carlos', 'carlos@vet.com', '(11) 98888-7777', 'Clínico Geral', '08:00-17:00', 'M', '1985-05-20', '111.222.333-44'),
('67890-SP', 'Dra. Ana', 'ana@vet.com', '(11) 97777-6666', 'Cirurgia', '09:00-18:00', 'F', '1990-08-15', '555.666.777-88');

INSERT INTO Consulta (Data_consulta, Procedimento, Horario, Observacao, ID_Animal, ID_veterinario) VALUES 
('2024-01-15', 'Vacinação', '10:00', 'Aplicação da antirrábica', 1, 1),
('2024-01-16', 'Check-up', '14:00', 'Consulta de rotina', 2, 2);

-- Ver tabelas
SELECT * FROM Dono_animal;
SELECT * FROM Animal;
SELECT * FROM Funcionario;
SELECT * FROM Consulta;

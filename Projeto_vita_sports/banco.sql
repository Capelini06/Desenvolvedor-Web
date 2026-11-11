create database vita_sports;
use vita_sports;

create table Usuarios (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo_usuario ENUM("admin", "cliente") NOT NULL DEFAULT "cliente",
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Categorias (
	id_categoria INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao text(1000)
);

CREATE TABLE Produtos (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    id_categoria INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT NOT NULL,
    descricao text(2000),
    imagem_url VARCHAR(255),
    tamanho varchar(20),
    criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    
    CONSTRAINT fk_produtos_categorias
		FOREIGN KEY (id_categoria)
        REFERENCES Categorias(id_categoria)
);

select * from usuarios;

INSERT INTO categorias (nome, descricao) VALUES
('Camisetas','Camisetas esportivas'),('Calças e Shorts','Peças inferiores'),('Acessórios','Acessórios esportivos');


INSERT INTO produtos (nome, descricao, preco, imagem_url, tamanho, estoque, id_categoria) VALUES
('Camiseta Performance','Camiseta leve para treinos.',89.90,'assets/img/camiseta-performance.jpg','M',20,1),
('Short Training','Short confortável para exercícios.',79.90,'assets/img/short-training.jpg','G',15,2),
('Camiseta Essential','Modelo básico esportivo.',69.90,'assets/img/camiseta-essential.jpg','P',12,1);
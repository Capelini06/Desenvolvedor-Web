create database vita_sports;
use vita_sports;

create table Usuarios (
	id_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_usuario VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo_usuario ENUM("admin", "cliente") NOT NULL DEFAULT "cliente",
    criado_em DATETIME NOT NULL
);

CREATE TABLE Produtos (
	id_produto INT PRIMARY KEY AUTO_INCREMENT,
    nome_produto VARCHAR(100) NOT NULL,
    id_categoria INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT NOT NULL,
    descricao text(2000),
    imagem_url longblob,
    tamanho varchar(20),
    criado_em DATETIME NOT NULL,
    
    CONSTRAINT fk_produtos_categorias
		FOREIGN KEY (id_categoria)
        REFERENCES Categoriascategorias(id_categoria)
);

CREATE TABLE Categorias (
	id_categoria INT PRIMARY KEY NOT NULL,
    nome VARCHAR(100) NOT NULL,
    descricao text(1000)
);
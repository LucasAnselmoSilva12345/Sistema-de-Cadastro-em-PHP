create database prjpc_crud;

create table clientes(
id int(11) primary key AUTO_INCREMENT,
nome varchar(255) not null,
cpf_cnpj varchar(14) not null,
nasc date not null,
endereco varchar(255),
bairro varchar(100),
cep int(8) not null,
cidade varchar(100),
estado varchar(100),
telefone int(13) not null,
celular int(13) not null,
ie int(11),
created datetime,
modified datetime);

create table produtos(
id int(11) primary key AUTO_INCREMENT,
descricao varchar(255) not null,
unidade char(10) not null,
quantidade int(50) not null,
fabricante varchar(255) not null,
datafabricacao datetime,
created datetime,
modified datetime);

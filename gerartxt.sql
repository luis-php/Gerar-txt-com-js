create database if not exists gerartxt;

use gerartxt;

create table if not exists usuario(
	nome varchar(50),
    email varchar(50),
    senha  varchar(50),
    nascimento varchar(50),
    genero varchar(50),
    texto varchar(50)
);
/*
PostgreSQL 9.6 Server
*/

CREATE TABLE users(

	id serial PRIMARY KEY,

	name varchar(100),
	email varchar(100),
	password varchar(100),
	image varchar(100),
	remember_token varchar(100),

	created_at timestamp,
	updated_at timestamp
);

CREATE TABLE operadoras(

	id serial PRIMARY KEY,

	codigo_operadora int,
	nome_operadora varchar(100),
	pais varchar(100),

	created_at timestamp,
	updated_at timestamp
);

CREATE TABLE rastreadores(

	serial varchar(30) PRIMARY KEY,
	id_operadora integer REFERENCES operadoras(id),

	nome varchar(100),

	created_at timestamp,
	updated_at timestamp
);

CREATE TABLE veiculos(

	placa varchar(10) PRIMARY KEY,
	id_rastreador varchar(30) REFERENCES rastreadores(serial),
	
	ano_fabricacao smallint,
	chassi varchar(17),
	statusreg boolean default true,

	created_at timestamp,
	updated_at timestamp
);
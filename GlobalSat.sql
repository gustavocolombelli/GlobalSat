--Versão PostgreSQL 9.6.10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

CREATE DATABASE gs WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';

ALTER DATABASE gs OWNER TO postgres;

\connect gs

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;


CREATE TABLE public.operadoras (
    id integer NOT NULL,
    codigo_operadora integer,
    nome_operadora character varying(100),
    pais character varying(100),
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);


ALTER TABLE public.operadoras OWNER TO postgres;


CREATE SEQUENCE public.operadoras_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.operadoras_id_seq OWNER TO postgres;


ALTER SEQUENCE public.operadoras_id_seq OWNED BY public.operadoras.id;

CREATE TABLE public.rastreadores (
    serial character varying(30) NOT NULL,
    nome character varying(100),
    id_operadora integer,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);


ALTER TABLE public.rastreadores OWNER TO postgres;

CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(100),
    email character varying(100),
    password character varying(100),
    image character varying(100),
    remember_token character varying(100),
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);


ALTER TABLE public.users OWNER TO postgres;


CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;

CREATE TABLE public.veiculos (
    placa character varying(10) NOT NULL,
    id_rastreador character varying(30),
    ano_fabricacao smallint,
    chassi character varying(17),
    statusreg boolean DEFAULT true,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);


ALTER TABLE public.veiculos OWNER TO postgres;

ALTER TABLE ONLY public.operadoras ALTER COLUMN id SET DEFAULT nextval('public.operadoras_id_seq'::regclass);

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);

INSERT INTO public.operadoras VALUES (34, 41, 'Tim', 'Argentina', '2018-08-23 19:44:14', '2018-08-23 19:48:43');
INSERT INTO public.operadoras VALUES (42, 57, 'Claro', 'Argentina', '2018-08-24 15:13:41', '2018-08-24 15:13:41');
INSERT INTO public.operadoras VALUES (43, 41, 'Tim', 'Brasil', '2018-08-30 14:34:09', '2018-08-30 14:34:09');

SELECT pg_catalog.setval('public.operadoras_id_seq', 43, true);

INSERT INTO public.users VALUES (1, 'Gustavo Colombelli Alessio', 'gustavocolombelli@gmail.com', '$2y$10$p0zHazZIYNmKrFvx29tZYOdRNKPl430FE9jHEo3I693zz6WZwv6aa', NULL, 'pPqzpSKTls4bbcLqISstBqMtqwXyVwOUxn7PnZRfnAOIYXq6iZd4uefwNMoG', '2018-08-23 14:19:26', '2018-08-23 14:19:26');
INSERT INTO public.users VALUES (2, 'Fernando', 'fernandouhu@gmail.com', '$2y$10$xg8nyoQEgKKW46RPliYr0ONowqpEcdm7U3gGMyhZx8C77S8stw5jO', NULL, NULL, '2018-08-30 14:41:05', '2018-08-30 14:41:05');



SELECT pg_catalog.setval('public.users_id_seq', 2, true);

ALTER TABLE ONLY public.operadoras
    ADD CONSTRAINT operadoras_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.rastreadores
    ADD CONSTRAINT rastreadores_pkey PRIMARY KEY (serial);



ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.veiculos
    ADD CONSTRAINT veiculos_pkey PRIMARY KEY (placa);



ALTER TABLE ONLY public.rastreadores
    ADD CONSTRAINT rastreadores_id_operadora_fkey FOREIGN KEY (id_operadora) REFERENCES public.operadoras(id);



ALTER TABLE ONLY public.veiculos
    ADD CONSTRAINT veiculos_id_rastreador_fkey FOREIGN KEY (id_rastreador) REFERENCES public.rastreadores(serial);





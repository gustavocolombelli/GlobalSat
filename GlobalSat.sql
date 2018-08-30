--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 9.6.10

-- Started on 2018-08-30 11:42:01

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 2157 (class 1262 OID 16384)
-- Name: gs; Type: DATABASE; Schema: -; Owner: postgres
--

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

--
-- TOC entry 1 (class 3079 OID 12387)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2159 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 188 (class 1259 OID 16398)
-- Name: operadoras; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.operadoras (
    id integer NOT NULL,
    codigo_operadora integer,
    nome_operadora character varying(100),
    pais character varying(100),
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);


ALTER TABLE public.operadoras OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 16396)
-- Name: operadoras_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.operadoras_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.operadoras_id_seq OWNER TO postgres;

--
-- TOC entry 2160 (class 0 OID 0)
-- Dependencies: 187
-- Name: operadoras_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.operadoras_id_seq OWNED BY public.operadoras.id;


--
-- TOC entry 189 (class 1259 OID 16406)
-- Name: rastreadores; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.rastreadores (
    serial character varying(30) NOT NULL,
    nome character varying(100),
    id_operadora integer,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);


ALTER TABLE public.rastreadores OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 16387)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

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

--
-- TOC entry 185 (class 1259 OID 16385)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 2161 (class 0 OID 0)
-- Dependencies: 185
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 190 (class 1259 OID 16440)
-- Name: veiculos; Type: TABLE; Schema: public; Owner: postgres
--

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

--
-- TOC entry 2017 (class 2604 OID 16401)
-- Name: operadoras id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.operadoras ALTER COLUMN id SET DEFAULT nextval('public.operadoras_id_seq'::regclass);


--
-- TOC entry 2016 (class 2604 OID 16390)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 2149 (class 0 OID 16398)
-- Dependencies: 188
-- Data for Name: operadoras; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.operadoras VALUES (34, 41, 'Tim', 'Argentina', '2018-08-23 19:44:14', '2018-08-23 19:48:43');
INSERT INTO public.operadoras VALUES (42, 57, 'Claro', 'Argentina', '2018-08-24 15:13:41', '2018-08-24 15:13:41');
INSERT INTO public.operadoras VALUES (43, 41, 'Tim', 'Brasil', '2018-08-30 14:34:09', '2018-08-30 14:34:09');


--
-- TOC entry 2162 (class 0 OID 0)
-- Dependencies: 187
-- Name: operadoras_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.operadoras_id_seq', 43, true);


--
-- TOC entry 2150 (class 0 OID 16406)
-- Dependencies: 189
-- Data for Name: rastreadores; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2147 (class 0 OID 16387)
-- Dependencies: 186
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.users VALUES (2, 'Gustavo Colombelli', 'gustavocolombelli@gmail.com', '$2y$10$gyVBKUIOi184y8M46wh8M.CkRrbxZ3ybwzumUKGGy12RCGWr6KcUG', NULL, NULL, '2018-08-30 12:40:03', '2018-08-30 12:40:03');
INSERT INTO public.users VALUES (3, 'Gustavo Colombelli', 'gustavocolombelli@gmail.com', '$2y$10$qAFckk88DRcbN2M7GC268OolY/i2OP67vqG6xOuQfeLCu2YQmJIUq', NULL, NULL, '2018-08-30 12:41:00', '2018-08-30 12:41:00');
INSERT INTO public.users VALUES (4, 'Gustavo Colombelli', 'gustavocolombelli@gmail.com', '$2y$10$ge86aYYJ9Op4KQfFaPTp5eohLFL.m6vnTvlIGoLr4VKwC1GAQD7CK', NULL, NULL, '2018-08-30 12:41:00', '2018-08-30 12:41:00');
INSERT INTO public.users VALUES (1, 'Gustavo Colombelli Alessio', 'gustavocolombelli@gmail.com', '$2y$10$p0zHazZIYNmKrFvx29tZYOdRNKPl430FE9jHEo3I693zz6WZwv6aa', NULL, 'pPqzpSKTls4bbcLqISstBqMtqwXyVwOUxn7PnZRfnAOIYXq6iZd4uefwNMoG', '2018-08-23 14:19:26', '2018-08-23 14:19:26');
INSERT INTO public.users VALUES (5, 'Fernando', 'fernandouhu@gmail.com', '$2y$10$xg8nyoQEgKKW46RPliYr0ONowqpEcdm7U3gGMyhZx8C77S8stw5jO', NULL, NULL, '2018-08-30 14:41:05', '2018-08-30 14:41:05');


--
-- TOC entry 2163 (class 0 OID 0)
-- Dependencies: 185
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 5, true);


--
-- TOC entry 2151 (class 0 OID 16440)
-- Dependencies: 190
-- Data for Name: veiculos; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2022 (class 2606 OID 16403)
-- Name: operadoras operadoras_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.operadoras
    ADD CONSTRAINT operadoras_pkey PRIMARY KEY (id);


--
-- TOC entry 2024 (class 2606 OID 16410)
-- Name: rastreadores rastreadores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rastreadores
    ADD CONSTRAINT rastreadores_pkey PRIMARY KEY (serial);


--
-- TOC entry 2020 (class 2606 OID 16395)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 2026 (class 2606 OID 16445)
-- Name: veiculos veiculos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.veiculos
    ADD CONSTRAINT veiculos_pkey PRIMARY KEY (placa);


--
-- TOC entry 2027 (class 2606 OID 16411)
-- Name: rastreadores rastreadores_id_operadora_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rastreadores
    ADD CONSTRAINT rastreadores_id_operadora_fkey FOREIGN KEY (id_operadora) REFERENCES public.operadoras(id);


--
-- TOC entry 2028 (class 2606 OID 16446)
-- Name: veiculos veiculos_id_rastreador_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.veiculos
    ADD CONSTRAINT veiculos_id_rastreador_fkey FOREIGN KEY (id_rastreador) REFERENCES public.rastreadores(serial);


-- Completed on 2018-08-30 11:42:01

--
-- PostgreSQL database dump complete
--


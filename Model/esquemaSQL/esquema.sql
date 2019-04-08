--CREATE DATABASE "geoma";

CREATE TABLE "administrador" (
    "idAdm" int NOT NULL,
    "nickname" varchar(40) NOT NULL,
    "email" varchar(40) NOT NULL,
    "senha" varchar(20) NOT NULL,
    CONSTRAINT "admPK" PRIMARY KEY ("idAdm")
);

CREATE TABLE "membros" ( -- *TALVEZ UMA BIO SLA, PERGUNTAR P JEFF
    "idMembro" int NOT NULL,
    "nome" varchar(40) NOT NULL,
    "email" varchar(40) NOT NULL,
    "lattes" varchar(300) NOT NULL,
    --"imagem" varchar(500)  DEFAULT (""),
    --caminho da imagem
    CONSTRAINT "membroPK" PRIMARY KEY ("idMembro")
);


CREATE TABLE "artigos" (
    "idArtigo" int NOT NULL,
    "nome" varchar(100) NOT NULL,
    "autor" varchar(40) NOT NULL,
    "caminho" varchar(500) NOT NULL,
    CONSTRAINT "artigoPK" PRIMARY KEY ("idArtigo")
);

CREATE TABLE "livro" (
    "idLivro" int NOT NULL,
    "nome" varchar(100) NOT NULL,
    "autor" varchar(40) NOT NULL,
    "caminho" varchar(500) NOT NULL,
    CONSTRAINT "livroPK" PRIMARY KEY ("idLivro")
);

CREATE TABLE "TCCs" (
    "idTCC" int NOT NULL,
    "nome" varchar(100) NOT NULL,
    "autor" varchar(40) NOT NULL,
    "caminho" varchar(500) NOT NULL,
    CONSTRAINT "tccPK" PRIMARY KEY ("idTCC")
);

CREATE TABLE "teses" (
    "idTese" int NOT NULL,
    "nome" varchar(100) NOT NULL,
    "autor" varchar(40) NOT NULL,
    "caminho" varchar(500) NOT NULL,
    CONSTRAINT "tesePK" PRIMARY KEY ("idTese")
);

CREATE TABLE "dissertacoes" (
    "idDissertacao" int NOT NULL,
    "nome" varchar(100) NOT NULL,
    "autor" varchar(40) NOT NULL,
    "caminho" varchar(500) NOT NULL,
    CONSTRAINT "dissertacaoPK" PRIMARY KEY ("idDissertacao")
);

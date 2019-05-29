--CREATE DATABASE "geoma";

CREATE TABLE "administrador" (
    "id" SERIAL NOT NULL,
    "nickname" varchar(40) NOT NULL,
    "email" varchar(60) NOT NULL,
    "senha" varchar(40) NOT NULL,
    CONSTRAINT "admPK" PRIMARY KEY ("id")
);

CREATE TABLE "membros" (
    "id" SERIAL NOT NULL,
    "nome" varchar(60) NOT NULL,
    "cargo" int NOT NULL DEFAULT 0,
    CHECK ("cargo" = 0 OR "cargo" = 1 OR "cargo" = 2) ,
    "lattes" varchar(300),
    "imagem" varchar(500),
    CONSTRAINT "membroPK" PRIMARY KEY ("id")
);

CREATE TABLE "artigos" (
    "id" SERIAL NOT NULL,
    "membro" int NOT NULL,
    CONSTRAINT "membroFK" FOREIGN KEY ("membro")
    REFERENCES "membros" ("id")
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    "nome" varchar(100) NOT NULL,
    "caminho" varchar(500),
    CONSTRAINT "artigoPK" PRIMARY KEY ("id")
);

CREATE TABLE "livros" (
    "id" SERIAL NOT NULL,
    "membro" int NOT NULL,
    CONSTRAINT "membroFK" FOREIGN KEY ("membro")
    REFERENCES "membros" ("id")
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    "nome" varchar(100) NOT NULL,
    "caminho" varchar(500),
    CONSTRAINT "livroPK" PRIMARY KEY ("id")
);

CREATE TABLE "tccs" (
    "id" SERIAL NOT NULL,
    "membro" int NOT NULL,
    CONSTRAINT "membroFK" FOREIGN KEY ("membro")
    REFERENCES "membros" ("id")
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    "nome" varchar(100) NOT NULL,
    "caminho" varchar(500),
    CONSTRAINT "tccPK" PRIMARY KEY ("id")
);

CREATE TABLE "teses" (
    "id" SERIAL NOT NULL,
    "membro" int NOT NULL,
    CONSTRAINT "membroFK" FOREIGN KEY ("membro")
    REFERENCES "membros" ("id")
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    "nome" varchar(100) NOT NULL,
    "caminho" varchar(500),
    CONSTRAINT "tesePK" PRIMARY KEY ("id")
);

CREATE TABLE "dissertacoes" (
    "id" SERIAL NOT NULL,
    "membro" int NOT NULL,
    CONSTRAINT "membroFK" FOREIGN KEY ("membro")
    REFERENCES "membros" ("id")
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    "nome" varchar(100) NOT NULL,
    "caminho" varchar(500),
    CONSTRAINT "dissertacaoPK" PRIMARY KEY ("id")
);

CREATE TABLE "noticias" (
    "id" SERIAL NOT NULL,
    "membro" int NOT NULL,
    CONSTRAINT "membroFK" FOREIGN KEY ("membro")
    REFERENCES "membros" ("id")
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    "titulo" varchar(100) NOT NULL,
    "conteudo" varchar(20000),
    --"data" timestamp NOT NULL DEFAULT NOW(),
    CONSTRAINT "noticiasPK" PRIMARY KEY ("id")
);

CREATE TABLE "galeria" (
    "id" SERIAL NOT NULL,
    "legenda" varchar(100) NOT NULL,
    "caminho" varchar(500),
    CONSTRAINT "galeriaPK" PRIMARY KEY ("id")
);

CREATE TABLE "linha" (
    "id" SERIAL NOT NULL,
    "nome" varchar(100) NOT NULL
);
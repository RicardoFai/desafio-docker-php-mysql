# Desafio Docker Compose: PHP, Apache, MySQL e phpMyAdmin

Este repositório contém a solução do desafio prático de orquestração de contêineres utilizando **Docker Compose**. O projeto disponibiliza uma infraestrutura web dinâmica completa composta por servidor web Apache com suporte a PHP, banco de dados MySQL e a interface gráfica do phpMyAdmin.

---

## 🚀 Arquitetura e Tecnologias

A aplicação está estruturada em três serviços principais orquestrados via `docker-compose.yml`:

- **Servidor Web (`app_web`)**: Imagem `webdevops/php-apache:alpine-php7` rodando na porta `80`.
- **Banco de Dados (`app_db`)**: Imagem `mysql:5.7` rodando na porta `3306` com persistência de dados local.
- **Gerenciador (`app_phpmyadmin`)**: Interface `phpmyadmin/phpmyadmin` mapeada na porta `8080`.

---

## 🛠️ Pré-requisitos

Para executar o projeto localmente, é necessário possuir instalado:

- [Docker Engine](https://docs.docker.com/engine/install/)
- [Docker Compose](https://docs.docker.com/compose/) (Plugin `docker compose`)

---

## 📂 Estrutura do Repositório

```text
.
├── app/
│   └── index.php          # Aplicação PHP para validação de versão e conexão MySQL
├── .gitignore             # Arquivo de exclusão de dados persistentes do banco
├── docker-compose.yml     # Orquestração dos contêineres Docker
└── README.md              # Documentação do projeto

Códigos aprimorados ;D
# Docker: Utilização prática no cenário de Microsserviços

## Sobre o Projeto
Este repositório é uma implementação prática de microsserviços utilizando **Docker** e **Nginx**, com integração a um banco de dados MySQL e uma aplicação PHP simples. O projeto demonstra o uso de contêineres para construir um sistema modular, escalável e fácil de gerenciar.

Este projeto é uma evolução do conteúdo apresentado por Denilson Bonatti no curso da **Digital Innovation One**, com melhorias significativas para tornar a solução mais robusta e completa.

---

## Tecnologias Utilizadas
- **Docker**: Para criar e gerenciar contêineres.
- **Nginx**: Proxy reverso e balanceamento de carga.
- **PHP**: Aplicação backend simples para manipulação de dados.
- **MySQL**: Banco de dados para armazenamento de informações.
- **Docker Compose**: Para orquestrar os serviços.

---

## Estrutura do Projeto
- **`Dockerfile`**: Configura o contêiner Nginx.
- **`nginx.conf`**: Configuração do Nginx para proxy reverso e balanceamento.
- **`index.php`**: Aplicação PHP para conexão ao banco de dados.
- **`banco.sql`**: Script para criação da tabela no banco de dados.
- **`docker-compose.yml`**: Orquestração dos serviços (Nginx, PHP e MySQL).

---

## Funcionalidades
1. **Backend PHP**:
   - Conecta-se a um banco de dados MySQL.
   - Insere registros automaticamente.
   - Exibe os dados armazenados no banco.

2. **Nginx**:
   - Realiza o balanceamento de carga entre múltiplas instâncias.
   - Atua como proxy reverso para a aplicação PHP.

3. **Banco de Dados MySQL**:
   - Armazena as informações criadas pelo backend.
   - Fornece dados para exibição na aplicação.

---

## Configuração e Execução

### Pré-requisitos
- Docker instalado na máquina.
- Docker Compose configurado.
- Banco de dados MySQL rodando ou configurado no Docker Compose.

### Passos para executar:
1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/toshiro-shibakita.git
   cd toshiro-shibakita

## 2. Tecnologias Utilizadas
- **Docker**: Para criar e gerenciar contêineres.
- **Nginx**: Proxy reverso e balanceamento de carga.
- **PHP**: Aplicação backend simples para manipulação de dados.
- **MySQL**: Banco de dados para armazenamento de informações.
- **Docker Compose**: Para orquestrar os serviços.

---

## 3. Estrutura do Projeto
- **`Dockerfile`**: Configura o contêiner Nginx.
- **`nginx.conf`**: Configuração do Nginx para proxy reverso e balanceamento.
- **`index.php`**: Aplicação PHP para conexão ao banco de dados.
- **`banco.sql`**: Script para criação da tabela no banco de dados.
- **`docker-compose.yml`**: Orquestração dos serviços (Nginx, PHP e MySQL).

---

## 4. Funcionalidades
1. **Backend PHP**:
   - Conecta-se a um banco de dados MySQL.
   - Insere registros automaticamente.
   - Exibe os dados armazenados no banco.

2. **Nginx**:
   - Realiza o balanceamento de carga entre múltiplas instâncias.
   - Atua como proxy reverso para a aplicação PHP.

3. **Banco de Dados MySQL**:
   - Armazena as informações criadas pelo backend.
   - Fornece dados para exibição na aplicação.

---

Desenvolvido com base no projeto de Denilson Bonatti e adaptado por Bryan Khelven.
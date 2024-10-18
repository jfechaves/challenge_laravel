<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Aplicativo de Gerenciamento de Usuários

Este é um aplicativo simples para gerenciar usuários, exibindo uma tabela em tempo real com funcionalidades de CRUD (Criar, Ler, Atualizar e Excluir). O projeto foi desenvolvido utilizando **Laravel 10**, **MySQL**, **HTML**, **CSS**, **JavaScript (AJAX)** e **Bootstrap** para a interface. O aplicativo também utiliza **SweetAlert2** para exibir alertas e mensagens amigáveis.

## Requisitos

- **Laravel 10 / PHP 8+**
- **MySQL** (ou outro banco de dados compatível)
- **Composer** (para gerenciar dependências PHP)
- **Bootstrap** (para a interface do usuário)
- **SweetAlert2** (para alertas e feedbacks)

## Instalação

1. **Clone o repositório:**
   ```
   git clone https://github.com/jfechaves/challenge_laravel
   cd challenge_laravel
   ```

2. **Instale as dependências:**
   Se houver dependências de PHP (via Composer), execute o seguinte comando:
   ```
   composer install
   ```

3. **Copie o arquivo .env.example para .env:**
   ```
   cp .env.example .env
   ```

4. **Configure o banco de dados no arquivo .env: No arquivo .env, insira as credenciais do MySQL:**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nome_do_banco
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```

5. **Gere a chave da aplicação:**
   ```
   php artisan key:generate
   ```

6. **Execute as migrações para criar as tabelas no banco de dados:**
   ```
   php artisan migrate
   ```
   
7. **Popule o banco de dados com 10 usuários usando o seeder:**
   ```
   php artisan db:seed
   ```
   
8. **Inicie o servidor de desenvolvimento:**
   ```
   php artisan serve
   ```
   
9. **Acesse o aplicativo:**
   Abra seu navegador e acesse `http://127.0.0.1:8000/`.

## Funcionalidades

- **CRUD Completo:** Criação, leitura, atualização e exclusão de usuários.
- **Atualização em Tempo Real:** A tabela de usuários é atualizada dinamicamente via **AJAX** sem a necessidade de recarregar a página.
- **Validação de Formulário:** O formulário de adição de usuários realiza validação básica dos campos.
- **Filtros de Pesquisa:** O aplicativo permite pesquisar e filtrar usuários com base no nome, email e status.
- **Feedback com SweetAlert2:** Mensagens amigáveis de sucesso, erro ou confirmação são exibidas utilizando a biblioteca **SweetAlert2**.

## Tecnologias Utilizadas

- **Laravel 10 / PHP 8+** para o backend.
- **MySQL** para armazenar os dados dos usuários.
- **AJAX (via JavaScript)** para atualizações em tempo real.
- **Bootstrap** para a estilização da interface.
- **SweetAlert2** para alertas e mensagens interativas.

## Suporte

Se você encontrar qualquer problema, sinta-se à vontade para abrir uma issue no repositório.

## Licença

Este projeto está licenciado sob os termos da licença MIT. Veja o arquivo LICENSE para mais detalhes.

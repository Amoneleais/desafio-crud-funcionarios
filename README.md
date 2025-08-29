# 📋 Sistema de Funcionários - Laravel

Sistema simples para cadastro e gerenciamento de funcionários feito com Laravel.

## 🎯 O que faz este sistema?

- 📝 **Cadastrar usuários** - Criar sua conta para acessar o sistema
- 👤 **Login/Logout** - Entrar e sair do sistema de forma segura
- ➕ **Adicionar funcionários** - Cadastrar novos funcionários
- 📋 **Listar funcionários** - Ver todos os funcionários cadastrados
- ✏️ **Editar funcionários** - Alterar dados dos funcionários
- 🗑️ **Excluir funcionários** - Remover funcionários do sistema

## 🛠️ Tecnologias usadas

- **Laravel 12** - Framework PHP
- **MySQL** - Banco de dados
- **TailwindCSS** - Estilização
- **PHP 8.2+** - Linguagem de programação

## 📋 O que você precisa ter instalado

> ⚠️ **Atenção**: Instale tudo na ordem mostrada abaixo!

1. **PHP 8.2+** - [Baixe aqui](https://www.php.net/downloads)
2. **Composer** - [Baixe aqui](https://getcomposer.org/download/)
3. **Node.js 18+** - [Baixe aqui](https://nodejs.org/)
4. **MySQL** ou **XAMPP** - [MySQL](https://dev.mysql.com/downloads/) / [XAMPP](https://www.apachefriends.org/)
5. **Git** - [Baixe aqui](https://git-scm.com/downloads)

> 💡 **Dica para iniciantes**: Se estiver no Windows, instale o **XAMPP** - ele já vem com PHP, MySQL e Apache juntos!

## 🚀 Como instalar (Passo a passo simples)

### 1️⃣ Baixe o projeto

```bash
git clone https://github.com/seu-usuario/desafio-crud-funcionarios.git
cd desafio-crud-funcionarios
```

### 2️⃣ Instale as dependências do PHP

```bash
composer install
```

### 3️⃣ Configure o arquivo de ambiente

```bash
# Windows:
copy .env.example .env

# Mac/Linux:
cp .env.example .env
```

Abra o arquivo `.env` com qualquer editor de texto e configure:

```env
# Se estiver usando XAMPP:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_funcionarios
DB_USERNAME=root
DB_PASSWORD=

# Se instalou MySQL separado, use sua senha:
DB_PASSWORD=sua_senha_mysql
```

### 4️⃣ Gere a chave do Laravel

```bash
php artisan key:generate
```

### 5️⃣ Crie o banco de dados

**Se estiver usando XAMPP:**

1. Abra o XAMPP Control Panel
2. Inicie o **MySQL**
3. Clique em **Admin** (abre o phpMyAdmin)
4. Clique em **Novo** e crie um banco chamado `crud_funcionarios`

**Se estiver usando MySQL:**

```bash
mysql -u root -p
```

```sql
CREATE DATABASE crud_funcionarios;
EXIT;
```

### 6️⃣ Crie as tabelas do banco

```bash
php artisan migrate
```

### 7️⃣ Instale as dependências do frontend

```bash
npm install
```

### 8️⃣ Compile os estilos

```bash
npm run dev
```

### 9️⃣ Inicie o sistema

```bash
php artisan serve
```

🎉 **Pronto!** Acesse: http://127.0.0.1:8000

<br>
A aplicação inclui uma landing page pública em `resources/views/landing.blade.php`, acessível na raiz do site (`/`).

> ⚠️ **Atenção:** Algumas descrições e recursos apresentados na landing page são meramente ilustrativos e não correspondem necessariamente às funcionalidades reais do sistema. Elas servem apenas para representação visual e fins de demonstração.

## 🎯 Como usar o sistema (rápido)

1. Acesse a aplicação em http://127.0.0.1:8000 — a página `/` mostrará a landing page.

- Para se registrar você tem duas opções:
  - Clique no botão **"Teste gratuitamente"** na landing page.
  - Ou acesse diretamente a rota: `/registrar` (ex.: http://127.0.0.1:8000/registrar).

- Após registrar, faça login em `/login` com seu email e senha.

- Usuário autenticado: acesse o painel para adicionar, listar, editar e remover funcionários.

- Gênero (Masculino / Feminino / Outro)

Observação: a rota `/` é pública e voltada para apresentação; todas as operações de gerenciamento exigem autenticação.

## 🆘 Problemas? Soluções rápidas!

### ❌ "composer: command not found"

- **Solução**: Instale o Composer do site oficial

### ❌ "npm: command not found"

- **Solução**: Instale o Node.js do site oficial

### ❌ "Connection refused" (MySQL)

- **XAMPP**: Verifique se o MySQL está iniciado no painel
- **MySQL**: Execute `net start mysql80` (Windows)

### ❌ "Unknown database 'crud_funcionarios'"

- **Solução**: Crie o banco como mostrado no passo 5

### ❌ "No application encryption key"

- **Solução**: Execute `php artisan key:generate`

### ❌ Página não carrega estilos

- **Solução**: Execute `npm run dev` em outro terminal

## 📚 Estrutura do projeto

- `app/` — código PHP (Models, Controllers, Services)
- `database/` — migrations e seeders
- `resources/` — views (landing, auth, funcionarios), css, js
- `public/` — index.php e assets compilados
- `routes/web.php` — rotas da aplicação
- `tests/` — testes automatizados
- `vendor/` — dependências instaladas pelo Composer

## 🔧 Comandos úteis

```bash
# Limpar cache se algo der errado:
php artisan config:clear
php artisan cache:clear

# Ver status das tabelas:
php artisan migrate:status

# Iniciar servidor:
php artisan serve

# Compilar estilos para produção:
npm run build
```

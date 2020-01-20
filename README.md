<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Instruções para executar o projeto:

1 Clone este repositório:
git clone endereço_do repositório

2 Acesse o repositório
cd repositório

3 Rode o composer para instalar as depências:
composer install

4 Crie o banco de dados:
mysql -u root -p
create database db_estoque_laravel

5 Duplique o arquivo .env.example:
cp .env.example .env

6 Crie a chave criptográfica:
php artisan key:generate

7 Abra o projeto

8 Configure o arquivo .env:
DB_DATABASE=db_estoque_laravel
DB_USERNAME=root
DB_PASSWORD=Suporte99

9 Suba no servidor
php artisan serve


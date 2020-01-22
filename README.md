<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Instruções para executar o projeto:

1 - Clone este repositório:

git https://github.com/Eco44E/VXCASE.git

2 - Acesse o diretório:

cd repositório

3 - Rode o composer para instalar as dependências:

composer install

4 - Crie o banco de dados:

mysql -u root -p
create database vxcase

5 - Execute o script abaixo para criar as tabelas:

Script: https://drive.google.com/file/d/1g_oBKJlJf9l_Jkp1SfG1ECl5MHf8-Gfw/view?usp=sharing

6 - Popule a tabela de produtos com script de exemplo abaixo:

INSERT INTO `vxcase2`.`produtos` (`id`, `nome`, `preco`, `entrega`) VALUES ('1', 'Cabo Dragon', '70.00', '10');
INSERT INTO `vxcase2`.`produtos` (`id`, `nome`, `preco`, `entrega`) VALUES ('2', 'Película do Futuro', '50.00', '7');
INSERT INTO `vxcase2`.`produtos` (`id`, `nome`, `preco`, `entrega`) VALUES ('3', 'Capa Dragon', '40.00', '5');
INSERT INTO `vxcase2`.`produtos` (`id`, `nome`, `preco`, `entrega`) VALUES ('4', 'Cabo do Futuro', '20.00', '4');
INSERT INTO `vxcase2`.`produtos` (`id`, `nome`, `preco`, `entrega`) VALUES ('5', 'Películo Invisível', '30.00', '15');

7 - Abra o projeto e Configure o arquivo .env:

DB_DATABASE=db_estoque_laravel
DB_USERNAME=root
DB_PASSWORD=Suporte99

9 - Suba no servidor:

php artisan serve

10 - Caso um erro seja gerado informando que o artisan não localizou o arquivo vendor/autoload.php execute o comando abaixo:

composer dump-autoload


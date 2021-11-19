<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## REST Laravel API

|       Metodo        |      Endpoint       		 |	  Descrição     |
| :---: 	      | :---:               		 |:---:              	|
|  POST		      |  /cliente            		 |	Cadastro de novo cliente.		|
|  PUT  	      |  /cliente/{id}      		 |	Edição de um cliente já existente.		|
|DELETE		      | /cliente/{id}       		 |      Remoção de um cliente existente.             	|
|GET		      | /cliente/{id}       		 |      Consulta de dados de um cliente.            	|
|GET		      | /consulta/final-placa/{numero}	 |      Consulta de todos os clientes cadastrados na base, onde o último número da placa do carro é igual ao informado.             	|

## Instalação
Instalar o docker

Na pasta raiz do projeto utilize os codigos abaixo:

Para rodar o composer install
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```

Para levantar os containers
```
./vendor/bin/sail up -d
```

Para rodar as migrations
```
./vendor/bin/sail artisan migrate
```

Para fazer a .env apartir da .env.example e verifique se está de acordo com o banco e se foi criado o mesmo
```
cp .env.example .env
```

Gerar uma chave para a aplicação
```
./vendor/bin/sail artisan key:generate
```

Pronto! os endpoints já estão disponiveis em localhost/api.

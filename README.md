# WEB

    #Instalação Laravel
docker context use default
curl -s "https://laravel.build/example-app?with=mysql,redis" | bash
   
    #iniciando
    cd {pasta}
 
     ./vendor/bin/sail up    - iniciar o container
     ./vendor/bin/sail artisan migrate  -iniciar o BD

    
     instalar o plugin Docker

     instalar o pacote breeze
     
     composer require laravel/breeze --dev
     php artisan breeze:install
     php artisan migrate

Configurar Vendor para rota localhost
vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php

   protected $proxies='*';


    #Views (layouts de páginas) resources/views
       nome.blade.php

    #Routes - rotas - fluxos da aplicação
     com/sem parâmetros ( enviar/ receber dados )

     Componentes do layout
     php artisan make:component Layout

   <html>
  <head>
    <title>{{ $title ?? 'Meu site' }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>
    <nav>
      <h3>Bem vindo ao meu site</h3>
      <hr>
    </nav>
    {{ $slot }}
    <footer>
      <hr/>
      © 2024 Andrea Pellissari
    </footer>
  </body>
</html>

A função slot define para onde passar o conteúdo principal sempre que você estender o componente de layout. {{ $slot }}
Para estender o layout, abra o arquivo padrão resources/views/nova.blade.php e substitua o conteúdo do arquivo por este código: <x-component-name>


<x-layout>
  <x-slot name="title">
    Meu SITE
  </x-slot>
  <div>
	<h1>Olá!!</h1>
	<p>Sejam bem-vindos!!</p>
    <button class="btn">Vamos iniciar</button>
  </div>
</x-layout>

CSS  app.css dentro do diretório /public/css
body {
    font-family: PolySans;

}

nav {
    padding: 20px;
    text-transform: uppercase;
    color: #ccc;
}

.main-content {
    padding: 20px;
}

.main-content h1 {
    font-size: 40px;
}

.main-content p {
    font-size: 20px;
}

.btn {
    background: rebeccapurple;
    color: #fff;
    padding: 10px;
    outline: 0;
    border: 0;
    font-size: 18px;
    border-radius: 10px;
}

footer {
    color: #ccc;
    padding: 20px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
}


<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $name = "Aula WEB";
  return view('nova', ['name' => $name]);
});

<div>
  Olá, {{ $name }}
 
</div>
<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');              
//$router->get('/fotos', 'HomeController@fotos');

$router->get('/login', 'LoginController@signin');               // Rota para execução de login
$router->post('/login', 'LoginController@signinAction');        // Rota para receber o formulário de Login
$router->get('/cadastro', 'LoginController@signup');            // Rota para execução de cadastro de login
$router->post('/cadastro', 'LoginController@signupAction');     // Rota para execução de cadastro de login


$router->get('/novo',  'UsuariosController@add');               //nova rota para controlador UsuariosController (metodo adicionar novo usuaro)
$router->post('/novo', 'UsuariosController@addAction');         //rota para receber o formulário que será enviado pelo add

$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');

$router->get('/usuario/{id}/excluir', 'UsuariosController@del');


//$router->get('/sobre/{nome}', 'HomeController@sobreP');
//$router->get('/sobre', 'HomeController@sobre');
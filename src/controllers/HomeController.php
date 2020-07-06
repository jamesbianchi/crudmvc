<?php
namespace src\controllers;

use \core\Controller;
use \src\handelers\LoginHandeler;
use \src\models\Usuario;

class HomeController extends Controller {

    private $loggedUser;
    
    public function __construct(){

        $this->redirect('/login');

        $this->loggedUser = LoginHandler::checkLogin(); 

        if($this->loggedUser === false) {
            $this->redirect('/login');
        }
       
    }

    public function index() {
        $usuarios = Usuario::select()->execute();                  //busca todos os usuarios da tabela usuarios

        $this->render ('home', [
            'usuarios'=> $usuarios
        ]);                                                        //manda parametros como array                         

    }

    
    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}
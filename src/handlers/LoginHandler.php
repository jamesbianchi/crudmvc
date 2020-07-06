<?php
namespace src\handlers;
use \src\models\User;

// Classe para verificação de logins
class LoginHandler {

    public function checkLogin(){

        if(!empty($_SESSION['token'])){
            $token = $_SESSION['token'];
            $data = User::select()->where('token', $token)->one();

            if(count($data > 0)){
                
                $loggedUser = new User();
               // $loggedUser->setId($data['id']);
               // $loggedUser->setEmail($data['email']);
               // $loggedUser->setName($data['name']);

               $loggedUser->id = $data['id'];
               $loggedUser->email = $data['email'];
               $loggedUser->name= $data['name'];

               return $loggedUser;

            }

        }

        return false;
    }


    static function verifyLogin($email, $password){

        //$user = User::select()->where('email', $email)->one();
        
        $user = User::select()
                        ->where('email', $email)
                        ->one();

            
        if($user) {
            
            if(!password_verify ($password, $user['password'])){ 
               
                sleep(15);
                
                return false;

            } else {

                //$token = md5(time().rand(0,9999).time());
                $token = md5(time());
                        
                User::update()
                    ->set('token', $token)
                    ->where('email', $email)
                ->execute();

                return $token;

            }       
            
        }
                
        return false;       
        
    }

    static function emailExists($email){

        $user = User::select()->where('email', $email)->one();

        //$user = User::select()->find($email); 
        return $user ? true : false;
    }

    public static function addUser($name, $email, $password, $birthdate){

            $hash = password_hash($password, PASSWORD_DEFAULT);
            
            $token = md5(time());

            User::insert([
                'name'=> $name,
                'email'=> $email,
                'password'=> $hash,
                'birthdate'=> $birthdate,
                'token'=> $token
            ])->execute();

            return $token;
    }
}

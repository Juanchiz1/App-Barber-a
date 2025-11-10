<?php
namespace Controllers;

use Model\Usuario;
use MVC\Router;

class LoginController {
    
   // Mostrar el formulario de login
    public static function login(Router $router) {
        $router->render('auth/login',[
            
        ]);
    }

    public static function logout(Router $router) {
        echo "Desde Logout";
    }

    public static function olvide(Router $router) {
       $router->render('auth/olvide-password',[

       ]);
}
        

    public static function recuperar(Router $router) {
        echo "Desde Recuperar";
    }

    public static function crear(Router $router) {
        $usuario = new Usuario;
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            

           $usuario->sincronizar($_POST);

           
            


        }

        $router->render('auth/crear-cuenta',[
            'usuario' => $usuario

        ]);
    
}
}
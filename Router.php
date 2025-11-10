<?php

namespace MVC;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

   public function comprobarRutas()
{
    session_start();

    // Obtén la URL actual de forma segura
    $currentUrl = $_SERVER['REQUEST_URI'] ?? '/';

    // Si la URL tiene parámetros GET, elimínalos
    $currentUrl = explode('?', $currentUrl)[0];

    // Si el proyecto está en subcarpeta, elimina el prefijo de la ruta física
    // Ejemplo: Si accedes por http://localhost:3000/AppSalon_PHP_MVC_JS_SASS/public/login
    //          la ruta será /AppSalon_PHP_MVC_JS_SASS/public/login
    // Normaliza quitando "/public" y subcarpeta si la hay
    $publicPos = strpos($currentUrl, '/public');
    if ($publicPos !== false) {
        $currentUrl = substr($currentUrl, $publicPos + 7);
        if ($currentUrl === '' || $currentUrl === false) $currentUrl = '/';
    }

    // Si la ruta queda vacía, pon '/'
    if ($currentUrl === '' || $currentUrl === false) {
        $currentUrl = '/';
    }

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'GET') {
        $fn = $this->getRoutes[$currentUrl] ?? null;
    } else {
        $fn = $this->postRoutes[$currentUrl] ?? null;
    }

    if ($fn) {
        call_user_func($fn, $this);
    } else {
        echo "Página No Encontrada o Ruta no válida <br> Ruta solicitada: '$currentUrl'";
    }
}


    public function render($view, $datos = [])
    {

        // Leer lo que le pasamos  a la vista
        foreach ($datos as $key => $value) {
            $$key = $value;  // Doble signo de dolar significa: variable variable, básicamente nuestra variable sigue siendo la original, pero al asignarla a otra no la reescribe, mantiene su valor, de esta forma el nombre de la variable se asigna dinamicamente
        }

        ob_start(); // Almacenamiento en memoria durante un momento...

        // entonces incluimos la vista en el layout
        include_once __DIR__ . "/views/$view.php";
        $contenido = ob_get_clean(); // Limpia el Buffer
        include_once __DIR__ . '/views/layout.php';
    }
}

<?php
namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;
class HomeController{
    private $path = 'Home/';
    private $view;
    private $db;
    // Constructor recibe el contenedor por DI
    public function __construct(ContainerInterface $container){
        $this->view = $container->get('view');
        $this->db = $container->get('db');
    }
    public function index(Request $req, Response $res, $args){
        $libros = $this->db->obten_libros();
        return $this->view->render($res, "{$this->path}index.html", ['model'=>$libros]);
    }
}
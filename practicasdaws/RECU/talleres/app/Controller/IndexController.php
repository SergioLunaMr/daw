<?php
namespace App\Controller;

use App\Model\Aulas;
use App\Model\Usuarios;

class IndexController extends BaseController
{
    public function indexAction()
    {
        $data = [];
        $aulas = Aulas::getInstancia();
        $data = $aulas->getWithGroup();
        $this->renderHTML("../view/index_view.php", $data);
    }

    public function loginAction($route)
    {
        $data = [];
        $intento["Intento"]=FALSE;
        array_push($data,$intento);
        $usuarios = Usuarios::getInstancia();
        $route = explode("/login?", $route);
        if (sizeof($route) > 1) {
            $route = explode("&", $route[1]);
            $usuario = explode("usuario=", $route[0])[1];
            $password = explode("password=", $route[1])[1];
            $dataaux = $usuarios->login($usuario, $password);
            $data[0]["Intento"]=TRUE;
            array_push($data,$dataaux);
        }
        
        $this->renderHTML("../view/login_view.php", $data);
    }

    public function logoutAction($route)
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /");
    }

    public function adminAction($route) {
        $data = [];
        $this->renderHTML("../view/admin_view.php", $data);
    }
    // public function saludoAction()
    // {
    //     $data = [];
    //     $this->renderHTML("../view/index_view.php", $data);
    // }

    // public function numAction($route)
    // {
    //     $num = explode("/", $route);
    //     $num[1] % 2 == 0 ? $par = "Par" : $par = "Impar";
    //     $data = ["numero" => $num[1], "par" => $par];
    //     $this->renderHTML("../view/num_view.php", $data);
    // }
}
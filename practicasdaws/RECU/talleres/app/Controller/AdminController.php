<?php
namespace App\Controller;

use App\Model\Aulas;
use App\Model\Usuarios;
use App\Model\Equipos;

class AdminController extends BaseController
{
    public function aulasAction($route){
        $data = [];
        $data["Tipo"]="Aula";
        $aulas = Aulas::getInstancia();
        array_push($data,$aulas->getAll());
        $this->renderHTML("../view/admin_list_view.php", $data);
    }

    public function equiposAction($route){
        $data = [];
        $data["Tipo"]="Equipos";
        $equipos = Equipos::getInstancia();
        array_push($data,$equipos->getAll());
        $this->renderHTML("../view/admin_list_view.php", $data);
    }

    public function gruposAction($route){
        $data = [];
        $data["Tipo"]="Grupos";
        $grupos = Grupos::getInstancia();
        array_push($data,$grupos->getAll());
        $this->renderHTML("../view/admin_list_view.php", $data);
    }

    public function alumnosAction($route){
        $data = [];
        $data["Tipo"]="Alumnos";
        $usuarios = Usuarios::getInstancia();
        array_push($data,$usuarios->getAllAlumnos());
        $this->renderHTML("../view/admin_list_view.php", $data);
    }

    public function incidenciasAction($route){
        $data = [];
        $data["Tipo"]="Incidencias";
        $incidencias = Incidencias::getInstancia();
        array_push($data,$incidencias->getAll());
        $this->renderHTML("../view/admin_list_view.php", $data);
    }

    public function reservasAction($route){
        $data = [];
        $data["Tipo"]="Reservas";
        $reservas = Reservas::getInstancia();
        array_push($data,$reservas->getAll());
        $this->renderHTML("../view/admin_list_view.php", $data);
    }
    public function ubicacionesAction($route){
        $data = [];
        $data["Tipo"]="Ubicaciones";
        $ubicaciones = Ubicaciones::getInstancia();
        array_push($data,$ubicaciones->getAll());
        $this->renderHTML("../view/admin_list_view.php", $data);
    }
}
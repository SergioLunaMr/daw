<?php
namespace App\Controller;

use App\Model\Aulas;

class AulasController extends BaseController
{
   public function listAction($route)
   {
      $route = explode("/", $route);
      $regexpr="/[A-Za-z\/\.\:]/";
      $route = preg_replace($regexpr, "", $route);
      $route=array_diff($route, array(""));
      $route=array_values($route);
      $id=$route[0];
      $aulas = Aulas::getInstancia();
      $data=$aulas->getEquiposbyAula($id);
      $this->renderHTML("../view/aulas_view.php", $data);
   }

   public function numAction($route)
   {
      $num = explode("/", $route);
      $num[1] % 2 == 0 ? $par = "Par" : $par = "Impar";
      $data = ["numero" => $num[1], "par" => $par];
      $this->renderHTML("../view/num_view.php", $data);
   }

   // public function AulaAddFormAction() {
   //    $aulas=Aulas::getInstancia();
   //    $data = $aulas->getEstadosDescripcion();
   //    $this->renderHTML("../view/add_view.php", $data);
   // }

   // public function AulaAddAction($data) {
   //    $data=$_POST;
   //    $this->renderHTML("../view/add.php", $data);
   // }
}
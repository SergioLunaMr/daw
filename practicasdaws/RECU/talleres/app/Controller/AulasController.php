<?php
namespace App\Controller;
use App\Model\Aulas;
class AulasController extends BaseController {
   public function IndexAction() {
    $aulas=Aulas::getInstancia();
    $data = $aulas->getAll();
    $this->renderHTML("../view/index_view.php", $data);
   }

   public function AulaAddFormAction() {
      $aulas=Aulas::getInstancia();
      $data = $aulas->getEstadosDescripcion();
      $this->renderHTML("../view/add_view.php", $data);
   }

   public function AulaAddAction($data) {
      $data=$_POST;
      $this->renderHTML("../view/add.php", $data);
   }
}
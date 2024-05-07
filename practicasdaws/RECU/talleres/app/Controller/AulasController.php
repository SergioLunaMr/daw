<?php
namespace App\Controller;
use App\Model\Aulas;
class AulasController extends BaseController {
   public function GetAulasAction() {
    $aulas=Aulas::getInstancia();
    $data = $aulas->getAll();
    $this->renderHTML("../view/listado_view.php", $data);
   }
}
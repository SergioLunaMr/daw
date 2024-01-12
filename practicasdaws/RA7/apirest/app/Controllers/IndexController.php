<?php
namespace App\Controllers;
use App\Models\Mascota;
class IndexController extends BaseController
{
    public function IndexAction()
    {
        $datos = array("nombre" => "Misifú", "raza"=>"british shorthair", "edad"=>"6", "domicilio"=>"Calle Manolo 2");

        $sh_singleton1 = App\Models\Mascota::getInstancia();
        $sh_singleton1->set($datos);
        $data = array('message' => 'Gato agregado');
        $this->renderHTML('../app/views/index_view.php', $data);
    }
}
?>
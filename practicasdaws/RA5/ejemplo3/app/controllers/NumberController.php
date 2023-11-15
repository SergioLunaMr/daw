<?php
namespace App\Controllers;

class NumberController extends BaseController {
    public function NumberList(){
        $data = array(  "encabezado" => "Lista de numeros",
                        "numeros" => array());
    for($i = 0; $i <= 10; $i++){
        if($i%2==0){
            $data["numeros"][]=$i;
        }
    }
        $this->renderHTML("../app/views/list_view.php", $data);
    }

    public function NumberListSelect($request){
        $urlDecode = explode("/", $request);
        $data = array(  "encabezado" => "Lista de numeros",
                        "numeros" => array());
    $max=end($urlDecode);
    for($i = 0; $i <= $max; $i++){
        if($i%2==0){
            $data["numeros"][]=$i;
        }
    }
        $this->renderHTML("../app/views/list_view.php", $data);
    }
}
?>
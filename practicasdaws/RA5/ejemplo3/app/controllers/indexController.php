<?php
namespace App\Controllers;

class IndexController extends BaseController {
    public function indexAction(){
        $data = array("message" => "Hola mundo");
        $this->renderHTML("../views/index_view.php", $data);
    }
}
?>
<?php
namespace App\Controller;
class IndexController extends BaseController {
    public function indexAction() {
        $data=[];
        $this->renderHTML("../view/index_view.php", $data);
    }

    public function saludoAction() {
        $data=[];
        $this->renderHTML("../view/index_view.php", $data);
    }

    public function numAction($route) {
        $num=explode("/", $route);
        $num[1] % 2 == 0? $par="Par" : $par="Impar";
        $data=["numero" => $num[1],"par" => $par];
        $this->renderHTML("../view/num_view.php", $data);
    }
}
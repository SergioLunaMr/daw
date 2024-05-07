<?php
namespace App\Controller;
class IndexController extends BaseController {
    public function indexAction() {
        $data=[];
        $this->renderHTML("../view/index_view.php", $data);
    }
}
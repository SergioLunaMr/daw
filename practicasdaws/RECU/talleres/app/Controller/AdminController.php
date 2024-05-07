<?php
namespace App\Controller;
class AdminController extends BaseController {
   public function IndexAction() {
    $data=[];
    $this->renderHTML("../view/admin_view.php", $data);
   }
}
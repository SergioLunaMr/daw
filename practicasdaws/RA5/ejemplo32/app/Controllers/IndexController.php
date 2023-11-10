<?php
namespace App\Controllers;
class IndexController extends BaseController
{
    public function indexAction()
    {
        $data = array('message'=>'Hola mundo');
        $this->renderHTML('../app/Views/index_view.php',$data);
    }
}
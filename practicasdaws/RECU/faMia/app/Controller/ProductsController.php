<?php
namespace App\Controller;

class ProductsController extends BaseController
{
    public function listarProductosAction($route)
    {
        $arr = preg_split('/(?=[A-Z])/', $route);
        $data = ["action" => $arr[0], "product" => $arr[1]];
        $this->renderHTML("../view/listProducts_view.php", $data);
    }
}
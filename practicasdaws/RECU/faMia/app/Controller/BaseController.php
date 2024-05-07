<?php
namespace App\Controller;

class BaseController {
    public function renderHTML($filename, $data=[]) {
        include($filename);
    }
}
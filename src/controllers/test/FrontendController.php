<?php
namespace Controllers\test;

use  Controllers\frontend\Controller;


class FrontendController extends Controller {


    public function index() {

        return $this->Data( json_encode($this->Globals()) ) ;
    }
}
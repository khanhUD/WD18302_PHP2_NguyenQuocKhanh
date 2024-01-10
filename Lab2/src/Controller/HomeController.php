<?php
namespace App\Controller;
use App\Responsitories\ProductRespon;

class HomeController {
    public function demo(){
        $test = new ProductRespon();
      $test->xuLy();
      return  $test->xuLy();
    }

}
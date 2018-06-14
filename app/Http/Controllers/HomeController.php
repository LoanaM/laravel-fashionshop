<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{


    public function homepage() {
      $products = Product::all();

      return view('catalogo',['dresses' => $products]);
    }

    public function dress($dressid){
      $products = Product::all();
      
      $dress = null;
      foreach ($products as $product) {
        if ($product['id']==$dressid) {
          $dress = $product;
        }
      }
      if($dress == null)
        abort(404);

      return view('productdetail',['dress' => $dress]);
    }




}

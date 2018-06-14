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

    public function add(Request $request) {
      $new_product = new Product();
      $new_product->name = $request->input('name');
      $new_product->brand = $request->input('brand');
      $new_product->description = $request->input('description');
      $new_product->price = $request->input('price');
      $new_product->image = $request->input('image');

      $new_product->save();
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

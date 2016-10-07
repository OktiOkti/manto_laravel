<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Product;
class Helpers {
  public function showProduct($product){
  echo 'jjj
          ';
  }
}



/* <div class="col-xs-6 col-md-3">
        <a href="http://localhost:8888/products/{{$product->id}}" class="product_name">{{$product->nazwa}}</a>
        
        <div class="product_price"><span class="price">{{$product->cena}} zł</span></div>
        <form action="/add/{{ $product->id }}" method="POST">
          {{ csrf_field() }} {{ method_field('DELETE') }}
            <img  class="little_image" src="{{ asset('/storage/app/'.$product->path)}}" style="width:30%;" alt="{{$product->path}}">
          <button>Delete Product</button>
        </form>
      </div>*/

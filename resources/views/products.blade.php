@extends('layout') @section('content') @foreach($products as $product) @if($product->id%4==0)
<div class="row">
  @endif
  <div class="col-xs-6 col-md-3">
    <img class="main_page_img" src="images/n{{$product->id}}.jpg" alt="zdjecie">
    <a href="http://localhost:8888/products/{{$product->id}}" class="product_name">{{$product->nazwa}}</a>
    <div class="product_price"><span class="price">{{$product->cena}} zł</span></div>
  </div>
  @if($product->id%4==0)
</div>
@endif @endforeach @stop
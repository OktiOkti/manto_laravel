<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Product;
use View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    public function index(){
    $products=DB::table('products')->get();// Product::all();
    return View::make('main_page')->with('products',$products);
   
    }
  public function login()
  {
    return View::make('login');
}
  public function showProduct($id){
    $products=DB::table('products')->get();
    $product=Product::find($id);
    return View::make('productid')->with('product',$product)->with('products',$products);
  }
  public function addProduct(\Illuminate\Http\Request $request)
  {    
    $task = new Product();//$request->name,$request->price,$request->message,$request->photo);
    $task->nazwa=$request->name;
    $task->cena=$request->price;
    $task->opis=$request->message;
    $task->path=$request->photo;
    $file = Request::file('photo');
    $extension = $file->getClientOriginalExtension();
	Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
    $task->path=$file->getFilename().'.'.$extension;
    $task->save();
    return redirect('add');
    $products= Product::all();
      
  }
  
  public function deleteProduct($id){
    
    Product::findOrFail($id)->delete();
    //DB::statement('DBCC CHECKIDENT(products, RESEED, 0);')
    return redirect('add');
  }
}
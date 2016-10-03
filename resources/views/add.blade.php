

<<!DOCTYPE html>
  <html lang="pl">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Manto - Shop Online</title>

    <!-- Bootstrap -->
    <link href="{{{ asset('/stylesheets/bootstrap.min.css') }}}" rel="stylesheet">
    <link rel="stylesheet" href="{{{ asset('/font-awesome-4.6.3/css/font-awesome.min.css') }}}">
    <link href="{{{ asset('/stylesheets/style.css') }}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <form method="post" action="add" enctype="multipart/form-data">
      {{csrf_field()}}
      <label>Nazwa</label>
      <input name="name" placeholder="Nazwa produktu">

      <label>Cena</label>
      <input name="price" type="price" placeholder="Cena produktu">

      <label>Opis</label>
      <textarea name="message" placeholder="Opis produktu"></textarea>
      <input name="photo" type="file">
      <input id="submit" name="submit" type="submit" value="Wyślij">

    </form>
    
<div class="row">
   @foreach($products as $product) 
       < div class="col-xs-6 col-md-3">
        <a href="http://localhost:8888/products/{{$product->id}}" class="product_name">{{$product->nazwa}}</a>
                    <img  class="main_page_img" src="{{ asset('/storage/app/'.$product->path)}}" style="width:30%;" alt="{{$product->path}}">

        <div class="product_price"><span class="price">{{$product->cena}} zł</span></div>
        <form action="/add/{{ $product->id }}" method="POST">
          {{ csrf_field() }} {{ method_field('DELETE') }}
          <button>Delete Product</button>
        </form>
      </div>
 @endforeach
  </div>
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="javascripts/bootstrap.min.js"></script>
  <script src="javascripts/myjs.js"></script>

  </div>
  </body>

  </html>
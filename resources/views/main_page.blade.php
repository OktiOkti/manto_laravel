<!DOCTYPE html>
<html lang="en">
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
 <div class="container"> 
   <header>
    <div class="logo_container">
     <img src="images/header_logo.gif" alt="header_logo">
     </div>
    <div class="header_links_container">
     <ul class="list-inline">
       
       @if (Auth::guest())
       <li class="dotted_link" id="your_account">
        

       <a href="login">  Twoje konto </a>
         </li>
        @else
       <li class="dotted_link" id="your_account">
        
<a href="add">
        {{ Auth::user()->name }} </a>
         </li>
        <li class="dotted_link" ><a href="{{ url('/logout') }}">Wyloguj się</a></li>
       @endif
       
       <li class="dotted_link" id="observed">Obserwowane (0)
       </li>
       <li class="black_link" id="products_cart"><strong>0 </strong>szt. za <strong>0,00 zł</strong>
       </li>
       <li ><button class="black_link"  disabled="disabled"><strong>Do kasy</strong></button>
       </li>
      </ul>
     
     </div>
    </header>
   <nav class="navbar_nav">
     
     <ul class="list-inline">
       <li class="btn-group" role="group">
    <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      NA CO DZIEŃ
      <span class="caret"></span>
    </div>
    <ul class="dropdown-menu">
      <li><a href="#">koszulki</a></li>
      <li><a href="#">longsleeve</a></li>
       <li><a href="#">bluzy</a></li>
       <li><a href="#">spodnie</a></li>
       <li><a href="#">spodenki dresowe</a></li>
       <li><a href="#">polo</a></li>
       <li><a href="#">czapki</a></li>
       <li><a href="#">kurtki</a></li>
       <li><a href="#">junior</a></li>
       <li><a href="#">torby/plecaki/saszetki</a></li>
    </ul>
  </li>
         <li class="btn-group" role="group">
    <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      NA TRENING
      <span class="caret"></span>
    </div>
    <ul class="dropdown-menu">
      <li><a href="#">bjj gi/kimona</a></li>
      <li><a href="#">bjj pasy</a></li>
       <li><a href="#">rashguard</a></li>
       <li><a href="#">koszulki treningowe</a></li>
       <li><a href="#">lajkry</a></li>
       <li><a href="#">spodenki</a></li>
       <li><a href="#">rękawice</a></li>
       <li><a href="#">owijki</a></li>
       <li><a href="#">ochraniacze</a></li>
       
    </ul>
  </li>
     
       <li class="underline"><a href="#">AKCESORIA</a></li>
       <li class="underline"><a href="#">DAMSKIE</a></li>
       <li class="underline"><a href="#">PROMOCJE</a></li>
       <li class="underline"><a href="#">NOWOŚCI</a></li>
       <li class="underline"><a href="#">REGULAMIN</a></li>
       <li class="underline"><a href="#">KONTAKT</a></li>
       <li class="nav_pic underline"><a href="#"><img src="images/fac.png" alt="facebook_site"></a></li>
       <li class="nav_pic underline"><a href="#"><img src="images/ins.jpg" slt=instagram_site></a></li>
       <li class="underline nav_pic"><a href="#"><img src="images/twi.png"></a></li>
     </ul>
     <div class="search_input">
     <input type="search"></input>
     </div>
   </nav>
<div id="banner_carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#banner_carousel" data-slide-to="0" class="active"></li>
    <li data-target="#banner_carousel" data-slide-to="1"></li>
    <li data-target="#banner_carousel" data-slide-to="2"></li>
    <li data-target="#banner_carousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
          <img class="baner_img" src="images/banner.jpg" alt="baner_manto">

    </div>

    <div class="item">
          <img class="baner_img" src="images/baner2.jpg" alt="baner_manto">

    </div>

    <div class="item">
          <img class="baner_img" src="images/baner3.jpg" alt="baner_manto">

    </div>

    <div class="item">
          <img class="baner_img" src="images/baner4.jpg" alt="baner_manto">

    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#banner_carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#banner_carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   
     
    
    
  <div class="row">
    
    <a class="main_page_section_title" href="">nowości</a>
    @foreach($products as $product) 
    
       <div class="col-xs-6 col-md-3">
        
         <img  class="main_page_img" src="{{ asset('/storage/app/'.$product->path)}}" alt="{{$product->path}}">

        <div class="product_price"><span class="price">{{$product->cena}} zł</span></div>
         <a href="http://localhost:8888/products/{{$product->id}}" class="product_name">{{$product->nazwa}}</a>
        <form action="/add/{{ $product->id }}" method="POST">
          {{ csrf_field() }} {{ method_field('DELETE') }}
          <button class="black_link" style="font-weight:400;">Delete Product</button>
        </form>
      </div>

     
     @endforeach
  
  
    </div>
    <form class="newsletter" method="post" action="add" enctype="multipart/form-data">
      {{csrf_field()}}
      <label>Nazwa</label>
      <input name="name" placeholder="Nazwa produktu">

      <label>Cena</label>
      <input name="price" type="price" placeholder="Cena produktu">

      <label>Opis</label>
      <textarea name="message" placeholder="Opis produktu"></textarea>
      <input name="photo" type="file">
      <input class="black_link" id="submit" name="submit" type="submit" value="Wyślij">

    </form>
    
    <footer>
      <div class="row newsletter">
      <div class="newsletter_title col-md-5 col-lg-5 col-sm-12">
        <strong class="main_page_section_title">newsletter</strong>
        <span>BĄDŹ NA BIEŻĄCO I ZAPISZ SIĘ DO NASZEGO<br> NEWSLETTERA</span>
        </div>
      <form class="col-md-4 col-sm-4 col-xs-12">
        <input name="mailing_email" type="text" placeholder=" Podaj swój adres e-mail">
        <input name="mailing_name" type="text" placeholder=" Podaj swoje imię">
        </form>
       <div class="newsletter_button col-md-4 col-lg-3 col-sm-4 col-xs-12"> <button class="black_link">Zapisz się ></button>
         <a  href="">ABY WYPISAC SIĘ Z NEWSLETTERA<br><span class="dotted_link">KLIKNIJ TUTAJ</span></a>
      </div>
         </div>
      
    <div class="contact pull-right">
      <ul class="list-unstyled">
        <li id="contact_text">
          <strong>kontakt z nami
               </strong></li>
        <li><a href="tel:228990013">22 899 0013</a></li>
       
    <li id=email_text>
      <strong >e-mail</strong></li>
        <li><a href="mailto:office@mantofight.com">office@mantofight.com</a></li>
      </ul>
    
    </div>
  <div class="clearfix"></div>
  <div class="foot">
      <img src="images/cards.png" alt="cards_credit">
      <img class="pull-right" id="powered_by" src="images/pb-iai.png" alt="powered">
    </div>
      </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{{ asset('/stylesheets/javascripts/bootstrap.min.js')}}}"></script>
   </div>
  </body>
</html>
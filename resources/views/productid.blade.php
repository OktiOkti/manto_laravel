<!DOCTYPE html>
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
 <div class="container"> 
   <header>
    <div class="logo_container">
     <img src="{{{ asset('/images/header_logo.gif') }}}" alt="header_logo">
     </div>
    <div class="header_links_container">
     <ul class="list-inline">
       <li class="dotted_link" id="your_account">
         Twoje konto
       </li>
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
     
     <ul class="list-inline menu_nav alter">
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
     
       <li class="underline"><a href="#" class="menu_nav">AKCESORIA</a></li>
       <li class="underline"><a href="#" class="menu_nav">DAMSKIE</a></li>
       <li class="underline"><a href="#" class="menu_nav">PROMOCJE</a></li>
       <li class="underline"><a href="#" class="menu_nav">NOWOŚCI</a></li>
       <li class="underline"><a href="#" class="menu_nav">REGULAMIN</a></li>
       <li class="underline"><a href="#" class="menu_nav">KONTAKT</a></li>
       <li class="nav_pic underline"><img src="images/fac.png" alt="facebook_site"></li>
       <li class="nav_pic underline"><a href="#"><img src="images/ins.jpg" slt=instagram_site></a></li>
       <li class="underline nav_pic"><a href="#"><img src="images/twi.png"></a></li>
     </ul>
     <div class="search_input">
     <input type="search"></input>
     </div>
   </nav>
    <div class="row">
<ol class="breadcrumb" id="mybreadcrumb">
  <li><a href="#">Jesteś tu</a></li>
  <li><a href="#">Strona główna</a></li>
  <li><a href="#">NA CO DZIEŃ</a></li>
  <li><a href="#">KOSZULKI</a></li>
 <li><a href="#">{{$product->nazwa}}</a></li>
    </ol>
    </div>

 <div class="row">
      <div class="img_container col-md-6 col-sm-6">
        
        <img class="big_image" src= "{{ asset('/storage/app/'.$product->path)}}" alt="{{$product->path}}">
        
      <div class="little_images">
        <img  class="little_image" src= "{{ asset('/storage/app/'.$product->path)}}"  alt="little_image">
        <img class="little_image" src= "{{ asset('/storage/app/'.$product->path)}}"  alt="little_image">
        <img class="little_image" src= "{{ asset('/storage/app/'.$product->path)}}"  alt="little_image">                   </div>
        <div class="product_available">
        <h3>Ten towar jest dostępny w naszych sklepach</h3>
         <p> Możesz kupić ten produkt bez składania zamówienia internetowego w jednym z naszych sklepów w Twojej okolicy. Sprawdź w których punktach produkt jest dostępny od ręki.</p>
          <a href="" class="dotted_link" style="text-transform:uppercase;">sprawdź dostępność</a>
        </div>
    </div>
       <div class="info_container col-md-6 col-sm-6">
        <h1 id="change_h1">{{$product->nazwa}}</h1>
        <div class="description_product">
         <p>-100% bawełna.</p>
          <p>-Najwyższa jakość wykonania.</p>
          <p>-Nadruki wykonane metodą wysokiej jakości sitodruku.</p>
          <p>-Żakardowa wszywka MANTO na rękawku.</p>
          <p>-Wygodny krój.</p>
         
         </div>
         <div class="producer">PRODUCENT <strong class="dotted_link" id="change_h" style="color:black;"><a href="#">MANTO</a></strong> </div>
         
         <div class="size">ROZMIAR :
         <label class="black_link_reverse" id="label_s">S</label>
         <label class="black_link_reverse" id="label_m">M</label>
           <label class="black_link_reverse" id="label_l">L</label>
         </div>
         <div class="sending">Wysyłka w ciągu 4 godz. <strong><a href="#">Sprawdź czasy i koszty wysyłki</a></strong></div>
         <div class="our_price">
           NASZA CENA:<br>
           <span>{{$product->cena}} zł / <span style="font-size:28px;">szt.</span></span><span id="brutto">brutto</span> + <a class="dotted_link" id="costs">koszty wysyłki</a>
         </div>
         <div class="input-group" style="font-size=20px;width:110px;">
  <div class="input-group-btn">
    <button class="btn btn-default" id="sub_button" type="button" >-</button>
  </div>
  <input type="text" id="input_amount" class="form-control" aria-label="..." value="1" style="height:34px;" >
        <div class="input-group-btn">
    <button class="btn btn-default" id="add_button" type="button">+</button>
  </div>   
</div>
<div class="add_to_cart">
  <div id="cart_div"> <button class="black_link" id="add_to_cart_but">Dodaj do koszyka</button></div>
         <button class="black_link_reverse add_to_but" id="observed_but">Dodaj do obserwowanych</button>
  <button class="black_link_reverse add_to_but" id="compare_but">Dodaj do porównania</button>
         </div>
        </div>
      </div>
   
<div class="clearfix"></div>
       <div class="row">
         <div class="row">
    <a class="main_page_section_title" href="">zainteresuje ciebie również</a>
     @foreach($products as $pro) 
           @if($pro->id!=$product->id)
           <div class="col-xs-6 col-md-3">
    <img class="main_page_img" src="{{ asset('/storage/app/'.$pro->path)}}"  alt="zdjecie">
      <a href="" class="product_name">{{$pro->nazwa}}</a>
      <div class="product_price"><span class="price">{{$pro->cena}}zł</span></div>
    </div>
           @endif
           @endforeach
         </div>
    </div>
      <ul class="nav nav-tabs">
  <li ><a data-toggle="tab" href="#home">OPINIE (0)</a></li>
  <li class="active"><a  data-toggle="tab" href="#menu1" class="">ZADAJ PYTANIE</a></li>
  
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="info_login"><span class="info_text">Aby móc ocenić produkt lub dodać opinię, musisz być zalogowany.</span></div>
    
  </div>
  <div id="menu1" class="tab-pane fade">
   <div class="col-sm-8 col-lg-offset-2"><div class="ask_question">Jeżeli powyższy opis jest dla Ciebie niewystarczający, prześlij nam swoje pytanie odnośnie tego produktu. Postaramy się odpowiedzieć tak szybko jak tylko będzie to możliwe.</div>
    <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-weight:100;">EMAIL:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight:100;">PYTANIE</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="inputPassword3" style="height:90px;" ></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-1">
      <button type="submit" class="black_link" style="width:90px;">Wyślij</button>
    </div>
  </div>
</form>
  
 
</div>
    </div>
    </div>

      
<div class="clearfix"></div>
    
 </div>
  
    <footer class="container">
      <div class="container newsletter">
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
      <img src="{{{ asset('images/cards.png')}}}" alt="cards_credit">
      <img class="pull-right" id="powered_by" src="{{{ asset('images/pb-iai.png')}}}" alt="powered">
   
    </div>
      
      </footer>
  
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascripts/bootstrap.min.js"></script>
    <script src="javascripts/myjs.js"></script>

   </div>
  </body>
</html>

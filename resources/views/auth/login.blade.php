@extends('header_footer')

@section('content')
<div class="container panel">
    <div class="row">
      <div class="col-sm-6 " style="padding:0px; float:left;">
      
      <h2 class="text-uppercase" style="font-weight:100; ">rejestracja</h2>
      <p style="">Jeżeli wcześniej nie założyłeś konta w naszym sklepie, zostaniesz poproszony o podanie swoich danych i adresu dostawy.</p>
      <strong><a style="" href="register" class="black_link">Załóż nowe konto</a></strong>
    </div>
    
        <div class="col-sm-6" style="float: right;">
          
            <div class="panel">
                <h2 class="text-uppercase" style="font-weight:100">logowanie</h2>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">login / nr karty stałego klienta
</label>

                            <div class="col-md-6">
                                <input id="email" type="email" style="width: 99%;
    height: 30px;" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">hasło / pin karty stałego klienta
</label>

                            <div class="col-md-6">
                                <input id="password" type="password" style=" width: 99%;
    height: 30px;" class="" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class=" black_link">
                                     Zaloguj się
                                </button>
                              <div style="margin-top:10px;">
                                <a class="underline btn-link" style="color:black; text-decoration: underline;
" href="{{ url('/password/reset') }}">Zapomniałem hasła lub loginu</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      <div class="clearfix">
      </div>
    </div>
</div>


@endsection

@extends('header_footer')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-8 " style="width:50%;">
            <div class="">
                <div class=""><strong class="main_page_section_title">twoje konto</strong></div>
                <div class="">
                    <form class="" role="form" method="POST" action="{{ url('/auth/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 " style="display: inline-block;">Login</label>

                            <div class="col-md-6" style="width:60%; display: inline-block; float: right;">
                                <input id="name" type="text" class="" style="width:80%; height:30px;" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" style="display: inline-block;">Adres e-Mail</label>

                            <div class="col-md-6" style="width:60%; display: inline-block; float: right;">
                                <input id="email" type="email" class="" style="width:80%; height:30px;" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="display: inline-block;">Hasło:</label>

                            <div class="col-md-6" style="width:60%; display: inline-block; float: right;">
                                <input id="password" type="password" style="width:80%; height:30px;" class="" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" style="display: inline-block;" class="col-md-4 control-label">Powtórz hasło: </label>

                            <div class="col-md-6" style="width:60%; display: inline-block; float:right;">
                                <input id="password-confirm" type="password" style="width:80%; height:30px;" class="" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         

             <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class=" black_link">
                                    <i class="fa fa-btn fa-user"></i> Zarejestruj konto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
      <div class="col-md-8"  style="width:50%;  float:right;">
                <div  style="margin-top:100px; padding:10px;">
                <input type="checkbox" id="check" checked="false" > *Akceptuję warunki regulaminu. Zgadzam się na otrzymywanie informacji dotyczących zamówień w myśl ustawy z dnia 18 lipca 2002r. o świadczeniu usług drogą elektroniczną.</input>
                </div>  
                
                       </div>
 
    </div>
  
</div>
@endsection

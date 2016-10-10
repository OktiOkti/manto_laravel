@extends('header_footer')

@section('content')
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
  @endsection

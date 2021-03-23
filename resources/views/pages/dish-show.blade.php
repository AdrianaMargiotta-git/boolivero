@extends('layouts.main-layout')

@section('contenuto-pagina')

  <div class="content-show-edit">

    <div class="box">

     {{ $dish -> name}}
     {{ $dish -> ingredients }}
     {{ $dish -> price}}
     {{ $dish -> visible}}

     <a href="{{ route('dish-edit', $dish -> id )}}">MODIFICA</a>
     <a href="{{ route('dish-delete', $dish -> id)}}">ELIMINA</a>

    </div>

  </div>

@endsection

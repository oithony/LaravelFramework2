@extends('layouts.estrutura')
@section('content')
        <p> <b> Olá, tudo bom?!!</p>

   
    Clique <a href="{{route('produtin.index')}}"> aqui </a> para mais info sobre os produtos!

    <br>
    Clique <a href="{{route('categorias.index')}}"> aqui </a> para ver outras categorias!
@endsection
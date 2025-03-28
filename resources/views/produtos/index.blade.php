@extends('layouts.estrutura')

@section('content')
    <p> <b> Essa é outra página onde tem produtos!</p>

    <p> O que foi recebido :  </p>
        @foreach($produtos as $quantidadeProduto)
            @if($quantidadeProduto > 10)
                <p>{{$quantidadeProduto}}</p>
                @else
                <p>Não tem nada</p>
            @endif
        @endforeach
@endsection
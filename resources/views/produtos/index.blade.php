<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas da 1229</title>
</head>
<body>
    <p> <b> Essa é outra página onde tem produtos!</p>

    <p> O que foi recebido :  </p>
        @foreach($produtos as $quantidadeProduto)
            @if($quantidadeProduto > 10)
                <p>{{$quantidadeProduto}}</p>
                @else
                <p>Não tem nada</p>
            @endif
        @endforeach
</body>
</html>
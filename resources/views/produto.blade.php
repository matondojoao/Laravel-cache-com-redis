<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Produto</title>
</head>
<body>
    <table class="table table-hover" style="width:800px; margin:auto;">
        <thead>
            <tr>
               <th>#</th>
               <th>Produto</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="{{asset('css/app.js')}}"></script>
</body>
</html>
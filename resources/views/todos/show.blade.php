<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>{{$todos->name}}</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">{{$todos->name}}</h1>
        <p>{{$todos->description}}</p>
        <a href="/todos">Voltar</a>
    </div>

</body>
</html>

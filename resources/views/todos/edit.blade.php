<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Todo's</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Edit Todo</h1>
        <form action="/edit-todo/{{$todos->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$todos->name}}" name="name">
                </div>
                <div class="forma-group">
                    <textarea class="form-control" cols="5" rows="5" name="description" placeholder="Description">{{$todos->description}}</textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-sucess">Edit Todo</button>
                </div>
        </form>
    </div>
</body>
</html>

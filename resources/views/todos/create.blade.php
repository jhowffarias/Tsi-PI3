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
        <h1 class="text-center my-5">New Todo</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="store-todo" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="forma-group">
                    <textarea class="form-control" cols="5" rows="5" name="description" placeholder="Description"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-sucess">Create Todo</button>
                </div>
        </form>
    </div>
</body>
</html>

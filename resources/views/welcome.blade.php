<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="/adicionarContato">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="exampleInputPassword1">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome">
                    </div>
                    
                    <div class="form-group mb-2">
                        <label for="exampleInputPassword1">Telefone</label>
                        <input type="text" class="form-control" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            <div>
        <div>
    <div>
</body>
</html>
        
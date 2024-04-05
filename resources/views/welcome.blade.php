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
                <nav class="navbar navbar-expand-lg bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand text-white" href="#">Sistema Web</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="#">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="/editar">Editar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                    
        <br>
        <h4>Cadastrar - Agendamento de possiveis Clientes</h4>
        <h6>Sistema utilizado para agendamento de serviços.</h6>
        <br>
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
        
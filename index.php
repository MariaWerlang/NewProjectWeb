<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.svg" width="30" height="30" alt="">
                        Sistema Web 2.0
                </a>
            </nav>
            </nav>
        </div>

        <div class="row">
            <div class="col">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="index.php" role="tab" aria-controls="home" aria-selected="true">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="consulta.php" role="tab" aria-controls="contact" aria-selected="false">Consulta</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand"> Cadastro de Usuários </span>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label">Endereço</label>
                        <input type="address" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress2" class="form-label">Bairro</label>
                        <input type="address" class="form-control" id="inputAddress2">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress2" class="form-label">Cep</label>
                        <input type="address" class="form-control" id="inputAddress2">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Cidade</label>
                        <input type="city" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-8">
                        <label for="inputState" class="form-label">Estado</label>
                        <select id="inputState" class="form-select">
                            <option selected>Escolha...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark">Cadastro</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


</body>

</html>
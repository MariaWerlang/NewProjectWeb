<?php
require_once("controller/controllerCadastro.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="img/logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Cadastro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="consulta.php">Consulta</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- As a heading -->
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand">Editar - Agendamentos de potências Clientes</span>
                    </div>
                </nav>    
            </div>
        </div>

        <?php
            $controller = new ControllerCadastro();
            $resultado = $controller ->  listar($_GET['id']);
        ?>

        <div class="row">
            <div class="col">
				<form class="row g-3" method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
					<div class="col-md-6">
						<label for="inputEmail4" class="form-label">Email</label>
						<input type="email" class="form-control" required id="txtEmail" value="<?php echo $resultado[0]['email'];?>" name="txtEmail">
					</div>
					<div class="col-md-6">
						<label for="inputPassword4" class="form-label">Senha</label>
						<input type="password" class="form-control" required id="txtSenha" value="<?php echo $resultado[0]['senha'];?>" name="txtSenha">
					</div>
					<div class="col-12">
						<label for="inputAddress" class="form-label">Endereço</label>
						<input type="text" class="form-control" required id="txtEndereco" value="<?php echo $resultado[0]['endereco'];?>" name="txtEndereco">
					</div>
					<div class="col-md-6">
						<label for="inputAddress2" class="form-label">Bairro</label>
						<input type="text" class="form-control" required id="txtBairro" value="<?php echo $resultado[0]['bairro'];?>" name="txtBairro">
					</div>
					<div class="col-md-6">
						<label for="inputAddress3" class="form-label">Cep</label>
						<input type="text" class="form-control" required id="txtCep" value="<?php echo $resultado[0]['cep'];?>" name="txtCep">
					</div>
					<div class="col-md-6">
						<label for="inputCity" class="form-label">Cidade</label>
						<input type="text" class="form-control" required id="txtCidade" value="<?php echo $resultado[0]['cidade'];?>" name="txtCidade">
					</div>
					<div class="col-md-4">
						<label for="inputState" class="form-label">Estado</label>
						<select id="cboEstado" name="cboEstado" class="form-select">
							<option selected>Escolha...</option>
							<option <?php if($resultado[0]['estado'] == "AC"){echo "selected";}?>>AC</option>
                            <option <?php if($resultado[0]['estado'] == "AL"){echo "selected";}?>>AL</option>
                            <option <?php if($resultado[0]['estado'] == "AP"){echo "selected";}?>>AP</option>
                            <option <?php if($resultado[0]['estado'] == "AM"){echo "selected";}?>>AM</option>
                            <option <?php if($resultado[0]['estado'] == "BA"){echo "selected";}?>>BA</option>
                            <option <?php if($resultado[0]['estado'] == "CE"){echo "selected";}?>>CE</option>
                            <option <?php if($resultado[0]['estado'] == "DF"){echo "selected";}?>>DF</option>
                            <option <?php if($resultado[0]['estado'] == "GO"){echo "selected";}?>>GO</option>
                            <option <?php if($resultado[0]['estado'] == "MA"){echo "selected";}?>>MA</option>
                            <option <?php if($resultado[0]['estado'] == "MT"){echo "selected";}?>>MT</option>
                            <option <?php if($resultado[0]['estado'] == "MS"){echo "selected";}?>>MS</option>
                            <option <?php if($resultado[0]['estado'] == "MG"){echo "selected";}?>>MG</option>
                            <option <?php if($resultado[0]['estado'] == "PA"){echo "selected";}?>>PA</option>
                            <option <?php if($resultado[0]['estado'] == "PB"){echo "selected";}?>>PB</option>
                            <option <?php if($resultado[0]['estado'] == "PR"){echo "selected";}?>>PR</option>
                            <option <?php if($resultado[0]['estado'] == "PE"){echo "selected";}?>>PE</option>
                            <option <?php if($resultado[0]['estado'] == "PI"){echo "selected";}?>>PI</option>
                            <option <?php if($resultado[0]['estado'] == "RJ"){echo "selected";}?>>RJ</option>
                            <option <?php if($resultado[0]['estado'] == "RS"){echo "selected";}?>>RS</option>
                            <option <?php if($resultado[0]['estado'] == "RO"){echo "selected";}?>>RO</option>
                            <option <?php if($resultado[0]['estado'] == "RR"){echo "selected";}?>>RR</option>
                            <option <?php if($resultado[0]['estado'] == "SC"){echo "selected";}?>>SC</option>
                            <option <?php if($resultado[0]['estado'] == "SP"){echo "selected";}?>>SP</option>
                            <option <?php if($resultado[0]['estado'] == "SE"){echo "selected";}?>>SE</option>
                            <option <?php if($resultado[0]['estado'] == "TO"){echo "selected";}?>>TO</option>
						</select>	
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-dark" id="btnInserir" name="btnInserir">Editar</button>	
					</div>
				</form>
            </div>
        </div>
    </div>
        
</body>
</html>
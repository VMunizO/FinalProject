<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contato</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet"  href="style.css">
	<script src="formulario.js"></script>


</head>
<body>
		<header>
			<div class="center">
			<!-- Imagem e texto -->
			<nav class="navbar navbar-light bg-light">
			  <a class="navbar-brand" href="#">
			    <img src="imghome/logo.png" width="100" height="100" class="d-inline-block align-right logo" alt="">
			    <span style="color: #007bff;">Turismo</span>
			  </a>
			</nav>
			</div>
				
			<nav class="navbar navbar-expand-sm navbar-light bg-light">
        		<div class="container">
        		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
			<span class="navbar-toggler-icon"></span>
			</button>

				  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
					<div class="col-sm-10">
					    <ul class="navbar-nav mr-auto menu  justify-content-center">
					      <li class="nav-item active">
					        <a class="nav-link" href="index.php">Home <span class="sr-only">(página atual)</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="index2.php">Brasil</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="index3.php">EUA</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="index4.php">França</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link btn-menu" href="index5.php">Contato</a>
					      </li>
					    </ul>
				    </div> 
				  </div>
				</div>
			</nav>
		</header>
		<div class="center sobrem">
			<h1>Formulario de Contato</h1>
		</div>
		<div class="center sobrem">
			<p>Deixe seu contato para saber de nossas atualizações</p>
		</div>
        <form class="needs-validation" novalidate>
             <div id=contato class="container sobren">
	             <div class="form-group row">
	                  <label for="nome" class="col-sm-2 col-form-label">Nome *</label>
	                        <div class="col-sm-10">
	                            <input type="text" class="form-control" id="nome" placeholder="Digite seu Nome" required>
		                            <div class="invalid-feedback">
					     	Campo nome obrigatório
					    </div>
	             		</div>
	             </div>
	             <div class="form-group row">
	                  <label for="staticEmail" class="col-sm-2 col-form-label">Email *</label>
	                        <div class="col-sm-10">
	                              <input type="text" class="form-control" id="staticEmail" placeholder="Digite seu Email"  required>
	                         <div class="invalid-feedback">
				     Campo e-mail obrigatório
				 </div>
	                        </div>   
	             </div>
	             <div class="form-group row">
	                  <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm">Mensagem *</label>
	                        <div class="col-sm-10">
	                              <textarea class="form-control form-control-sm" id="mensagem" required></textarea>
		                              <div class="invalid-feedback">
					     	  Campo mensagem obrigatório
					      </div>
			               <button type="submit" class="btn btn-primary my-1">Enviar</button>
			        </div>
	             </div> 
	     </div>
        </form>	
        	<div class="center">  
	            <p><a class="text-muted">Campos obrigatórios *</a></p>
        	</div>





		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
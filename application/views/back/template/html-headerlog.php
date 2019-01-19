<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>ADM</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
  body,html{
      height:80%;
  }
  </style>
</head>
<body background="">




	<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Casa dos Músicos</a>


    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
					<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('logado') ?>">Inicio</a>
					</li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('cadastro')?>">Cadastrar Aluno</a>
            </li>
						<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('cadastropro')?>">Cadastrar Professor</a>
						</li>
						<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('cadastrocurso')?>">Cadastrar Curso</a>
						</li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('mostrar') ?>">Buscar aluno</a>
            </li>
					</ul>

						<ul class="nav justify-content-end">
						<li class="nav-item">
								<a class="nav-links"  href="<?php echo base_url('Logado/deslogar') ?>"><div class="text-white">Sair</div></a>
						</li>






        </ul>



    </div>

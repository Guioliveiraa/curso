
</nav>
<!--/.Navbar-->

<br>



	<!-- Card -->

	<div class="container  h-104" id="card">

<div class="row h-100 justify-content-center align-items-center">

		<!-- Card body -->
		<div class="card-body">
			<?php
				echo form_open('mostrar/buscar_aluno');
				?>

				<!-- Material form register -->
				<form>
						<p class="h4 text-center py-4">Buscar Alunos</p>

						<div class="row mx-5">
								<div class="col-lg-12">
										<div class="row h-100 justify-content-center align-items-center">
											<div class="col-md-6">
												<div class="form-group">
													<p align="left">Nome
													<input class="form-control" name="nome" type="text" placeholder="Digite o nome do Aluno:" pattern=".{3,100}" required>
													<br>
													<div class="col-lg-12 text-center">
													 <input type="submit" value="Buscar" class="btn btn-primary btn-xl mt-0"  />
													</p>
						</div>



				</form>
				<!-- Material form register -->

		</div>
		<!-- Card body -->

</div>
</div>
</div>
<?php
echo form_close();
?>

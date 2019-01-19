

</nav>
<!--/.Navbar-->

<br>



	<!-- Card -->




			<?php
			echo $this->session->flashdata('sucesso');
			echo $this->session->flashdata('erro');
			echo validation_errors();
			echo form_open('Cadastropro/cadastra_professor');
			?>

			<center><h1> Cadastro Professor </h1></center>
			<div class="row mx-2">
			    <div class="col-lg-12">
			        <div class="row h-100 justify-content-center align-items-center">
			          <div class="col-md-6">
			            <div class="form-group">
			              <p align="left">Nome
			              <input class="form-control" name="nome" type="text" placeholder="Digite aqui o nome do Professor:" pattern=".{3,100}" required>
			              </p>
			            </div>
			            <div class="form-group">
			            <p align="left">curso
			              <input class="form-control" name="curso" type="text" placeholder="Disciplina dada pelo Professor:">
									</p>
			            </div>
									<div class="form-group">
									<p align="left">Salário
										<input class="form-control" name="salario" type="text" placeholder="Entre com o Salário do Professor:">
									</p>
									</div>

										 </p>
			            </div>
			          </div>
			          <div class="col-lg-12 text-center">
			            <input type="submit" value="Enviar" class="btn btn-primary btn-xl mt-0"  />
			            </form>    </div>
			  </div>





					<div class="modal-footer">
												<div class="options font-weight-light">


												</div>
										</div>
	</div>
	<!-- Card body -->

</div>
</div>
</div>
			<?php
			echo form_close();
			?>

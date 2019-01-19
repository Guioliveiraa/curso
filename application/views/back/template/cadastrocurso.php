

</nav>
<!--/.Navbar-->

<br>



	<!-- Card -->




			<?php
			echo $this->session->flashdata('sucesso');
			echo $this->session->flashdata('erro');
			echo validation_errors();
			echo form_open('Cadastrocurso/cadastra_curso');
			?>

			<center><h1> Cadastro curso </h1></center>
			<div class="row mx-2">
			    <div class="col-lg-12">
			        <div class="row h-100 justify-content-center align-items-center">
			          <div class="col-md-6">
			            <div class="form-group">
			              <p align="left">Nome
			              <input class="form-control" name="nome" type="text" placeholder="Digite aqui o seu nome" pattern=".{3,100}" required>
			              </p>
			            </div>
			            <div class="form-group">
			            <p align="left">descricao
			              <input class="form-control" name="descricao" type="text" placeholder="descricao do curso">
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

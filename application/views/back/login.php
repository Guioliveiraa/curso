
</nav>
<!--/.Navbar-->

<br>

<center> <p class="font-weight-light  "><h1 class="text-light-primary">Area administrativa</p></h1></center>


	<!-- Card -->

	<div class="container  h-100" id="card">

<div class="row h-100 justify-content-center align-items-center">

<div class="card my-5 animated zoomIn"  style="width: 30rem;" >

    <!-- Card body -->
    <div class="card-body">
			<?php
				echo validation_errors('<div class="alert alert-danger">','</div>');
				echo form_open('admin/usuarios/login');
			?>
    				<form>
            <p class="h4 text-center py-4">Login</p>


            <!-- Material input email -->
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" id="usuario" name="txt-user" class="form-control">
                <label for="materialFormCardEmailEx" class="font-weight-light">Usuário:</label>
            </div>


            <!-- Material input password -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="password" id="materialFormCardPasswordEx" name="txt-senha" class="form-control">
                <label for="materialFormCardPasswordEx" class="font-weight-light">Senha</label>
            </div>

						<div class="text-center mt-4">
						<button class="btn btn-primary" type="submit">logar</button><br><br>
						</div>


						<div class="modal-footer">
	                        <div class="options font-weight-light">
	                            <p></p>

	                        </div>
	                    </div>



        </form>
        <!-- Material form register -->
				<?php
				echo form_close();

				 ?>
    </div>
    <!-- Card body -->

</div>
</div>
</div>

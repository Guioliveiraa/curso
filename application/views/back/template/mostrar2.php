</nav>
<!--/.Navbar-->

<br>

	<!-- Card -->

	<div class="container  h-200" id="card">

<div class="row h-100 justify-content-center align-items-center">

<div class="card my-10 animated zoomIn"  style="width: 40rem;" >

		<!-- Card body -->
		<div class="card-body" >

				<!-- Material form register -->
				<form>
						<p class="h4 text-center py-4">Informação do Aluno</p>


<?php

						if($busca){
							?>
							<?php
				foreach ($busca as $aa) {
					?>
			<center><p>Nome:  <?php echo $aa->nome;?></p></center>
			<center><p>Curso: <?php echo $aa->curso;?></p></center>
			<center><p>Data de Nascimento:<?php echo $aa->dataN;?></p></center>
			<center><p>Vencimento:<?php echo $aa->Vencimento;?></p></center>
			<center><p>Mãe:<?php echo $aa->mae;?></p></center>
			<center><p>Pai:<?php echo $aa->pai;?></p></center>
			<center><p>Rua:<?php echo $aa->endereco;?></p></center>
			<center><p>Bairro:<?php echo $aa->bairro;?></p></center>
			<center><p>Cidade:<?php echo $aa->cidade;?></p></center>
			<center><p>Professor:<?php echo $aa->professor;?></p></center>
			<center><p>Dia da Aula:<?php echo $aa->dia;?></p></center>
			<center><p>Hora da Aula:<?php echo $aa->hora;?></p></center>
			<center><p>Telefone:<?php echo $aa->telefone;?></p></center>
			<center><p>Valor Mês:<?php echo $aa->valor;?></p></center>
			<?php
				}
				}
				?>




		</div>
		<!-- Card body -->

</div>
</div>
</div>

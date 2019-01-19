

</nav>
<!--/.Navbar-->

<br>



	<!-- Card -->




			<?php
			echo $this->session->flashdata('sucesso');
			echo $this->session->flashdata('erro');
			echo validation_errors();
			echo form_open('contato/cadastra_aluno');
			?>
			<div class="row mx-5">
			    <div class="col-lg-12">
			        <div class="row">
			          <div class="col-md-6">
			            <div class="form-group">
			              <p align="left">Nome
			              <input class="form-control" name="nome" type="text" placeholder="Digite aqui o seu nome" pattern=".{3,100}" required>
			              </p>
			            </div>
			            <div class="form-group">
			            <p align="left">Data de Nascimento
			              <input class="form-control" name="datan" type="date" placeholder="00/00/0000" pattern=".{10,100}" required>
			              </p>
			            </div>
			            <div class="form-group">
			            <p align="left">Nome Pai
			              <input class="form-control" name="pai" type="text" placeholder="Ex:João silva" pattern=".{10,11}" required>
			              </p>
			            </div>
			            <div class="form-group">
			            <p align="left">Nome da Mãe<a width=15></a>
			                <input type="text" placeholder="Ex:Maria silva" class="form-control" name="mae" id="mae" required>

			              </p>

			              <p align="left">Logradouro
			                <input type="text" placeholder="Ex:Travessa jose silva" class="form-control" name="endereço" id="endereço" required>
			                </p>
			                <p align="left">Bairro
			                <input type="text" placeholder="Informe o Bairro" class="form-control" name="bairro">
			                </p>
											<p align="left">Cidade
			                <input type="text" placeholder="Informe a Cidade" class="form-control" name="cidade">
			                </p>
			            </div>
			          </div>
			          <div class="col-md-6">
			            <div class="form-group">
			            <p align="left">Curso
			                <input type="text" placeholder="Ex:.Violão" class="form-control" name="curso">
			                </p>
			                <p align="left">Professor
			                <input type="text" placeholder="Informe o nome do Professor" class="form-control" name="professor" id="professor"required>
			                </p>
											<p align="left">Dia da Aula
										 <input type="text" placeholder="Ex:.Quarta feira" class="form-control" name="dia" id="dia"required>
										 </p>
										 <p align="left">Hora da aula
										 <input type="number" placeholder="Ex:.13" class="form-control" name="hora" id="hora" required>
										 </p>
										 <p align="left">Telefone
										 <input type="number" placeholder="Ex:. (DDD)+99999-9999" class="form-control" name="telefone" id="telefone"required>
										 <p align="left">Valor da Mensalidade
										 <input type="number" placeholder="Ex:.200" class="form-control" name="valor" id="valor"required>
										 </p>
										 <p align="left">Data de Vencimento
										 <input type="number" placeholder="Insira o dia Ex:.10" class="form-control" name="vencimento" id="vencimento"required>
										 </p>
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

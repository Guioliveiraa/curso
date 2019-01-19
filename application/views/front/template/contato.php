
<body>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contato
      <small>Loja Matriz</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html" class="text-danger">Home</a>
      </li>
      <li class="breadcrumb-item active">Contato</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.282725523503!2d-42.307303485035085!3d-22.866012085032605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x976c7b13538a43%3A0x81ae157d342a0d5d!2sYork+Locadora+de+Ve%C3%ADculos!5e0!3m2!1spt-BR!2sbr!4v1544389123182" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Detalhes de contato</h3>
        <p>Matriz-
          Rod. Amaral Peixoto, 90091 - Coqueiral, Araruama - RJ, 28970-000
          <br>
        </p>
        <p>
          <abbr title="Phone"></abbr><b>Telefone:</b> (22) 2665-3230
        </p>
        <p>
          <abbr title="Email"></abbr><b>E_mail:</b>
          <a href="mailto:name@example.com">name@example.com
          </a>
        </p>
        <p>
          <abbr title="Hours"></abbr><h3>Funcionamento</h3> Segunda a sexta - 08:00-17:00 BRST
          <br> Sábado - 08:00-12:00 BRST
        </p>
      </div>
    </div>
    <!-- /.row -->


    	<?php
			echo $this->session->flashdata('sucesso');
			echo $this->session->flashdata('erro');
			echo validation_errors();
			echo form_open('contato/cadastra_aluno');
			?>



    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Escreva uma mensagem</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Nome:</label>
              <input type="text" class="form-control" name="nome" id="name" placeholder="Nome Completo">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Telefone:</label>
              <input type="tel" class="form-control" id="phone" name="telefone" placeholder="Ex: (00)99999-9999">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e_mail">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Mensagem:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" name="mensagem" placeholder="Digite sua mensagem." maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton"href="#">Enviar mensagem</button>
        </form>
        <?php
  			echo form_close();
  			?>

      </div>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-danger">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; YORK LOCADORA<br>Todos os Direitos reservados</p>
    </div>
    <!-- /.container -->
  </footer>

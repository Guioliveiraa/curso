<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Sedan -
    <small>Corolla</small>
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="home" class= "text-danger">Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="sedan" class="text-danger">Sedã</li></a>
  </ol>

  <!-- Intro Content -->
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid rounded mb-4" src="https://s2.glbimg.com/-oLwVF55FXXX2ug5_HfrkhYpQ8s=/620x413/top/e.glbimg.com/og/ed/f/original/2017/04/24/056_057_ae624-01.jpg" alt="">
    </div>
    <div class="col-lg-6">
      <h4>Corolla 2018</h4>
      <p><ul><li>Corolla 2.0 completo<li>4 portas, ar, direção, vidros e travas eletricas.
      <li>Piloto automatico<li>Freios ABS<li> 6 airbags acoplados<li>Sensor de estacionamento e camera de ré.</p><hr>


    </div>
  </div>
  <!-- /.row -->

  <!-- Team Members -->
  <h2>Interior</h2>

  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card h-50 text-center">
        <img class="card-img-top" src="https://s2.glbimg.com/gmhpd1Y0pYiVNfrzBU-T5fJKeFc=/620x413/e.glbimg.com/og/ed/f/original/2018/07/31/toyota-corolla_hatchback-2019-1600-29.jpg" alt="">


      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-50 text-center">
        <img class="card-img-top" src="https://s2.glbimg.com/ixsFdTCCg-jfesEa2U1MC6v0G3o=/620x413/e.glbimg.com/og/ed/f/original/2018/07/31/toyota-corolla_hatchback-2019-1600-43.jpg" alt="">

      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-50 text-center">
        <img class="card-img-top" src="https://s2.glbimg.com/kuoRi9rlNBgix9X4KQZJ8WRD8SA=/620x413/e.glbimg.com/og/ed/f/original/2018/07/31/toyota-corolla_hatchback-2019-1600-3b.jpg" alt="">

      </div>
    </div>
  </div>
  <!-- /.row -->
  <?php
  echo $this->session->flashdata('sucesso');
  echo $this->session->flashdata('erro');
  echo validation_errors();
  echo form_open('corolla/cadastra_aluno');
  ?>



  <form>

    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="inputEmail4">Nome:</label>
        <input type="text" class="form-control" id="inputEmail4"  name="nome" placeholder="Nome Copleto">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Telefone:</label>
        <input type="" class="form-control" name="telefone" id="inputPassword4" placeholder="(xx)xxxxx-xxxx">
      </div>
    </div>
    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="inputEmail4">Email:</label>
        <input type="email" class="form-control"name="email" id="inputEmail4" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Telefone 2: </label>
        <input type="text" class="form-control" name="telefone2" id="inputPassword" placeholder="(xx)xxxx-xxxx">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Endereço:</label>
      <input type="text" class="form-control"name="endereço" id="inputAddress" placeholder="Rua,Tv,Av..">
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Cidade:</label>
        <input type="text" class="form-control" name="cidade" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Estado:</label>
        <input type="text" class="form-control" name="estado">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">CEP</label>
        <input type="text" class="form-control"name="cep" id="inputZip">
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress">Data de Retirada:</label>
        <input type="date" class="form-control"name="datar" id="inputAddress">
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress">Data de Entrega:</label>
        <input type="date" class="form-control"name="datae" id="inputAddress">
      </div>


    </div>
<h5><b>Adicionais</b></h5>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" name="cadeira"type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Cadeira de bebe
        </label>

    </div>


    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" name="gps" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          GPS
        </label>
      </div>
    </div>
    <h5>Forma de Retirada</h5>
    <div class="form-group">
      <div class="form-radio">
        <input class="form-radio-input" name="retirada" type="radio" id="gridCheck "value="rm">
        <label class="form-radio-label" for="gridRadio">
          Receber em local marcado
        </label>
      </div>

      <div class="form-radio">
        <input class="form-radio-input" name="retirada" type="radio" id="gridCheck" value="rl">
        <label class="form-radio-label" for="gridRadio">
          Retirar na loja
        </label>
      </div>



    </div>
    <button type="submit" class="btn btn-primary bg-danger">Reservar</button>
  </form>
    <?php
    echo form_close();
    ?>

  </div>


</div>
<!-- /.row -->

</div>

  <!-- Our Customers -->

  <!-- /.row -->

</div>

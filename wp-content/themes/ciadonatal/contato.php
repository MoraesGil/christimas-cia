<?php include_once "header.php"; ?>
<section class="banner_fixo center-block">
  <img class="img-responsive" src="img/banner_fixo.jpg" alt="">
</section>

<section id="sec_trabalhe" class="">
  <div class="container">
    <h2 class="text-center">TRABALHE CONOSCO</h2>
    <div class="separador"></div>
    <br>
    <div class="row">
      <form action="">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="telefone" placeholder="Telefone">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-Mail">
          </div>
          <label class="custom-file-upload button invert-black pull-left">
            <input type="file"/>
            Anexar CV
          </label>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <textarea rows="6" placeholder="Mensagem" id="" class="form-control"></textarea>
          </div>
          <button  class="button invert invert-black  " type="submit">ENVIAR</button>
        </div>

      </form>
    </div>
  </div>
</section>

<?php include_once "footer.php"; ?>

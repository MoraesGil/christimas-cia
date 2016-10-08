<?php include_once "header.php"; ?>
<section class="banner_fixo center-block">
  <img class="img-responsive" src="img/banner_fixo.jpg" alt="">
</section>

<section id="sobre">
  <div class="container portifa portifa-text">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h4>
          Nosso diferencial: projetos ricos
          em detalhes e acabamento artesanal!
        </h4>
        <br>
        <div class="text-justify">
          <p>
            A Companhia do Natal oferece a seus clientes mais de 50 temas natalinos, envolvendo decorações contemplativas ou interativas, utilizando as mais modernas tecnologias.
          </p>
          <p>
            Animatrônicos de última geração, aromatização de ambiente, sonorização, iluminação cênica e sensação térmica são alguns diferenciais que vão fazer sua decoração de Natal inesquecível!
          </p>
        </div>

        <div class="portifa-span pull-right">
          Sua estrela vai brilhar
          <br>
          <span   class="pull-right">
            Neste Natal
          </span>
        </div>


      </div>
    </div>
  </div>
</section>

<section id="portfolio">


  <?php foreach (range(1,16) as $index): ?>
    <div class="portfolio-masonry-item box">
      <div class="innerContent">
        <img  src=<?php echo "img/portifolio/mini/img".$index.".jpg"; ?> alt="">        
      </div>
      <div class="portfolio-overley venobox " data-gall="galeria" href=<?php echo "img/portifolio/img".$index.".jpg"; ?>>
        <a class="portfolio-item-zoom" >
          <i class="fa fa-search"></i>
          <div class="content">
            <h4><a href="">Titulo</a></h4>
            <span>subtitulo</span>
          </div>
        </a>
      </div>
    </div>
  <?php endforeach; ?>

</section>

<section id="experiencias">
  <div class="testimonials-area">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
          <div class="section-heading ">
            <h4>EXPERIÊNCIAS INTERATIVAS</h4>
            <div class="separador" style="background: #ffffff;"></div>
            <br>
            <p>
              Animatrônicos de última geração, aromatização de ambiente, sonorização, iluminação cênica, sensação térmica em cenários ricos em detalhes.
            </p>

            <div class="boxed">
              Enriqueça seus projetos com trenzinhos, roda gigante,
              carrosSel, playground, labirinto, oficinas e muito mais
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="quadros">
  <div class="container ">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="port-moldura port-moldura-size1 ">
          <div class="port-moldura-crop port-moldura-size1">
            <img class="img-responsive" src="img/quadros/1.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="port-moldura port-moldura-size1-big">
          <div class="port-moldura-crop port-moldura-size1-big">
            <img class="img-responsive" src="img/quadros/2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="port-moldura port-moldura-size1">
          <div class="port-moldura-crop port-moldura-size1">
            <img class="img-responsive" src="img/quadros/2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="port-moldura port-moldura-size2 " style="margin-top:10%">
          <div class="port-moldura-crop port-moldura-size2">
            <img class="img-responsive" src="img/quadros/4.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once "footer.php"; ?>

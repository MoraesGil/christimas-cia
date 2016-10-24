<?php include_once "header.php"; ?>
<section class="banner_fixo center-block">
  <img class="img-responsive" src="img/banner_fixo.jpg" alt="">
</section>

<section id="sobre">
  <div class="container portifa portifa-text">
    <div class="row">
      <div class="col-md-12">
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
    <div class="container-portifa">
      <?php foreach (range(1,16) as $index): ?>
        <div class="portfolio-masonry-item box <?php echo $index>4 ? "hidden-xs":"" ?> <?php echo $index>4 ? "hidden-xs":"" ?>">
          <div class="innerContent">
            <img class="img-responsive"  src=<?php echo "img/portifolio/mini/img".$index.".jpg"; ?> alt="">
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
    </div>
 </section>

<section id="experiencias">
  <div class="testimonials-area">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
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

<section id="quadros" class="hidden-xs">
  <div class="container ">
    <div class="row">
      <div class="col-xs-4 col-xs-offset-2 col-md-4 col-md-offset-2">
        <div class="port-moldura port-moldura-size1  ">
          <div class="port-moldura-crop  ">
            <img class="img-responsive"  src="img/quadros/1.jpg" alt="">
          </div>
        </div>

        <div class="port-moldura port-moldura-size1 top-buffer1  ">
          <div class="port-moldura-crop  ">
            <img class="img-responsive"  src="img/quadros/2.jpg" alt="">
          </div>
        </div>
      </div>

      <div class="col-xs-5 col-md-5">
        <div class="port-moldura port-moldura-size1-big   ">
          <div class="port-moldura-crop">
            <img class="img-responsive"  src="img/quadros/2.jpg" alt="">
          </div>
        </div>

        <div class="port-moldura port-moldura-size2 top-buffer  ">
          <div class="port-moldura-crop  ">
            <img class="img-responsive"  src="img/quadros/2.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once "footer.php"; ?>

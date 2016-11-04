<?php get_header(); ?>

<?php if( is_page ('empresa') ):   ?>
  <section class="banner_fixo center-block">
    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/banner_fixo.jpg" alt="">
  </section>
  <?php  $post = get_post(86);  if ($post): ?>


    <section id="sobre" class="empresa" >
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 hidden-xs col-lg-4">
            <?php the_post_thumbnail(null, array('class' => 'img-responsive')); ?>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12 col-lg-8">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
              <?php echo str_replace('</h2>','</h2><div class="separador"> </div><br />',$post->post_content) ?>

            </div>
          </div>
        </div>
      </div>

    </section>
  <?php endif; ?>
<?php  elseif( is_page('portfolio') ): ?>

  <section class="banner_fixo center-block">
    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/banner_fixo.jpg" alt="">
  </section>

  <section id="sobre">
    <div class="container portifa portifa-text">
      <div class="row">
        <div class="col-md-12">
          <?php  $post = get_post(89);  if ($post): ?>
            <h4>
              <?php echo $post->post_title; ?>
            </h4>
            <br>
            <?php echo $post->post_content; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio">
    <div class="container-portifa">
      <?php $post = get_post(155);    if ($post): ?>
        <?php foreach(get_post_gallery_images($post->ID) as $index=>$image):  ?>

          <div class="portfolio-masonry-item box <?php echo $index>4 ? "hidden-xs":"" ?>">
            <div class="innerContent">
              <img style="object-fit: cover;" src="<?php echo  $image;?>" alt="">
            </div>
            <div class="portfolio-overley venobox " data-gall="galeria" href="<?php echo  $image;?>">
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
      <?php endif; ?>

    </div>
  </section>

  <section id="experiencias">
    <div class="testimonials-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
            <?php  $post = get_post(95);  if ($post): ?>
              <div class="section-heading ">
                <h4>
                  <?php echo $post->post_title; ?>
                </h4>
                <div class="separador" style="background: #ffffff;"></div>
                <br>
                <?php echo $post->post_content; ?>
              </div>
            <?php endif; ?>
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
              <img class="img-responsive"  src="<?php bloginfo('template_directory'); ?>/img/quadros/1.jpg" alt="">
            </div>
          </div>

          <div class="port-moldura port-moldura-size1 top-buffer1  ">
            <div class="port-moldura-crop  ">
              <img class="img-responsive"  src="<?php bloginfo('template_directory'); ?>/img/quadros/2.jpg" alt="">
            </div>
          </div>
        </div>

        <div class="col-xs-5 col-md-5">
          <div class="port-moldura port-moldura-size1-big   ">
            <div class="port-moldura-crop">
              <img class="img-responsive"  src="<?php bloginfo('template_directory'); ?>/img/quadros/2.jpg" alt="">
            </div>
          </div>

          <div class="port-moldura port-moldura-size2 top-buffer  ">
            <div class="port-moldura-crop  ">
              <img class="img-responsive"  src="<?php bloginfo('template_directory'); ?>/img/quadros/2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php  elseif( is_page('projetos') ):?>

  <section class="banner_fixo center-block">
    <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/banner_fixo.jpg" alt="">
  </section>

  <?php  $post = get_post(98);  if ($post): ?>
    <section id="sobre" class="empresa" >
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 hidden-xs col-lg-4">
            <?php the_post_thumbnail(null, array('class' => 'img-responsive')); ?>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12 col-lg-8">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
              <?php echo str_replace('</h2>','</h2><div class="separador"> </div><br />',$post->post_content) ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

<?php  elseif( is_page('clientes') ):?>

  <section class="banner_fixo center-block">
    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/banner_fixo.jpg" alt="">
  </section>

  <section id="clientes_detail" >
    <div class="container">
      <div class="row">
        <?php  $post = get_post(103);  if ($post): ?>
          <div class="col-md-12">
            <h4 class="text-center">
              <?php echo $post->post_title; ?>
            </h4>
          </div>
          <div class="col-md-7 col-md-offset-3">
            <?php echo $post->post_content; ?>
          </div>
        <?php endif; ?>
      </div>
      <br>
      <br>
      <br class="hidden-xs">
      <br class="hidden-xs">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <?php  $post = get_post(101);  if ($post): ?>
            <?php echo $post->post_content; ?>
          <?php endif; ?>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <?php  $post = get_post(176);  if ($post): ?>
            <?php echo $post->post_content; ?>
          <?php endif; ?>
        </div>
      </div>
      <br>
    </div>
  </section>

<?php  elseif( is_page('contato') ):?>

  <section class="banner_fixo center-block">
    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/banner_fixo.jpg" alt="">
  </section>

  <section id="sec_trabalhe" class="">
    <div class="container">
      <h2 class="text-center">TRABALHE CONOSCO</h2>
      <div class="separador"></div>
      <br>
      <div class="row">
        <?php
        query_posts('page_id=31');
        while(have_posts()):
          the_post();
          ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

<?php  endif; ?>


<?php get_footer(); ?>

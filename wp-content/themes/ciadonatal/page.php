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
            <div class="text-justify">
              <?php echo $post->post_content; ?>
            </div>
            <div class="portifa-span pull-right" style="width: 240px; text-align: right;">
              <?php echo get_post_meta($post->ID,'texto_destacado',true); ?>
            </div>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio">
    <div class="container-portifa">
      <?php
      // ref http://wordpress.stackexchange.com/questions/96026/nextgen-gallery-how-to-get-picture-url-by-gallery-id
      // ref http://stackoverflow.com/questions/21645929/show-all-images-of-nextgen-gallery-from-multiple-gallery-id
      global $nggdb;

      $get_gall_id = 1;
      // $gall_ids = $nggdb->get_ids_from_gallery($get_gall_id);
      $images = $nggdb->get_gallery($get_gall_id);

      ?>
      <?php foreach($images as $index=>$gall_id):  ?>

        <div class="portfolio-masonry-item box <?php echo $index>3 ? "hidden-xs":"" ?>">
          <div class="innerContent">
            <img class="img-responsive" src="<?php echo  $images[$index]->thumbURL;?>" alt="">
          </div>
          <div class="portfolio-overley venobox " data-gall="galeria" href="<?php echo  $images[$index]->imageURL;?>">
            <a class="portfolio-item-zoom" >
              <i class="fa fa-search"></i>
              <div class="content">
                <h4><a href=""><?php echo  $images[$index]->alttext;?></a></h4>
                <span><?php echo  $images[$index]->description;?></span>
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
            <?php  $post = get_post(95);  if ($post): ?>
              <div class="section-heading ">
                <h4>
                  <?php echo $post->post_title; ?>
                </h4>
                <div class="separador" style="background: #ffffff;"></div>
                <br>
                <?php echo $post->post_content; ?>
                <div class="boxed">
                  <?php echo get_post_meta($post->ID,'texto_destacado',true); ?>
                </div>
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

        <?php
        $get_gall_id = 2;
        $images = $nggdb->get_gallery($get_gall_id);
        ?>

        <div class="col-xs-4 col-xs-offset-2 col-md-4 col-md-offset-2">
          <div class="port-moldura port-moldura-size1  ">
            <div class="port-moldura-crop  ">
              <img class="img-responsive venobox" data-gall="galeria" src="<?php echo $images[0]->imageURL ?>" href="<?php echo  $images[0]->imageURL;?>" alt="">
            </div>
          </div>

          <div class="port-moldura port-moldura-size1 top-buffer1  ">
            <div class="port-moldura-crop  ">
              <img class="img-responsive  venobox" data-gall="galeria" src="<?php echo $images[1]->imageURL ?>" href="<?php echo  $images[1]->imageURL;?>" alt="">
            </div>
          </div>
        </div>

        <div class="col-xs-5 col-md-5">
          <div class="port-moldura port-moldura-size1-big   ">
            <div class="port-moldura-crop">
              <img class="img-responsive venobox"  data-gall="galeria"  src="<?php echo $images[2]->imageURL ?>" href="<?php echo  $images[2]->imageURL;?>" alt="">
            </div>
          </div>

          <div class="port-moldura port-moldura-size2 top-buffer  ">
            <div class="port-moldura-crop  ">
              <img class="img-responsive venobox"  data-gall="galeria"  src="<?php echo $images[3]->imageURL ?>" href="<?php echo  $images[3]->imageURL;?>" alt="">
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

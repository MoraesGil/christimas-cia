<?php get_header(); ?>

<!-- carousel -->
<div id="banner-home" class="owl-carousel owl-theme">
  <?php   $images = get_post_gallery_images(118); ?>
  <?php foreach($images as $image):  ?>
    <div><img src="<?php echo $image; ?>" /> </div>
  <?php endforeach; ?>
</div>

<div class="clearfix"></div>

<?php
$post = get_post(42);
if ($post): ?>
<section id="empresa">
  <div class="empresa">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2><?php echo $post->post_title; ?></h2>
          <div class="separador"></div>
          <br/><br>
          <?php echo $post->post_content; ?>

          <button id="btn_empresa_mais" class="button invert-red center-block" type="button">LEIA MAIS</button>
        </div>
        <div class="col-md-6 col-sm-6 hidden-xs">
          <div class="foto pull-right">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
$post = get_post(45);
if ($post): ?>
<section id="clientes">
  <div class="clientes" data-parallax="scroll" data-bleed="10" data-image-src="<?php bloginfo('template_directory');?>/img/banner_clientes.jpg" data-natural-width="1920" data-natural-height="920">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><?php echo $post->post_title; ?></h2>
          <div class="separador_branco"></div>
          <br/>
          <?php echo $post->post_content; ?>
          <button id="btn_clientes_mais" class="button invert" type="button">CONFIRA AQUI</button>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<section id="projetos">
  <div class="projetos" data-parallax="scroll" data-bleed="10" data-image-src="<?php bloginfo('template_directory');?>/img/banner_portfolio.jpg" data-natural-width="1920" data-natural-height="920">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="box-texto">
            <?php
            $post = get_post(47);
            if ($post): ?>
            <h2><?php echo $post->post_title; ?></h2>
            <div class="separador"></div>
            <?php echo $post->post_content; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="box-texto">
          <?php
          $post = get_post(49);
          if ($post): ?>
          <h2><?php echo $post->post_title; ?></h2>
          <div class="separador"></div>
          <?php echo $post->post_content; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
</div>
</section>

<div class="clearfix"></div>
<section id="portifolio">
  <div class="container">
    <div class="row">
      <?php
      $post = get_post(183);
      if ($post): ?>

      <?php   $images = get_post_gallery_images($post->ID); ?>
      <?php foreach($images as $index=>$image):  ?>
        <div class=" col-md-4  col-sm-6 col-xs-12 <?php echo $index>0 ? "hidden-xs":"" ?> <?php echo $index>1 ? "hidden-sm":"" ?> <?php echo $index>2 ? "hidden":"" ?>">
          <div class="center-block moldura">
            <img src="<?php echo $image; ?>" alt="">
          </div>
        </div>
      <?php endforeach; ?>

      <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="z-index: 2;">
        <h4><?php echo $post->post_title; ?></h4>
        <br>
        <button id="btn_portifolio_mais" class="button invert-red center-block" type="button">VEJA MAIS</button>
      </div>
    <?php endif; ?>
  </div>

</div>
</section>

<section class="banner_bot">
  <?php $posts = get_posts(array('category' => 16 )); if ($post): ?>

    <div id="comentarios-carousel" class="owl-carousel  ">
      <?php foreach ($posts as $post): ?>
        <div class="container">
          <div class="row">
            <div class="col-md-6 hidden-sm hidden-xs">
                <img src="<?php the_post_thumbnail_url();?>" alt="" />
            </div>
            <div class="col-md-6">
              <div class="box-branco">
                <h2><?php echo $post->post_title; ?> </h2>
                <?php echo $post->post_content; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  <?php endif; ?>
</section>

<?php get_footer(); ?>

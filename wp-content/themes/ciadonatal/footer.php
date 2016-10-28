<!-- footer -->
<div class="clearfix"></div>
<section id="contato">
  <div class="mapa" data-parallax="scroll" data-bleed="10" data-image-src="<?php bloginfo('template_directory');?>/img/banner_mapa.jpg" data-natural-width="1920" data-natural-height="920">
    <div class="container">
      <div class="row">
        <h2>Contato</h2>
        <div class="separador_branco"></div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">

            <?php
            query_posts('page_id=28');
            while(have_posts()):
              the_post();
              ?>
              <?php the_content(); ?>
            <?php endwhile; ?>

        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 link_contato ">
              <a href="/contato/"><img class="img-responsive center-block" src="<?php bloginfo('template_directory');?>/img/icone_RH.png" alt=""></a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 link_contato">
              <a href="mailto:fabiano@ciadonatal.com.br"><img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/icone_comercial.png" alt=""></a>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <p>
                AV. Juscelino Kubitchek, 2908 <br>
                Presidente Prudente - SP, CEP: 19065-300
              </p>

              <h4>18 3907 6711</h4>
              <br>
              <div class="fb-like" data-href="https://www.facebook.com/ciadonatal" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
              <svg height="0" width="0">
                <filter id="fb-filter">
                  <feColorMatrix type="hueRotate" values="120"/>
                </filter>
              </svg>
              <style>
              .fb-like, .fb-send, .fb-share-button {
                -webkit-filter: url(#fb-filter);
                /*filter: url(#fb-filter);*/
              }
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php wp_footer(); ?>
<footer>
  <div class="footer">
    <div class="col-md-12 text-center">
      <p>Todos direitos reservados - Copyright 2016</p>
    </div>
  </div>
</footer>

<!--JAVASCRIPT-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/js/venobox.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/owl.carousel.min.js"></script>

<script src="<?php bloginfo('template_directory');?>/js/parallax.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/js/wow.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/js/app.js" type="text/javascript"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=1691478851115682";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script type="text/javascript">
$(document).ready(function() {

  //WOW SCRIPT
  wow = new WOW ({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    mobile: true,
    live: true
  })
  new WOW().init();
});
</script>

</body>
</html>

<?php get_header(); ?>

<?php

if( is_page ('empresa') ):

  ?>
  <section class="banner_fixo center-block">
   <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/banner_fixo.jpg" alt="">
 </section>

 <section id="sobre" class="empresa" >
   <div class="container">
     <div class="row">
       <div class="col-md-4 col-sm-4 hidden-xs col-lg-4">
         <img src="<?php bloginfo('template_directory'); ?>/img/natal1.png" alt="" class="img-responsive">
       </div>
       <div class="col-md-8 col-sm-8 col-xs-12 col-lg-8">
         <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
           <h2>HISTÓRICO</h2>
           <div class="separador"></div>
           <br>
           <p>
             Especializada em decorações natalinas, a Companhia do Natal, desde a sua fundação em 1996, mantém sério compromisso com a qualidade, respeito aos clientes e fornecedores, o que lhe garante altos índices de fidelidade.
           </p>
           <p>
             Ao longo destes anos, através de pesquisas no mercado nacional, internacional e grandes feiras, busca constante atualização de produtos e novas tecnologias, proporcionando a seus clientes decorações diferenciadas, personalizada, unindo criatividade a beleza com melhor custo/beneficio.
           </p>
           <h2>ESTRUTURA</h2>
           <div class="separador"></div>
           <br>
           <p>
             Sua estrutura permite o desenvolvimento dos projetos arrojados, mantendo um padrão de qualidade e segurança, com menor custo.
           </p>
           <p>
             Nossa experiente equipe de instaladores,  garantem que todas as decorações sejam concluídas dentro do prazo e com acabamentos que excedem expectativas.
             Em 20 anos, o crescimento da empresa foi muito grande tanto em número de clientes quanto em áreas decoradas.
           </p>
           <p>
             Hoje, para proporcionar o que há de melhor e mais sofisticado em decoração natalina, a Companhia do Natal ocupa mais de 8.000m2 de área construída distribuídos em 4 depósitos localizados na cidade de Presidente Prudente/SP, onde mantém sua estrutura operacional.
           </p>
           <h2>EQUIPE</h2>
           <div class="separador"></div>
           <br>
           <p>
             Pesquisas constantes, programas de treinamento, reciclagem e qualificação técnica, mantém nossa equipe atualizada e bem preparada, garantindo os excelentes resultados de nossos serviços.
           </p>
           <p>
             Compõe o quadro da empresa, uma equipe formada por profissionais de diversas áreas como arquitetura, decoração, artes plásticas, marcenaria, pintura, serralheria, eletrônica, entre outros, proporcionando assim, mais agilidade e flexibilidade aos projetos.
           </p>
           <p>
             Através destes qualificados profissionais são desenvolvidas as mais belas decorações!
           </p>
         </div>
       </div>
     </div>
   </div>
 </section>

<?php  elseif( is_page('portifolio') ): ?>

  <section class="banner_fixo center-block">
    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/banner_fixo.jpg" alt="">
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
              <img class="img-responsive"  src=<?php echo "/img/portifolio/mini/img".$index.".jpg"; ?> alt="">
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

  <section id="sobre" class="empresa" >
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 hidden-xs col-lg-4">
          <img src="<?php bloginfo('template_directory');?>/img/natal1.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12 col-lg-8">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <h2>PROJETOS</h2>
            <div class="separador"></div>
            <br>
            <p>
              A Companhia do Natal coloca à sua disposição diversos temas, através de projetos personalizados, desenvolvidos com rígidas normas de segurança e concebidos para atender as necessidades de cada cliente, respeitando suas individualidades.
              Um deles com certeza encantará seu público!
            </p>
            <p>
              Procura, através de seus produtos e serviços, traduzir o Espírito Natalino em cada decoração. Emocionando e envolvendo adultos e crianças, oferecendo um diferencial a mais, que vem agregar em resultados à nossos clientes.
            </p>
            <p>

              Hoje com dezenas de clientes a empresa mantém o compromisso com a qualidade, desde a elaboração à instalação, manutenção e desmontagem do projeto
            </p>
            <h2>LOGÍSTICA</h2>
            <div class="separador"></div>
            <br>
            <p>
              Disponibilizar o serviço em todo o território nacional, como faz a Companhia do Natal, requer da empresa o pleno conhecimento dos traslados e das dificuldades de cada região. Por isso o trabalho com uma logística de ponta é essencial para garantir o cumprimento dos prazos.
            </p>
            <p>
               Mantemos um quadro de funcionários fixos ao longo do ano, e durante as montagens dispomos de equipes próprias e tercerizadas, sempre com acompanhamento de funcionários da Companhia do Natal.
            </p>
            <h2>INSTALAÇÃO</h2>
            <div class="separador"></div>
            <br>
            <p>
              Oferecemos completo suporte aos nossos clientes: criação, desenvolvimento de projetos, locação de materiais, instalação, manutenção e desmontagem.
            </p>
            <p>
              Com nossa equipe de profissionais capacitados,trabalhamos visando o cumprimento rigoroso dos prazos e a prestação de assessoria completa buscando o melhor resultado.
            </p>
            <p>
              Nosso compromisso com a qualidade se mantém não apenas na instalação, mas também na manutenção e desmontagem.
            </p>
            <p>
              A manutenção periódica e assistência técnica garantem a conservação e bom funcionamento das peças, por todo período de exposição.
            </p>
            <p>
              Equipes on demand instaladas na região, garantem maior agilidade após o projeto estar montado.
            </p>
          </div>

        </div>
      </div>
    </div>
  </section>

<?php  elseif( is_page('clientes') ):?>

  <section class="banner_fixo center-block">
   <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/banner_fixo.jpg" alt="">
  </section>

  <section id="clientes_detail" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center">
            CONFIRA AQUI QUEM SÃO NOSSOS CLIENTES
          </h4>
        </div>
        <div class="col-md-7 col-md-offset-3">
          <p>
            Empresas que vem durante estes 20 anos, nos privilegiando com sua confiança e parceria.
          </p>
          <p>
              Queremos que você, também faça parte do rol de nossos clientes.
          </p>
        </div>
      </div>
      <br>
      <br>
      <br class="hidden-xs">
      <br class="hidden-xs">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <p>
            <b>AL</b><br>
            Pátio Maceió Shopping – Maceió/AL <br>
            Shopping Iguatemi – Maceió – Maceió/AL <br>
          </p>

          <p>
            <b>BA</b><br>
            PatioMiix Teixeira de Freitas – Teixeira de Freitas/BA <br>
          </p>
          <p>
            <b>CE</b><br/>
            North Shopping Sobral/CE <br/>
            Shopping Aldeota – Fortaleza/CE <br/>
            Shopping Benfica – Fortaleza/CE <br/>
            Via Sul Shopping – Fortaleza/CE <br/>
          </p>

          <p>
            <b>DF</b><br/>
            C. Cial. Gilberto Salomão – Brasília/DF <br/>
          </p>

          <p>
            <b>ES</b><br/>
            Novo Hotel Vitória – Vitória/ES PatioMix Linhares – Linhares/ES <br/>
            Rede Tribuna /Praça – Vitória/ES <br/>
          </p>

          <p>
            <b>GO</b><br/>
            Anashopping –Anápolis/GO <br/>
            Brasil Park Shopping – Anápolis/GO <br/>
            Buriti Shopping – Aparecida de Goiânia/GO <br/>
            Buriti Shopping Rio Verde – Rio Verde/GO <br/>
            Goiânia Shopping – Goiânia/GO <br/>
            Ipê Shopping – Mineiros/GO <br/>
            Jathy Shopping – Jataí/GO <br/>
            Portal Shopping – Goiânia/GO <br/>
            Portal Sul Shopping – Goiânia/GO <br/>
            Shopping Águas Lindas – Águas Lindas de Goiás/GO <br/>
            Shopping Rio Verde – Rio Verde/GO <br/>
            Shopping Sul – Valparaiso de Goiás/GO <br/>
            Valparaizo Shopping – Valparaiso de Goiás/GO <br/>
          </p>

          <p>
            <b>MG</b><br/>
            Big Shopping – Contagem/MG <br/>
            Montes Claros Shopping – Montes Claros/MG <br/>
            Pátio Central Shopping – Patos de Minas /MG <br/>
            Prefeitura Municipal de Araxá (cidade) – Araxá/MG <br/>
            Shopping Center Uberaba – Uberaba/MG <br/>
            Shopping do Vale do Aço – Ipatinga/MG <br/>
          </p>

          <p>
            <b>PB</b><br/>
            Bolevard Shopping – Campina Grande/PB <br/>
          </p>

          <p>
            <b>PE</b><br/>
            River Shopping – Petrolina/PE <br/>
          </p>

          <p>
            <b>PR</b><br/>
            Aspen Park Shopping – Maringá/PR <br/>
            Cascavel JL Shopping – Cascavel/PR <br/>
            Cataratas JL Shopping – Foz do Iguaçu/PR <br/>
            Maringá Park Shopping – Maringá/PR <br/>
            Shopping Center Avenida – Maringá/PR <br/>
            Shopping Novo Batel – Curitiba/PR <br/>
          </p>

          <p>
            <b>RJ</b><br/>
            Cadima Shopping – Nova Friburgo/RJ <br/>
            Passeio Shopping – Rio de Janeiro/RJ <br/>
            PatioMix Costa Verde – Itaguaí/RJ <br/>
            PatioMix Resende – Resende/RJ <br/>
            Shopping Grande Rio – São João do Meriti/RJ <br/>
            Shopping Santa Cruz – Santa Cruz/RJ <br/>
            Via Parque Shopping Center – Rio de Janeiro/RJ <br/>
          </p>

          <p>
            <b>RN</b><br/>
            Praia Shopping – Natal/RN <br/>
          </p>

          <p>
            <b>RS</b><br/>
            Canoas Shopping Center – Canoas/RS <br/>
            Shopping do Vale – Cachoeirinha/RS <br/>
          </p>

          <p>
            <b>SC</b><br/>
            Criciúma Shopping – Criciúma/SC <br/>
            Farol Shopping – Tuburão/SC <br/>
            Shopping Zipperer – São Bento do Sul/SC <br/>
          </p>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <p>
            <b>SP</b> <br>
            Assis Plaza Shopping – Assis/SP <br>
            Bauru Shopping Center – Bauru/SP <br>
            Boqueirão Praia Shopping – Praia Grande/SP <br>
            Buriti Shopping Guará – Guaratinguetá/SP <br>
            Campinas Shopping Center – Campinas/SP <br>
            Carrefour D. Pedro – Campinas/SP <br>
            Carrefour Americanas – Presidente Prudente/SP <br>
            CDL de Campinas (cidade) – Campinas/SP - Cidade de Campos do Jordão <br>
            Campos do Jordão/SP <br>
            Cultura Inglesa – Presidente Prudente/SP <br>
            Esmeralda Plaza Shopping – Marília/SP <br>
            Fernandópolis Shopping Center – Fernandópolis/SP <br>
            Galeria Osasco – Osasco/SP <br>
            Gaplan Adm. de Bens – Itu/SP <br>
            Internacional Guarulhos Shopping Center – Guarulhos/SP <br>
            Itapetininga Shopping Center – Itapetininga/SP <br>
            Jandira Plaza Shopping – Jandira/SP <br>
            Marilia Shopping – Marilia/SP <br>
            Miramar Shopping Center – Santos/SP <br>
            Nestlé do Brasil – São Paulo/SP <br>
            North Shopping Barretos – Barretos/SP <br>
            Novo Shopping Ribeirão Preto – Ribeirão Preto/SP <br>
            Osasco Plaza Shopping – Osasco/SP <br>
            Parque Shopping Prudente – Presidente Prudente/SP <br>
            Plaza Avenida Shopping – São José do Rio Preto/SP <br>
            Prudenshopping – Presidente Prudente/SP <br>
            Prudente Parque Shopping – Presidente Prudente/SP <br>
            Rua Normandia – São Paulo/SP <br>
            Riopreto Shopping Center – São José do Rio Preto/SP <br>
            Shopping Alto Cafezal – Marília/SP <br>
            Shopping Botucatu – Botucatu/SP <br>
            Shopping Bonsucesso – Guarulhos/SP <br>
            Shopping Boulevard Genevé– Campos do Jordão/SP <br>
            Shopping Butantã – São Paulo/SP <br>
            Shopping Center 3 – São Paulo/SP <br>
            Shopping Center Aquarius – Marilia/SP <br>
            Shopping Center Barretos – Barretos/SP <br>
            Shopping Center Lapa – São Paulo/SP <br>
            Shopping Center Norte – São Paulo/SP <br>
            Shopping Center Piracicaba – Piracicaba/SP <br>
            Shopping Center Plaza Sul – São Paulo/SP <br>
            Shopping Center Rio Claro – Rio Claro/SP <br>
            Shopping Center Santana – São Paulo/SP <br>
            Shopping Center Vale Desconto – São José dos Campos <br>
            Shopping Center Vale Sul – São José dos Campos <br>
            Shopping Faro – São José dos Campos/SP <br>
            Shopping Frei Caneca – São Paulo/SP <br>
            Shopping Itu Plaza – Itu/SP <br>
            Shopping Jacareí Shopping Center – Jacareí/SP <br>
            Shopping Jaraguá Araraquara – Araraquara/SP <br>
            Shopping Jaraguá Brasil – Campinas/SP <br>
            Shopping Jaraguá Conceição – Campinas/SP <br>
            Shopping Jaraguá Indaiatuba – Indaiatuba/SP <br>
            Shopping Lupo – Araraquara/SP <br>
            Shopping Open Morumbi – São Paulo/SP <br>
            Shopping Parque Balneário – Santos/SP <br>
            Shopping Pátio Guarulhos – Guarulhos/SP <br>
            Shopping Pátio Guarulhos – Guarulhos/SP <br>
            Shopping Pátio Limeira – Limeira/SP <br>
            Shopping Prado – Campinas/SP <br>
            Shopping Top Center – São Paulo/SP <br>
            Shopping Unimart – Campinas/SP <br>
            Shopping Valinhos – Valinhos/SP <br>
            Shopping VM – São Paulo/SP <br>
            Super Casas Bahia / Anhembi – São Paulo/SP <br>
            Super Mercado Vitória de Assis – Assis/SP <br>
            Suzano Shopping – Suzano/SP <br>
          </p>

          <p>
            <b>TO</b> <br>
            Shopping Capim Dourado – Palmas/TO <br>
          </p>

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

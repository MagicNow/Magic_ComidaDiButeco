<?php
/*
Template Name: home
*/
?>
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css">
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<?php wp_head(); ?>
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/css/comidadibuteco.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" <?php body_class(); ?>>

  <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="header-content clearfix">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/donabenta__logo.png" class="main_logo">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="home" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1 class="title">
                      CONHEÇA AS RECEITAS DO<Br>
                      COMIDA DI BUTECO 2018
                   </h1>
                    <p>O Comida di Buteco não é festival e sim um Concurso,
                        <br> uma competição onde os votos definem um
                        <br> ranking dos participantes e cujos 20% últimos colocados
                        <br> perdem o direito de participar no ano subsequente.
                        <br> E o público tem todo o mês do concurso para visitar
                        <br> quantos butecos quiser, comer, votar e ajudar a eleger os
                        <br> melhores butecos do Brasil.</p>
                    <p>Para visualizar as receitas, clique na <img src="<?php echo get_template_directory_uri(); ?>/img/flag.png"> de qualquer estado.
                    </p>
                    <p><a href="#regulamento">Regulamento</a></p>
                </div>
                <div class="col-md-6 text-left">
                    <div class="map-content clearfix">
                      <a href="category/am" class="flag am">AM</a>
                      <a href="category/pa" class="flag pa">pa</a>
                      <a href="category/ce" class="flag ce">ce</a>
                      <a href="category/pe" class="flag pe">pe</a>
                      <a href="category/ba" class="flag ba">ba</a>
                      <a href="category/df" class="flag df">df</a>
                      <a href="category/mg" class="flag mg">mg</a>
                      <a href="category/rj" class="flag rj">rj</a>
                      <a href="category/sp" class="flag sp">sp</a>
                      <a href="category/pr" class="flag pr">pr</a>
                      <a href="category/sc" class="flag sc">sc</a>
                      <a href="category/rs" class="flag rs">rs</a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mapa.png" class="mapa">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_comidadibuteco.png" class="logo_comida">
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Modal -->
    <div class="modal fade" id="regulamento" tabindex="-1" role="dialog" aria-labelledby="regulamentoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
              <div class="container">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="?php echo get_template_directory_uri(); ?>/img/x.png"></span>
                    </button>
                    <h5 class="modal-title" id="regulamentoLabel">Regulamento</h5>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan libero tellus, sit amet sodales arcu posuere id. Proin id nisi rutrum, commodo nunc a, auctor nibh</p>
                    <p>Quisque in eros sed arcu scelerisque efficitur. Sed rhoncus ullamcorper quam ac consequat. Vivamus fringilla magna metus, eget dictum sem rhoncus ac.
                        <p>Pellentesque in tempus libero, et viverra metus. Suspendisse at libero a diam ultrices posuere. Aenean felis ipsum, tincidunt et nunc sit amet, </p>
                        vestibulum ultricies lacus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan libero tellus, sit amet sodales arcu posuere id. Proin id nisi rutrum, commodo </p>
                    nunc a, auctor nibh
                    <p>Quisque in eros sed arcu scelerisque efficitur. Sed rhoncus ullamcor.
                    </p>
                </div>
                <div class="modal-footer">
                </div>
            </div>
            </div>
        </div>
    </div>
    <footer class="footer">
    </footer>

  <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/comidadibuteco.min.js"></script>
  <?php wp_footer(); ?>
</body>
</html>


<?php
/*
Template Name: home
*/
get_header();
?>
    <section id="home" class="clearfix">
        <div class="container">
            <div class="breadcrumb col-md-12 text-left">
                <p><a href="/" class="tt">HOME</a>  </p>
            </div>

            <div class="row body">
                <div class="col-md-6 text-left">
                    <h1 class="title">
                      CONHEÇA AS RECEITAS DO<Br>
                      COMIDA DI BUTECO 2018
                   </h1>
                    <p>Seja bem-vindo ao Comida di Buteco, o maior concurso de comida raiz do Brasil! A competição premia os melhores botecos ao redor de todo o nosso país. E nós de Dona Benta resolvemos participar dessa festa para acrescentar uma pitada do nosso sabor caseiro! Vamos conferir os participantes e provar todas essas delícias? Confira no mapa ao lado os endereços que estão na disputa, suas receitas Dona Benta e aproveite para conferir todas pessoalmente. Bom apetite! <3 </p>
                    <p>Para visualizar as receitas, clique na <img src="<?php echo get_template_directory_uri(); ?>/img/flag.png"> de qualquer estado.
                    </p>
                      <p><a data-toggle="modal"  data-target="#regulamento" href="#regulamento">Regulamento</a></p>
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
                     <div class="text-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/logo_comidadibuteco.png" class="logo_comida_mobile">
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
                        <span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img/x.png"></span>
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
    <?php
get_footer();

?>

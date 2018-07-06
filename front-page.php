<?php /* Template Name: CPS Template Página inicial (Home)*/?>

<?php get_header();?>

<div class="container">
  <div id="carousel-example" class="carousel carousel-thumbnail slide" data-ride="carousel">
    <!-- carousel indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example" data-slide-to="1"></li>
      <li data-target="#carousel-example" data-slide-to="2"></li>
    </ol>
    <!-- carousel slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="row">
          <div class="col-xs-6">
            <a class="thumbnail thumbnail-lg">
              <img src="http://placehold.it/930x930" alt="" class="img-responsive">
              <div class="thumbnail-caption">
                <h3 class="thumbnail-caption-title">Primeiro slide <br>Coluna um</h3>
              </div>
            </a>
          </div>
          <div class="col-xs-6">
            <a class="thumbnail thumbnail-lg">
              <img src="http://placehold.it/930x930" alt="First slide image" class="img-responsive">
              <div class="thumbnail-caption">
                <h3 class="thumbnail-caption-title">Primeiro slide <br>Coluna dois</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="item">
        <a class="thumbnail thumbnail-lg">
          <img src="http://placehold.it/930x450" alt="">
          <div class="thumbnail-caption">
            <h3 class="thumbnail-caption-title">Segundo slide</h3>
          </div>
        </a>
      </div>
      <div class="item">
        <div class="row">
          <div class="col-xs-6">
            <a class="thumbnail thumbnail-sm">
              <img src="http://placehold.it/930x930" alt="">
              <div class="thumbnail-caption">
                <h3 class="thumbnail-caption-title">Primeiro slide <br>Coluna um, Caixa um</h3>
              </div>
            </a>
            <a class="thumbnail thumbnail-sm">
              <img src="http://placehold.it/930x930" alt="">
              <div class="thumbnail-caption">
                <h3 class="thumbnail-caption-title">Primeiro slide <br>Coluna um, Caixa dois</h3>
              </div>
            </a>
          </div>
          <div class="col-xs-6">
            <a class="thumbnail thumbnail-lg">
              <img src="http://placehold.it/930x930" alt="">
              <div class="thumbnail-caption">
                <h3 class="thumbnail-caption-title">Primeiro slide <br>Coluna dois</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- carousel setas -->
    <div class="hidden-xs">
      <a data-slide="prev" href="#carousel-example" class="left carousel-control">‹</a>
      <a data-slide="next" href="#carousel-example" class="right carousel-control hidden-xs">›</a>
    </div>
    <div class="visible-xs">
      <a data-slide="prev" href="#carousel-example" class="pull-left carousel-control-xs btn btn-default ">‹ Anterior</a>
      <a data-slide="next" href="#carousel-example" class="pull-right carousel-control-xs btn btn-default visible-xs">Próximo ›</a>
    </div>
  </div>
</div>

<hr>

<main class="cps-main">
  <div class="row">
    <div id="content" class="col-md-6" tabindex="-1">
      <h2 class="h3"><i class="fa fa-bullhorn"></i> Notícias</h2>
      <div class="row">
      
        <article class="col-md-6">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/300x300" class="img-responsive img-rounded" alt="">
            <div class="caption">
              <h3 class="h6">Título de exemplo da notícia</h3>
              <p class="text-muted">09/09/2015</p>
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
            </div>
          </a>
        </article>

        <article class="col-md-6">
          <a href="#" class="thumbnail">
            
            <div class="caption">
              <h3 class="h6">Título de exemplo da notícia</h3>
              <p class="text-muted">09/09/2015</p>
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
            </div>
          </a>
        </article>
      
      </div>
      <p class="text-center"><a href="#" class="btn btn-default btn-block">Ver mais notícias</a></p>
    </div>
    <aside class="col-md-6">

      <?php the_widget( 'My_Widget_Agenda' ); ?>

      <?php the_widget( 'My_Widget_Destaque' ); ?>

      <?php the_widget( 'My_Widget_Social' ); ?>

    </aside>
  </div>
</main>

<?php get_footer();?>
<?php /* Template Name: CPS Template Página inicial (Home)*/?>

<?php get_header();?>

<!-- aqui entra o carousel -->

<main class="cps-main">
  <div class="row">
    <div id="content" class="col-md-6" tabindex="-1">
      <h2 class="h3">
        <i class="fa fa-bullhorn"></i> Notícias</h2>
      <div class="row">

      <?php
        $args = array('post_type' => 'post');
        $query = new WP_Query($args);
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
      ?>

        <article class="col-md-6">
          <a href="<?php the_permalink();?>" class="thumbnail">
            <!-- <img src="<?php the_post_thumbnail();?>" class="img-responsive img-rounded" alt=""> -->
            <div class="caption">
              <h3 class="h6"><?php the_title();?></h3>
              <p class="text-muted"><?php the_date();?></p>
              <p class="small"><?php the_excerpt();?></p>
            </div>
          </a>
        </article>

      <?php
          }
        }

        wp_reset_postdata();
      ?>
      </div>
      <p class="text-center">
        <a href="#" class="btn btn-default btn-block">Ver mais notícias</a>
      </p>
    </div>

    <aside class="col-md-6">

      <?php the_widget('My_Widget_Agenda');?>

      <?php the_widget('My_Widget_Destaque');?>

      <?php the_widget('My_Widget_Social');?>

    </aside>

  </div>
</main>

<?php get_footer();?>
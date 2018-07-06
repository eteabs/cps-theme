<?php
/**
Template Name: CPS Template Página Padrão
*/

get_header();?>

<main class="cps-main">
  <div id="content" tabindex="-1">

	<?php
		while ( have_posts() ) :
			the_post();

				<article>
	                <?php the_content();?> </div>
				</article>

		endwhile;
	?>

  </div>
</main>

<?php
get_footer();?>
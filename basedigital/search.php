<?php get_header(); ?>

	<main role="main">
		<section>

			<h1>Resultados para<?phpecho get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>


		</section>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

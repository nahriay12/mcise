<?php get_header(); ?>


<div class="col-md-8">

	<?php while (have_posts()) : ?>
		<?php 
		the_post();
        get_template_part('content');
		 ?>
    <?php endwhile;?>
</div>

<?php get_sidebar( ); ?>

<?php get_footer(); ?>
<div id="sidebar" class="alert alert-warning" role="alert">
	<h2 ><?php _e('Categories'); ?></h2>
		<ul >
		 <?php wp_list_cats(); ?>
		</ul>
	<h2 ><?php _e('Archives'); ?></h2>
		<ul >
		 <?php wp_get_archives(); ?>
		</ul>
</div>
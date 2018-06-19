<?php 
	add_action( "init", 'mon_menu' );
		function mon_menu()
		{
			register_nav_menu( 'main_menu', "mon menu principal" );
		}

     add_action('widgets_init','zero_add_sidebar');
		function zero_add_sidebar()
		{
		    register_sidebar(array(
		        'id' => 'ifiag_widget1',
		        'name' => 'Zone supérieure',
		        'description' => 'Apparait en haut du site',
		        'before_widget' => '<aside>',
		        'after_widget' => '</aside>',
		        'before_title' => '<h1>',
		        'after_title' => '</h1>'
		    ));
}
 ?>
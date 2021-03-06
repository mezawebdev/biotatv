<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
				
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		 
		<?php wp_head(); ?>

		<link rel="stylesheet" href="../wp-content/themes/radcliffe/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../wp-content/themes/radcliffe/css/font-awesome.css" />
		<link rel="stylesheet" href="wp-content/themes/radcliffe/css/bootstrap.min.css" />
		<link rel="stylesheet" href="wp-content/themes/radcliffe/css/font-awesome.css" />
	
	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="header-search-block section light-padding hidden">
		
			<div class="section-inner">
			
				<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" placeholder="<?php _e('Type and press enter', 'radcliffe'); ?>" name="s" id="s" /> 
				</form>
			
			</div>
		
		</div>
	
		<div class="header section light-padding">
		
			<div class="header-inner section-inner">
			
					
				        <a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
				        	<img id="site-logo" />
				        </a>

				
				<div class="nav-toggle">
				
					<p><?php _e('Menu','radcliffe') ?></p>
				
					<div class="bars">
					
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
			
						<div class="clear"></div>
					
					</div>
					<button style="margin: -13px 0 0 35px;" class="youtube-link"><i class="fa fa-youtube" aria-hidden="true"></i></button>
				</div>


		
				<ul class="main-menu fright">
					
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary'
														
						) ); } else {
					
						wp_list_pages( array(
						
							'container' => '',
							'title_li' => ''
						
						));
						
					} ?>
					
					<!--<li class="search-toggle-menu-item"><a href="#" class="search-toggle" title="<?php _e('Show the search field','radcliffe') ?>"></a></li>-->
					<button class="youtube-link"><i class="fa fa-youtube" aria-hidden="true"></i></button>
				 </ul>
				
				<div class="clear"></div>
				
			</div> <!-- /header -->
			
		</div> <!-- /header.section -->
		
		<div class="mobile-menu-container hidden">
		
			<ul class="mobile-menu">
					
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary'
														
						) ); } else {
					
						wp_list_pages( array(
						
							'container' => '',
							'title_li' => ''
						
						));
						
					} ?>
					
			 </ul>
			 
			<!-- <form method="get" class="mobile-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" placeholder="<?php _e('Search form', 'radcliffe'); ?>" name="s" id="s" /> 
					<input type="submit" value="<?php _e('Search', 'radcliffe'); ?>" class="search-button">
				</form>-->
			 
		</div> <!-- /mobile-menu-container -->

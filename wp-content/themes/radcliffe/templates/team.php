<?php /* Template Name: team */ ?>

<?php get_header(); ?>

<div class="content">		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
	
		<div <?php post_class('post single'); ?>>
		
			<?php if ( has_post_thumbnail() ) : ?>
			
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' ); $thumb_url = $thumb['0']; ?>
		
				<div class="featured-media">
				
					<script type="text/javascript">
	
						jQuery(document).ready(function($) {
				
							$(".featured-media").backstretch("<?php echo $thumb_url; ?>");
							
						});
						
					</script>
		
					<?php the_post_thumbnail('post-image'); ?>
					
				</div> <!-- /featured-media -->
					
			<?php endif; ?>	
			<div class="the-header">
				<h1 class="post-title">OUR TEAM<?php /*the_title();*/?></h1>
			</div>	
			<br />					
			<div class="post-header section team-body">
					<div class="post-header-inner section-inner">
						<div class="section-one">
							<div class="row team-member-1">
								<div class="col-sm-6">
									<div class="profile-pic">
										<div class="picture">
										</div>
										<div class="square-1">
										</div>
										<div class="square-2">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<h1>ALEX MEZA</h1>
									<h3>Chief Editor</h3>
									<p>My name is Alex Meza, I am full-stack web developer from San Diego, California. 
									I love anything tasteful, effective and simple, with a touch of sophistication. With over 3+ years of programming experience, my passion resides in delivering outstanding products that grow your business and expand your potential. 
									I specialize in the creation of user-friendly web applications and interfaces that bring a long-lasting emotional connection with the user. 
									In my spare time, I enjoy playing the drums. </p>
								</div>
							</div>
							<br />
							<br />
							<br />
							<br />
							<div class="row team-member-2">
								<div class="col-sm-6">
									<div class="profile-pic">
										<div class="picture">
										</div>
										<div class="square-1">
										</div>
										<div class="square-2">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<h1>ALEX MEZA</h1>
									<h3>Chief Editor</h3>
									<p>My name is Alex Meza, I am full-stack web developer from San Diego, California. 
									I love anything tasteful, effective and simple, with a touch of sophistication. With over 3+ years of programming experience, my passion resides in delivering outstanding products that grow your business and expand your potential. 
									I specialize in the creation of user-friendly web applications and interfaces that bring a long-lasting emotional connection with the user. 
									In my spare time, I enjoy playing the drums. </p>
								</div>
							</div>
							<br />
							<br />
							<br />
							<br />
							<div class="row team-member-3">
								<div class="col-sm-6">
									<div class="profile-pic">
										<div class="picture">
										</div>
										<div class="square-1">
										</div>
										<div class="square-2">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<h1>ALEX MEZA</h1>
									<h3>Chief Editor</h3>
									<p>My name is Alex Meza, I am full-stack web developer from San Diego, California. 
									I love anything tasteful, effective and simple, with a touch of sophistication. With over 3+ years of programming experience, my passion resides in delivering outstanding products that grow your business and expand your potential. 
									I specialize in the creation of user-friendly web applications and interfaces that bring a long-lasting emotional connection with the user. 
									In my spare time, I enjoy playing the drums. </p>
								</div>
							</div>
							<br />
							<br />
							<br />
							<br />
							<div class="row team-member-4">
								<div class="col-sm-6">
									<div class="profile-pic">
										<div class="picture">
										</div>
										<div class="square-1">
										</div>
										<div class="square-2">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<h1>ALEX MEZA</h1>
									<h3>Chief Editor</h3>
									<p>My name is Alex Meza, I am full-stack web developer from San Diego, California. 
									I love anything tasteful, effective and simple, with a touch of sophistication. With over 3+ years of programming experience, my passion resides in delivering outstanding products that grow your business and expand your potential. 
									I specialize in the creation of user-friendly web applications and interfaces that bring a long-lasting emotional connection with the user. 
									In my spare time, I enjoy playing the drums. </p>
								</div>
							</div>
						</div>
					</div> <!-- /post-header-inner section-inner -->
													
			</div> <!-- /post-header section -->
			    
		    <div class="post-content section-inner thin">
		    
		    	<?php the_content(); ?>
		    	
				<div class="clear"></div>
				
				
		    	<?php wp_link_pages('before=<p class="page-links">' . __('Pages:','radcliffe') . ' &after=</p>&seperator= <span class="sep">/</span> '); ?>
		    
		    </div>

		</div> <!-- /post -->
		
		<?php comments_template( '', true ); ?>
		
	<?php endwhile; else: ?>
	
		<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "radcliffe"); ?></p>

	<?php endif; ?>


	<div class="clear"></div>
	
</div> <!-- /content -->
								
<?php get_footer(); ?>
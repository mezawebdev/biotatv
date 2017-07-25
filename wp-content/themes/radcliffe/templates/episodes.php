<?php /* Template Name: episodes */ ?>

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
				<h1 class="post-title"><?php the_title();?></h1>
			</div>			
			<div class="post-header section episodes-body">
					<div class="post-header-inner section-inner">
						<div class="section-one">					
							<div class="row">
								<div class="col-sm-4">
									<div class="episode">
										<div class="episode-picture">
										</div>
										<div class="episode-description">
											I am a description to this video. This video is about biota and other things.
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="episode">
										<div class="episode-picture">

										</div>
										<div class="episode-description">
											I am a description to this video. This video is about biota and other things.
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="episode">
										<div class="episode-picture">
										</div>
										<div class="episode-description">
											I am a description to this video. This video is about biota and other things.
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="episode">
										<div class="episode-picture">
										</div>
										<div class="episode-description">
											I am a description to this video. This video is about biota and other things.
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="episode">
										<div class="episode-picture">
										</div>
										<div class="episode-description">
											I am a description to this video. This video is about biota and other things.
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="episode">
										<div class="episode-picture">
										</div>
										<div class="episode-description">
											I am a description to this video. This video is about biota and other things.
										</div>
									</div>
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
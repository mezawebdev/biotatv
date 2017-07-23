<?php /* Template Name: AboutUs */ ?>

<?php get_header(); ?>

<div id="home-page-background">
	<h1><span>We are</span> BIOTA</h1>
	<button>DONATE NOW</button>
</div>
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
			<br />						
			<div class="post-header section about-us-body">
					<div class="post-header-inner section-inner">
						<div class="section-one">					
							<h1 class="post-title"><?php the_title(); ?></h1>
							<br />
							<br />
							<h3>BIOTA strives to increase participation of underrepresented demographics in science.</h3>
							<br />
							<p>We do this through documentary filmmaking, social media, art, and music. Our stories take place in ecosystems in the viewer's backyard and introduce the viewer to current issues, leaving them with a "call to action" through the lens of symbiosis science.</p>
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

	<div class="donation-box">
		<h1>SUPPORT US</h1>
		<form>
			<ul>
				<li><button>35$</button></li>
				<li><button>50$</button></li>
				<li><button>75$</button></li>
				<li><button>100$</button></li>
				<li><button>200$</button></li>
				<li><input type="text" name="other-amount" placeholder="OTHER"/></li>
				<li><button class="donation-box-submit">DONATE NOW</button></li>
			</ul>
		</form>
	</div>

	<div class="clear"></div>
	
</div> <!-- /content -->
								
<?php get_footer(); ?>
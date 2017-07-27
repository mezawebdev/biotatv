<?php if ( is_active_sidebar( 'footer-a' ) || is_active_sidebar( 'footer-b') || is_active_sidebar( 'footer-c' ) ) : ?>

	<div class="footer section medium-padding bg-graphite">
			
		<div class="section-inner row">
		
			<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
			
				<div class="column column-1 one-third">
				
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-a' ); ?>
											
					</div>
					
				</div>
				
			<?php endif; ?> <!-- /footer-a -->
				
			<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>
			
				<div class="column column-2 one-third">
				
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-b' ); ?>
											
					</div> <!-- /widgets -->
					
				</div>
				
			<?php endif; ?> <!-- /footer-b -->
								
			<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>
			
				<div class="column column-3 one-third">
			
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-c' ); ?>
											
					</div> <!-- /widgets -->
					
				</div>
				
			<?php endif; ?> <!-- /footer-c -->
			
			<div class="clear"></div>
		
		</div> <!-- /footer-inner -->
	
	</div> <!-- /footer -->

<?php endif; ?>


<div class="donation-box">
	<h1>SUPPORT US</h1>
	<form type="post">
		<ul>
			<div class="row">
				<div class="col-xs-3">
					<li><button>35$</button></li>
				</div>
				<div class="col-xs-3">
					<li><button>50$</button></li>
				</div>
				<div class="col-xs-3">
					<li><button>75$</button></li>
				</div>
				<div class="col-xs-3">
					<li><button>100$</button></li>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<li><button>200$</button></li>
				</div>
				<div class="col-xs-6">
					<li><input type="text" class="other-amount" name="other-amount" placeholder="OTHER"/></li>
				</div>
			</div>
			<li><button class="donation-box-submit">DONATE NOW</button></li>
		</ul>
	</form>
</div>

<div class="site-map container-fluid">
	<div class="row">
		<div class="col-sm-4">
			<h1>BIOTA</h1>
		</div>
		<div class="col-sm-4">
			<ul>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">CONTACT US</a></li>
				<li><a href="#">RECRUITING</a></li>
				<li><a href="#">MEDIA CENTER</a></li>
			</ul>
		</div>
		<div class="col-sm-4">
			<h3>FOLLOW US</h3>
			<div class="col-xs-5">
				<button style="float: right;"><i class="fa fa-facebook" aria-hidden="true"></i></button>
			</div>
			<div class="col-xs-2">
				<button><i class="fa fa-instagram" aria-hidden="true"></i></button>
			</div>
			<div class="col-xs-5">
				<button style="float: left;"><i class="fa fa-twitter" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>

<div class="credits section light-padding">

	<div class="credits-inner section-inner">


	
		<p class="fleft">
		
			&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php esc_attr( bloginfo('name') ); ?>"><?php bloginfo('name'); ?></a>
		
		</p>
		
		<p class="fright">
			
			<span>SITE BY <a href="http://alexmeza.me">Alex Meza</a> &mdash; </span><a title="<?php _e('To the top', 'radcliffe'); ?>" href="#" class="tothetop"><?php _e('Up', 'radcliffe' ); ?> &uarr;</a>
			
		</p>
		
		<div class="clear"></div>
		
	</div> <!-- /credits-inner -->

</div> <!-- /credits -->

<?php wp_footer(); ?>

</body>
</html>
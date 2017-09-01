<?php
/* Template Name: Single Holidays */
?>
<?php get_header(); ?>

<div>

			<?php				
				$days = get_post_meta( get_the_ID(), 'days', true );
				$nights = get_post_meta( get_the_ID(), 'nights', true );
				$inclusions = get_post_meta( get_the_ID(), 'inclusions', true );
				$exclusions = get_post_meta( get_the_ID(), 'exclusions', true );
				$images = get_field('gallery');
				$description = get_post_meta( get_the_ID(), 'description', true );
				
			?>
			<section id="feature-image-page">
		    	<div class="container">
		    		<div class="row">
			    		<div class="col-lg-12">
			    			<img class="page-image" src="<?php echo($images[0]['url']) ;?>">
			    			<div class="page-info-holder">
			    				<h3><?php echo the_title();?></h3>
			    				<div class="page-headder-divider"></div>
			    				<div class="duration"><?php echo $nights;?> Nights/ <?php echo $days;?> Days</div>
			    			</div>		
			    		</div>
		    		</div>
		    	</div>
		    </section>

		    <section id="page-main-content">
		    	<div class="container">
		    		<div class="row">
			    		<div class="col-lg-8">
			    			<div class="page">
			    				<h3>Itinenary</h3>
			    				<div class="page-content">
			    					<?php echo the_content();?>
			    				</div>
			    				<div class="rate">
			    					Rate : 
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4">
			    			<div class="page">
			    				<h3>Inclusions</h3>
			    				<div class="page-content">
			    					<?php echo $inclusions;?>
			    				</div>
			    			</div>
			    			<div class="page">
			    				<h3>Exclusions</h3>
			    				<div class="page-content">
			    					<?php echo $exclusions;?>
			    				</div>
			    			</div>	
			    		</div>
		    		</div>
		    	</div>
		    </section>
		    <section id="page-main-content">
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-lg-12">
		    				<div class="btn btn-primary">
		    					Book Now
		    				</div>
		    			</div>
		    		</div>
		    	</div>	
		    </section>
					
	
</div>


<?php get_footer(); ?> 
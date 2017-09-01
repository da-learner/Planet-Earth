<?php
/* Template Name: Single Hotels */
?>
<?php get_header(); ?>

<div>
	<?php				
	$address = get_post_meta( get_the_ID(), 'address', true );
	$ratings = get_post_meta( get_the_ID(), 'rating', true );
	$ameneties = get_post_meta( get_the_ID(), 'ameneties', true );
	$rooms = get_post_meta( get_the_ID(), 'rooms', true );
	$inclusions = get_post_meta( get_the_ID(), 'inclusions', true );
	$exclusions = get_post_meta( get_the_ID(), 'exclusions', true );
	$rate = get_post_meta( get_the_ID(), 'rate', true );	
	$images = get_field('gallery');
	?>

	<section id="feature-image-page">
    	<div class="container">
    		<div class="row">
	    		<div class="col-lg-12">
	    			<img class="page-image" src="<?php echo($images[0]['url']) ;?>">
	    			<div class="page-info-holder">
	    				<h3><?php echo the_title();?></h3>
	    				<div class="page-headder-divider"></div>
	    				<div class="address"><?php echo $address;?></div>
	    			</div>		
	    		</div>
    		</div>
    	</div>
    </section>
     <!--// Hotel Info  -->
	<section id="page-main-content">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="page" style="padding-bottom: 40px;float: left;width: 100%;">
    						<div class="hot-info-inner">
    							<div class="rating"><b> Rating :<?php echo $ratings;?> </b></div>
    							<div class="rooms"> <b>No of rooms :<?php echo $rooms;?> </b></div>
    						</div>
    						<div class="hot-info-inner">
    							<div class="ameneties">
    								<b>Ameneties :</b>
    								<p><?php echo $ameneties;?></p>
    							</div>
    						</div>
    				</div>
    			</div>	
    		</div>
    	</div>		
    </section>
    <!-- // Main Body -->
	<section id="page-main-content">
    	<div class="container">
    		<div class="row">
	    		<div class="col-lg-6">
	    			<div class="page">
	    				<h3>Inclusions</h3>
	    				<div class="page-content">
	    					<?php echo $inclusions;?>
	    				</div>	    				
	    			</div>
	    		</div>
	    		<div class="col-lg-6">
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
    <section>
    	<div class="container">
    		<div class="row">
	    		<div class="col-lg-12">
	    				<div class="rate">
	    					<span>&#8377;<?php echo $rate;?></span>
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
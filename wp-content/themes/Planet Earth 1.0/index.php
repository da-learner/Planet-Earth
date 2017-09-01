<?php get_header();?>
<div id="who-we-are">
	<div class="container">
		<div class="row" style="margin-bottom: 20px;">
			<div class="col-sm-8">
				<div>
					<a href="http://planetearthdmc.com/view.php?id=46"><img src="http://planetearthdmc.com/images/dubai_special_package.jpg"></a>
				</div>
			</div>
			<div class="col-sm-4">

			</div>
		</div>
		<div class="call-to-action">
			<div class="row">
				<div class="col-sm-12">
					<h1>Planet Earth DMC</h1>
					<p style="line-height: 200%;">Planet Earth is a destination management company dedicated to providing world-class destination services and inspiring travel experiences to individuals, groups, corporations, tour operators and meeting planners. As a prominent DMC in India, Planet Earth DMC offers innovative and dependable destination solutions for everything from tour circuits and memory-packed destinations to customized trips of varying scale and purpose by offering a diverse range of experiences designed to enrich the soul.</p>
				</div>
			</div>
		</div><!--/.call to action-->
		<div class="text-center who-we-are padding-bottom padding-top">
			<div class="row">
				<div class="col-sm-4">
					<img class="img-responsive" src=<?php echo get_template_directory_uri(); ?>/images/world.png>
					<h2>Our Reach</h2>
					<p class="lead">Packages to destinations worldwide.</p>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive" src=<?php echo get_template_directory_uri(); ?>/images/custom.png>
					<h2>Complete Customisation</h2>
					<p class="lead">Your trip, Your choice!</p>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive" src=<?php echo get_template_directory_uri(); ?>/images/customer_satisfaction.png>
					<h2>Our Promise</h2>
					<p class="lead">100% Customer Satisfaction</p>
				</div>
			</div>
		</div>
		<div class="our-details-tab padding-bottom">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div id="about-carousel" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
								<img class="img-responsive" src=<?php echo get_template_directory_uri(); ?>/images/team.jpg>
							</div>
							<div class="item">
								<img class="img-responsive" src=<?php echo get_template_directory_uri(); ?>/images/logos1.jpg>
							</div>
							<div class="item">
								<img class="img-responsive" src=<?php echo get_template_directory_uri(); ?>/images/logos2.jpg>
							</div>
						</div>
					</div><!--/#about-carousel-->
				</div>
				<div class="col-sm-12 col-md-6 tab-section">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li class="active"><a href="#about" role="tab" data-toggle="tab">About Us</a></li>
						<li><a href="#whyus" role="tab" data-toggle="tab">Why Us?</a></li>
						<li><a href="#specialties" role="tab" data-toggle="tab">Specialties</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane fade in active" id="about">
							<p>Planet Earth DMC is a division of Sphere Travelmedia &amp; Exhibitions Pvt Ltd. Established in 1998 Sphere Travelmedia &amp; Exhibitions Pvt Ltd is a progressive organization that sets the pace for doing business on an international scale by unlocking business potentials within the travel trade market. The organization has done more than 100 MICE events for Tourism Boards, Travel Companies, Airlines et cetera.</p>
						</div>
						<div class="tab-pane fade " id="whyus">
							<p>Planet Earth DMC has acquired a dominant position in the market place due to its unique approach that provides creative and innovative solutions at a competitive rates, exceptional professional expertise and ensuring excellent services. With the unparalleled reach and experience of Sphere Travelmedia, expansion to other countries are planned in the near future as management continues to look for promising opportunities where Planet Earth DMC can be a driving force in delivering exceptional destination services to the tourism &amp; incentive markets in other key destinations.</p>
						</div>
						<div class="tab-pane fade " id="specialties">
							<p style="font-size: 22px;line-height: 200%;">1.	MICE Travels<br>
								2.	Group Travels <br>
								3.	Individual Packages<br>
								4.	VFR Travels<br>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--/#who-we-are-->
	<div id="packages" class="padding-bottom">
		<div class="container">
			<div class="section-title">
				<h1>Packages</h1>
			</div>
			<!-- <div id="cause-list-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators" id="package-indicators">
				</ol>
				<div class="carousel-inner" id="package-carousel"> -->
			<div id="owl-holidays" class="owl-carousel owl-theme">
				<?php
					$args = array( 'post_type' => 'holidays', 'posts_per_page' => 8 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					$days = get_post_meta( get_the_ID(), 'days', true );
					$nights = get_post_meta( get_the_ID(), 'nights', true );
					$inclusions = get_post_meta( get_the_ID(), 'inclusions', true );
					$exclusions = get_post_meta( get_the_ID(), 'exclusions', true );
					$images = get_field('gallery');
					$description = get_post_meta( get_the_ID(), 'description', true );
				?>
				<div class="item ">	
					<div class="col-lg-4">
				       	<div class="list-image border-one">
				            <img class="img-responsive" src="<?php echo($images[0]['url']) ;?>" alt="">
						</div>
				        <div class="list-info">
				            <h2><?php echo $title;?></h2>
				            <p><?php echo $days;?><span> Days</span></p>
				            <p><?php echo $description;?></p>
				            <a class="btn btn-primary showpackage"  href="<?php echo the_permalink(); ?>" >View Itinenary</a>
				        </div>
				    </div>
				</div>
				<?php endwhile;?>
			</div>
		</div>
	</div>

	<div id="packages" class="padding-bottom">
		<div class="container">
			<div class="section-title">
				<h1>Packages</h1>
			</div>
			<!-- <div id="cause-list-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators" id="package-indicators">
				</ol>
				<div class="carousel-inner" id="package-carousel"> -->
			<div id="owl-holidays" class="owl-carousel owl-theme">
				<?php
					$args = array( 'post_type' => 'hotels', 'posts_per_page' => 8 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					$address = get_post_meta( get_the_ID(), 'address', true );
					$ratings = get_post_meta( get_the_ID(), 'rating', true );
					$ameneties = get_post_meta( get_the_ID(), 'ameneties', true );
					$rooms = get_post_meta( get_the_ID(), 'rooms', true );
					$inclusions = get_post_meta( get_the_ID(), 'inclusions', true );
					$exclusions = get_post_meta( get_the_ID(), 'exclusions', true );
					$rate = get_post_meta( get_the_ID(), 'rate', true );
					$images = get_field('gallery');					
				?>
				<div class="item ">	
					<div class="col-lg-4">
				       	<div class="list-image border-one">
				            <img class="img-responsive" src="<?php echo($images[0]['url']) ;?>" alt="">
						</div>
				        <div class="list-info">
				            <h2><?php echo $title;?></h2>
				            <h2><?php echo $address;?></h2>
				            <p><?php echo $rating;?><span> Days</span></p>
				            <p><?php echo $description;?></p>
				            <a class="btn btn-primary showpackage"  href="<?php echo the_permalink(); ?>" >View Itinenary</a>
				        </div>
				    </div>
				</div>
				<?php endwhile;?>
			</div>
		</div>
	</div>


	<div id="video-section" class="parallax-section" style="background-position: 50% 312px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<h1>Services</h1>
					<p class="lead">Let us know what you need!</p>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="active"><a href="#mice" class="btn btn-primary" role="tab" data-toggle="tab">MICE</a></li>
						<li><a href="#business-travel" class="btn btn-primary" role="tab" data-toggle="tab">Business Travel</a></li>
						<li><a href="#group" class="btn btn-primary" role="tab" data-toggle="tab">Group</a></li>
						<li><a href="#private" class="btn btn-primary" role="tab" data-toggle="tab">Private Tours</a></li>
						<li><a href="#leisure" class="btn btn-primary" role="tab" data-toggle="tab">Experiences</a></li>
					</ul>
					<p>With 15+ years of MICE operations, we have handled more than 100 events for clients from a vareity of business sectors.</p>
				</div>
				<div class="col-sm-5">
					<!-- Tab panes -->
					<div class="tab-content">

						<div class="tab-pane fade in active" id="mice">
							<p style="margin-top: 70px; font-size: 18px;">If you are planning an inspirational conference or a memorable reward trip, why not let our experienced MICE travel team make the necessary arrangements? Our meticulous planning and attention to detail ensures everything goes according to plan. Our MICE travel specialists will also custom fit all the arrangements and take care to meet your requirements within budget.</p>
						</div>
						<div class="tab-pane fade" id="business-travel">
							<p style="margin-top: 70px; font-size: 18px;">As a dedicated corporate travel company, Planet Earth is 100% focused on delivering the highest quality services and support to your company and your business travellers. As a fully client focused company, Planet Earth has an undiluted set of goals: to provide your company with time and money savings, to ensure your business travellers are well looked after and to provide every client with a team of experienced travel agents to work with.</p>
						</div>
						<div class="tab-pane fade" id="group">
							<p style="margin-top: 70px; font-size: 18px;">When you’re planning a group travel excursion, details are everything. You can count on the group travel team at Planet Earth to expertly plan every last detail of your group trip and work to keep everyone on schedule and in sync. We are committed to providing high-quality, cost-effective group travel management to clients across the globe.
							</p>
						</div>
						<div class="tab-pane fade" id="private">
							<p style="margin-top: 70px; font-size: 18px;">We can create a tailor made itinerary to suit your needs, budget and schedule to ensure that is a unique and unforgettable experience. Our private tailor made tours are designed based on your specific requirements &amp; interests and allow you to explore the destination at your own pace and select your preferred accommodation. We can adapt the itinerary of the destination according to your requirements and preferences and put together a perfect customized offer for you.
							</p>
						</div>
						<div class="tab-pane fade" id="leisure">
							<p style="margin-top: 70px; font-size: 18px;">Our agent’s expertise goes beyond simply being knowledgeable. When you plan a luxury vacation with Planet Earth, you access a wealth of resources, ingenuity, and insight to get a leisure travel experience that exceeds your expectations. Their in-depth knowledge and first-hand experience is complemented by our commitment to top-class hotel choices, insightful guides, private transfers and the best flight prices. You can rest assured that your tailor-made holiday is in the hands of luxury leisure travel experts.</p>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div><!--/#video-section-->

	<div id="contact">
		<div class="container">
			<div class="section-title">
				<h1>Contact Us</h1>
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="row contact-details">
						<div class="col-sm-4">
							<span><i class="fa fa-map-marker"></i></span><br>
							<p class="contact-info">
								Planet Earth DMC Pvt Ltd<br>
								No. 245, Amar Jyothi Layout,Domlur,<br>
								Bangalore - 560071, India</p>
						</div>
						<div class="col-sm-4">
							<span><i class="fa fa-phone"></i></span><br>
							<p class="contact-info">+91 80 40834100 - 20</p>
						</div>
						<div class="col-sm-4">
							<span><i class="fa fa-envelope"></i></span><br>
							<a class="contact-info" href="mailto:sales@planetearthdmc.com">sales@planetearthdmc.com</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/#Contact-->

	<!-- // ENQUIRE MODAL -->
	<div id="enquireModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
			<form id="packageEnquiry">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Package Enquiry</h4>
				  </div>
				  <div class="modal-body">
					  <div class="form">
								<div class="help-text">Please complete the below form, our executives will contact you. </div>
						  		<input id="id" type="hidden" name="package_id" value="" required>
						  		<input type="hidden" name="action" value="packageEnquiry" required>
								<input type="text" name="name" placeholder="Full Name" required>
								<input type="email" name="email" placeholder="Email" required>
								<input type="number" name="telephone" placeholder="Phone Number" required>
					  </div>
				  </div>
				  <div class="modal-footer">
					<button id="submitForm" type="submit">Send Enquiry</button>
					<button class="cancel" type="submit" data-dismiss="modal">Cancel</button>
				  </div>
			  </form>
	    </div>

	  </div>
	</div>

	<!-- // PROMO MODAL -->
	<div id="promoModal">
		<div class="head">
			<img class="close-icon" src="http://www.planetearthdmc.com/images/close.png">
			Special Offers
		</div>
	  <div id="promoModalInner">
	  	<div class="modal-body">
	  		<div class="item">
			  <img width="100%" src="http://planetearthdmc.com/images/promo.jpg">
			  <div class="promo__book"><button class="promo_booking" type="submit">Book Now</button> </div>
			</div>
		</div>
	  </div>
	  	<div class="modal-footer">
			<button class="cancel" type="submit" data-dismiss="modal">No Thanks!</button>
		</div>
	</div>

<?php get_footer();?>
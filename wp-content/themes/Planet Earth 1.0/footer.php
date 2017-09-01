
<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="#carousel-wrapper"><img class="img-responsive" src="./images/logo.png" alt=""></a>
				</div>
				<div class="col-sm-4">
					<div class="copyright-text">
						<p>© copyright 2016 Planet Earth DMC Pvt Ltd.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="footer-socials">
						<ul>
							<li><a href="https://www.facebook.com/planetearthdmc"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/planetearthdmc"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/company-beta/13324535/"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer();?>
	<script type="text/javascript">
		<script type="text/javascript" src="./index_files/jquery.js"></script>
	<script>
		var i=0;
		$("#package-carousel > .item").each(function() {
		if(i == 0){
			$('#package-indicators').append('<li data-target="#cause-list-carousel" data-slide-to="'+ i +'" class="active"></li>');
		}
    	else{
			$('#package-indicators').append('<li data-target="#cause-list-carousel" data-slide-to="'+ i +'" class=""></li>');
		}
		i++;
		});
	</script>
	<script>
		var i=0;
		$("#mc > .item").each(function() {
		if(i == 0){
			$('#main-carousel .carousel-indicators').append('<li data-target="#main-carousel" data-slide-to="'+i+'" class="active"></li>');
		}
    	else{
			$('#main-carousel .carousel-indicators').append('<li data-target="#main-carousel" data-slide-to="'+i+'" class=""></li>');
		}
		i++;
		});
	</script>
	</script>
<script>
$(document).ready(function(){
	$("#owl-holidays").owlCarousel({
			singleItem: false,
			slideSpeed: 300,
			pagination: true,
			autoPlay: 1000,
			transitionStyle: "fade",
			navigation: true, 
			items: 3,
			slideBy: 1
		});
	$('.carousel').carousel();

			$('.showpackage').on('click',function(){
				var id= $(this).data('id');
				location.href = "http://planetearthdmc.com/view.php?id="+ id +"";
			});

			$('#book').on('click',function(){
				var id= $(this).data('id');
				$('#myModal').modal('toggle');
				$('#enquireModal').modal('toggle');
				$('#id').val(id);
			});

			$('body').on('hidden.bs.modal', '.modal', function () {
				$(this).removeData('bs.modal');
			});

			$('#packageEnquiry').on('submit',function(e){
				e.preventDefault();

				var request = $.ajax({
					url: "app/calls.php",
				  	method: "POST",
				  	data: new FormData( this ),
				   	processData: false,
      				contentType: false
				});

				request.done(function( data ) {
				 if(data == 0){
					$('.form').html('Looks like something went wrong, your request could not be processed.')
				 	}
				else if (data == 1){
					$('.form').html('<img src="http://planetearthdmc.com/images/success.gif">');
					$('.modal-footer').html('<button class="cancel" data-dismiss="modal">Close</button>');
					}
				});

				request.fail(function( jqXHR, textStatus ) {
				  alert( "Request failed: " + textStatus );
				});


			});

			$(document).ready(function(){
				function promo(){
					$('#promoModal').toggleClass("live");
				};
				setTimeout(promo, 10000);

				$('#promoModal .cancel, .close-icon, .menu-special-offers').click(function(){
					promo();
				})

				$('#promoModal .promo_booking').on('click',function(){
				var id= 9999;
				promo();
				$('#enquireModal').modal('toggle');
				$('#id').val(id);
				});
			})
})	
		
</script>
</body>
</html>
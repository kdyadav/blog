
    <!-- DOWNLOAD BEGIN -->
	<section id="download" class="bg-color-main">
		<div class="container-fluid wow fadeInDown">
			<a href="index.html#wrap" class="goto">
				<h2><i class="icon soc-icon-apple"></i>Download App</h2>
			</a>
		</div>
		<div class="block-bg" data-stellar-ratio="0.5"></div>
	</section>
	<!-- DOWNLOAD END -->

    <!-- FACTS BEGIN -->
	<section id="facts">
		<div class="container">
			<ul class="facts-list">
				<li class="wow bounceIn">
					<i class="icon icon-cloud-download"></i>
					<h3 class="wow">284</h3>
					<h4>Downloads</h4>
				</li>
				<li class="wow bounceIn" data-wow-delay="0.4s">
					<i class="icon icon-star"></i>
					<h3 class="wow">135</h3>
					<h4>Top Rates</h4>
				</li>
				<li class="wow bounceIn" data-wow-delay="0.8s">
					<i class="icon icon-like"></i>
					<h3 class="wow">77</h3>
					<h4>Likes</h4>
				</li>
				<li class="wow bounceIn" data-wow-delay="1.2s">
					<i class="icon icon-clock"></i>
					<h3 class="wow">741</h3>
					<h4>Hours Safe</h4>
				</li>
			</ul>
		</div>
	</section>
	<!-- FACTS END --> 	
	
	
	<!-- FOOTER BEGIN -->
	<footer id="footer">
		<div class="container"> 
			<a href="index.html#wrap" class="logo goto"> <img src="{{asset('public/assets/images/logo@2x.png')}}" alt="vKulp" height="35" width="72"/> </a>
			<p class="copyright">&copy; {{date('Y')}} vkulp <br>
			<!-- Designed by <a href="http://vkulp.com/" target="_blank">vkulp.com</a></p> -->
		</div>
	</footer>
	<!-- FOOTER END --> 
	
</div>


<!-- MODALS BEGIN--> 

<!-- subscribe modal-->
<div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3 class="modal-title"></h3>
		</div>
	</div>
</div>

<!-- contact modal-->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3 class="modal-title">Contact</h3>
			<form action="scripts/contact.php" role="form"  id="contact_form">
						<div class="form-group">
							<input type="text" class="form-control" id="contact_name" placeholder="Full name" name="name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="contact_email" placeholder="Email Address" name="email">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="3" placeholder="Your message or question" id="contact_message" name="message"></textarea>
						</div>
						<button type="submit" id="contact_submit" data-loading-text="&bull;&bull;&bull;"> <i class="icon icon-paper-plane"></i></button>
					</form>
		</div>
	</div>
</div>

<!-- MODALS END-->
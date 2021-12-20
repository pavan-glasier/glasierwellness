<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage glasier_wellness
 * @since Glasier Wellness 1.0
 */

?>


	<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>


<!--footer-->
<div class="footer mt-0">
	<div class="container">
		<div class="row py-1 py-md-2 px-lg-0">
			<div class="col-lg-4 footer-col1 pt-lg-3">
				<div class="row flex-column flex-md-row flex-lg-column">
					<div class="col-md col-lg-auto">
						<?php if ( has_custom_logo() ) : ?>
						    <?php
						        $custom_logo_id = get_theme_mod( 'custom_logo' );
						        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						    ?>
						    <div class="footer-logo">
							<img src="<?php echo esc_url( $image[0] ); ?>" alt="" class="img-fluid">
						</div>
						    
						<?php endif; ?>
						
						<div class="mt-2 mt-lg-0"></div>
						<div class="footer-social d-none d-md-block d-lg-none">
							<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
							<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
							<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
						</div>
					</div>
					<div class="col-md">
						<div class="footer-text mt-1 mt-lg-1">
							<p>To receive email releases, simply provide
								<br>us with your email below</p>
							<form action="#" class="footer-subscribe">
								<div class="input-group">
									<input name="subscribe_mail" type="text" class="form-control" placeholder="Your Email"/>
									<span><i class="icon-black-envelope"></i></span>
								</div>
							</form>
						</div>
						<div class="footer-social d-md-none d-lg-block">
							<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
							<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
							<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<h3>Blog Posts</h3>
				<div class="h-decor"></div>
				<div class="footer-post d-flex">
					<div class="footer-post-photo"><img src="images/content/footer-post-author-01.jpg" alt="" class="img-fluid"></div>
					<div class="footer-post-text">
						<div class="footer-post-title"><a href="#">The doctor’s guide to healthy break...</a></div>
						<p>September 26, 2018</p>
					</div>
				</div>
				<div class="footer-post d-flex">
					<div class="footer-post-photo"><img src="images/content/footer-post-author-03.jpg" alt="" class="img-fluid"></div>
					<div class="footer-post-text">
						<div class="footer-post-title"><a href="#">So, how much sex is normal?</a></div>
						<p>August 22, 2018</p>
					</div>
				</div>
				<div class="footer-post d-flex">
					<div class="footer-post-photo"><img src="images/content/footer-post-author-02.jpg" alt="" class="img-fluid"></div>
					<div class="footer-post-text">
						<div class="footer-post-title"><a href="#">Tooth Fairy Traditions...</a></div>
						<p>July 25, 2018</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<h3>Our Contacts</h3>
				<div class="h-decor"></div>
				<ul class="icn-list">
					<li><i class="icon-placeholder2"></i>1560 Holden Street San Diego, CA 92139
						<br>
						<a href="#" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Get directions on the map</span><i class="icon-right-arrow"></i></a>
					</li>
					<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">1-800-267-0000</span>, <span class="text-nowrap">1-800-267-0001</span></span></b>
						<br>(24/7 General inquiry)
					</li>
					<li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row text-center text-md-left">
				<div class="col-sm">Copyright © 2020 <a href="#">Medlab</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
					<a href="#">Privacy Policy</a></div>
				<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency cases&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b>1-800-267-0000</b></div>
			</div>
		</div>
	</div>
</div>
<!--//footer-->
<div class="backToTop js-backToTop">
	<i class="icon icon-up-arrow"></i>
</div>
<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h3>Ask a Question</h3>
					<form class="mt-15" id="questionForm" method="post" novalidate>
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*"/>
						</div>
						<div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
							<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*"/>
						</div>
						<div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
							<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone"/>
						</div>
						<textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal modal-form fade" id="modalBookingForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h3>Book an Appointment</h3>
					<form class="mt-15" id="bookingForm" method="post" novalidate>
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Your Name*"/>
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-6">
								<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
									<input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Your Email*"/>
								</div>
							</div>
							<div class="col-sm-6 mt-1 mt-sm-0">
								<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
									<input type="text" name="bookingphone" class="form-control" autocomplete="off" placeholder="Your Phone"/>
								</div>
							</div>
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-6">
								<div class="input-group">
										<span>
											<i class="icon-birthday"></i>
										</span>
									<input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Your age"/>
								</div>
							</div>
						</div>
						<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-micro"></i>
								</span>
							<select name="bookingservice" class="form-control">
								<option selected="selected" disabled="disabled">Select Service</option>
								<option value="Molecular Testing & Oncology">Molecular Testing & Oncology</option>
								<option value="Histology">Histology</option>
								<option value="General Diagnostic Tests">General Diagnostic Tests</option>
								<option value="Naturopathic">Naturopathic</option>
								<option value="Genetics Tests">Genetics Tests</option>
								<option value="Cytology">Cytology</option>
							</select>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="bookingdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
							</div>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="bookingtime" type="text" class="form-control timepicker" placeholder="Time">
							</div>
						</div>
						<textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>

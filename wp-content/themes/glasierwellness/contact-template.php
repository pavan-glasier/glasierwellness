<?php 
/**
 * 
 * Template Name: Contact us Page
 * 
 **/

get_header();
 ?>



<div class="page-content"  >
		<!--section-->
        <div class="section mt-0" >
        <?php
        $iframe = get_field('map_iframe');
        echo $iframe;
        ?>
        
        </div>
		<div class="section mt-0 bg-grey">
			<div class="container">
				<div class="row">
                    
                    <?php 
                        $contact_details = get_field('contact_details');
                        // print_r($contact_details);
                    ?>
					<div class="col-md"  >
						<div class="title-wrap">
							<h5  >Clinic Location</h5>
							<div class="h-decor"></div>
						</div>
						<ul class="icn-list-lg">
							<li><i class="icon-placeholder2"  ></i> DentCo Dental Clinic
								<br>1560 Holden Street San Diego,
								<br>CA 92139
							</li>
						</ul>
					</div>
					<div class="col-md mt-3 mt-md-0"  >
						<div class="title-wrap"  >
							<h5  >Contact Info</h5>
							<div class="h-decor"  ></div>
						</div>
						<ul class="icn-list-lg"  >
							<li  ><i class="icon-telephone"  ></i>Phone: <span class="theme-color"  ><span class="text-nowrap"  >1-800-267-0000,</span> <span class="text-nowrap"  >1-800-267-0001</span>
								</span>
								<br  > Fax: <span class="theme-color"  ><span class="text-nowrap"  >(957) 267-0020</span>
								</span>
							</li>
							<li  ><i class="icon-black-envelope"  ></i><a href="mailto:info@dentco.net"  >info@dentco.net</a></li>
						</ul>
					</div>
					<!--  -->
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section pb-5"  >
			<div class="container"  >
				<div class="row"  >
					<div class="col-md col-lg-5"  >
						<div class="pr-0 pr-lg-8"  >
							<div class="title-wrap"  >
								<h2  >Get In Touch With Us</h2>
								<div class="h-decor"  ></div>
							</div>
							<div class="mt-2 mt-lg-4"  >
								<p  >For general questions, please send us a message and we’ll get right back to you. You can also call us directly to speak with a member of our service team or insurance expert.</p>
								<p class="p-sm"  >Fields marked with a * are required.</p>
							</div>
							<div class="mt-2 mt-md-5"  ></div>
							<h5  >Stay Connected</h5>
							<div class="content-social mt-15"  >
								<a href="https://www.facebook.com/" target="blank" class="hovicon"  ><i class="icon-facebook-logo"  ></i></a>
								<a href="https://www.twitter.com/" target="blank" class="hovicon"  ><i class="icon-twitter-logo"  ></i></a>
								<a href="https://plus.google.com/" target="blank" class="hovicon"  ><i class="icon-google-logo"  ></i></a>
								<a href="https://www.instagram.com/" target="blank" class="hovicon"  ><i class="icon-instagram"  ></i></a>
							</div>
						</div>
					</div>
					<div class="col-md col-lg-6 mt-4 mt-md-0"  >
						<form class="contact-form" id="contactForm" method="post" novalidate="novalidate"  >
							<div class="successform"  >
								<p  >Your message was sent successfully!</p>
							</div>
							<div class="errorform"  >
								<p  >Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<div  >
								<input type="text" class="form-control" name="name" placeholder="Your name*"  >
							</div>
							<div class="mt-15"  >
								<input type="text" class="form-control" name="email" placeholder="Email*"  >
							</div>
							<div class="mt-15"  >
								<input type="text" class="form-control" name="phone" placeholder="Your Phone"  >
							</div>
							<div class="mt-15"  >
								<textarea class="form-control" name="message" placeholder="Message"  ></textarea>
							</div>
							<div class="mt-3"  >
								<button type="submit" class="btn btn-hover-fill"  ><i class="icon-right-arrow"  ></i><span  >Send message</span><i class="icon-right-arrow"  ></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
	</div>

    <?php get_footer()?>
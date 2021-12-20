<?php 
/**
 * 
 * Template Name: Home Page
 * 
 **/

get_header();
 ?>

<div class="page-content">
    <!--section slider-->
    <div class="section mt-0">
        
        <div id="mainSliderWrapper">
            <div class="loading-content">
                <div class="loader-dna">
                    <column>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                    </column>
                    <column>
                        <dash></dash>
                        <dash></dash>
                        <dash></dash>
                        <dash></dash>
                        <dash></dash>
                        <dash></dash>
                        <dash></dash>
                        <dash></dash>
                    </column>
                    <column>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                        <dot></dot>
                    </column>
                </div>
            </div>
            

            
            <div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>

                
                <?php
                if( have_rows('slides', 'option') ):
                    while( have_rows('slides', 'option') ) : the_row();
                        $sub_value = get_sub_field('title', 'option'); ?>
                        <?php 
                        $slide_background_image = get_sub_field('background_image','option');
                        $slide_title = get_sub_field('title','option');
                        $slide_sub_title = get_sub_field('sub_title','option');
                        $slide_button = get_sub_field('button','option');

                        ?>
                <div class="slide">
                    <div class="img--holder" data-bg="<?php echo $slide_background_image;?>"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><?php echo $slide_title;?></div>
                                    <div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s"><?php echo $slide_sub_title;?></div>
                                    <?php 
                                    if( $slide_button ): 
                                        $link_url = $slide_button['url'];
                                        $link_title = $slide_button['title'];
                                        $link_target = $slide_button['target'] ? $slide_button['target'] : '_self';
                                        ?>
                                        <div class="slide-btn">
                                            <a href="<?php echo esc_url( $link_url ); ?>" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s" target="<?php echo esc_attr( $link_target ); ?>">
                                                <i class="icon-right-arrow"></i>
                                                <span><?php echo esc_html( $link_title ); ?></span>
                                                <i class="icon-right-arrow"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <?php
                    endwhile;
                else :
                endif;?>
            </div>
        </div>
    </div>
    <!--//section slider-->




<!-- HIDE SECTION -->
    <!--section departments-->
    <div class="section bg-bottom bg-right bg-norepeat bg-md-none bg-fixed section-bottom-padding section-top-padding" style="display: none; background-image: url(<?php echo get_template_directory_uri();?>/images/bg-bottom-right.png)" >
        <div class="container">
            <div class="row mt-lg-4">
                <div class="col-md-6 col-xl-6 pr-xl-7">
                    <div class="department-tabs2">
                        <div class="department-tab2">
                            <div class="department-tab2-number">1</div>
                            <div class="department-tab2-text">Latest Equipment</div>
                            <div class="department-tab2-decor"></div>
                        </div>
                        <div class="department-tab2">
                            <div class="department-tab2-number">2</div>
                            <div class="department-tab2-text">Quality Service</div>
                            <div class="department-tab2-decor"></div>
                        </div>
                        <div class="department-tab2">
                            <div class="department-tab2-number">3</div>
                            <div class="department-tab2-text">Skilled Team</div>
                            <div class="department-tab2-decor"></div>
                        </div>
                        <div class="department-tab2">
                            <div class="department-tab2-number">4</div>
                            <div class="department-tab2-text">Positive Reviews</div>
                            <div class="department-tab2-decor"></div>
                        </div>
                    </div>
                    <div class="department-tabs2-bg"><img src="<?php echo get_template_directory_uri();?>/images/bg-department.png" alt=""></div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="department-carousel2">
                        <div class="department-item">
                            <div class="h-sub theme-color">About us</div>
                            <h2>Personal Licensed<br>Diagnostic <span class="theme-color">Lab Services</span></h2>
                            <p>We pride ourselves on the trained skills needed for the preparation of diversified testing. We are of the sound belief that timely diagnosis could cast off the scar of many of the grave diseases. It can be made possible if you consult your doctor for suspected diseases.</p>
                            <ul class="marker-list-md">
                                <li>All reports for clients are made simple and easy to understand</li>
                                <li>User- friendly website offers custom settings for each physician</li>
                                <li>We customize panels to meet physician’s needs.</li>
                            </ul>
                            <a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>schedule a visit</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section  departments-->



<?php while ( have_rows('sections') ) : the_row();?>
    <?php if( get_row_layout() == 'tab_section' ) :

    $tab_section_heading = get_sub_field('tab_section_heading');
    ?>
    <!--section-->
    <div class="section bg-grey mt-md-0">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1 double-title double-title--white double-title--center double-title--vcenter" data-title="<?php echo $tab_section_heading; ?>">
                    <span><?php echo $tab_section_heading; ?></span>
                </h2>
                <div class="h-decor"></div>
            </div>
            <div class="nav nav-pills-icons js-nav-pills-carousel" role="tablist">


                <?php 
                  
                  if( have_rows('tabs') ):
                     $i = 0;
                   while( have_rows('tabs') ) : the_row();
                     
                     $tabs_name = get_sub_field('tabs_name');
                     $tab_icon = $tabs_name['icon'];
                     $tab_name = $tabs_name['name'];
                     ?>
                     <a class="nav-link <?php if ($i==0) { ?>active<?php } ?>" data-toggle="pill" href="#tab<?php echo $i++;?>" role="tab">
                        <i class="<?php echo $tab_icon;?>"></i>
                        <span><?php echo $tab_name;?></span>
                    </a>

                    <?php 
                     endwhile;
                  else :
                  endif;
                     ?>
            </div>
            <div id="tab-content" class="tab-content mt-2 mt-sm-4">

                <?php 
                  
                     if( have_rows('tabs') ):
                         $j = 0;
                      while( have_rows('tabs') ) : the_row();
                       
                     $tabs_name = get_sub_field('tabs_name');
                     $tab_name = $tabs_name['name'];

                     $tab_contents = get_sub_field('tab_contents');

                           ?>
                <div class="tab-pane fade <?php if ($j==0) { ?>show active<?php } ?>" id="tab<?php echo $j++;?>"  role="tabpanel">
                    <div class="tab-bg">
                        <img src="<?php echo get_template_directory_uri();?>/images/content/bg-map.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pt-xl-1">
                                <h3><?php echo $tab_name;?></h3>
                                
                                <?php echo $tab_contents;?>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php 
                        endwhile;
                     else :
                     endif;
                        ?>

                
            </div>

        </div>
    </div>
    <!--//section-->
    <?php endif; ?>
<?php endwhile; ?>








    <!--section services -->
    <div class="section bg-norepeat bg-md-none section-top-padding" style="background-image: url(images/bg-top-left.png)">
        <div class="container-fluid px-0 over-visible">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-tab-wrap float-right">
                        <div class="title-wrap-alt text-center text-md-left">
                            <div class="h-sub theme-color">What we Offer</div>
                            <h2 class="h1 double-title double-title--top-md" data-title="Services"><span>Other Laboratory <span class="theme-color">Services</span></span></h2>
                        </div>
                        <p>Results of test procedures processed on site are reported to the health care provider the same day during regular business hours. Testing and services available through our Laboratory include:</p>
                        <div class="row">
                            <div class="col-sm-auto">
                                <ul class="marker-list-md">
                                    <li>Blood Bank / Transfusion</li>
                                    <li>Immunology and Flow Cytometry</li>
                                    <li>Reference Lab Testing referrals</li>
                                    <li>Chemistry</li>
                                    <li>Hematology</li>
                                    <li>Histology</li>
                                    <li>Serology</li>
                                </ul>
                            </div>
                            <div class="col-sm-auto mt-1 mt-md-0">
                                <ul class="marker-list-md">
                                    <li>Point-of-Care Testing</li>
                                    <li>Microbiology and Virology</li>
                                    <li>Molecular Pathology</li>
                                    <li>Bone Marrow Biopsy</li>
                                    <li>Coagulation</li>
                                    <li>Pathology & Cytology</li>
                                    <li>Urinalysis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="ml-xl-6">
                        <img src="<?php echo get_template_directory_uri();?>/images/content/index-img-02.jpg" class="w-sm-100" alt="">
                    </div>
                    <div class="over-image-card pos-left">
                        <div class="over-image-card-icon"><i class="icon-download"></i></div>
                        <div class="over-image-card-text">
                            <h4>Download Forms</h4>
                            <p>We have request forms available for diagnostics that list the test panels and individual markers currently available.</p>
                            <a href="form-download.html" class="btn btn-white btn-white--all"><i class="icon-right-arrow"></i><span>download forms</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section services -->
    <!--section faq-->
    <div class="section mt-lg-large">
        <div class="row">
            <div class="col-lg-6">
                <div class="container-shift-left mb-3 mb-md-4">
                    <div class="title-wrap text-center text-lg-left">
                        <h2 class="h1 double-title double-title--vcenter" data-title="FAQ"><span>Patient <span class="theme-color">Information</span></span></h2>
                    </div>
                </div>
                <div class="image-shift-right">
                    <img src="<?php echo get_template_directory_uri();?>/images/content/banner-left.jpg" alt="" class="w-md-100">
                    <div class="over-image-card pos-right">
                        <div class="over-image-card-icon"><i class="icon-card"></i></div>
                        <div class="over-image-card-text">
                            <h4>Pay Online</h4>
                            <p>Online Payment for Patients. For your convenience MedLab now offers the ability to make a secure payment online.</p>
                            <a href="form-payonline.html" class="btn btn-white btn-white--all"><i class="icon-right-arrow"></i><span>pay online</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-wrap-bg">
                    <div class="faq-wrap faq-wrap--pad-md">
                        <h2 class="h1 bg-title">Questions</h2>
                        <div class="nav nav-pills nav-pills--noborder" role="tablist">
                            <a class="nav-link active" data-toggle="pill" href="#tab-A1" role="tab"><i class="icon-labinstrument"></i>General</a>
                            <a class="nav-link" data-toggle="pill" href="#tab-B1" role="tab"><i class="icon-billing"></i>Billing Questions</a>
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-question"></i>Ask Question</a>
                        </div>
                        <div id="tab-content-2" class="tab-content mt-2">
                            <div id="tab-A1" class="tab-pane fade show active" role="tabpanel">
                                <div id="faqAccordion1" class="faq-accordion faq-accordion--style2" data-children=".faq-item">
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span><span>How long does my eye exam take?</span></a>
                                        <div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
                                            <div>
                                                <p>A typical eye exam take 1-1.5 hours because we do a comprehensive, dilated eye exam. This includes: dilation, tonometry (a measurement of eye pressure), visual field test (a measurement of peripheral vision) and visual acuity test (a measurement of distance vision).</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span><span>How affordable are your services?</span></a>
                                        <div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span><span>Where can I find out more about specific conditions?</span></a>
                                        <div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4" aria-expanded="false" class="collapsed"><span>4.</span><span>Which consultants work in the general ophthalmology service?</span></a>
                                        <div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-B1" class="tab-pane fade" role="tabpanel">
                                <div id="faqAccordion2" class="faq-accordion faq-accordion--style2" data-children=".faq-item">
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem21" aria-expanded="true"><span>1.</span><span>How can I improve my oral hygiene?</span></a>
                                        <div id="faqItem21" class="collapse show faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem22" aria-expanded="false" class="collapsed"><span>2.</span><span>How do I know if my teeth are healthy?</span></a>
                                        <div id="faqItem22" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem23" aria-expanded="false" class="collapsed"><span>3.</span>Why are regular dental assessments so important?</a>
                                        <div id="faqItem23" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem24" aria-expanded="false" class="collapsed"><span>4.</span><span>How often 1 should I visit my dentist?</span></a>
                                        <div id="faqItem24" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section faq-->
    <!--section specialists-->
    <div class="section bg-norepeat bg-right bg-md-none section-top-padding" style="background-image: url(<?php echo get_template_directory_uri();?>/images/bg-top-right.png)">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Perfect Team</div>
                <h1 class="double-title double-title--center double-title--vcenter" data-title="Perfect Team"><span>A Professional & Care Provider</span></h1>
                <div class="h-decor"></div>
            </div>
            <form action="#" class="content-search content-search--style2 d-flex mb-3">
                <div class="input-wrap">
                    <input type="text" class="form-control" placeholder="Search for specialist" list="doctorPosition">
                    <datalist id="doctorPosition">
                        <option value="Medical Director">
                        <option value="Tissue Bank Director">
                        <option value="Embryologist">
                    </datalist>
                </div>
                <button type="submit"><i class="icon-search"></i></button>
            </form>
            <div class="row specialist-carousel js-specialist-carousel">
                <div class="col-sm-6 col-md-4 category1">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="doctor-page.html"><img src="<?php echo get_template_directory_uri();?>/images/content/doctor-01.jpg" class="img-fluid" alt=""></a>
                            <div class="doctor-box-links">
                                <a href="#"><i class="icon-facebook-logo"></i></a>
                                <a href="#"><i class="icon-google-logo"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="doctor-box-top">
                            <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Frank Bigham</a></h5>
                            <div class="doctor-box-position">Medical Director</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="doctor-page.html"><img src="<?php echo get_template_directory_uri();?>/images/content/doctor-02.jpg" class="img-fluid" alt=""></a>
                            <div class="doctor-box-links">
                                <a href="#"><i class="icon-facebook-logo"></i></a>
                                <a href="#"><i class="icon-google-logo"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="doctor-box-top">
                            <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Stuart Orozco</a></h5>
                            <div class="doctor-box-position">Tissue Bank Director</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="doctor-page.html"><img src="<?php echo get_template_directory_uri();?>/images/content/doctor-03.jpg" class="img-fluid" alt=""></a>
                            <div class="doctor-box-links">
                                <a href="#"><i class="icon-facebook-logo"></i></a>
                                <a href="#"><i class="icon-google-logo"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="doctor-box-top">
                            <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Betty Bone</a></h5>
                            <div class="doctor-box-position">Embryologist</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category1">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="doctor-page.html"><img src="<?php echo get_template_directory_uri();?>/images/content/doctor-04.jpg" class="img-fluid" alt=""></a>
                            <div class="doctor-box-links">
                                <a href="#"><i class="icon-facebook-logo"></i></a>
                                <a href="#"><i class="icon-google-logo"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="doctor-box-top">
                            <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Robert Rush</a></h5>
                            <div class="doctor-box-position">Psychiatrist</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category1">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="doctor-page.html"><img src="<?php echo get_template_directory_uri();?>/images/content/doctor-05.jpg" class="img-fluid" alt=""></a>
                            <div class="doctor-box-links">
                                <a href="#"><i class="icon-facebook-logo"></i></a>
                                <a href="#"><i class="icon-google-logo"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="doctor-box-top">
                            <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Terri Williams</a></h5>
                            <div class="doctor-box-position">Psychiatrist</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="doctor-page.html"><img src="<?php echo get_template_directory_uri();?>/images/content/doctor-06.jpg" class="img-fluid" alt=""></a>
                            <div class="doctor-box-links">
                                <a href="#"><i class="icon-facebook-logo"></i></a>
                                <a href="#"><i class="icon-google-logo"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="doctor-box-top">
                            <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Berry Gardner</a></a></h5>
                            <div class="doctor-box-position">Cardiolog</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section specialists-->
    <!--section testimonials-->
    <div class="section bg-grey p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="reviews-style4-wrap">
                        <div class="reviews-style4">
                            <div class="title-wrap">
                                <div class="h-sub theme-color">Testimonials</div>
                                <h2 class="h1 double-title double-title--white double-title--right" data-title="Testimonials"><span>What Our<br class="d-sm-none">Customers Say</span></h2>
                            </div>
                            <div class="js-reviews-carousel2 reviews-carousel">
                                <div class="review">
                                    <p class="review-text">“I have used Your services to have my PSA tests done. I have found them to be helpful and professional in performing the lab tests. They also have been prompt in reporting the results back to me. It is nice to be able to get the tests done without having to see a doctor “for permission!” I recommend this service for those who want to watch their own health as much as possible.”</p>
                                    <p><span class="review-author">- Joseph Dunbar,</span> <span class="review-author-position">Carpenter</span>
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="review-text">“I have used Your services to have my PSA tests done. I have found them to be helpful and professional in performing the lab tests. They also have been prompt in reporting the results back to me. It is nice to be able to get the tests done without having to see a doctor “for permission!” I recommend this service for those who want to watch their own health as much as possible.”</p>
                                    <p><span class="review-author">- Steven Roa,</span> <span class="review-author-position">Businesswoman</span>
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="review-text">“I have used Your services to have my PSA tests done. I have found them to be helpful and professional in performing the lab tests. They also have been prompt in reporting the results back to me. It is nice to be able to get the tests done without having to see a doctor “for permission!” I recommend this service for those who want to watch their own health as much as possible.”</p>
                                    <p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-sm-3 px-md-4 px-xl-8">
                    <div class="testimonials-bg-wrap">
                        <img src="<?php echo get_template_directory_uri();?>/images/content/tesimonials-bg.png" alt="" class="reviews-style4-image-right">
                        <div class="testimonials-icon"><span><span>“</span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section testimonials-->
    <!--section prices-->
    <div class="section bg-norepeat bg-md-none section-top-padding" style="background-image: url(<?php echo get_template_directory_uri();?>/images/bg-top-left2.png)">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1 double-title double-title--center double-title--vcenter" data-title="Price Packages"><span>Price Packages</span></h2>
                <div class="h-decor"></div>
            </div>
            <div class="row justify-content-center prices-carousel js-prices-carousel mt-2">
                <div class="col-sm-6 col-md-4">
                    <div class="prices-box prices-box--style2">
                        <h4 class="prices-box-title">Healthy Days Special</h4>
                        <div class="prices-box-text">Includes: 76 Parametersl</div>
                        <div class="prices-box-price">
                            <sub>$</sub>24<sub>.99</sub>
                        </div>
                        <div class="prices-box-row">Blood Glucose Fasting</div>
                        <div class="prices-box-row">Complete Hemogram</div>
                        <div class="prices-box-row">Kidney Function Test</div>
                        <div class="prices-box-link">
                            <a href="form-payonline.html" class="btn"><i class="icon-right-arrow"></i><span>booking now</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prices-box prices-box--style2 prices-box--special">
                        <h4 class="prices-box-title">OnePlusOne Extended</h4>
                        <div class="prices-box-text">Includes: 74 Parametersl</div>
                        <div class="prices-box-price">
                            <sub>$</sub>89<sub>.99</sub>
                        </div>
                        <div class="prices-box-row">Blood Glucose Fasting</div>
                        <div class="prices-box-row">Complete Hemogram</div>
                        <div class="prices-box-row">Kidney Function Test</div>
                        <div class="prices-box-link">
                            <a href="form-payonline.html" class="btn btn-white btn-white--all"><i class="icon-right-arrow"></i><span>booking now</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="prices-box prices-box--style2">
                        <h4 class="prices-box-title">Basic Screening</h4>
                        <div class="prices-box-text">Includes: 60 Parametersl</div>
                        <div class="prices-box-price">
                            <sub>$</sub>49<sub>.99</sub>
                        </div>
                        <div class="prices-box-row">Blood Glucose Fasting</div>
                        <div class="prices-box-row">Complete Hemogram</div>
                        <div class="prices-box-row">Kidney Function Test</div>
                        <div class="prices-box-link">
                            <a href="form-payonline.html" class="btn"><i class="icon-right-arrow"></i><span>booking now</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section prices-->
    <!--section news & achieved-->
    <div class="section">
        <div class="row no-gutters row-shift">
            <div class="col-lg-6 col-shift-right">
                <div class="container-shift-left">
                    <div class="title-wrap">
                        <h2 class="double-title double-title--white double-title--vcenter" data-title="News"><span>News & Events</span></h2>
                    </div>
                    <div class="blog-post-sm-vertical">
                        <div class="blog-post-sm">
                            <div class="blog-post-sm-photo"><img src="<?php echo get_template_directory_uri();?>/images/content/news-01.jpg" alt="" class="img-fluid"></div>
                            <div class="blog-post-sm-text">
                                <div class="blog-post-sm-date">Mar 16, 2020</div>
                                <div class="blog-post-sm-title"><a href="blog-post-page.html">Biochemical Receptor Reverses Bone Degradation Caused by Osteoporosis</a></div>
                                <a href="blog-post-page.html" class="blog-post-sm-readmore">...</a>
                            </div>
                        </div>
                        <div class="blog-post-sm">
                            <div class="blog-post-sm-photo"><img src="<?php echo get_template_directory_uri();?>/images/content/news-02.jpg" alt="" class="img-fluid"></div>
                            <div class="blog-post-sm-text">
                                <div class="blog-post-sm-date">Mar 28, 2020</div>
                                <div class="blog-post-sm-title"><a href="blog-post-page.html">Ammonia Fuel Cell is More Powerful, Cost-Effective Than Hydrogen</a></div>
                                <a href="blog-post-page.html" class="blog-post-sm-readmore">...</a>
                            </div>
                        </div>
                        <div class="blog-post-sm">
                            <div class="blog-post-sm-photo"><img src="<?php echo get_template_directory_uri();?>/images/content/news-03.jpg" alt="" class="img-fluid"></div>
                            <div class="blog-post-sm-text">
                                <div class="blog-post-sm-date">Apr 16, 2020</div>
                                <div class="blog-post-sm-title"><a href="blog-post-page.html">Nanopore Optofluidic Device Controls Delivery of Individual Biomolecules</a></div>
                                <a href="blog-post-page.html" class="blog-post-sm-readmore">...</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post-sm-carousel js-blog-grid-carousel-full">
                        <div class="blog-post-sm">
                            <div class="blog-post-sm-photo"><img src="<?php echo get_template_directory_uri();?>/images/content/news-01.jpg" alt="" class="img-fluid"></div>
                            <div class="blog-post-sm-text">
                                <div class="blog-post-sm-date">Mar 16, 2020</div>
                                <div class="blog-post-sm-title"><a href="blog-post-page.html">Biochemical Receptor Reverses Bone Degradation Caused by Osteoporosis</a></div>
                                <a href="blog-post-page.html" class="blog-post-sm-readmore">...</a>
                            </div>
                        </div>
                        <div class="blog-post-sm">
                            <div class="blog-post-sm-photo"><img src="<?php echo get_template_directory_uri();?>/images/content/news-02.jpg" alt="" class="img-fluid"></div>
                            <div class="blog-post-sm-text">
                                <div class="blog-post-sm-date">Mar 28, 2020</div>
                                <div class="blog-post-sm-title"><a href="blog-post-page.html">Ammonia Fuel Cell is More Powerful, Cost-Effective Than Hydrogen</a></div>
                                <a href="blog-post-page.html" class="blog-post-sm-readmore">...</a>
                            </div>
                        </div>
                        <div class="blog-post-sm">
                            <div class="blog-post-sm-photo"><img src="<?php echo get_template_directory_uri();?>/images/content/news-03.jpg" alt="" class="img-fluid"></div>
                            <div class="blog-post-sm-text">
                                <div class="blog-post-sm-date">Apr 16, 2020</div>
                                <div class="blog-post-sm-title"><a href="blog-post-page.html">Nanopore Optofluidic Device Controls Delivery of Individual Biomolecules</a></div>
                                <a href="blog-post-page.html" class="blog-post-sm-readmore">...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-shift-left mt-4 mt-md-5 mt-lg-2">
                <div class="container-shift-right">
                    <div class="title-wrap text-center text-md-left">
                        <h2 class="h1">Our <span class="theme-color">Achievements</span></h2>
                    </div>
                </div>
                <div class="mt-2 mt-md-3 mt-lg-4">
                    <img src="<?php echo get_template_directory_uri();?>/images/content/banner-right.jpg" alt="" class="w-sm-100">
                    <div class="over-image-counter pos-left">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="counter-box-sm">
                                <div class="counter-box-sm-number"><span class="count" data-to="150" data-speed="1500">0</span><span class="sup">K</span></div>
                                <div class="counter-box-sm-text">Tests Performed</div>
                            </div>
                            <div class="counter-box-sm">
                                <div class="counter-box-sm-number"><span class="count" data-to="50" data-speed="1500">0</span><span class="sup">+</span></div>
                                <div class="counter-box-sm-text">Permanent Staff</div>
                            </div>
                            <div class="counter-box-sm">
                                <div class="counter-box-sm-number"><span class="count" data-to="250" data-speed="1500">0</span><span class="sup">+</span></div>
                                <div class="counter-box-sm-text">Suppliers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section news & achieved-->
    <!--section contact-->
    <div class="section bg-norepeat bg-bottom bg-left bg-md-none bg-fixed section-bottom-padding-half section-top-padding" style="background-image: url(<?php echo get_template_directory_uri();?>/images/bg-bottom-left2.png)">
        <div class="banner-appointment-form">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm-5 col-lg-5 order-2 order-sm-2 mt-3 mt-md-0 text-center">
                        <img src="<?php echo get_template_directory_uri();?>/images/content/banner-appointment.png" alt="" class="banner-appointment-form-image">
                    </div>
                    <div class="col-sm-7 col-lg-7 order-1 order-sm-1 d-flex">
                        <div class="pt-2 pt-lg-6 px-lg-3 text-center">
                            <div class="title-wrap-alt">
                                <h2 class="double-title double-title--vcenter double-title--center" data-title="Appointment"><span>Make an <span class="theme-color">Appointment</span></span></h2>
                            </div>
                            <p>We believe in providing the best possible care to all our existing patients and welcome
                                new patients to sample.</p>
                            <form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
                                <div class="successform">
                                    <p>Your message was sent successfully!</p>
                                </div>
                                <div class="errorform">
                                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="name" placeholder="Your name*">
                                </div>
                                <div class="row row-sm-space mt-15">
                                    <div class="col-sm-6"><input type="text" class="form-control" name="phone" placeholder="Your Phone"></div>
                                    <div class="col-sm-6 mt-15 mt-sm-0"><input type="text" class="form-control" name="email" placeholder="Email*"></div>
                                </div>
                                <div class="mt-15">
                                    <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="mt-2 mt-lg-4">
                                    <button type="submit" class="btn"><i class="icon-right-arrow"></i><span>Send request</span><i class="icon-right-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section contact-->
</div>


 <?php  

get_footer();

?>
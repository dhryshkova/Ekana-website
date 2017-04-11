<?php
    // Carousel Metaboxes
    $images = get_post_meta( get_the_ID(), 'carousel_repeat_group', true );

    // Slogan Description Metaboxes
    $slogan1 = get_post_meta( get_the_ID(), 'slogan_desc_1', true );
    $slogan2 = get_post_meta( get_the_ID(), 'slogan_desc_2', true );
    $slogan3 = get_post_meta( get_the_ID(), 'slogan_desc_3', true );

    // Contact Information Metaboxes
    $address = get_post_meta( get_the_ID(), 'address', true );
    $email = get_post_meta( get_the_ID(), 'email', true );
    $phone = get_post_meta( get_the_ID(), 'phone', true );

    // Quote Metaboxes
    $q_content = get_post_meta( get_the_ID(), 'quote_content', true );
    $q_author = get_post_meta( get_the_ID(), 'quote_author', true );

    // Video Metaboxes
    $v_title = get_post_meta( get_the_ID(), 'video_title', true );
    $v_content = get_post_meta( get_the_ID(), 'video_content', true );
    $v_link = get_post_meta( get_the_ID(), 'video_link', true );
?>


<div class="content-main">

    <!-- Carousel slider -->
    <?php if(!empty($images)){?>
        <div class="carouselle">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="7500" >

                <!-- Indicators -->
                <ol class="carousel-indicators ">
                    <?php $count = 0;
                    foreach($images as $image){?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" <?php if($count == 0){ echo 'class="active"';} ?>></li>
                        <?php $count++; } ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php $count2 = 0;
                    foreach($images as $image){?>
                        <div class="item <?php if($count2 == 0){ echo 'active';} ?>">
                            <img src="<?php echo $image['image']; ?>">
                            <div class="carousel-caption">
                                <p><?php echo $image['text']; ?></p>
                            </div>
                        </div>
                        <?php $count2++; } ?>
                </div>


                <!-- Left and right controls -->
                <p class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </p>
                <p class="right carousel-control  " href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </p>

            </div>
        </div>
        <div class="new-caption-area">

        </div>
    <?php } ?>

    <div class="slide spacing" id="h-intro">
        <div class="container clearfix">
            <div class="section-header">
                <h2>What to know us <span class="highlight">Better</span></h2>
                <h5><em>Strong, Resilient & Reliable</em></h5>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="slide spacing" id="intro">
        <div class="container clearfix">
            <div class="content">
                <div class="col-md-4 intro-box">
                    <h2>Strong</h2>
                    <div class="line-intro"></div>
                    <p><?php echo $slogan1; ?></p>
                </div>
                <div class="col-md-4 intro-box">
                    <h2>Resilient</h2>
                    <div class="line-intro"></div>
                    <p><?php echo $slogan2; ?></p>
                </div>
                <div class="col-md-4 intro-box">
                    <h2>Reliable</h2>
                    <div class="line-intro"></div>
                    <p><?php echo $slogan3; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slide spacing" id="quote">
        <div class="container clearfix">
            <div class="content">
                <div class="col-md-10 col-md-offset-1">
                    <p class="quote-content">“<?php echo $q_content; ?>”</p>
                    <p class="quote-author"> – <?php echo $q_author; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slide spacing" id="video">
        <div class="container clearfix">
            <div class="content vertical-align">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h2><?php echo $v_title; ?></h2>
                    <p><?php echo $v_content; ?></p>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <iframe width="560" height="315" src="<?php echo $v_link; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="slide spacing" id="h-services">
        <div class="container clearfix">
            <div class="section-header">
                <h2>Security <span class="highlight">Services</span></h2>
                <h5><em>Strong, Resilient & Reliable</em></h5>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="slide spacing" id="services">
        <div class="container clearfix">
            <div class="content col-lg-12">

                <div class="service-row1 row">
                    <div class="col-md-4 service-descrip">
                        <img src="wp-content/themes/ekana-theme/assets/images/icon-1.png" />
                        <h3>Audit and Compliance</h3>

                        <ul>
                            <li>SOX - ITGC Audit</li>
                            <li>PCI DSS Audit</li>
                            <li>PIPEDA Compliance Audit</li>
                        </ul>
                    </div>
                    <div class="col-md-4 service-descrip">
                        <img src="wp-content/themes/ekana-theme/assets/images/icon-2.png" />
                        <h3>Security Technology Implementation</h3>

                        <ul>
                            <li>Cloud Access Security Broker</li>
                            <li>Phishing Awareness</li>
                            <li>Risk Management tool</li>
                            <li>Privilege Access Management</li>
                            <li>Vulnerability Management tool</li>
                        </ul>
                    </div>
                    <div class="col-md-4 service-descrip">
                        <img src="wp-content/themes/ekana-theme/assets/images/icon-4.png" />
                        <h3>Cyber Risk Assessments</h3>

                        <ul>
                            <li>Third party Risk Assessment</li>
                            <li>Phishing Assessments</li>
                            <li>Security Architecture</li>
                            <li>Security Maturity Assessment</li>
                            <li>Critical Asset Security Management</li>
                        </ul>
                    </div>
                </div>

                <div class="service-row2 row">
                    <div class="col-md-4 col-md-offset-2 service-descrip">
                        <img src="wp-content/themes/ekana-theme/assets/images/icon-5.png" />
                        <h3>Security Governance</h3>

                        <ul>
                            <li>Security Governance Framework</li>
                            <li>Security Policy and Standards</li>
                            <li>Security Awareness Program</li>
                            <li>Social reengineering training</li>
                            <li>GRC tool implementation</li>
                            <li>Security Incident and Response Management</li>
                            <li>Security Metrics Development</li>
                        </ul>
                    </div>
                    <div class="col-md-4 service-descrip">
                        <img src="wp-content/themes/ekana-theme/assets/images/icon-7.png" />
                        <h3>Security Operations</h3>

                        <ul>
                            <li>Vulnerability Management</li>
                            <li>Security Incident and Event Management</li>
                            <li>Threat Management</li>
                            <li>Data Leakage Protection</li>
                            <li>Penetration testing</li>
                            <li>Real-time monitoring of Websites</li>
                            <li>Log management</li>
                            <li>Patch Management</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="slide spacing" id="h-contact">
        <div class="container clearfix">
            <div class="section-header">
                <h2>Feel Free to <span class="highlight">Contact Us</span></h2>
                <h5><em>Strong, Resilient & Reliable</em></h5>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="slide" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46109.51024523744!2d-79.5303962962449!3d43.75532806988567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b303758dba243%3A0xbb813a422ea5d7bd!2sBest+Guard+Security!5e0!3m2!1sen!2sca!4v1489594887306" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="slide spacing" id="contact-us">
        <div class="container clearfix">
            <div class="content col-md-10 col-md-offset-1">
                <div class="row contact-info">
                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-map-marker"></i>
                            <h4><?php echo $address; ?></h4> <!-- address -->
                        </div>
                    </div>
                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-envelope-o"></i>
                            <h4><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></h4><!-- email add -->
                        </div>
                    </div>
                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-phone"></i>
                            <h4><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></h4> <!-- phone no. -->
                        </div>
                    </div>
                </div>
                <?php echo do_shortcode( '[ninja_form id=3]' ); ?>
            </div>
        </div>
    </div>

</div>

@extends('layouts.style1')

@section('title', 'About Us')

@section('content')
    @parent
    <!--CONTENT START-->
    <div class="kode-content">
    	<!--BOOK GUIDE SECTION START-->
        <section>
        	<div class="container">
            	<!--SECTION CONTENT START-->
            	<div class="section-content margin-bottom-zero">
                	<h2>WELCOME TO OUR ONLINE LIBRARY: ABOUT US</h2>
                </div>
                <!--SECTION CONTENT END-->
                <div class="book-guide">
                	<div class="row">
                    	<div class="col-md-5">
                        	<img src="images/about-img2.png" alt="">
                        </div>
                        <div class="col-md-7 ad-inside-right">
                        	<p class="cap">Welcome to our online library's About Us page! We're thrilled to have the opportunity to share our story with you. Our library is committed to providing the best possible experience for our patrons, and we take great pride in offering a wide range of resources and services to meet their needs.</p>
                            <p>Our team is made up of dedicated librarians and support staff who are passionate about helping people find the information they need to succeed. From online research databases to a vast collection of books, journals, and multimedia resources, we're here to provide our patrons with everything they need to achieve their academic and personal goals.
                                We believe that access to information is essential, and that everyone deserves equal access to knowledge. That's why we're committed to making our resources available to everyone, regardless of their background or circumstances.
                                Thank you for visiting our About Us page, and we hope you enjoy exploring all that our library has to offer.</p>
                            {{-- <div class="row">
                            	<div class="col-md-6">
                                	<ul class="kd-list2">
                                        <li><p>Consectetur adipiscing elit</p></li>
                                        <li><p>Sed do eiusmod tempor incididunt ut labore</p></li>
                                        <li><p>Labore et dolore magna aliqua</p></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                	<ul class="kd-list2">
                                        <li><p>Consectetur adipiscing elit</p></li>
                                        <li><p>Sed do eiusmod tempor incididunt ut labore</p></li>
                                        <li><p>Labore et dolore magna aliqua</p></li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BOOK GUIDE SECTION END-->
        <section class="kode-service-section">
        	<div class="container">
                <div class="row">
                	<div class="col-md-3 col-sm-6">
                    	<div class="kode-service-2">
                        	<i class="fa fa-gift"></i>
                            <h3><a href="#"> Free Gift Wrap</a></h3>
                            <p>Free gift wrapping on all purchases. Wrapping includes a blue box with your choice with Ribbon.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-service-2">
                        	<i class="fa fa-book"></i>
                            <h3><a href="#">Buy Selling Used Books</a></h3>
                             <p>We provide you the best selling of the used books. You can sell them to us if you have read them once.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-service-2">
                        	<i class="fa fa-truck"></i>
                            <h3><a href="#">Free Shipping</a></h3>
                           <p>We provide free shipping over the $1000 purchase from one country to another with extra discount.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-service-2">
                        	<i class="fa fa-calculator"></i>
                            <h3><a href="#">Returns &amp; Exchange</a></h3>
                           <p>Return and Exchange is possible in 5 days. In case of lost or damage Return & Exchange is not possible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--TABS SECTION START-->
        <div class="tab-head-section-top">
            <div class="container">
                <div class="kd-tab-2">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Our History</a></li>
                        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Our Mission and Values</a></li>
                        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Our Team</a></li>
                        <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Our Services</a></li>
                        <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Community Engagement</a></li>
                        <li role="presentation"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Our Technology</a></li>
                        <li role="presentation"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab">Our Partners</a></li>
                        {{-- <li role="presentation"><a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab">Ledut Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab9" aria-controls="tab9" role="tab" data-toggle="tab">Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab10" aria-controls="tab10" role="tab" data-toggle="tab">Sed Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab11" aria-controls="tab11" role="tab" data-toggle="tab">Ledut Perspiciatis Unde omnis</a></li> --}}
                    </ul>
                
                <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                        	<div class="kode-thumb">
                            	<ul class="bxslider">
                                	<li><img src="images/tabs-img4.png" alt=""></li>
                                    <li><img src="images/tabs-img3.png" alt=""></li>
                                    <li><img src="images/tabs-img5.png" alt=""></li>
                                </ul>
                            </div>
                            <div class="kode-text">
                            	<p>Our library was founded in 1950 with the goal of providing our community with access to the latest information and research. Over the years, we've expanded our resources and services to include online databases, multimedia resources, and much more. Today, we're proud to be one of the most trusted and reliable sources of information in the region.</p>
                                <p></p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>At our library, our mission is simple: to provide our patrons with access to the resources and information they need to succeed. We believe that knowledge is a powerful tool for change, and we're committed to ensuring that everyone has equal access to it. Our values of inclusivity, diversity, and openness guide everything we do, and we're always striving to do better for our community.</p>
                                <p></p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Our library is staffed by a team of dedicated professionals who are passionate about helping people access information. From our experienced librarians to our friendly support staff, everyone at our library is committed to providing our patrons with the best possible experience. Get to know our team and discover the expertise and knowledge they bring to our library.</p>
                                <p></p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab4">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>At our library, we offer a wide range of services and resources to meet the diverse needs of our community. From online research databases to children's storytime, we strive to provide something for everyone. Discover our extensive collection of books, journals, and multimedia resources, as well as the many programs and events we offer throughout the year.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab5">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>At our library, we believe that community engagement is essential to our mission. We're committed to working with local organizations and partners to provide our patrons with the resources and information they need to succeed. From outreach programs to community events, we're always looking for new ways to connect with and serve our community.</p>
                                <p></p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab6">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Our library is committed to staying at the forefront of technology, which is why we're constantly updating and upgrading our systems. From state-of-the-art research databases to our user-friendly online catalog, we're always looking for ways to make it easier for our patrons to access the information they need. Learn more about the advanced technology that powers our library and how it benefits our community.</p>
                                <p></p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab7">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>At our library, we understand the importance of collaboration and partnership. That's why we've formed alliances with a variety of organizations and institutions to bring our patrons even more resources and services. From academic institutions to public libraries, we're always looking for new ways to work together to benefit our community. Discover our many partners and learn how these collaborations are making a positive impact.</p>
                            </div>
                        </div>
                        {{-- <div role="tabpanel" class="tab-pane fade" id="tab8">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.t Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab9">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctrmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab10">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam volupest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab11">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!--TABS SECTION END-->
        <!--VIDEO SECTION START-->
        <section class="kode-video-section-2">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-6">
                    	<div class="kode-video">
                            <a href="#">
                        	   <img src="images/video-bg2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="kode-text">
                        	<h2> Authors, Publications Brief detail Video</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor.</p>
                            <a href="#" class="more">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--VIDEO SECTION END-->
        <!--COUNT UP SECTION START-->
        <div class="count-up-section-2">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">3578</span>
                            <p>Books To Read</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">589</span>
                            <p>Online Users</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">1250</span>
                            <p>Best Authors</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">57</span>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--COUNT UP SECTION END-->
        <!--ABOUT INFO SECTION START-->
        <section>
        	<div class="container">
            	<div class="row">
                	<div class="col-md-6">
                    	<div class="kode-profile-tabs">
                    		<div class="kd-horizontal-tab">
                    	<div class="kode-thumb">
                        	<img src="images/tabs-imgs.png" alt="">
                        </div>
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Info" aria-controls="Info" role="tab" data-toggle="tab">Info</a></li>
                        <li role="presentation"><a href="#Why" aria-controls="Why" role="tab" data-toggle="tab">Why Us</a></li>
                        <li role="presentation"><a href="#Involve" aria-controls="Involve" role="tab" data-toggle="tab">Involve</a></li>
                        <li role="presentation"><a href="#Support" aria-controls="Support" role="tab" data-toggle="tab">Support</a></li>
                      </ul>
                    
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Info">
                        	<p>Location: We're located in the heart of the city, with easy access to public transportation and plenty of parking nearby.
                                Hours: Our hours are designed to accommodate busy schedules, with early morning and evening hours during the week and weekend hours as well.                                                                
                                Membership: Membership is free and open to everyone, regardless of where you live or work.
                                Events: Check out our calendar of events to stay up-to-date on the latest author talks, book clubs, and other programs happening at our library.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Why">
                        	<p>
                                Our library is more than just a collection of books - we're a community of people dedicated to the pursuit of knowledge and lifelong learning. We offer a wide range of resources and services, from our 24-hour full video support to our user-friendly website and physical spaces. Our team of experienced librarians and support staff are here to help you access the information you need to succeed, no matter your background or circumstances. Join us today and experience the difference for yourself!
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Involve">
                        	<p>
                                At our library, we believe that everyone has something to offer. That's why we offer a range of volunteer opportunities, from shelving books to leading book clubs and other programs. If you're interested in getting involved, please don't hesitate to reach out to us. We'd love to hear from you!

                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Support">
                        	<p>
                                Our library is a nonprofit organization that relies on the support of our community to continue offering the resources and services that our patrons rely on. If you're interested in supporting our library, there are many ways to get involved. You can make a donation, become a member, or volunteer your time. Every little bit helps us continue to serve our community. Thank you for your support!

                            </p>
                        </div>
                      </div>
                    
                    </div>
                    	</div>
                    </div>
                    <div class="col-md-6">
                    	<div class="kd-accordion">
                        	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                  <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Our Mission and Vision
                                      <i class="fa fa-minus"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                    Our mission is to provide our patrons with access to the resources and information they need to succeed, regardless of their background or circumstances. We believe that knowledge is a powerful tool for change, and we're committed to ensuring that everyone has equal access to it. Our values of inclusivity, diversity, and openness guide everything we do, from the resources we offer to the programs we provide.
                                    Our vision is to be the leading source of information and knowledge in our community, empowering individuals to achieve their full potential. We strive to create a welcoming and supportive environment where everyone feels comfortable exploring new ideas and learning something new. We're dedicated to staying at the forefront of technology and innovation, and we're always looking for new ways to enhance our services and offerings.
                                    At our library, we're more than just a place to find books - we're a hub of information, ideas, and community. We're committed to our mission and vision, and we're proud to serve our community in this important way.
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      24 Hours full video support
                                      <i class="fa fa-minus"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="panel-body">
                                    At our library, we're committed to providing our patrons with the resources and support they need, whenever they need it. That's why we offer 24-hour full video support, ensuring that you can always access the help you need, no matter the time of day.
                                    Our video support service is staffed by a team of experienced librarians and support staff, who are available around the clock to assist you with any questions or issues you may have. Whether you're having trouble accessing a resource or need help navigating our online catalog, our team is here to help.
                                </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Userfriendly Design
                                      <i class="fa fa-minus"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="panel-body">
                                    At our library, we understand that access to information is only part of the equation - you also need to be able to find and use that information easily. That's why we've prioritized user-friendly design in everything we do, from our website to our physical spaces.
                                    Our website is designed to be intuitive and easy to navigate, with a clean and modern interface that puts the focus on finding the resources you need. Our search function is powerful and efficient, allowing you to quickly find books, articles, and other materials on any topic.    
                                </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--ABOUT INFO SECTION END-->
        <!--TOP AUTHERS START-->
        <section class="kode-top-author gray-bg">
        	<div class="container">
            	<!--SECTION HEADING START-->
            	<div class="section-content">
                	<h2>The Founders</h2>
                    <p>Our library was founded by a group of passionate individuals who believed in the power of knowledge and community. Their vision lives on today through our commitment to providing access to information and resources for all.</p>
                </div>
                <!--SECTION HEADING END-->
                <div class="row">
                    <!--AUTHOR LIST START-->
                    <div class="col-md-4 col-sm-6">
                        <div class="kode-author kode-author-2">
                            <a href="#"><img alt="" src="images/author2.png"></a>
                            <div class="kode-caption">
                                <h4>Akira Llorens</h4>
                                <p>Co-Founder</p>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--AUTHOR LIST END-->
                    <!--AUTHOR LIST START-->
                    <div class="col-md-4 col-sm-6">
                        <div class="kode-author kode-author-2">
                            <a href="#"><img alt="" src="images/author2.png"></a>
                            <div class="kode-caption">
                                <h4>Segismundo Ferrairó</h4>
                                <p>Co-Founder</p>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--AUTHOR LIST END-->
                    <!--AUTHOR LIST START-->
                    <div class="col-md-4 col-sm-6">
                        <div class="kode-author kode-author-2">
                            <a href="#"><img alt="" src="images/author.png"></a>
                            <div class="kode-caption">
                                <h4>Alejandro Molines</h4>
                                <p>Co-Founder</p>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--AUTHOR LIST END-->
                    <!--AUTHOR LIST START-->
                    <div class="col-md-4">
                        <div class="kode-author kode-author-2">
                            <a href="#"><img alt="" src="images/author3.png"></a>
                            <div class="kode-caption">
                                <h4>Ilyas Bsadou</h4>
                                <p>Co-Founder</p>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--AUTHOR LIST END-->
                </div>
            </div>
        </section>
        <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->
    
@endsection
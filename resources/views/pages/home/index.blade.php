<?php
$stylesheet = "home";
?>
@extends('layouts.app')

@section('content')
    <div class="firstSectionWelcome">
        <div class="innerWelcomeSection container">
            <div class="topMessage col-lg-8 clearfix">
                <h3><span>Sitelyft Studios</span> is a Web Development agency based in Ohio that aims for affordability and quality.</h3>
            </div>
            <div class="divide"></div>
            <div class="bottomMessage col-lg-8">
                <p>We provide affordable and stellar web development services to businesses around the world! Quick. Fast. And easy.</p>
            </div>
        </div>
    </div>
    <div class="mainSecondSection">
        <div class="innerMainSecondSection container">
            <div class="leftText col-lg-7">
                <h3>What is our goal?</h3>
                <h1>Our goal is to get you more leads</h1>
                <p>With our web development skills and marketing techniques, we can help your business gain valuable leads and gain new customers. A beautiful website is usually the first impression for your customers!</p>
                <a style="color: #673ab7;text-decoration: none;" href="https://calendly.com/jameslatten/initial-consultation">Schedule a free consultation</a>
                <!-- <a href="mail:hello@sitelyftstudios.com">Lets get started</a> -->
            </div>
            <div class="rightPhoto col-lg-5">
                <div class="innerImage" style="background-image: url(<?php echo url("/"); ?>/images/Digital-Marketing.jpg);"></div>
            </div>
        </div>
    </div>
    <div class="secondSectionWork" id="services">
        <div class="innerSection container">
        	<div class="topHeaderView">
        		<div class="innerHeaderView">
        			<h3>Reach More Customers</h3>
                    <h1>Our Services</h1>
        		</div>
        	</div>
			<div class="row servicesRow sRowOne">
				<div class="serviceBox sBox1 col-lg-4 col-md-4 col-sm-6">
					<div class="innerServiceBox">
						<div class="topArea">
                            <h1><i class="fa fa-code" aria-hidden="true"></i></h1>
                            <h3>Website Development</h3>
                        </div>
                        <div class="bottomArea">
                            <p>We provide professional Front-end and Back-end development to you. We can create meaningful websites for you and provide quality code also. A beautiful website will capture quality leads for you.</p>
                            <a href="mail:hello@sitelyftstudios.com">Get started <i class="fa fa-arrow-right"></i></a>
                        </div>
					</div>	
				</div>
				<div class="serviceBox sBox3 col-lg-4 col-md-4 col-sm-6">
                    <div class="innerServiceBox">
                        <div class="topArea">
                            <h1><i class="fa fa-newspaper" aria-hidden="true"></i></h1>
                            <h3>SEO</h3>
                        </div>
                        <div class="bottomArea">
                            <p>Need to get your site out there?? We can get your website listed in all the top search engines. We can also make sure your website is seen by everyone by placing your site at the top of search results.</p>
                            <a href="mail:hello@sitelyftstudios.com">Get started <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
				</div>
                <div class="serviceBox sBox3 col-lg-4 col-md-4 col-sm-6">
                    <div class="innerServiceBox">
                        <div class="topArea">
                            <h1><i class="fab fa-facebook-square"></i></span></h1>
                            <h3>Social Media</h3>
                        </div>
                        <div class="bottomArea">
                            <p>Need help getting your social media accounts out there? We can for sure help with that! Within a few weeks we can have you posting regularly and getting you the audience you need.</p>
                            <a href="mail:hello@sitelyftstudios.com">Get started <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
				</div>
			</div>
			<div class="row servicesRow sRowTwo">
				<div class="serviceBox sBox3 col-lg-4 col-md-4 col-sm-6">
                    <div class="innerServiceBox">
                        <div class="topArea">
                            <h1><i class="fa fa-ad"></i></h1>
                            <h3>Search & Display Ads</h3>
                        </div>
                        <div class="bottomArea">
                            <p>We can leverage the power of FaceBook Ads, and Google Ads to boost awareness to your brand. We can create a campaign for you that wont break the bank but still catch leads!</p>
                            <a href="mail:hello@sitelyftstudios.com">Get started <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
				</div>
				<div class="serviceBox sBox4 col-lg-4 col-md-4 col-sm-6">
                    <div class="innerServiceBox">
                        <div class="topArea">
                            <h1><i class="fa fa-wrench" aria-hidden="true"></i></h1>
                            <h3>Website Maintenance</h3>
                        </div>
                        <div class="bottomArea">
                            <p>We are here to help tweak and customize your website! We can also fix any issues and bugs you may have on any website you own. Give us a list of tasks and well finish them in no time.</p>
                            <a href="mail:hello@sitelyftstudios.com">Get started <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
				</div>
                <div class="serviceBox sBox3 col-lg-4 col-md-4 col-sm-6">
                    <div class="innerServiceBox">
                        <div class="topArea">
                            <h1><i class="fas fa-user-friends"></i></span></h1>
                            <h3>Lead Generation</h3>
                        </div>
                        <div class="bottomArea">
                            <p>Need help getting your social media accounts out there? We can for sure hep with that! Within a few weeks we can have you posting regularly and getting the audience you need</p>
                            <a href="mail:hello@sitelyftstudios.com">Get started <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </div>
    <div class="tenthSectionStatement statement statement-left">
        <div class="innerStatement">
            <div class="informationContainerHold container">
                <div class="informationMainHold">
                    <div class="topInformation">
                        <h3>Servers and domains on us</h3>
                    </div><div class="divide"></div>
                    <div class="bottomContent">
                        <p>We take care of your servers and domains for you! You wont have to worry about paying for servers or the domain you choose. We use servers from DigitalOcean to provide blazing fast speeds and 99.9% uptime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="latestTestimonial">
        <div class="innerTest container">
            <div class="topHeaderView">
        		<div class="innerHeaderView">
        			<h3>Testimonials</h3>
                    <h1>What Our Customers Are Saying</h1>
        		</div>
        	</div>
            <div class="innerTestimonial">
                <div class="leftPicture col-lg-3 col-md-3">
                    <img src="<?php echo  url('images/test.png'); ?>" />
                </div>
                <div class="rightTest col-lg-9 col-md-9">
                    <p class="test">"I hired James to do a refresh on my website to make it look cleaner and function more smoothly. He did an exceptional job and I could not be happier with his work, professionalism, and the overall enjoyment of working with him. I plan to use James on an ongoing basis. I highly recommend."</p>
                    <div class="bio">
                        <a href="https://www.blairritchey.com/">Blair Ritchey</a>
                        <p>Owner, Blair Ritchey</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fourthSection" id="pricing" style="display: none;">
        <div class="innerSection container">
            <div class="topHeaderView">
                <div class="innerHeaderView">
                    <h3>Unbeatable Prices</h3>
                </div>
            </div>
            <div class="innerWork">
                <div id="generic_price_table">   
                    <section>
                        
                            <div class="container">
                                
                                <!--BLOCK ROW START-->
                                <div class="row">
                                        <div class="col-md-4">
                                    
                                                <!--PRICE CONTENT START-->
                                                <div class="generic_content clearfix">
                                                    
                                                    <!--HEAD PRICE DETAIL START-->
                                                    <div class="generic_head_price clearfix">
                                                    
                                                        <!--HEAD CONTENT START-->
                                                        <div class="generic_head_content clearfix">
                                                        
                                                            <!--HEAD START-->
                                                            <div class="head_bg"></div>
                                                            <div class="head">
                                                                <span>Basic Portfolio</span>
                                                            </div>
                                                            <!--//HEAD END-->
                                                            
                                                        </div>
                                                        <!--//HEAD CONTENT END-->
                                                        
                                                        <!--PRICE START-->
                                                        <div class="generic_price_tag clearfix">	
                                                            <span class="price">
                                                                <span class="sign">$</span>
                                                                <span class="currency">500</span>
                                                                <span class="month" style="display: none;">/MON</span>
                                                            </span>
                                                        </div>
                                                        <!--//PRICE END-->
                                                        
                                                    </div>                            
                                                    <!--//HEAD PRICE DETAIL END-->
                                                    
                                                    <!--FEATURE LIST START-->
                                                    <div class="generic_feature_list">
                                                        <ul>
                                                            <li><span>1</span> Page</li>
                                                            <li><span>No</span> Blog</li>
                                                            <li><span>1-2</span> Week</li>
                                                            <li><span>Fully custom</span></li>
                                                            <li><span>24/7</span> Support</li>
                                                            <li><span>Free</span> Server & Domain</li>
                                                        </ul>
                                                    </div>
                                                    <!--//FEATURE LIST END-->
                                                    
                                                    <!--BUTTON START-->
                                                    <div class="generic_price_btn clearfix">
                                                        <a class="" href="mailto:hello@sitelyftstudios.com">Lets Start</a>
                                                    </div>
                                                    <!--//BUTTON END-->
                                                    
                                                </div>
                                                <!--//PRICE CONTENT END-->
                                                    
                                            </div>

                                    <div class="col-md-4">
                                    
                                        <!--PRICE CONTENT START-->
                                        <div class="generic_content active clearfix">
                                            
                                            <!--HEAD PRICE DETAIL START-->
                                            <div class="generic_head_price clearfix">
                                            
                                                <!--HEAD CONTENT START-->
                                                <div class="generic_head_content clearfix">
                                                
                                                    <!--HEAD START-->
                                                    <div class="head_bg"></div>
                                                    <div class="head">
                                                        <span>Standard Portfolio</span>
                                                    </div>
                                                    <!--//HEAD END-->
                                                    
                                                </div>
                                                <!--//HEAD CONTENT END-->
                                                
                                                <!--PRICE START-->
                                                <div class="generic_price_tag clearfix">	
                                                    <span class="price">
                                                        <span class="sign">$</span>
                                                        <span class="currency">750</span>
                                                        <span class="month" style="display: none;">/MON</span>
                                                    </span>
                                                </div>
                                                <!--//PRICE END-->
                                                
                                            </div>                            
                                            <!--//HEAD PRICE DETAIL END-->
                                            
                                            <!--FEATURE LIST START-->
                                            <div class="generic_feature_list">
                                                <ul>
                                                    <li><span>4</span> Pages</li>
                                                    <li><span>No</span> Blog</li>
                                                    <li><span>1-2</span> Weeks</li>
                                                    <li><span>Fully custom</span></li>
                                                    <li><span>24/7</span> Support</li>
                                                    <li><span>Free</span> Server & Domain</li>
                                                </ul>
                                            </div>
                                            <!--//FEATURE LIST END-->
                                            
                                            <!--BUTTON START-->
                                            <div class="generic_price_btn clearfix">
                                                <a class="" href="mailto:hello@sitelyftstudios.com">Lets Start</a>
                                            </div>
                                            <!--//BUTTON END-->
                                            
                                        </div>
                                        <!--//PRICE CONTENT END-->
                                            
                                    </div>

                                    <div class="col-md-4">
                                    
                                            <!--PRICE CONTENT START-->
                                            <div class="generic_content clearfix">
                                                
                                                <!--HEAD PRICE DETAIL START-->
                                                <div class="generic_head_price clearfix">
                                                
                                                    <!--HEAD CONTENT START-->
                                                    <div class="generic_head_content clearfix">
                                                    
                                                        <!--HEAD START-->
                                                        <div class="head_bg"></div>
                                                        <div class="head">
                                                            <span>Premium Portfolio</span>
                                                        </div>
                                                        <!--//HEAD END-->
                                                        
                                                    </div>
                                                    <!--//HEAD CONTENT END-->
                                                    
                                                    <!--PRICE START-->
                                                    <div class="generic_price_tag clearfix">	
                                                        <span class="price">
                                                            <span class="sign">$</span>
                                                            <span class="currency">1200</span>
                                                            <span class="month" style="display: none;">/MON</span>
                                                        </span>
                                                    </div>
                                                    <!--//PRICE END-->
                                                    
                                                </div>                            
                                                <!--//HEAD PRICE DETAIL END-->
                                                
                                                <!--FEATURE LIST START-->
                                                <div class="generic_feature_list">
                                                    <ul>
                                                        <li><span>6</span> Pages</li>
                                                        <li><span>With</span> Blog</li>
                                                        <li><span>3-4</span> Weeks</li>
                                                        <li><span>Fully custom</span></li>
                                                        <li><span>24/7</span> Support</li>
                                                        <li><span>Free</span> Server & Domain</li>
                                                    </ul>
                                                </div>
                                                <!--//FEATURE LIST END-->
                                                
                                                <!--BUTTON START-->
                                                <div class="generic_price_btn clearfix">
                                                    <a class="" href="mailto:hello@sitelyftstudios.com">Lets Start</a>
                                                </div>
                                                <!--//BUTTON END-->
                                                
                                            </div>
                                            <!--//PRICE CONTENT END-->
                                                
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 30px;"> 
                                    <div class="col-md-4">
                                    
                                        <!--PRICE CONTENT START-->
                                        <div class="generic_content clearfix">
                                            
                                            <!--HEAD PRICE DETAIL START-->
                                            <div class="generic_head_price clearfix">
                                            
                                                <!--HEAD CONTENT START-->
                                                <div class="generic_head_content clearfix">
                                                
                                                    <!--HEAD START-->
                                                    <div class="head_bg"></div>
                                                    <div class="head">
                                                        <span>E-Commerce</span>
                                                    </div>
                                                    <!--//HEAD END-->
                                                    
                                                </div>
                                                <!--//HEAD CONTENT END-->
                                                
                                                <!--PRICE START-->
                                                <div class="generic_price_tag clearfix">	
                                                    <span class="price">
                                                        <span class="sign">$</span>
                                                        <span class="currency">2550</span>
                                                    </span>
                                                </div>
                                                <!--//PRICE END-->
                                                
                                            </div>                            
                                            <!--//HEAD PRICE DETAIL END-->
                                            
                                            <!--FEATURE LIST START-->
                                            <div class="generic_feature_list">
                                                <ul>
                                                    <li><span>1 blog</span> Included</li>
                                                    <li><span>Shop</span> features</li>
                                                    <li><span>Custom</span> Design</li>
                                                    <li><span>4-6</span> Weeks</li>
                                                    <li><span>24/7</span> Support</li>
                                                    <li><span>Free</span> Server & Domain</li>
                                                </ul>
                                            </div>
                                            <!--//FEATURE LIST END-->
                                            
                                            <!--BUTTON START-->
                                            <div class="generic_price_btn clearfix">
                                                <a class="" href="mailto:hello@sitelyftstudios.com">Lets Start</a>
                                            </div>
                                            <!--//BUTTON END-->
                                            
                                        </div>
                                        <!--//PRICE CONTENT END-->
                                            
                                    </div>
                                    <div class="col-md-4">
                                    
                                        <!--PRICE CONTENT START-->
                                        <div class="generic_content clearfix">
                                            
                                            <!--HEAD PRICE DETAIL START-->
                                            <div class="generic_head_price clearfix">
                                            
                                                <!--HEAD CONTENT START-->
                                                <div class="generic_head_content clearfix">
                                                
                                                    <!--HEAD START-->
                                                    <div class="head_bg"></div>
                                                    <div class="head">
                                                        <span>Custom</span>
                                                    </div>
                                                    <!--//HEAD END-->
                                                    
                                                </div>
                                                <!--//HEAD CONTENT END-->
                                                
                                                <!--PRICE START-->
                                                <div class="generic_price_tag clearfix">	
                                                    <span class="price">
                                                        <span class="sign">$</span>
                                                        <span class="currency">75</span>
                                                        <span class="month">/HR</span>
                                                    </span>
                                                </div>
                                                <!--//PRICE END-->
                                                
                                            </div>                            
                                            <!--//HEAD PRICE DETAIL END-->
                                            
                                            <!--FEATURE LIST START-->
                                            <div class="generic_feature_list">
                                                <ul>
                                                    <li><span>1</span> Dedicated Server</li>
                                                    <li><span>Sub Domains</span> Included</li>
                                                    <li><span>1 Domain</span> Included</li>
                                                    <li><span>Fully custom system</span></li>
                                                    <li><span>24/7</span> Support</li>                                                    
                                                    <li><span>Free</span> Server & Domain</li>
                                                </ul>
                                            </div>
                                            <!--//FEATURE LIST END-->
                                            
                                            <!--BUTTON START-->
                                            <div class="generic_price_btn clearfix">
                                                <a class="" href="mailto:hello@sitelyftstudios.com">Lets Start!</a>
                                            </div>
                                            <!--//BUTTON END-->
                                            
                                        </div>
                                        <!--//PRICE CONTENT END-->
                                            
                                    </div>
                                </div>	
                                <!--//BLOCK ROW END-->
                                
                            </div>
                        </section> 
                    </div>
            </div>
        </div>
    </div>
    <div class="thirdSectionStatement statement statement-left">
        <div class="innerStatement">
            <div class="informationContainerHold container">
                <div class="informationMainHold">
                    <div class="topInformation">
                        <h3>WE GET THINGS DONE FAST</h3>
                    </div><div class="divide"></div>
                    <div class="bottomContent">
                        <p>We don't procrastinate on our work! As soon as you give us a task to do no matter how big or small it is, we will get started on it that very second. We wont push your tasks to the side, we make you a priority.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fourthSection" id="work">
        <div class="innerSection container">
            <div class="topHeaderView">
                <div class="innerHeaderView">
                    <h3>Our Best Work</h3>
                </div>
            </div>
            <div class="innerWork">
                <div class="workMod clearfix">
                    <div class="innerWorkMod clearfix">
                        <div class="leftWorkModImage col-lg-4">
                            <div class="imageActual" style="background-image: url(<?php echo  url('images/blair.png'); ?>);background-position: top;"></div>
                        </div>
                        <div class="rightWorkModInfo col-lg-8">
                            <div class="topName">
                                <h3><a href="https://www.blairritchey.com/">Blair Ritchey</a></h3>
                            </div>
                            <div class="bottomInfo">
                                <div class="topMadeWith">
                                    <h3><span><i class="fa fa-circle" aria-hidden="true"></i></span> BigCommerce</h3>
                                </div>
                                <div class="bottomInfoDesc">
                                    <p> Blair Ritchey is a bag designer in Lakewood, Ohio. She tasked us with revamping her current website within a few weeks. We were able to revamp her website and fix a pool of bugs that was already on her website. All in all, we helped boost her customers and gave her a great experience she won't forget</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br /><br />
                <div class="workMod clearfix">
                    <div class="innerWorkMod clearfix">
                        <div class="leftWorkModImage col-lg-4">
                            <div class="imageActual" style="background-image: url(<?php echo  url('images/mutterly.png'); ?>);background-position: top;"></div>
                        </div>
                        <div class="rightWorkModInfo col-lg-8">
                            <div class="topName">
                                <h3><a href="https://mutterly.com">Mutterly</a></h3>
                            </div>
                            <div class="bottomInfo">
                                <div class="topMadeWith">
                                    <h3><span><i class="fa fa-circle" aria-hidden="true"></i></span> Laravel, UX/UI Design, Custom Website</h3>
                                </div>
                                <div class="bottomInfoDesc">
                                    <p>This is a beautiful website aimed at giving people a way to express themselves to the world anonymously. It allows people to blow off steam and get meaningful help from others</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br /><br />
                <div class="workMod clearfix">
                    <div class="innerWorkMod clearfix">
                        <div class="leftWorkModImage col-lg-4">
                            <div class="imageActual" style="background-image: url(<?php echo  url('images/jameslatten.png'); ?>);background-position: top;"></div>
                        </div>
                        <div class="rightWorkModInfo col-lg-8">
                            <div class="topName">
                                <h3><a href="https://jameslatten.com">James Latten</a></h3>
                            </div>
                            <div class="bottomInfo">
                                <div class="topMadeWith">
                                    <h3><span><i class="fa fa-circle" aria-hidden="true"></i></span> UX/UI Design, Custom Website</h3>
                                </div>
                                <div class="bottomInfoDesc">
                                    <p>This is a portfolio website built specifically for James Latten. It showcases who he is and what he does. We took our time with this one to make sure it was fully mobile-responsive, and easily readable by people. We were able to complete this website within 3 weeks!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br /><br />
                <div class="workMod clearfix">
                    <div class="innerWorkMod clearfix">
                        <div class="leftWorkModImage col-lg-4">
                            <div class="imageActual" style="background-position: top;background-image: url(<?php echo  url('images/cropped.png'); ?>);"></div>
                        </div>
                        <div class="rightWorkModInfo col-lg-8">
                            <div class="topName">
                                <h3><a href="http://blog.jameslatten.com/">Jaes Feels</a></h3>
                            </div>
                            <div class="bottomInfo">
                                <div class="topMadeWith">
                                    <h3><span><i class="fa fa-circle" aria-hidden="true"></i></span> Portfolio Website, UX/UI Design, Built for Wordpress, Custom Website</h3>
                                </div>
                                <div class="bottomInfoDesc">
                                    <p>This is the official blog for an aspiring poet. We were tasked to make something custom yet compatible with Wordpress. And we did just that! In all this project took us 2 weeks and its now launched and ready to go.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br /><br />
                <div class="workMod clearfix">
                    <div class="innerWorkMod clearfix">
                        <div class="leftWorkModImage col-lg-4">
                            <div class="imageActual" style="background-position: top;background-image: url(<?php echo  url('images/larryalesley.png'); ?>);"></div>
                        </div>
                        <div class="rightWorkModInfo col-lg-8">
                            <div class="topName">
                                <h3><a href="http://larryalesley.com/">Larry A Lesley</a></h3>
                            </div>
                            <div class="bottomInfo">
                                <div class="topMadeWith">
                                    <h3><span><i class="fa fa-circle" aria-hidden="true"></i></span> Portfolio Website, UX/UI Design, Custom Website</h3>
                                </div>
                                <div class="bottomInfoDesc">
                                    <p>This is the official blog for an artist and fashion designer named Larry Lesley. We were tasked to make something custom yet easy to manage. And we did just that! In all this project took us 3 weeks and its now launched and ready to go.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br /><br />
                <div class="workMod clearfix">
                    <div class="innerWorkMod clearfix">
                        <div class="leftWorkModImage col-lg-4">
                            <div class="imageActual" style="background-position: top;background-image: url(<?php echo  url('images/kronicals.png'); ?>);"></div>
                        </div>
                        <div class="rightWorkModInfo col-lg-8">
                            <div class="topName">
                                <h3><a href="http://kronicals.com/">Kronicals</a></h3>
                            </div>
                            <div class="bottomInfo">
                                <div class="topMadeWith">
                                    <h3><span><i class="fa fa-circle" aria-hidden="true"></i></span> Laravel, Custom Website, UX/UI Design, Custom Website</h3>
                                </div>
                                <div class="bottomInfoDesc">
                                    <p>This is a fully custom social network aimed at giving aspiring poets a chance to show off their work! It was built from the ground up using the Laravel framework. It's fully responsive and ready for mobile devices. It took 2 months to create, and is now launched and ready to go.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fifthSectionStatement statement statement-left">
        <div class="innerStatement">
            <div class="informationContainerHold container">
                <div class="informationMainHold">
                    <div class="topInformation">
                        <h3>COMMUNICATION</h3>
                    </div><div class="divide"></div>
                    <div class="bottomContent">
                        <p>We make sure that we keep in touch with our clients. We will make daily contact with you to make sure you're in the know of whats going on! We also will take screenshots of our progress daily as well and send them too you.</p>
                        <div class="mainCommunicationsDevices">
                            <div class="contactMod removeLPad col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="innerContactMod">
                                    <div class="topIcon">
                                        <h3><i class="fa fa-envelope" aria-hidden="true"></i></h3>
                                    </div>
                                    <div class="bottomInfo">
                                        <h3><a class="emailContactPoint" href="mailto:hello@sitelyftstudios.com">Email</a></h3>
                                        <p>Best way to contact us!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contactMod col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="innerContactMod">
                                    <div class="topIcon">
                                        <h3><i class="fa fa-phone" aria-hidden="true"></i></h3>
                                    </div>
                                    <div class="bottomInfo">
                                        <h3><a class="phoneContactPoint" href="tel:12168897822">Phone</a></h3>
                                        <p>9am to 6pm, Monday through Friday</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contactMod col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="innerContactMod">
                                    <div class="topIcon">
                                        <h3><i class="fa fa-linkedin-square" aria-hidden="true"></i></h3>
                                    </div>
                                    <div class="bottomInfo">
                                        <h3><a class="linkedinContactPoint" href="https://www.linkedin.com/in/jameslattenjr/">linkedin</a></h3>
                                        <p>Come connect with us!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contactMod removeRPad col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="innerContactMod">
                                    <div class="topIcon">
                                        <h3><i class="fa fa-whatsapp" aria-hidden="true"></i></h3>
                                    </div>
                                    <div class="bottomInfo">
                                        <h3><a class="whatsappContactPoint" href="https://api.whatsapp.com/send?phone=12168897822">WhatsApp</a></h3>
                                        <p>9am to 6pm, Monday through Friday</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sixthSectionWork" id="services" style="display: none;">
        <div class="innerSection container">
            <div class="topHeaderView">
                <div class="innerHeaderView">
                    <h3>Monetize Your Website</h3>
                    <div class="divide"></div>
                    <p>We help get your website monetized and ready to go with platforms like Google AdSense!</p>
                </div>
            </div>
            <div class="innerAds">
                <p>Some companies clutter their sites with hundreds of ugly ads that don't return a profit and also stear their customers away from their websites! Well we're here to stop that! We will make sure that we tailor specific ads to what your company is about and also help to you make a nice extra check every month!</p>
            </div>
        </div>
    </div>
@endsection
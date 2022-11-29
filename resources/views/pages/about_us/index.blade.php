<?php
$stylesheet = "about";
?>
@extends('layouts.app')

@section('content')
<div class="topBanner">
    <div class="cover">
        <div class="inner container">
            <h3 class="animated fadeIn">About Us</h3>
            <div class="divide"></div>
            <h4>Learn who we are, and what we do</h4>
        </div>
    </div>
</div>
<div class="bottomArea">
    <div class="innerBottomArea">
        <div class="firstAboutInfo">
        	<div class="container inner">
            	<h3>Who are we?</h3>
                <p>Sitelyft Studios is a small Web Development agency that specialize in building affordable websites for companies big and small. We're located in beautiful Lorain Ohio and enjoy working with people from all over! Everything we do is virtual, making it more convenient for you. </p>
                
                <div class="highlight">
                    <div class="innerHighlight">

                    </div>
                </div>
            </div>
        </div>
        <div class="secondAboutInfo">
        	<div class="container inner">
            	<h3>What can we do?</h3>
            	<p>We build web solutions for companies large and small! We also help with marketing and SEO optimization to help throttle your web presence and get more customers to your company. We provide amazing Web Maintenance services to existing websites!</p>

                <div class="highlight">
                    <div class="innerHighlight">
                        <ul>
                            <li>Website Development</li>
                            <li>Website Planning</li>
                            <li>Website Design</li>
                            <li>Website Maintenance</li>
                            <li>Mobile design</li>
                            <li>Social Media</li>
                            <li>E-Commerce</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="thirdAboutInfo">
            <div class="cover">
                <div class="container inner">
                    <div class="leftProfileImage col-lg-2 col-md-2 col-sm-2 col-xs-4">
                        <img src="https://pbs.twimg.com/media/EwulSmAXAAAIiiB?format=jpg&name=large" />
                    </div>
                    <div class="rightInfo col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <div class="topInfo">
                            <h3>James Latten &middot; <span>Founder</span></h3>
                        </div>
                        <div class="bottomInfo">
                            <p>This is the person that brings everything together. You're mostly going to be in contact with this guy throughout the journey! His goal is to bring amazing and affordable website solutions to you!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
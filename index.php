<!DOCTYPE html>
<?php include './class/include.php'; ?>

<html>
    <head>
        <meta charset="utf-8">
        <title> Sri Lanka Youth || Homepage</title>
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/revolution-slider.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/logo.png" type="image/x-icon">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/preloader.css" rel="stylesheet" type="text/css"/>
        <style>
            .html5-video-player a{
                display: none;
            }

            .tp-banner{
                position: relative;
            }
            .overlay{
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: transparent;
                /*opacity: 0.1;*/
            }
            .overlayFoot{
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 300px;
                background: linear-gradient(rgba(1,1,1,0), rgba(0,0,0,1));
            }
            .overlaytHead{
                position: absolute;
                z-index: 9999;
                top: 0;
                left: 0;
                right: 0;
                height: 500px;
                background: linear-gradient(rgba(0,0,0,1), rgba(1,1,1,0));
            }
        </style>
    </head>
    <body class="someBlock">
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>
            <!-- Main Header-->
            <?php include './header.php'; ?>
            <!--End Main Header -->
            <!--Main Slider-->
            <section class="main-slider" id="scroll-section-one" data-start-height="900" data-slide-overlay="yes">

                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <!--                        <div class="overlay"></div>-->
                        <ul>



                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                                <img src="images/main-slider/image-1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                                <div class="tp-caption sfl sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-150"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><h2>Farm fresh</h2></div>

                                <div class="tp-caption sfr sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-70"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><div class="big-text">Locally Grown</div></div>

                                <div class="tp-caption sfl sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="0"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><a href="shop.html" class="theme-btn btn-style-one">Shop Now</a></div>


                            </li>

                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                                <img src="images/main-slider/image-2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                                <div class="tp-caption sfl sfb tp-resizeme"
                                     data-x="left" data-hoffset="15"
                                     data-y="center" data-voffset="-140"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/leaf-icon.png" alt=""></figure></div>

                                <div class="tp-caption sfr sfb tp-resizeme"
                                     data-x="left" data-hoffset="15"
                                     data-y="center" data-voffset="-10"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><h3>The Huge variety of the freshest <br>fruits and vegetables</h3></div>

                                <div class="tp-caption sfl sfb tp-resizeme"
                                     data-x="left" data-hoffset="15"
                                     data-y="center" data-voffset="110"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><a href="shop.html" class="theme-btn btn-style-one">Shop Now</a> &ensp;&ensp; <a href="shop.html" class="theme-btn btn-style-three">Buy Now</a></div>


                            </li>

                            <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                                <img src="images/main-slider/image-3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                                <div class="tp-caption sft sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-140"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/leaf-icon.png" alt=""></figure></div>

                                <div class="tp-caption sft sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-10"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><h3 class="text-center">The Huge variety of the freshest <br>fruits and vegetables</h3></div>

                                <div class="tp-caption sfb sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="110"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><a href="shop.html" class="theme-btn btn-style-one">Shop Now</a> &ensp;&ensp; <a href="shop.html" class="theme-btn btn-style-three">Buy Now</a></div>


                            </li>

                        </ul>
                        <!--                        <div class="overlaytHead"></div>
                                                <div class="overlayFoot"></div>
                                                
                                                <iframe  width="100%" height="96%"  src="https://www.youtube.com/embed/ijhFmgf6gHc?controls=0&start=5&showinfo=0&rel=0&autoplay=1&loop=1&modestbranding=1&playlist=ijhFmgf6gHc" title="YouTube video player" frameborder="0" showinfo="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        -->
                <!--<iframe src="https://www.youtube.com/embed/1oCxvFEmqRM?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=1oCxvFEmqRM" allow="autoplay" allowfullscreen></iframe>-->


                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </section>


            <!--Intro Section-->
            <section class="intro-section">
                <div class="inner-part">
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="inner-box">
                                <center>
                                    <img src="images/logo.png" alt=""  />
                                </center>

                                <div class="row clearfix" style="margin-top: 20px">
                                    <!--Content Column-->
                                    <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner text-left wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <h3>01. කෘෂි හා ගෘහ ආශ්‍රිත නිෂ්පාදන සංවර්ධනය.   </h3>
                                            <div class="text">
                                                දේශීය කෘෂි හා ගෘහ ආශ්‍රිත නිෂ්පාදන සංවර්ධනය කිරීම හා නන්වාලීම සඳහා අත්වැලක් සැපයීම . 


                                            </div>
                                            <a href="#about_us" class="theme-btn btn-style-two">Read More</a>
                                        </div>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner text-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <h3>02. නිරොගිමත් අනාගත පරපුරක් උදෙසා</h3>
                                            <div class="text">
                                                වස විසෙන් තොර අනාගත දරු පරපුරක් රටට දායාද කිරීම සඳහා ඔබත් අප හා එකවන්න..</div>
                                            <a href="#application_form" class="theme-btn btn-style-two">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--About Farm Section-->
            <section class="about-farm" id="about_us" >
                <div class="auto-container">
                    <!--Section Title-->
                    <div class="sec-title-one">
                        <h2>About our Suhuru Garden. </h2>

                    </div>

                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-lg-5 col-md-4 col-sm-12 col-xs-12" style="margin-top: -30px;">
                            <figure class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="images/about.jpeg" alt="" style="border-radius: 10px;;">
                            </figure>
                        </div>

                        <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12"> 
                            <h2 style="font-weight: 700;font-size: 35px;margin-bottom: 20px;"><i>තරඟ පැවැත්වෙන ආකාරය.</i></h2>

                            <div class="content">
                                <p style="font-size: 20px;">
                                    <span style="color:#49BFAB"> ප්‍රදේශිය </span>- ප්‍රාදේශිය මට්ටමින් සෑම ග්‍රාම නිළධාරී වසමක් ආවරණය වන පරිදි 2021 
                                    නොවැම්බර් පළමු සතිය  තුළ ප්‍රදේශිය ලේකම් කොට්ඨාශ   මට්ටමින්  තරග පැවැත්වේ.      
                                </p>
                                <p style="font-size: 20px;">
                                    <span style="color:#49BFAB"> දිස්ත්‍රික්  </span>- 

                                    දිස්ත්‍රික්  මට්ටමින්  ජයාග්‍රහකයින් ගෙන් තොරාගනු ලැබේ .   2021 නොවැම්බර් දෙවන සතියතුළ තරග පැවැත්වේ. ප්‍රදේශිය  ජයාග්‍රහකයින්  සහභාගී විය හැක.   
                                </p>

                                <p style="font-size: 20px;">
                                    <span style="color:#49BFAB">  ජාතික </span> - දිස්ත්‍රික් 26 ක  ජයාග්‍රහකයින්  අතුරින් තොරාගනු  ලැබේ.
                                    ජාතික තරඟයට සුදුසුකම් ලබන ‍ ගෙවතු 26 අතුරින් හොඳම ගෙවතු තුන තොරාගනු ලැබේ. 
                                </p>
                            </div>


                        </div>

                    </div>

                </div>
            </section>


            <!--Fluid Section One-->
            <section class="fluid-section-one">
                <div class="oval-cut"></div>

                <!--FLoated Image Left-->
                <figure class="floated-image-left wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/back.png" alt=""></figure>
                <!--FLoated Image Right-->
                <figure class="floated-image-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/food-image-3.png" alt=""></figure>

                <div class="outer-box clearfix">
                    <!--Left Column-->
                    <div class="left-column">
                        <div class="clearfix">
                            <div class="inner-box">
                                <h3>We are the best.</h3>
                                <h5>on your first day</h5>
                                <a href="#" class="theme-btn btn-style-three">View More</a>
                            </div>
                        </div>
                    </div>	 
                    <!--Right Column-->
                    <div class="right-column">
                        <div class="clearfix">
                            <div class="inner-box">
                                <h3>Join with us Noq.!</h3>
                                <h5>on your first day</h5>
                                <a href="#" class="theme-btn btn-style-three">View More</a>
                            </div>
                        </div>
                    </div>	

                </div>
            </section>


            <section class="products-section-two" id="rules">
                <div class="auto-container">
                    <!--Section Title-->
                    <div class="sec-title-one">
                        <h2 style="font-weight: 700;">විනිශ්චයේ දි සලකා බලන කරුණු .</h2>
                    </div>

                    <div class="row clearfix">
                        <!--Product Tyle TWo-->
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/1.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <h3>සැළසුම්කරණය.</h3> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/2.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <h3> බෝග විවිධාංගීකරණය..</h3> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/3.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <h3> ගෘහ ආර්ථික නිෂ්පාදන.</h3> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/4.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <h3>කාබනික පොහොර භාවිතය. </h3> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/5.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <h3>පිරිවැය කළමණාකරණය.</h3> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/6.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <h3>කෘෂි ව්‍යවසායකයෙක් වීම.</h3> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/77.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <h3>නවීන තාක්ෂණය භාවිතා කිරීම.</h3> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/11.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <h3>පරිසර හිතකාමී බව.</h3> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/66.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <h3>දේශීය අමු ද්‍රව්‍ය භාවිතා කිරීම.</h3> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <div class="auto-container" id="application_form">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!--Default Links--> 
                        <!--Section Title-->
                        <div class="sec-title-one">
                            <h2  class="font-robot">Application Form.</h2>
                        </div>
                        <!--Billing Details-->
                        <div class="billing-details">
                            <div class="shop-form">
                                <form method="post" action="#" id="form-data">

                                    <div class="row clearfix">

                                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                            <div class="field-label">තරඟකරන කාණ්ඩය | போட்டியிடும் பிரிவு<sup>*</sup></div>
                                            <select class="form-select" name="type" id="type">
                                                <option value="">---- කාණ්ඩය තෝරන්න | பிரிவைத் தேர்ந்தெடுக்கவும். ---</option>
                                                <option value="1">අහාර බෝහ </option>
                                                <option value="2">මල් වගාව</option>
                                                <option value="3">සත්ව පාලනය</option>
                                                <option value="4">ගෘහ ආශ්‍රිත නිෂ්පාදන</option>
                                            </select>
                                        </div>


                                        <div class="form-group col-md- col-sm-6 col-xs-12">
                                            <div class="field-label">සම්පූර්ණ නම |  முழு பெயர்    <sup>*</sup></div>
                                            <input type="text" name="name" id="name" placeholder="Enter Your Full Name">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">උපන්දිනය | பிறந்த தினம்  <sup>*</sup> </div>
                                            <input type="text" name="dob" id="dob" placeholder="YYYY/MM/DD">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">ඊ-තැපෑල | மின்னஞ்சல் முகவரி <sup>*</sup></div>
                                            <input type="email" id="email" name="email" placeholder="Enter Email address.">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">දුරකථන අංකය | தொலைபேசி இலக்கம் <sup>*</sup></div>
                                            <input type="text" id="phone" name="phone" placeholder="Enter Phone Number">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">වට්ස්-ඇප් අංකය | வாட்சப் இலக்கம். </div>
                                            <input type="text" name="whatsapp" id="whatsapp" placeholder="Enter whatsapp Mobile number">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">දිස්ත්‍රික්කය<sup>*</sup></div>
                                            <select class="form-select" name="district" id="district">
                                                <option value="">---- Select the District ---</option>
                                                <?php
                                                $DISTRICTS_OBJ = new Districts(NULL);
                                                $DISTRICTS = $DISTRICTS_OBJ->all();
                                                foreach ($DISTRICTS as $DISTRICT) {
                                                    ?>
                                                    <option value="<?php echo $DISTRICT['name']; ?>"><?php echo $DISTRICT['name']; ?></option>
                                                    <?php
                                                }
                                                ?>


                                            </select>
                                        </div>
                                  
                                        <!--Form Group-->
                                        <!--                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 hidden">
                                                                                    <div class="field-label">Grama Niladari Number</div>
                                                                                    <input type="text" name="field-name" value="" placeholder="">
                                                                                </div>-->


                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">ප්‍රාදේශීය ලේකම් කාර්යාලය <sup>*</sup></div>
                                            <input type="text" id="ds" name="ds" placeholder="Divisional Secretariat">
                                        </div>

      <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">ග්‍රාමනිලධාරි වසම | கிராம சேவகர் பிரிவு <sup>*</sup></div>
                                            <input type="text" id="grama" name="grama" placeholder="Grama Niladari Wasama">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">ලිපිනය | முகவரி<sup>*</sup></div>
                                            <input type="text" name="address" id="address" placeholder="Enter Address">
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">තරුණ ශක්තියෙන් අස්වැද්දූ තරුණ කෘෂි ගොවිපොල 
                                                ඔබේ ගෙවත්තට පැමිණිය හැකි මාර්ගය - ළගම ප්‍රධාන නගරයේ සිට සටහන් කරන්න <br> 
                                                பண்ணைக்கு அணுகல ்- அருகில் உள்ள நகரில் இருந்து</div>
                                            <textarea placeholder="How to reach your location" name="location" id="location"></textarea>
                                        </div>

                                        <div class="row" style="margin-bottom: 30px">
                                            <div class="more-btn-outer text-right"><a href="#" id="create" name="create" class="theme-btn btn-style-four">Submit Application</a></div>

                                        </div>

                                    </div>
                                </form>

                            </div>

                        </div><!--End Billing Details-->
                    </div> 
                </div>

            </div>


            <!--            Our Team
                        <section class="team-section" id="projects">
                            <div class="auto-container">
                                Section Title
                                <div class="sec-title-one">
                                    <h2>පසුගිය වර්ෂයන්හි පැවති ව්‍යාපෘති.  </h2>
                                </div>
            
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        Default Team Member
                                        <div class="default-team-member">
                                            <div class="inner-box clearfix">
                                                Image Column
                                                <div class="image-column"><figure class="image"><a href="#"><img src="images/suhuru/01.jpg" alt=""></a></figure></div>
                                                Content Column
                                                <div class="content-column">
                                                    <div class="inner">
                                                        <h3>තරුණ කෘෂි ගොවිපළ</h3>
                                                        <div class="text">
                                                            තරුණ කෘෂි ගොවිපළ හරහා  රන් අස්වනු නෙලීමක  ආරම්භය
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        Default Team Member
                                        <div class="default-team-member alternate">
                                            <div class="inner-box clearfix">
                                                Image Column
                                                <div class="image-column"><figure class="image"><a href="#"><img src="images/suhuru/02.jpg" alt=""></a></figure></div>
                                                Content Column
                                                <div class="content-column">
                                                    <div class="inner">
                                                        <h3>තරුණ කෘෂි ගොවිපළ</h3>
                                                        <div class="text">
                                                            නව තාක්ෂණයෙන් බල ගන්වන ලද ජාතික තරුණ සේවා සභාවේ ගොවිපළ ඉහල ප්‍රගතියක් අත් කරගනිමින් සිටී.     
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        Default Team Member / Vertical
                                        <div class="default-team-member vertical">
                                            <div class="inner-box clearfix">
                                                Image Column
                                                <div class="image-column"><figure class="image"><a href="#"><img src="images/suhuru/03.jpg" alt=""></a></figure></div>
                                                Content Column
                                                <div class="content-column">
                                                    <div class="inner">
                                                        <h3>අපේ ගෙවත්ත</h3>
                                                        <div class="text">
                                                            අපේ ගෙවත්ත - අභිමානවත් තාරුණ්‍යයක්, සෞභග්‍යමත් හෙටක් .</div>
            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </section>
            -->


            <!--Fluid Section Two-->
            <section class="fluid-section-two">

                <div class="outer-box clearfix">
                    <div class="container" style="padding: 55px 0px 55px 0px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="clearfix">
                                    <div class="inner-box">
                                        <h3>  රුපියල් ලක්ෂ 150 තරුණ කෘෂි විව්‍යසායකින් අතර බෙදීයයි.</h3>
                                        <h3>Stay tune for updates</h3>

                                        <div class="subscribe-form">
                                            <form method="post" action="#">
                                                <div class="form-group">
                                                    <input type="email" name="email" value="" placeholder="">

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!--            <section class="news-section" id="news">
    <div class="auto-container">
        Section Title
        <div class="sec-title-one">
            <h2 >Latest news updates</h2>
        </div>

        <div class="row clearfix">

            News Style One
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="#"><img src="images/resource/blog-image-1.jpg" alt=""></a></figure>
                    <div class="lower-content">
                        <h3><a href="#">ලස්සන රටක් </a></h3>
                        <div class="text">
                            ශ්‍රී ලංකාවේ ප්‍රාදේශීය ලේකම් කොට්ඨාස 334 ක් පුරා විහිදී ඇති යෞවන සමාජ තරුණ තරුණියන්ගේ නිර්මාණශීලී චින්තනය උදෙසා නව දිරිගැන්වීමක් ලබා දෙමින් "ලස්සන රටක්" ව්‍යාපෘතිය ක්‍රියාත්මක වේ. ඒ සඳහා රුපියල් මිලියන 16.7 ක් වූ මූල්‍යමය ප්‍රතිපාදන(එක් කොට්ඨාසයකට රුපියල් 50,000 බැගින්) වෙන් කර  </div>

                    </div>
                </div>
            </div>

            News Style One
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="#"><img src="images/resource/blog-image-2.jpg" alt=""></a></figure>
                    <div class="lower-content">
                        <h3><a href="#">
                                සාරභූමි යෞවනයේ ව්‍යවසායකයන්ගේ එකමුතුව
                            </a></h3>
                        <div class="text">
                            දේශීය කෘෂි නිෂ්පාදන යෞවනයේ ව්‍යවසායකයන්ගේ එකමුතුවෙන් සිදු කරනු ලබන "තරුණ ගොවි නිෂ්පාදන අලෙවිය හා ප්‍රදර්ශනය" අප්‍රේල් මස 4 වන දින සිට 6 වන දා දක්වා ජාතික තරුණ සේවා සභා පරිශ්‍රයේ දී පැවැත්වේ.
                        </div>

                    </div>
                </div>
            </div>

            News Style One
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="blog-single.html"><img src="images/resource/blog-image-3.jpg" alt=""></a></figure>
                    <div class="lower-content">
                        <h3><a href="blog-single.html">
                                ඩ්‍රෝන තාක්ෂණය කෘෂිකාර්මික බීජ රෝපණයට </a></h3>
                        <div class="text">
                            ලංකාවේ ප්‍රථම වරට නවීන තාක්ෂණය ඔස්සේ GPS හා ඩ්‍රෝන යානා තාක්‍ෂණය භාවිත කරමින් ජාතික තරුණ සේවා සභාවට අයත් අගුණකොළපැලැස්ස එරමිණියාය පුහුණු මධ්‍යස්ථාන භූමීයේ කෂිකාර්මික බීජ රෝපණය පැවැත්විණි. 
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>-->

            <section class="welcome-section" style="background-color: #FFF" >
                <div class="auto-container"> 

                    <div class="row clearfix">
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box" >
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/11.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner" style="padding: 15px 30px 15px !important;">
                                            <h3>ආත්ම තෘප්තිය හා අලංකාර ගෙවතු උද්‍යානයක් හිමි විම</h3> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/22.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner" style="padding: 15px 30px 15px !important;">
                                            <h3>වස විෂ නැති පෝෂ්‍යදායි එළවළු, පළතුරු, පළා වර්ග</h3>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#" >
                                                <img src="images/icons/33.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner" style="padding: 15px 30px 15px !important;">
                                            <h3> නිෂ්පාදන අළෙවිකර මුදල් ඉපයිම සුහඳතාවය වර්ධනය </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/44.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner" style="padding: 15px 30px 15px !important;">
                                            <h3>ශරිරයට ව්‍යායාම හා මනසට සැහැල්ලුව</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#" >
                                                <img src="images/icons/55.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner" style="padding: 15px 30px 15px !important;">
                                            <h3>අතිරික්ත පැළ අළෙවි කර ආදායම් ලැබිම</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="images/icons/66.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner" style="padding: 15px 30px 15px !important;">
                                            <h3>අතිරික්ත පැළ අළෙවි කර ආදායම් ලැබිම</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>

            <section class="call-to-action-one">

                <!--Floted Image Left-->
                <figure class="floated-image-left wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;"><img src="images/resource/man-with-food-2.png" alt=""></figure>

                <!--Floted Image Right-->
                <figure class="floated-image-right wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;"><img src="images/resource/food-image-12.png" alt=""></figure>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="sub-title">HOTLINE</div>
                        <div class="phone-number"> (+94) 11 285 0986</div>
                        <div class="text">You can contaact with us quickly. Call for us any time  ...</div>
                    </div>
                </div>
            </section>
            <!--Main Footer / Footer Style One-->
            <?php include './footer.php'; ?>

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


        <script src="js/jquery.js"></script> 
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/revolution.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script>
        <script src="js/mixitup.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/script.js"></script>
        <script src="sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!--Google Map APi Key-->
        <script src="http://maps.google.com/maps/api/js?key="></script>
        <script src="js/map-script.js"></script>
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="ajax/js/booking.js" type="text/javascript"></script>
        <!--End Google Map APi-->

        <script>

        </script>
    </body>

</html>
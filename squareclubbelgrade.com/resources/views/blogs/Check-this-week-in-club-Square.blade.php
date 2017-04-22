
@extends('layouts.master')

@section('meta')

        
        <meta property="fb:pages" content="squareclubbelgrade">

        <meta name="description" content="Ovog petka posetite novootvoreni Beogradski noćni klub Square i sigurno nećete pogrešiti. Čekaju vas popularni pevači zabavne i narodne muzike - Nemanja Staletović i Tamara Toković..."/>

        <meta property="og:locale" content="en_US"/>

        <meta property="og:type" content="website"/>

        <meta property="og:url" content="http://squareclubbelgrade.com/news/Check-this-week-in-club-Square"/>

        <meta property="og:title" content="Check this week: " />

        <meta property="og:description" content="Check this week: Thursday night with Retro music (The Nineties)Friday night The Best Serbian Pop Music Live (Nas Petak)Saturday night Only the most popular RnB i House hits played by DJ Mark Funk (Blood & Mode)" />

        <meta property="og:site_name" content="Square Club Belgrade"/>
        
        <meta property="og:image" content="<?php echo url("") ?>/images/blog/blog1.jpg"/>


@stop

@section('scripts')

@stop

@section('breadcrumb')
<!-- =============== START BREADCRUMB ================ -->
<section class="no-mb">
    <div class="row">
        <div class="col-sm-12">
            <div class="before-FullscreenSlider"></div>
            <div class="breadcrumb-fullscreen-parent phone-menu-bg">
                <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image:url(<?php echo url("") ?>/images/blog/blog1.jpg);" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                    <div class="breadTxt breadSingle">
                        <h2>Check this week in Club Square </h2>
                        <p>
							<b>Check this week: <br>
							Thursday night with Retro music (The Nineties) <br>
							Friday night The Best Serbian Pop Music Live (Nas Petak) <br>
							Saturday night Only the most popular RnB i House hits played by DJ Mark Funk (Blood & Mode)</p></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =============== END BREADCRUMB ================ -->
@stop

@section('content')
<section class="blogSingle padding" id="content">
    <div class="container">
        <div class="row">
            <div class="blog-left">
                <div class="col-sm-8">
                    <div class="owl-carousel">
                        <div class="item"><img src="<?php echo url("/") ?>/images/blog/blog1.jpg" alt=""></div>
                    </div>
                    <div class="title">
						<br><br>
                        <h2>This week in Square Club!</h2>
                    </div>
                    <div class="paragraph">
                        <p>
                            Every Thursday resident DJ Alex Tic is throwing The best retro parties at <b>Square Club Belgrade </b>. Music of the Nineties is something that we all love, and on Thursdays we have a chance to party from dusk till dawn with the best songs ever made.
                        </p>
                        <p>
                            <br/><br/>
                            <img src="<?php echo url("/") ?>/images/blog/blog2.jpg">       
 							
                        </p>
                        <p>
                         <b>  The Address of <b>Square Club Belgrade</b> is at city center, where all fun is. We warmly suggest you<b> VIP section </b>so you can party like a boss! Make a reservation and feel why is the <b>Square Club Belgrade </b>one of the best in Belgrade.</b>
                            <br/><br/>
                                                     <br/><br/>
                            <img src="<?php echo url("/") ?>/images/blog/blog3.jpg">       
      <br/><br/>
                            <img src="<?php echo url("/") ?>/images/blog/blog4.jpg"> 
                        </p>
                        <p>
                          Seasson closing is around 1st week of may, so dont miss a chance to visit all days of Square. <br>
							<b>Feel free and make your group reservation right now!</b>

                                  <br/><br/>
                            <img src="<?php echo url("/") ?>/images/blog/blog5.jpg"> 
							      <br/><br/>
                            <img src="<?php echo url("/") ?>/images/blog/blog6.jpg">   	
 
                        </p>

                    </div>
                    
                    <div class="author-info">
                        <div class="fb-comments" data-href="https://www.facebook.com/SquareClubBelgrade/posts/1699958606961247" data-numposts="5" data-mobile="true"></div>
                    </div> 
                    
                </div>
            </div><!-- end blog-left -->
            <div class="blog-right">
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="blogSidebar">
                        <div class="widget">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul>
                                <li><a href="{{ route("blog", ["blog_id" => "Roby-Rob-in-Square-this-Saturday"]) }}"> - Roby Rob in Square this Saturday</a></li>
                            </ul>
                        </div><!-- end widget -->
                        <div class="widget next-events">
                            <h3 class="widget-title">Next Events</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="<?php echo url("/") ?>/images/events/thursday.png">
                                </div>
                                <div class="col-sm-12">
                                    <img src="<?php echo url("/") ?>/images/events/friday.png">
                                </div>
                                <div class="col-sm-12">
                                    <img src="<?php echo url("/") ?>/images/events/saturday.png">
                                </div>
                                <div class="col-sm-12">
                                    <img src="<?php echo url("/") ?>/images/events/sunday.png">
                                </div>
                            </div>
                        </div><!-- end widget -->
                        <div class="widget">
                            <h3>Instagram</h3>
                            <div class="instagram-widget">
                                <!-- SnapWidget -->
                                <script src="https://snapwidget.com/js/snapwidget.js"></script>
                                <iframe src="https://snapwidget.com/embed/301262" class="snapwidget-widget" allowTransparency="true" frameborder="0" 
                                        scrolling="no" style="border:none; overflow:hidden; width:100%; ">
                                </iframe>
                            </div>
                        </div><!-- end widget -->
                    </div><!-- end blogSidebar -->
                </div><!-- end col-sm03 -->
            </div><!-- end blog-right -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- =============== END BLOG SINGLE ================ -->
@stop
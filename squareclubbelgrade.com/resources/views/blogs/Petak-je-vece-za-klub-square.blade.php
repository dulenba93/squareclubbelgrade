

@extends('layouts.master')



@section('meta')



        

        <meta property="fb:pages" content="squareclubbelgrade">



        <meta name="description" content="Ovog petka posetite novootvoreni Beogradski noćni klub Square i sigurno nećete pogrešiti. Čekaju vas popularni pevači zabavne i narodne muzike - Nemanja Staletović i Teodora Toković..."/>



        <meta property="og:locale" content="en_US"/>



        <meta property="og:type" content="website"/>



        <meta property="og:url" content="http://squareclubbelgrade.com/news/Petak-je-vece-za-klub-square"/>



        <meta property="og:title" content="Petak je veče za klub SQUARE -Nastupaju fenomenalni Nemanja Staletović i Teodora Toković!" />



        <meta property="og:description" content="Ovog petka posetite novootvoreni Beogradski noćni klub Square i sigurno nećete pogrešiti. Čekaju vas popularni pevači zabavne i narodne muzike - Nemanja Staletović i Teodora Toković..." />



        <meta property="og:site_name" content="Square Club Belgrade"/>

        

        <meta property="og:image" content="<?php echo url("") ?>/images/blog/vaspetaknaslov.jpg"/>





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

                <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image:url(<?php echo url("") ?>/images/blog/vaspetaknaslov.jpg);" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">

                    <div class="breadTxt breadSingle">

                        <h2>Petak je veče za klub SQUARE </h2>

                        <p>Nastupaju fenomenalni Nemanja Staletović i Teodora Toković!</p>

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

                        <div class="item"><img src="<?php echo url("/") ?>/images/blog/vas-petak7.jpg" alt=""></div>

                    </div>

                    <div class="title">

						<br><br>

                        <h2>Petak je veče za klub SQUARE!</h2>

                    </div>

                    <div class="paragraph">

                        <p>

                            Ovog petka posetite novootvoreni Beogradski noćni klub <b>Square</b> i sigurno nećete pogrešiti. Čekaju vas popularni pevači zabavne i narodne muzike - Nemanja Staletović i Teodora Toković. 

                        </p>

                        <p>

                            <br/><br/>

                            <img src="<?php echo url("/") ?>/images/blog/vas-petak1.jpg">       

 							

                        </p>

                        <p>

                         <b>  Pored toga klub Square spremio je za vas odličnu promociju kojoj ste se posebno obradovali prošli petak.

					Za poručenu flašu pića do 01:00h drugu dobijate potpuno besplatno :), savršeno zar ne?</b>

                            <br/><br/>

                                                     <br/><br/>

                            <img src="<?php echo url("/") ?>/images/blog/vas-petak4.jpg">       

      <br/><br/>

                            <img src="<?php echo url("/") ?>/images/blog/vas-petak5.jpg"> 

                        </p>

                        <p>

                           A u SUBOTU vas očekuje RNB & HOUSE veče uz fenomenalnog Dj Alex Tic-a uz Akciju za sve devojke do 01:00h besplatni kokteli ! To može samo Beogradski klub SQUARE koji se nalazi u strogom centru Beograda ...

                                  <br/><br/>

                            <img src="<?php echo url("/") ?>/images/blog/vas-petak6.jpg"> 

							      <br/><br/>

                            <img src="<?php echo url("/") ?>/images/blog/vas-petak2.jpg">   	

      <br/><br/>

                            <img src="<?php echo url("/") ?>/images/blog/vas-petak3.jpg">  

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
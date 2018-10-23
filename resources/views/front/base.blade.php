<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themexriver.com/zxp/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 11:56:31 GMT -->
<head>
    <meta charset="UTF-8" />
    <title>Page5s - @section('title') Trang Chủ @show</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('') }}front/zxp/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}front/zxp/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <style>
        body a:not(.fas),p,h3,h2{
            font-family: 'Source Sans Pro', sans-serif !important;
        }
    </style>
</head>
<body class="active-preloader-ovh">

<div class="preloader"><div class="spinner"></div></div> <!-- /.preloader -->



<header class="header header-home-one">
    <div class="header-top">
        <div class="container">
            <div class="pull-left left-contact-info">
                <p><i class="fas fa-envelope-open"></i>info-desk@zxp.com</p><!--
                --><p><i class="zxp-icon-old-telephone-ringing"></i>+012 (3546) 547</p>
            </div><!-- /.pull-left -->
            <div class="pull-right right-contact-info">
                <p><i class="fas fa-clock"></i>Mon - Fri : 8:00 AM to 7:00 PM</p><!--
                --><p>
                    <i class="fas fa-globe"></i>
                    <span class="select-box">
                        <select class="selectpicker" name="languages">
                            <option value="">EN</option>
                            <option value="1">BN</option>
                            <option value="2">DU</option>
                        </select>
                    </span><!-- /.select-box -->
                </p>
            </div><!-- /.pull-right -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed zxp-icon-menu" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false"> </button>
                <a class="navbar-brand" href="{{ url('') }}">
                    <img src="{{ asset('') }}logo/page5s.png" alt="Awesome Image"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">

                <ul class="nav navbar-nav navigation-box">
                    <li class="current">
                        <a href="index-2.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index-2.html">Home Page One</a></li>
                            <li><a href="index2.html">Home Page Two</a></li>
                            <li><a href="index3.html">Home Page Three</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li> <a href="#">Giới Thiệu</a> </li>
                    <li>
                        <a href="services.html">Services</a>
                        <ul class="sub-menu">
                            <li> <a href="interior-design.html">Interior Design</a> </li>
                            <li><a href="metal-roofing.html">Metal Roofing</a></li>
                            <li><a href="home-expansion.html">Home Expansion</a></li>
                            <li><a href="tower-construction.html">Tower Construction</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li> <a href="projects.html">Projects</a> </li>
                            <li> <a href="project-single.html">Projects Single</a> </li>
                            <li><a href="faq.html">FAQ Page</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog Classic</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li> <a href="contact.html">Contact</a> </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="right-side-box">
                <a href="#test-search" class="fas fa-search search-btn popup-with-zoom-anim"></a><!--
                --><a href="{{ url('login') }}" class="rqa-btn">Đăng Nhập</a>
            </div><!-- /.right-side-box -->
        </div><!-- /.container -->
    </nav>
</header><!-- /.header -->



<div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active slide-1" style="background-image: url(http://www.thebusinessalliance.net/wp-content/uploads/2018/04/promote-your-business.jpg);background-position: center center;">

            <div class="carousel-caption">
                <div class="container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h3 data-animation="animated fadeInUp">Facebook Marketing Với Chi Phí 0 Đồng</h3>
                            <h2 data-animation="animated fadeInUp">Tiếp cận hàng triệu khách hàng</h2>
                            <p data-animation="animated fadeInDown">Tăng doanh số 1000%</p>
                            <a href="{{ url('login') }}" class="banner-btn" data-animation="animated fadeInDown">Bắt Đầu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--
        <div class="item slide-2" style="background-image: url(https://www.freegreatpicture.com/files/photo106/52752-hold-it-in-the-palm-tree-creative.jpg);background-position: center center;">

            <div class="carousel-caption">
                <div class="container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h3 data-animation="animated fadeInUp">Your Dream</h3>
                            <h2 data-animation="animated fadeInUp">Our Inspirations</h2>
                            <p data-animation="animated fadeInDown">An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href="#" class="banner-btn" data-animation="animated fadeInDown">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item slide-3" style="background-image: url({{ asset('') }}front/zxp/img/banner-1-3.jpg);background-position: center center;">

            <div class="carousel-caption">
                <div class="container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h3 data-animation="animated fadeInUp">Your Dream</h3>
                            <h2 data-animation="animated fadeInUp">Our Strength</h2>
                            <p data-animation="animated fadeInDown">An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href="#" class="banner-btn" data-animation="animated fadeInDown">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --}}
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fas fa-angle-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fas fa-angle-right"></i>
        <span class="sr-only">Next</span>
    </a>

    <ul class="carousel-indicators list-inline custom-navigation">
        <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--
        --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li><!--
        --><li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>
    </ul>
</div>


<section class="service-style-one sec-pad">
    <div class="container">
        <div class="sec-title">
            <div class="row">
                <div class="col-md-3">
                    <h3>What We Do</h3>
                </div><!-- /.col-md-3 -->
                <div class="col-md-6">
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br /> deserunt mollit anim id est laborum.</p>
                </div><!-- /.col-md-6 -->
                <div class="col-md-3 text-right">
                    <a href="#" class="thm-btn bordered">All Services</a>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.sec-title -->
        <div class="service-carousel-one owl-theme owl-carousel">
            <div class="item">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/service-1-1.jpg" alt="Awesome Image"/>
                        <a href="#" class="read-more fas fa-link"></a>
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <div class="icon-box">
                            <i class="zxp-icon-insurance"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <a href="#"><h3>House Remodel</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.content-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.item -->
            <div class="item">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/service-1-2.jpg" alt="Awesome Image"/>
                        <a href="#" class="read-more fas fa-link"></a>
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <div class="icon-box">
                            <i class="zxp-icon-skyline"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <a href="#"><h3>Tower Construction</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.content-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.item -->
            <div class="item">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/service-1-3.jpg" alt="Awesome Image"/>
                        <a href="#" class="read-more fas fa-link"></a>
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <div class="icon-box">
                            <i class="zxp-icon-couch"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <a href="#"><h3>Interior Design</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.content-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.item -->
            <div class="item">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/service-1-4.jpg" alt="Awesome Image"/>
                        <a href="#" class="read-more fas fa-link"></a>
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <div class="icon-box">
                            <i class="zxp-icon-plan"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <a href="#"><h3>Metal Roofing</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.content-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.item -->
            <div class="item">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/service-1-5.jpg" alt="Awesome Image"/>
                        <a href="#" class="read-more fas fa-link"></a>
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <div class="icon-box">
                            <i class="zxp-icon-wallpaper"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <a href="#"><h3>Plumbing Service</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.content-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.item -->
            <div class="item">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/service-1-6.jpg" alt="Awesome Image"/>
                        <a href="#" class="read-more fas fa-link"></a>
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <div class="icon-box">
                            <i class="zxp-icon-stairs"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <a href="#"><h3>Building Renovation</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.content-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.item -->
            <div class="item">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/service-1-1.jpg" alt="Awesome Image"/>
                        <a href="#" class="read-more fas fa-link"></a>
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <div class="icon-box">
                            <i class="zxp-icon-insurance"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <a href="#"><h3>House Remodel</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.content-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.item -->
            <div class="item">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/service-1-2.jpg" alt="Awesome Image"/>
                        <a href="#" class="read-more fas fa-link"></a>
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <div class="icon-box">
                            <i class="zxp-icon-skyline"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <a href="#"><h3>Tower Construction</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.content-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.item -->
            <div class="item">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/service-1-3.jpg" alt="Awesome Image"/>
                        <a href="#" class="read-more fas fa-link"></a>
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <div class="icon-box">
                            <i class="zxp-icon-couch"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <a href="#"><h3>Interior Design</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.content-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-style-one sec-pad -->

<section class="about-style-two">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('') }}front/zxp/img/about-feature-1-1.jpg" class="pull-right" alt="Awesome Image"/>
            </div><!-- /.col-md-5 -->
            <div class="col-md-7">
                <div class="about-content">
                    <h3>About Company</h3>
                    <span>Excepteur sint occaecat cupidatat non proident.</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexe rc itation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure.</p>
                    <div class="brand-logos">
                        <img src="{{ asset('') }}front/zxp/img/about-b-1-1.png" alt="Awesome Image"/>
                        <img src="{{ asset('') }}front/zxp/img/about-b-1-2.png" alt="Awesome Image"/>
                        <img src="{{ asset('') }}front/zxp/img/about-b-1-3.png" alt="Awesome Image"/>
                    </div><!-- /.brand-logos -->
                </div><!-- /.about-content -->
            </div><!-- /.col-md-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-style-two -->

<section class="project-style-one sec-pad pb0">
    <div class="container-fluid">
        <div class="sec-title text-center">
            <h3>Featured Projects</h3>
            <p>Ad minim veniam, quis nostrudexe rc itation ullamco laboris nisi ut aliquip ex ea com modo consequat.</p>
        </div><!-- /.sec-title -->
        <div class="gallery-filter">
            <ul class="post-filter masonary text-center">
                <li class="filter active" data-filter=".masonary-item"><span>All</span></li>
                <li class="filter " data-filter=".construction"><span>Construction</span></li>
                <li class="filter " data-filter=".oil"><span>Oil Plant</span></li>
                <li class="filter " data-filter=".mechanical"><span>Mechanical</span></li>
                <li class="filter " data-filter=".welding"><span>Welding</span></li>
            </ul><!-- /.post-filter -->
        </div><!-- /.gallery-filter -->
        <div class="row masonary-layout filter-layout" data-filter-class="filter">
            <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item construction oil">
                <div class="single-project-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/project-1-1.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="projects.html" class="more-btn fas fa-link"></a>
                                    <h3>Houston Plant</h3>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-project-style-one -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item construction mechanical">
                <div class="single-project-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/project-1-2.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="projects.html" class="more-btn fas fa-link"></a>
                                    <h3>Houston Plant</h3>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-project-style-one -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item construction oil">
                <div class="single-project-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/project-1-3.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="projects.html" class="more-btn fas fa-link"></a>
                                    <h3>Houston Plant</h3>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-project-style-one -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item mechanical oil">
                <div class="single-project-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/project-1-4.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="projects.html" class="more-btn fas fa-link"></a>
                                    <h3>Houston Plant</h3>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-project-style-one -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item welding">
                <div class="single-project-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/project-1-5.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="projects.html" class="more-btn fas fa-link"></a>
                                    <h3>Houston Plant</h3>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-project-style-one -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item mechanical">
                <div class="single-project-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/project-1-6.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="projects.html" class="more-btn fas fa-link"></a>
                                    <h3>Houston Plant</h3>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-project-style-one -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item construction">
                <div class="single-project-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/project-1-7.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="projects.html" class="more-btn fas fa-link"></a>
                                    <h3>Houston Plant</h3>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-project-style-one -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item welding">
                <div class="single-project-style-one">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/project-1-8.jpg" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="projects.html" class="more-btn fas fa-link"></a>
                                    <h3>Houston Plant</h3>
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.img-box -->
                </div><!-- /.single-project-style-one -->
            </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.project-style-one -->

<section class="cta-style-one">
    <div class="inner">
        <div class="container">
            <div class="title pull-left">
                <h3>We provide innovative Product Solutions for sustainable progress.</h3>
            </div><!-- /.title pull-left -->
            <div class="btn-box pull-right">
                <a href="#" class="cta-btn">More Projects</a>
            </div><!-- /.btn-box -->
        </div><!-- /.container -->
    </div><!-- /.inner -->
</section><!-- /.cta-style-one -->

<section class="testimonials-style-one sec-pad">
    <div class="container">
        <div class="sec-title">
            <div class="row">
                <div class="col-md-4">
                    <h3>Clients’ Review</h3>
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam <br /> rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archite.</p>
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.sec-title -->
        <div class="testimonials-carousel-style-one owl-theme owl-carousel">
            <div class="item">
                <div class="single-testimonial-style-one">
                    <div class="top-box">
                        <i class="qoute-icon zxp-icon-right-quote"></i>
                        <div class="icon-box">
                            <img src="{{ asset('') }}front/zxp/img/testi-1-1.jpg" alt="Awesome Image"/>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Outstanding Quality</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div><!-- /.stars -->
                        </div><!-- /.text-box -->
                    </div><!-- /.top-box -->
                    <div class="content-box">
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, <br /> con sectetur, adipisci velit, sed quia non num quam eius modi tem <br /> pora incid unt ut labore et dolore magnam.</p>
                        <h4>- Ida Leopard, Google</h4>
                    </div><!-- /.content-box -->
                </div><!-- /.single-testimonial-style-one -->
            </div><!-- /.item -->
            <div class="item">
                <div class="single-testimonial-style-one">
                    <div class="top-box">
                        <i class="qoute-icon zxp-icon-right-quote"></i>
                        <div class="icon-box">
                            <img src="{{ asset('') }}front/zxp/img/testi-1-2.jpg" alt="Awesome Image"/>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Professional Handling</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div><!-- /.stars -->
                        </div><!-- /.text-box -->
                    </div><!-- /.top-box -->
                    <div class="content-box">
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, <br /> con sectetur, adipisci velit, sed quia non num quam eius modi tem <br /> pora incid unt ut labore et dolore magnam.</p>
                        <h4>- Jackelyn Fernendez, Twitter</h4>
                    </div><!-- /.content-box -->
                </div><!-- /.single-testimonial-style-one -->
            </div><!-- /.item -->

            <div class="item">
                <div class="single-testimonial-style-one">
                    <div class="top-box">
                        <i class="qoute-icon zxp-icon-right-quote"></i>
                        <div class="icon-box">
                            <img src="{{ asset('') }}front/zxp/img/testi-1-3.jpg" alt="Awesome Image"/>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Outstanding Quality</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div><!-- /.stars -->
                        </div><!-- /.text-box -->
                    </div><!-- /.top-box -->
                    <div class="content-box">
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, <br /> con sectetur, adipisci velit, sed quia non num quam eius modi tem <br /> pora incid unt ut labore et dolore magnam.</p>
                        <h4>- Mitsuko Cristal, Baymax Co.</h4>
                    </div><!-- /.content-box -->
                </div><!-- /.single-testimonial-style-one -->
            </div><!-- /.item -->
            <div class="item">
                <div class="single-testimonial-style-one">
                    <div class="top-box">
                        <i class="qoute-icon zxp-icon-right-quote"></i>
                        <div class="icon-box">
                            <img src="{{ asset('') }}front/zxp/img/testi-1-4.jpg" alt="Awesome Image"/>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Professional Handling</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div><!-- /.stars -->
                        </div><!-- /.text-box -->
                    </div><!-- /.top-box -->
                    <div class="content-box">
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, <br /> con sectetur, adipisci velit, sed quia non num quam eius modi tem <br /> pora incid unt ut labore et dolore magnam.</p>
                        <h4>- Millicent Ket, Google</h4>
                    </div><!-- /.content-box -->
                </div><!-- /.single-testimonial-style-one -->
            </div><!-- /.item -->
        </div><!-- /.testimonials-carousel-style-one -->
        <div class="more-btn-box text-center">
            <a href="#">View More</a>
        </div><!-- /.more-btn-box -->
    </div><!-- /.container -->
</section><!-- /.testimonials-style-one -->

<section class="request-a-qoute">
    <div class="inner-box sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        <h3>Get a Free Quote</h3>
                        <p>Quae secundum naturam esse dicimus, in vita beata. An ea, quae per vinitorem antea consequebatur, per se ipsa curabi. Ut in geom etria, prima si dederis. Copy kora moha pap. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div><!-- /.title -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <form action="http://themexriver.com/zxp/inc/sendemail.php" class="contact-form row">
                        <div class="col-md-6">
                            <p>Full Name</p>
                            <input type="text" placeholder="Your Name" name="name" />
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <p>Email</p>
                            <input type="text" placeholder="Your Email" name="email" />
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <p>Phone No.</p>
                            <input type="text" placeholder="+123456789" name="phone" />
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <p>How can we help?</p>
                            <select name="topic" class="selectpicker">
                                <option value="1">-Select Option-</option>
                                <option value="1">-Select Option-</option>
                                <option value="1">-Select Option-</option>
                                <option value="1">-Select Option-</option>
                                <option value="1">-Select Option-</option>
                            </select>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12">
                            <button type="submit">Request Quote</button>
                        </div><!-- /.col-md-12 -->
                    </form>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.inner -->
</section><!-- /.request-a-qoute -->

<section class="faq-feature-wrapper faq-style-one sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sec-title">
                    <h3>Frequemtly Asked Question</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, aperiam consequuntur dolore mollitia laborum officia recusandae quae. Perspiciatis aut maxime ab, suscipit nesciunt. Pariatur voluptatem</p>
                </div><!-- /.sec-title -->
                <div class="accrodion-grp" data-grp-name="faq-accrodion">
                    <div class="accrodion active">
                        <div class="accrodion-title">
                            <h4>Lorem ipsum dolor sit amet</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem. Possimus, assumenda recusandae aut, culpa beatae consequuntur</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion ">
                        <div class="accrodion-title">
                            <h4>Dolor sit amet, consectetuer adipiscing elit</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem. Possimus, assumenda recusandae aut, culpa beatae consequuntur</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>Sed diam nonummy nibh euismod</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem. Possimus, assumenda recusandae aut, culpa beatae consequuntur</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="feature-style-one">
                    <div class="sec-title">
                        <h3>Our Strength</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem acc usantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. Ab illo inventore veritatis et quasi archite.</p>
                    </div><!-- /.sec-title -->
                    <div class="single-feature-style-one">
                        <div class="icon-box">
                            <i class="zxp-icon-pumpjack"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Advanced Technology</h3>
                            <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam ali quam quaerat voluptatem.</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-feature-style-one -->
                    <div class="single-feature-style-one">
                        <div class="icon-box">
                            <i class="zxp-icon-architect-with-helmet"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Expert Team</h3>
                            <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam ali quam quaerat voluptatem.</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-feature-style-one -->
                    <div class="single-feature-style-one">
                        <div class="icon-box">
                            <i class="zxp-icon-time-passing"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>On time Delivery</h3>
                            <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam ali quam quaerat voluptatem.</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-feature-style-one -->
                </div><!-- /.feature-style-one -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.faq-feature-wrapper -->

<div class="brand-carousel-wrapper">
    <div class="container">
        <div class="brand-carousel owl-carousel owl-theme">
            <div class="item">
                <i class="brands-icon-audiojungle"></i>
            </div><!-- /.item -->
            <div class="item">
                <i class="brands-icon-codecanyon"></i>
            </div><!-- /.item -->
            <div class="item">
                <i class="brands-icon-envato"></i>
            </div><!-- /.item -->
            <div class="item">
                <i class="brands-icon-graphicriver"></i>
            </div><!-- /.item -->
            <div class="item">
                <i class="brands-icon-photodune"></i>
            </div><!-- /.item -->
            <div class="item">
                <i class="brands-icon-themeforest"></i>
            </div><!-- /.item -->
            <div class="item">
                <i class="brands-icon-videohive"></i>
            </div><!-- /.item -->
        </div><!-- /.brand-carousel -->
    </div><!-- /.container -->
</div><!-- /.brand-carousel-wrapper -->

<section class="blog-style-two sec-pad">
    <div class="container">
        <div class="sec-title">
            <div class="row">
                <div class="col-md-3">
                    <h3>Recent News</h3>
                </div><!-- /.col-md-3 -->
                <div class="col-md-6">
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br /> deserunt mollit anim id est laborum.</p>
                </div><!-- /.col-md-6 -->
                <div class="col-md-3 text-right">
                    <a href="#" class="thm-btn">More News</a>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-blog-style-two">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/blog-1-1.jpg" alt="Awesome Image"/>
                        <a href="blog-details.html" class="read-more">Read Post</a>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <div class="meta-info">
                            <a href="#"><i class="fas fa-clock"></i> Nov 25</a>
                        </div><!-- /.meta-info -->
                        <a href="blog-details.html"><h3>2018 Project: Planning Anduff  Construction</h3></a>
                    </div><!-- /.text-box -->
                </div><!-- /.single-blog-style-two -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-blog-style-two">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/blog-1-2.jpg" alt="Awesome Image"/>
                        <a href="blog-details.html" class="read-more">Read Post</a>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <div class="meta-info">
                            <a href="#"><i class="fas fa-clock"></i> Nov 25</a>
                        </div><!-- /.meta-info -->
                        <a href="blog-details.html"><h3>Central Valley Comes Calling with Industrial Options</h3></a>
                    </div><!-- /.text-box -->
                </div><!-- /.single-blog-style-two -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-blog-style-two">
                    <div class="img-box">
                        <img src="{{ asset('') }}front/zxp/img/blog-1-3.jpg" alt="Awesome Image"/>
                        <a href="blog-details.html" class="read-more">Read Post</a>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <div class="meta-info">
                            <a href="#"><i class="fas fa-clock"></i> Nov 25</a>
                        </div><!-- /.meta-info -->
                        <a href="blog-details.html"><h3>Columbus' Industrial Market Continues to Rise</h3></a>
                    </div><!-- /.text-box -->
                </div><!-- /.single-blog-style-two -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-style-two -->

<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row ">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget about-widget">
                        <a href="index-2.html"><img src="{{ asset('') }}front/zxp/img/footer-logo-1-1.png" alt="Awesome Image"/></a>
                        <p>Since 1960, ZXP has built a reputation for producing high quality precision fabricated products for use in a variety of industries.</p>
                        <div class="social">
                            <a href="#" class="fab fa-facebook-f"></a><!--
                            --><a href="#" class="fab fa-twitter"></a><!--
                            --><a href="#" class="fab fa-linkedin-in"></a><!--
                            --><a href="#" class="fab fa-google-plus-g"></a><!--
                            --><a href="#" class="fas fa-rss"></a>
                        </div><!-- /.social -->
                    </div><!-- /.footer-widget about-widget -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-widget links-widget">
                        <div class="title">
                            <h3>Quick Links</h3>
                        </div><!-- /.title -->
                        <ul class="links-list">
                            <li><a href="#"><i class="fas fa-angle-right"></i>Home</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i>About</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i>Services</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i>Pages</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i>Contact</a></li>
                        </ul><!-- /.links-list -->
                    </div><!-- /.footer-widget links-widget -->
                </div><!-- /.col-md-2 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget twitter-widget">
                        <div class="title">
                            <h3>Twitter Feed</h3>
                        </div><!-- /.title -->
                        <div class="single-tweet">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Ed quia con sequuntur.</p>
                            <div class="name"><i class="fab fa-twitter"></i>@Mark Wahlberg</div><!-- /.name -->
                        </div><!-- /.single-tweet -->
                        <div class="single-tweet">
                            <p>Neque porro quisquam est, qui dolor em ipsum quia dolor sit amet.</p>
                            <div class="name"><i class="fab fa-twitter"></i>@Andy Samberg</div><!-- /.name -->
                        </div><!-- /.single-tweet -->
                    </div><!-- /.footer-widget twitter-widget -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget recent-post-widget">
                        <div class="title">
                            <h3>Recent Post</h3>
                        </div><!-- /.title -->
                        <div class="single-recent-post">
                            <div class="img-box">
                                <img src="{{ asset('') }}front/zxp/img/footer-rp-1-1.jpg" alt="Awesome Image"/>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <a href="#"><h4>China industrial profit growth slows to low</h4></a>
                                <p>5 hours ago</p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-recent-post -->
                        <div class="single-recent-post">
                            <div class="img-box">
                                <img src="{{ asset('') }}front/zxp/img/footer-rp-1-2.jpg" alt="Awesome Image"/>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <a href="#"><h4>Industrial space to remain tight</h4></a>
                                <p>5 hours ago</p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-recent-post -->
                    </div><!-- /.footer-widget recent-post-widget -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->
    <div class="footer-subscribe">
        <div class="container">
            <div class="left-title pull-left">
                <h3>Subscribe your E-mail for our Newsletter & Business Tips</h3>
            </div><!-- /.left-title -->
            <div class="right-form-box pull-right">
                <form action="http://themexriver.com/zxp/inc/mailchimp/subscribe.php" class="footer-subscribe-form clearfix mailchimp-form">
                    <input type="text" placeholder="email address.." name="email" /><!--
                    --><button type="submit">Subscribe</button>
                </form><!-- /.footer-subscribe-form -->
                <div class="result"></div><!-- /.result -->
            </div><!-- /.right-form-box -->
        </div><!-- /.container -->
    </div><!-- /.footer-subscribe -->
</footer><!-- /.site-footer -->
<div class="footer-bottom">
    <div class="container">
        <div class="copy-text pull-left">
            <p>2018 &copy; All Rights Reserved by Themexriver</p>
        </div><!-- /.copy-text -->
        <div class="right-link pull-right">
            <a href="#">Privacy Policy & Terms of Use</a>
        </div><!-- /.right-link -->
    </div><!-- /.container -->
</div><!-- /.footer-bottom -->

<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
            </span>
        </div>
    </div>
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>

<script src="{{ asset('') }}front/zxp/js/jquery.js"></script>

<script src="{{ asset('') }}front/zxp/js/bootstrap.min.js"></script>
<script src="{{ asset('') }}front/zxp/js/bootstrap-select.min.js"></script>
<script src="{{ asset('') }}front/zxp/js/jquery.validate.min.js"></script>
<script src="{{ asset('') }}front/zxp/js/owl.carousel.min.js"></script>
<script src="{{ asset('') }}front/zxp/js/isotope.js"></script>
<script src="{{ asset('') }}front/zxp/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('') }}front/zxp/js/waypoints.min.js"></script>
<script src="{{ asset('') }}front/zxp/js/jquery.counterup.min.js"></script>
<script src="{{ asset('') }}front/zxp/js/wow.min.js"></script>
<script src="{{ asset('') }}front/zxp/js/jquery.easing.min.js"></script>
<script src="{{ asset('') }}front/zxp/js/custom.js"></script>

</body>

</html>
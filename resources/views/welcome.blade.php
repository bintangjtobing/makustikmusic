<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Roboto:400,700&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/bootstrap.css??'.rand(10000,99999))!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/style.css??'.rand(10000,99999))!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/dark.css??'.rand(10000,99999))!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('webpage/css/font-icons.css??'.rand(10000,99999))!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/animate.css??'.rand(10000,99999))!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/magnific-popup.css??'.rand(10000,99999))!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('webpage/css/custom.css??'.rand(10000,99999))!!}" type="text/css" />
    <!-- Conference Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{!!asset('webpage/demos/conference/css/fonts.css??'.rand(10000,99999))!!}"
        type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/colors.php?color=222')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/demos/conference/conference.css??'.rand(10000,99999))!!}"
        type="text/css" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $Y = date('Y'); $makustik_name="Makustik Music"; ?>
    <title>{{$makustik_name}} Official {{$Y}}</title>
    <meta name="title" content="{{$makustik_name}} Official {{$Y}}">
    <meta name="keywords"
        content="makustikmusic, makustik, band reguler terbaik di kota medan, akustik di kota medan, reguler akustik di kota medan, reguleran band medan, live music medan, live performance kota medan, {{$makustik_name}} medan">
    <meta name="description"
        content="Hi, we're {{$makustik_name}}, and we are proudly sing at cafes, weddings, gatherings,birthdays, reunions, and outdoors.">
    <meta name="author" content="Bintang Tobing with Stopover Management">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    {{-- meta --}}
    <meta name="og:title" property="og:title" content="{{$makustik_name}} Official {{$Y}}" />
    <meta name="og:url" property="og:url" content="https://makustikmusic.com" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/v1668396678/makustik-cover_ndfzme.jpgg" />
    <meta name="og:description" property="og:description"
        content="Hi, we're {{$makustik_name}}, and we are proudly sing at cafes, weddings, gatherings,birthdays, reunions, and outdoors." />
    <meta name="twitter:card" content="{{$makustik_name}} Official {{$Y}}" />
    <meta name="twitter:title" property="og:title" content="{{$makustik_name}} Official {{$Y}}" />
    <meta name="twitter:url" property="og:url" content="https://makustikmusic.com" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/v1668396678/makustik-cover_ndfzme.jpgg" />
    <meta name="twitter:description" property="og:description"
        content="Hi, we're {{$makustik_name}}, and we are proudly sing at cafes, weddings, gatherings,birthdays, reunions, and outdoors." />
    <link rel="canonical" href="https://makustikmusic.com/" />
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/boxity-id/image/upload/v1668396810/Logo_icon_1_ng4rvh.png" type="image/png"
        sizes="64x64" />
    <meta name="og:email" content="halo@makustikmusic.com" />
    <meta name="og:phone_number" content="085195211098" />
    <meta name="og:country-name" content="Indonesia" />

    {{-- Tagging --}}
    {{-- Adsense --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1281568580512916"
        crossorigin="anonymous"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VMLM5VB24R"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VMLM5VB24R');

    </script>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" class="responsive-sticky-header transparent-header dark header-size-sm"
            data-sticky-shrink="false">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row justify-content-lg-between">

                        <!-- Logo
						============================================= -->
                        <div id="logo" class="me-lg-0">
                            <a href="#" data-scrollto="#slider" class="standard-logo"
                                data-dark-logo="{!!asset('webpage/demos/conference/images/logo-dark.svg')!!}"><img
                                    src="{!!asset('webpage/demos/conference/images/logo.svg')!!}"
                                    alt="{{$makustik_name}} Logo"></a>
                            <a href="#" data-scrollto="#slider" class="retina-logo"
                                data-dark-logo="{!!asset('webpage/demos/conference/images/logo-dark@2x.svg')!!}"><img
                                    src="{!!asset('webpage/demos/conference/images/logo@2x.svg')!!}"
                                    alt="{{$makustik_name}} Logo"></a>
                        </div><!-- #logo end -->

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container not-dark one-page-menu" data-easing="easeInOutExpo"
                                data-speed="1250" data-offset="160">
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-about">
                                        <div>Cerita Singkat</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#profil-personil">
                                        <div>Profil Personil</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#schedule">
                                        <div>Jadwal</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#proposal-request">
                                        <div>Live di cafe kamu?</div>
                                    </a></li>
                            </ul>

                        </nav>
                        <nav class="primary-menu">

                            <ul class="menu-container header-button">
                                <li class="menu-item">
                                    <a href="https://linktr.ee/survey_makustik" target="_blank"
                                        class="button button-effect m-0">Berikan kami penilaian</a>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Hero/Slider
		============================================= -->
        <section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header"
            style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('webpage/demos/conference/images/hero-2.jpg') no-repeat center center / cover;">
            <div class="slider-inner">

                <div class="vertical-middle">
                    <div class="container dark py-5 py-md-0">
                        <div class="row justify-content-between mt-5 col-mb-50">
                            <div class="col-lg-6 parallax" data-0="transform: translateY(0px); opacity: 1"
                                data-300="transform: translateY(50px); opacity: 0">
                                <span class="gradient-underline h4">We're acoustic band</span>
                                <h2 class="fw-bold display-2 mb-0">{{$makustik_name}} <sup>®{{$Y}}</sup></h2>
                                <div class="mt-3">
                                    <a href="/whatsapp" target="_blank"
                                        class="social-icon si-large si-borderless si-light si-rounded si-whatsapp">
                                        <i class="icon-whatsapp"></i>
                                        <i class="icon-whatsapp"></i>
                                    </a>
                                    <a href="/facebook" target="_blank"
                                        class="social-icon si-large si-borderless si-light si-rounded si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="/instagram" target="_blank"
                                        class="social-icon si-large si-borderless si-light si-rounded si-instagram">
                                        <i class="icon-instagram"></i>
                                        <i class="icon-instagram"></i>
                                    </a>

                                    <a href="/youtube" target="_blank"
                                        class="social-icon si-large si-borderless si-light si-rounded si-youtube">
                                        <i class="icon-youtube"></i>
                                        <i class="icon-youtube"></i>
                                    </a>
                                    <a href="mailto:halo@makustikmusic.com" target="_blank"
                                        class="social-icon si-large si-borderless si-light si-rounded si-mail">
                                        <i class="icon-mail"></i>
                                        <i class="icon-mail"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-lg-end flex-column parallax text-start text-lg-end mb-5 mb-lg-0"
                                data-0="transform: translateY(0px)" data-700="transform: translateY(-50px)">
                                <div class="mt-auto">
                                    <h2 class="mb-2 gradient-text">Happy to see you! :)</h2>
                                    <h4 class="fw-normal">Proudly sing at cafes, weddings, gatherings, birthdays,
                                        reunions, and outdoors.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #Slider end -->

        <!-- Content
		============================================= -->
        <section id="content" style="background-color: #000;">
            <div class="content-wrap pt-0" style="overflow: visible;">

                <!-- Section About
				============================================= -->
                <div id="section-about" class="section page-section bg-transparent pt-0 clearfix">

                    <div class="container clearfix">

                        <div class="mb-5 dark">
                            <span class="display-4 fw-bold gradient-underline font-primary">Cerita Singkat
                                {{$makustik_name}}</span>
                        </div>

                        <div class="clear"></div>

                        <div class="row justify-content-around dark">
                            <div class="col-md-6">
                                <p class="text-white-50">Makustik Music Band adalah sebuah grup band yang terbentuk pada
                                    tanggal 6 Juni 2019. Didirikan atas dasar kecintaan setiap personilnya terhadap
                                    musik. Masing-masing personil memiliki berbagai latar belakang dan basik yang
                                    berbeda namun memiliki visi dan misi yang sama dalam bermain musik, Makustik Music
                                    Band berkeinginan bermain musik untuk memuaskan semua publik terhadap musikalitas di
                                    Indonesia. Maka terbentuklah Makustik Music Band yang membawakan jenis musik
                                    bernuansa akustik yang meng-cover lagu-lagu yang lagi hits pada tahun 90-an hingga
                                    masa sekarang.
                                    <br><br>
                                    Tujuan Makustik Music Band membawakan jenis musik ini adalah untuk mengisi acara,
                                    dan menghibur yang datang dengan nyanyian dan iringan kami di Café, Resto, tempat
                                    hiburan serta tidak tertutup kemungkinan mengisi acara musik di panggung-panggung
                                    indoor maupun outdoor. Makustik Music Band lebih mengutamakan live perfomance dan
                                    entertain sehingga audience akan merasa menikmati dan puas dengan penampilan band
                                    ini. Dalam perwujudannya Makustik Music Band akan menyuguhkan suatu pertunjukan yang
                                    menarik untuk dinikmati dan dikemas secara professional.
                                    <br><br>
                                    Makustik Music Band menawarkan sebuah konsep musikalitas untuk meramaikan suasana
                                    Café dan Resto anda. Konsep kami menyuguhkan hiburan segar dengan penampilan
                                    profesional yang tidak hanya mementingkan keindahan harmonisasi musik belaka tapi
                                    juga menampilkan suatu perfomance yang atraktif terhadap penonton. Dengan demikian,
                                    audience akan merasa terhibur, merasa puas dengan penampilan Makustik Music Band
                                    serta jika diizinkan oleh yang maha kuasa, ingin dan pasti kembali lagi ke tempat
                                    yang bersangkutan, untuk mengunjungi Café dan Resto anda. Besar harapan kami untuk
                                    bisa bekerjasama dengan Café dan Resto anda.</p>
                                <div class="row mt-5">
                                    <div class="col-6 col-sm-3">
                                        <div class="counter gradient-text"><span data-from="0" data-to="4"
                                                data-refresh-interval="1" data-speed="400"></span>+</div>
                                        <h5 class="font-body">Performanced cafe</h5>
                                    </div>

                                    <div class="col-6 col-sm-3">
                                        <div class="counter gradient-text"><span data-from="1" data-to="65"
                                                data-refresh-interval="2" data-speed="600"></span>+</div>
                                        <h5 class="font-body">Rata-rata pendengar tiap minggu</h5>
                                    </div>

                                    <div class="col-6 col-sm-3">
                                        <div class="counter gradient-text"><span data-from="100" data-to="500"
                                                data-refresh-interval="50" data-speed="1500"></span>+</div>
                                        <h5 class="font-body">Participants</h5>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <h3 class="font-body">Please visit our social media belong here:</h3>
                                    <a href="/facebook" target="_blank"
                                        class="social-icon si-large si-borderless si-light si-rounded si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="/instagram" target="_blank"
                                        class="social-icon si-large si-borderless si-light si-rounded si-instagram">
                                        <i class="icon-instagram"></i>
                                        <i class="icon-instagram"></i>
                                    </a>

                                    <a href="/youtube" target="_blank"
                                        class="social-icon si-large si-borderless si-light si-rounded si-youtube">
                                        <i class="icon-youtube"></i>
                                        <i class="icon-youtube"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="about-img position-relative">
                                    <div class="my-3 my-lg-0">
                                        <div class="gradient-bg"><img
                                                src="{!!asset('webpage/demos/conference/images/about/1.jpg')!!}"
                                                alt="About Image"></div>
                                    </div>
                                    <div data-0="top: 160px" data-end="top: 120px">
                                        <div class="gradient-bg"><img
                                                src="{!!asset('webpage/demos/conference/images/about/2.jpg')!!}"
                                                alt="About Image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- #section-about end -->

                <div class="clear"></div>

                <!-- Section Speakers
				============================================= -->
                <div id="profil-personil" class="section page-section bg-transparent pt-0 topmargin-lg clearfix">
                    <div class="container">
                        <div class="mb-5 dark d-flex flex-wrap justify-content-between align-items-center">
                            <span class="display-4 fw-bold gradient-underline mb-0">Personil</span>
                        </div>
                        <div class="row mx-auto dark" style="max-width: 1000px;">
                            <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                                <div class="team-image">
                                    <img src="{!!asset('webpage/demos/conference/images/speakers/1.jpg')!!}"
                                        alt="John Doe">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title">
                                        <h4 class="gradient-text">Bintang Tobing</h4><span>Manager - @bcjlt</span>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                                <div class="team-image">
                                    <img src="{!!asset('webpage/demos/conference/images/speakers/2.jpg')!!}"
                                        alt="John Doe">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title">
                                        <h4 class="gradient-text">Theo Davinz </h4><span>Vocalist - @theo_98id</span>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                                <div class="team-image">
                                    <img src="{!!asset('webpage/demos/conference/images/speakers/3.jpg')!!}"
                                        alt="John Doe">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title">
                                        <h4 class="gradient-text">Yusriadi (Adi)</h4><span>Acoustic Guitarist -
                                            @yusriadi_09</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- #section-speaker end -->

                <div class="clear"></div>

                <!-- Section Schedule
				============================================= -->
                <div id="schedule" class="section page-section bg-transparent pt-0 topmargin clearix">
                    <div class="container">
                        <div class="mb-5 dark d-flex justify-content-between align-items-center">
                            <span class="display-4 fw-bold gradient-underline mb-0">Portfolio & Jadwal Reguler</span>
                        </div>

                        <div class="schedule-wrap mx-auto rounded" style="max-width: 1000px;">
                            <div class="tabs tabs-bb mb-0 clearfix" id="tab-9">

                                <ul class="tab-nav d-flex clearfix">
                                    <li class="flex-fill"><a href="#tabs-portfolio">Portfolio</a></li>
                                    <li class="flex-fill"><a href="#tabs-1">Saturday <span
                                                class="d-none d-md-inline-block">Ev. {{$Y}}</span></a></li>
                                    <li class="flex-fill"><a href="#tabs-2">Sunday <span
                                                class="d-none d-md-inline-block">Ev. {{$Y}}</span></a></li>
                                </ul>

                                <div class="tab-container mt-5">
                                    <div class="tab-content clearfix" id="tabs-portfolio">
                                        <dl class="row dark mb-0">
                                            <dt class="col-sm-4">
                                                <div class="schedule-time font-primary">2022</div>
                                            </dt>
                                            <dd class="col-sm-8"
                                                style="background-image: url('{!!asset('webpage/demos/conference/images/portfolio/1.jpg')!!}')">
                                                <div class="schedule-desc"><a
                                                        href="https://youtube.com/playlist?list=PLaouje9jvbM9jbgUw_0SdUnY8YhLaohP9"
                                                        target="_blank">Tengah People & Place</a><small>Click to see our
                                                        porfolio in youtube</small></div>
                                            </dd>
                                            <dt class="col-sm-4">
                                                <div class="schedule-time font-primary">2022</div>
                                            </dt>
                                            <dd class="col-sm-8"
                                                style="background-image: url('{!!asset('webpage/demos/conference/images/portfolio/2.jpg')!!}')">
                                                <div class="schedule-desc"><a
                                                        href="https://youtube.com/playlist?list=PLaouje9jvbM-p1xfvKlj6Z5RV8brLiOwl"
                                                        target="_blank">Shiloh Coffee &
                                                        Eatery</a><small>Click to see our
                                                        porfolio in youtube</small></div>
                                            </dd>
                                            <dt class="col-sm-4">
                                                <div class="schedule-time font-primary">2021 - Current</div>
                                            </dt>
                                            <dd class="col-sm-8"
                                                style="background-image: url('{!!asset('webpage/demos/conference/images/portfolio/3.jpg')!!}')">
                                                <div class="schedule-desc"><a
                                                        href="https://youtube.com/playlist?list=PLaouje9jvbM_NwIOr9MIAo-M0lRI9z1dd"
                                                        target="_blank">XC Coffee & Resto</a><small>Click to see our
                                                        porfolio in youtube</small></div>
                                            </dd>
                                            <dt class="col-sm-4">
                                                <div class="schedule-time font-primary">2021</div>
                                            </dt>
                                            <dd class="col-sm-8"
                                                style="background-image: url('{!!asset('webpage/demos/conference/images/portfolio/4.jpg')!!}')">
                                                <div class="schedule-desc"><a
                                                        href="https://youtube.com/playlist?list=PLaouje9jvbM9mBVWBx9TGhjlMl3ZoR8yI"
                                                        target="_blank">Janji Rasa</a><small>Click to see our
                                                        porfolio in youtube</small></div>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-1">
                                        <dl class="row dark mb-0">

                                            <dt class="col-sm-4">
                                                <div class="schedule-time font-primary">19:00 - 23.00 PM</div>
                                            </dt>
                                            <dd class="col-sm-8">
                                                <div class="schedule-desc">Wowrung <small><a
                                                            href="https://instagram.com/wowrung.id"
                                                            target="_blank"></a>Jl. H. Adam
                                                        Malik No.36, Silalas, Kec. Medan Bar., Kota Medan, Sumatera
                                                        Utara 20234</small>
                                                    <a href="https://instagram.com/wowrung.id" target="_blank"
                                                        class="social-icon si-medium si-borderless si-light si-rounded si-instagram mt-3">
                                                        <i class="icon-instagram"></i>
                                                        <i class="icon-instagram"></i>
                                                    </a>
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-2">
                                        <dl class="row dark mb-0">

                                            <dt class="col-sm-4">
                                                <div class="schedule-time font-primary">19:30 - 23.30 PM</div>
                                            </dt>
                                            <dd class="col-sm-8">
                                                <div class="schedule-desc">XC CAFE & RESTO <small><a
                                                            href="https://instagram.com/xccafeandresto"
                                                            target="_blank"></a>depan PDAM Tirtanadi, kode pos 20222,
                                                        Jl. Tuasan No.98B,
                                                        Sidorejo Hilir, Kec. Medan Tembung, Kota Medan, Sumatera Utara
                                                        20222</small>
                                                    <a href="https://instagram.com/xccafeandresto" target="_blank"
                                                        class="social-icon si-medium si-borderless si-light si-rounded si-instagram mt-3">
                                                        <i class="icon-instagram"></i>
                                                        <i class="icon-instagram"></i>
                                                    </a>
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- #section-scedule end -->

                <div class="clear"></div>

                <!-- Section Tickets
				============================================= -->
                <div id="proposal-request" class="section page-section bg-transparent pt-0 clearfix">
                    <div class="container">
                        <div class="mb-5 dark d-flex justify-content-between align-items-center">
                            <span class="display-4 fw-bold gradient-underline mb-0">Minta proposal penawaran?</span>
                        </div>
                    </div>


                    <div class="position-relative">

                        <div class="dotted-bg"
                            style="background: url('webpage/demos/conference/images/dotted-bg.svg') repeat center center / contain; min-height: 75%">
                        </div>
                    </div>

                    <div class="container topmargin-lg">
                        <div class="mx-auto dark center" style="max-width: 850px">
                            <h3 class="display-4 gradient-text">Kami akan sangat senang!</h3>
                            <p class="lead">Kami sangat senang, apabila teman teman tertarik dengan kami untuk bisa
                                kerjasama dalam menghibur tamu cafè teman-teman. Yuk, langsung aja minta penawarannya
                                melalui kirim email kepada kami :)</p>
                            <a href="mailto:halo@makustikmusic.com"
                                class="button button-xxlarge button-white button-light button-gradient-hover mt-4">Email
                                kami</a>
                            <a href="https://wa.me/6285195211098"
                                class="button button-xxlarge button-white button-light button-gradient-hover mt-4">Whatsapp
                                kami</a>
                            <a href="/sc/business/proposal/{{$Y}}"
                                class="button button-xxlarge button-white button-light button-gradient-hover mt-4">Our
                                Proposal</a>
                        </div>
                    </div>
                </div><!-- #proposal-request end -->

                <div class="clear"></div>

                <!-- Section Sponsors
				============================================= -->
                {{-- <div id="section-sponsors" class="section page-section bg-transparent pt-0 topmargin-lg clearfix">
                    <div class="container">
                        <div class="mb-5 dark d-flex justify-content-between align-items-center">
                            <span class="display-4 fw-bold gradient-underline mb-0">Sponsors</span>
                        </div>

                        <div class="mx-auto schedule-wrap center dark rounded shadow-lg"
                            style="max-width: 1050px; background-color: #000">
                            <h4 class="font-body mb-5">Thank you for our sponsors</h4>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="flex-fill p-3"><a href="#"><img
                                            src="{!!asset('webpage/demos/conference/images/sponcors/cnn.svg')!!}"
                                            alt="Brands"></a></div>
                                <div class="flex-fill p-3"><a href="#"><img
                                            src="{!!asset('webpage/demos/conference/images/sponcors/github.svg')!!}"
                                            alt="Brands"></a></div>
                                <div class="flex-fill p-3"><a href="#"><img
                                            src="{!!asset('webpage/demos/conference/images/sponcors/google.svg')!!}"
                                            alt="Brands"></a></div>
                                <div class="flex-fill p-3"><a href="#"><img
                                            src="{!!asset('webpage/demos/conference/images/sponcors/paypal.svg')!!}"
                                            alt="Brands"></a></div>
                                <div class="flex-fill p-3"><a href="#"><img
                                            src="{!!asset('webpage/demos/conference/images/sponcors/vimeo.svg')!!}"
                                            alt="Brands"></a></div>
                                <div class="flex-fill p-3"><a href="#"><img
                                            src="{!!asset('webpage/demos/conference/images/sponcors/slack.svg')!!}"
                                            alt="Brands"></a></div>
                            </div>
                            <div class="line"></div>
                            <h3 class="gradient-text">Calling all Sponsors!!! Help us to make Our Event/Live Music
                                Performance a Blast!</h3>
                            <a href="mailto:sponsor@makustikmusic.com"
                                class="button button-xlarge button-white button-gradient mt-4">Sponsor Us?</a>
                        </div>
                    </div>
                    <div class="dotted-bg"
                        style="background: url('webpage/demos/conference/images/dotted-bg.svg') repeat center center / contain; min-height: 25%; top: 90%; right: 0; left: auto; width: 50%">
                    </div>
                </div><!-- #section-Sponsors end --> --}}

                {{-- <div class="clear"></div> --}}
                <!-- Upcoming Events
				============================================= -->
                {{-- <div class="section bg-transparent m-0 clearfix">

                    <div class="container">
                        <div class="mx-auto dark center" style="max-width: 850px">
                            <span class="display-4 fw-bold gradient-underline">Upcoming Related Events</span>
                            <p class="lead text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Fugiat nesciunt sint voluptatibus quibusdam veritatis quos dolorum quasi minus, rerum?
                                Officia explicabo hic porro voluptatem ducimus dolor, dolore et. Magni, quidem?</p>
                        </div>
                        <div class="clear"></div>

                        <div class="row align-items-stretch mt-3 clearfix">
                            <div class="col-md-4 mb-3">
                                <a href="#" class="card dark" style="background-color: #ec7e0071">
                                    <div class="card-body">
                                        <h4 class="mb-4 font-body fw-normal h5">Opening Remarks And Keynote</h4>
                                        <div class="d-flex flex-wrap justify-content-between">
                                            <h5 class="font-body mb-0 text-uppercase ls1">- 31st April, 2021</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="#" class="card dark" style="background-color: #ec7e00b6">
                                    <div class="card-body">
                                        <h4 class="mb-4 font-body fw-normal h5">Hiring The Right Way in Ecosystem</h4>
                                        <h5 class="font-body mb-0 text-uppercase ls1">- 2nd May, 2021</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="#" class="card dark" style="background-color: #ec7e00">
                                    <div class="card-body">
                                        <h4 class="mb-4 font-body fw-normal h5">Why Should I Choose Support</h4>
                                        <h5 class="font-body mb-0 text-uppercase ls1">- 3rd May, 2021</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- #Related Events end --> --}}

            </div>
        </section><!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark"
            style="background: linear-gradient(to bottom, rgba(255,255,255,.1), rgba(255,255,255,.03)); border-top-color: #222">
            <div class="container">

                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap">
                    <div class="row clearfix">

                        <div class="col-lg-6">

                            <div class="widget clearfix">
                                <div class="row clearfix">
                                    <div class="col-lg-12 bottommargin-sm clearfix" style="color:#888;">
                                        <img class="mb-3"
                                            src="{!!asset('webpage/demos/conference/images/logo-dark@2x.svg')!!}"
                                            alt="{{$makustik_name}} Logo" style="display: block;" height="100">
                                        <p>Hi, we're {{$makustik_name}}, and we are proudly sing at cafes, weddings,
                                            gatherings,birthdays, reunions, and outdoors.</p>

                                        <a href="/facebook" target="_blank"
                                            class="social-icon si-medium si-borderless si-colored si-rounded si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>

                                        <a href="/instagram" target="_blank"
                                            class="social-icon si-medium si-borderless si-colored si-rounded si-instagram">
                                            <i class="icon-instagram"></i>
                                            <i class="icon-instagram"></i>
                                        </a>

                                        <a href="/youtube" target="_blank"
                                            class="social-icon si-medium si-borderless si-colored si-rounded si-youtube">
                                            <i class="icon-youtube"></i>
                                            <i class="icon-youtube"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 text-left">
                            <div id="instagram" class="widget widget-instagram-feed pt-3">
                                <a href="/instagram" class="button button-gradient text-white float-end">Follow Us on
                                    Instagram</a>

                            </div>
                            {{-- <div class="row clearfix"> --}}
                            {{-- <div class="col-lg-3 bottommargin-sm">
                                    <div class="widget widget_links app_landing_widget_link clearfix">
                                        <ul class="pt-3">
                                            <li><a href="">Visiting Place</a></li>
                                            <li><a href="">Nearby Hotels</a></li>
                                            <li><a href="">Public Transports</a></li>
                                            <li><a href="">Weather Info</a></li>
                                            <li><a href="">Food Cost</a></li>
                                            <li><a href="">Accommodation </a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                            {{-- <div class="col-lg-12 bottommargin-sm">

                                </div> --}}

                            {{-- </div> --}}
                        </div>

                    </div>
                </div>

            </div>

            <!-- Copyrights
			============================================= -->
            <div id="copyrights" class="bg-transparent pt-0">
                <div class="container clearfix">

                    <div class="w-100 text-center text-md-start">
                        Copyrights &copy; {{$Y}}. All Rights Reserved by <a style="color: #ec7e00;"
                            href="https://boxity.id" target="_blank">Boxity
                            Central Indonesia</a>, and managed by <abbr title="Stopover Management">Stopover
                            Management</abbr>.<br>
                        {{-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> --}}
                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="{!!asset('webpage/js/jquery.js')!!}"></script>
    <script src="{!!asset('webpage/js/plugins.min.js')!!}"></script>
    {{-- <script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script> --}}

    <!-- Footer Scripts
	============================================= -->
    <script src="{!!asset('webpage/js/functions.js')!!}"></script>

    <script>
        jQuery(document).ready(function () {

            // Ticket Price Changed Script
            var elementEarlyBird = $("#early-bird-person"),
                element1Day = $("#1-day-pricing-person"),
                element2Day = $("#2-day-pricing-person"),
                elementFull = $("#full-pricing-person");

            elementEarlyBird.on('change', function () {
                pricingEarlyBird = $(this).prop('value');
                jQuery('.early-bird-pricing').html('$' + (pricingEarlyBird * 39));
            });

            element1Day.on('change', function () {
                pricing1day = $(this).prop('value');
                jQuery('.1-day-pricing').html('$' + (pricing1day * 29));
            });

            element2Day.on('change', function () {
                pricing2Day = $(this).prop('value');
                jQuery('.2-day-pricing').html('$' + (pricing2Day * 49));
            });

            elementFull.on('change', function () {
                pricingFull = $(this).prop('value');
                jQuery('.full-pricing').html('$' + (pricingFull * 69));
            });

        });

    </script>

</body>

</html>

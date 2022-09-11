<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hamada</title>


    <link href="{{ asset('hamada-styles/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('hamada-styles/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('hamada-styles/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('hamada-styles/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('hamada-styles/css/material-design-iconic-font.css') }}" rel="stylesheet">
    <link href="{{ asset('hamada-styles/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('hamada-styles/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('hamada-styles/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('hamada-styles/css/responsive.css') }}" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <script src="{{ asset('hamada-styles/js/jquery-1.12.2.min.js') }}"></script>
</head>

<body>
    <div class="main-wrapper">

        <!--header-->

        <header id="header">
            <div class="container">
                <div class="logo-site">
                    <a href="#"><img src="{{ $data['site_setup'][0]->content }}" alt=""></a>
                </div>
                <nav id="navigation-menu" class="clearfix">
                    <ul class="main-menu clearfix">
                        <li><a href="#section-1" rel="m_PageScroll2id">HOME</a></li>
                        <li><a href="#section-2" rel="m_PageScroll2id">ABOUT</a></li>
                        <li><a href="#section-3" rel="m_PageScroll2id">FEATURES</a></li>
                        <li><a href="#section-4" rel="m_PageScroll2id">HOW TO ORDER</a></li>
                        <li><a href="#section-5" rel="m_PageScroll2id">CUSTOMER OPINIONS</a></li>
                        <li><a href="#section-6" rel="m_PageScroll2id">CONTACT US</a></li>
                    </ul>
                </nav>
                <div class="menu">
                    <div class="nav-icon" id="toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="mobile-overlay" id="overlay">
                    <nav class="overlay-menu">
                        <ul>
                            <li><a href="#" data-value="section-1">HOME</a></li>
                            <li><a href="#" data-value="section-2">ABOUT</a></li>
                            <li><a href="#" data-value="section-3">FEATURES</a></li>
                            <li><a href="#" data-value="section-4">HOW TO ORDER</a></li>
                            <li><a href="#" data-value="section-5">CUSTOMER OPINIONS</a></li>
                            <li><a href="#" data-value="section-6">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!--header-->

        <!--section_home-->

        <section class="section_home" id="section-1">
            <div class="container">
                <div class="home_txt_table">
                    <div class="home_txt">
                        <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
                            {{ $data['content'][0]->text }}</h2>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.600s">
                            {{ $data['content'][5]->text }}</p>
                        <ul class="app_link clearfix wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.700s">
                            <li><a href="{{ $data['site_setup'][8]->content }}"><i class="zmdi zmdi-apple"></i>App
                                    Store</a></li>
                            <li><a href="{{ $data['site_setup'][9]->content }}"><i
                                        class="zmdi zmdi-google-play"></i>Google play</a></li>
                        </ul>
                    </div>
                </div>
                <div class="home_thumb wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
                    <img src="{{ $data['content'][9]->text }}" alt="" class="img-responsive">
                </div>
            </div>
        </section>

        <!--section_home-->

        <!--section_overview-->

        <section class="section_overview" id="section-2">
            <div class="container">
                {{-- HEADER WITH PARAGRAPH FOR ABOUT SECTION --}}
                <div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
                    <h2 class="sec_title">{{ $data['content'][1]->text }}</h2>
                    <p>{{ $data['content'][6]->text }}</p>
                </div>
                <div class="sec_warpper">
                    <div class="row">
                        {{-- ABOUT DIVS --}}
                        @foreach ($data['about_divs'] as $div)
                            <div class="col-sm-4">
                                <div class="serv_item wow fadeInUp animated" data-wow-duration="1s"
                                    data-wow-delay="0.800s"
                                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUp;">
                                    <div class="serv_icon">
                                        <div class="bgIconFix">
                                            {!! $div->i_tag !!}
                                        </div>
                                    </div>
                                    <div class="serv_txt">
                                        <h3>{{ $div->header }}</h3>
                                        <p>{{ $div->paragraph }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </section>

        <!--section_overview-->

        <!--section_services-->

        <section class="section_features" id="section-3">
            <div class="container">
                <div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
                    <h2 class="sec_title">{{ $data['content'][2]->text }}</h2>
                    <p>{{ $data['content'][7]->text }}</p>
                </div>
                <div class="sec_warpper">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service_item text-center wow fadeInDown" data-wow-duration="1s"
                                data-wow-delay="0.600s">
                                <img class="imgFeat" src="{{ $data['content'][10]->text }}" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service_item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.600s">
                                <div class="feature_txt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.600s">
                                    <ul class="feat_meta">
                                        {{-- FEATURE DIVS --}}
                                        @foreach ($data['feature_divs'] as $feature)
                                            <li><span><img src="{{ $feature->img }}" alt=""></span>
                                                {{-- {{ asset('$feature') }} --}}
                                                <div class="secTit">
                                                    <p>{{ $feature->header }}</p>
                                                    <span>{{ $feature->paragraph }}</span>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--section_services-->

        <!--section_features-->

        <section class="section_HowOrder" id="section-4">
            <div class="container">
                <div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
                    <h2 class="sec_title">{{ $data['content'][3]->text }}</h2>
                    <p>{{ $data['content'][8]->text }}</p>
                </div>
                <div class="sec_warpper">
                    <div class="features_list">
                        @foreach ($data['steps_divs'] as $step)
                            <div class="feature_item">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="feature_thumb wow fadeInLeft" data-wow-duration="1s"
                                            data-wow-delay="0.500s">
                                            <img src="{{ $step->img }}" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="feature_txt wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.600s">
                                            <h2>{{ $step->header }}</h2>
                                            <p>{{ $step->paragraph }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="feature_item">
                            <div class="row">
                                <div class="col-sm-push-5 col-sm-7">
                                    <div class="feature_thumb wow fadeInLeft" data-wow-duration="1s"
                                        data-wow-delay="0.500s">
                                        <img src="{{ asset('hamada-styles/images/Mockup1.png') }}" alt=""
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-pull-7 col-sm-5">
                                    <div class="feature_txt wow fadeInUp" data-wow-duration="1s"
                                        data-wow-delay="0.600s">
                                        <h2></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        <!--section_features-->

        <!--section_customer-->

        <section class="section_customer" id="section-5">
            <div class="container">
                <div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
                    <h2 class="sec_title">{{ $data['content'][4]->text }}</h2>
                </div>
                <div class="owl-carousel" id="customerSlider">
                    {{-- CUSTOMER OPINION DIVS --}}
                    @foreach ($data['customer_openion'] as $openion)
                        <div class="item">
                            <div class="client-item">
                                <div class="client-link">
                                    <img src="{{ $openion->img }}" alt="" class="img-responsive">
                                </div>
                                <div class="secTitle">
                                    <h4>{{ $openion->header }}</h4>
                                    <span>{{ $openion->header2 }}</span>
                                    <p>{{ $openion->paragraph }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!--section_customer-->

        <div id="googleMap2"></div>

        <!--section_contact-->

        <section class="section_contact" id="section-6">

            <div class="container">
                <div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
                    <h2 class="sec_title" style="color: white">Contact Us</h2>
                </div>
                <div class="sec_warpper">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="contact_info">
                                <div class="c_ingo_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.600s">
                                    <span class="fas fa-map"></span>
                                    <h2>Office address</h2>
                                    <p>{{ $data['site_setup'][1]->content }}</p>
                                </div>
                                <div class="c_ingo_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.650s">
                                    <span class="fa fa-envelope"></span>
                                    <h2>Email address</h2>
                                    <p>{{ $data['site_setup'][2]->content }}</p>
                                </div>
                                <div class="c_ingo_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.700s">
                                    <span class="fa fa-phone"></span>
                                    <h2>Contact information</h2>
                                    <p>{{ $data['site_setup'][3]->content }}</p>
                                </div>
                                <div class="c_ingo_item wow fadeInUp" style="padding-left:0" data-wow-duration="1s"
                                    data-wow-delay="0.700s">
                                    <a href="{{ $data['site_setup'][7]->content }}"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $data['site_setup'][6]->content }}"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="{{ $data['site_setup'][5]->content }}"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="{{ $data['site_setup'][4]->content }}"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-offset-1 col-sm-6">
                            <form class="form_contact clearfix wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.600s" action="#">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input name="mobail" type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Messages</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn_contact">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--section_contact-->

        <footer id="footer">
            <div class="container">
                <p class="smart_copy">HamadaZaid 2022</p>
                <p class="copy-right">Powerd by <a href="#">Hamada TEC</a></p>
            </div>
        </footer>

    </div>

    <!--main-wrapper-->


    {{-- SCRIPTS --}}

    <script src="{{ asset('hamada-styles/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('hamada-styles/js/wow.js') }}"></script>
    <script src="{{ asset('hamada-styles/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsVCH2AY7nJecNz41eiAGCMdupbk0qNnE&sensor=true"></script>
    <script src="{{ asset('hamada-styles/js/script.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Page Scroll to id plugin -->
    <script src="{{ asset('hamada-styles/js/jquery.malihu.PageScroll2id.min.js') }}"></script>
    <script>
        (function($) {
            $(window).on("load", function() {

                /* Page Scroll to id fn call */
                $("a[rel='m_PageScroll2id']").mPageScroll2id({
                    scrollSpeed: 1200,
                    scrollEasing: "easeOutQuint",
                    liveSelector: "a[rel='m_PageScroll2id']"
                });

            });
        })(jQuery);
    </script>
    <script type="text/javascript">
        var mapLocation = new google.maps.LatLng(51.508742, -0.120850); //change coordinates here
        var marker;
        var map;

        function initialize() {
            var mapOptions = {
                zoom: 14, //change zoom here
                scrollwheel: false,
                center: mapLocation
            };
            // Create a new StyledMapType object, passing it an array of styles,
            // and the name to be displayed on the map type control.
            var styledMapType = new google.maps.StyledMapType(
                [{
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ], {
                    name: 'Styled Map'
                });
            map = new google.maps.Map(document.getElementById('googleMap2'),
                mapOptions);

            var image = 'images/Marker.png';
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                title: 'Site Name', //change title here
                icon: image,
                animation: google.maps.Animation.DROP,
                animation: google.maps.Animation.BOUNCE,
                mapTypeControlOptions: {
                    mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                        'styled_map'
                    ]
                },
                position: mapLocation
            });
            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('styled_map', styledMapType);
            map.setMapTypeId('styled_map');
            google.maps.event.addListener(marker, 'click', toggleBounce);
        }

        function toggleBounce() {

            if (marker.getAnimation() != null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</body>

</html>

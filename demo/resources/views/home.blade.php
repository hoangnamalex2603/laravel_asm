<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NỘI THẤT ALEX</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Animation.css')}}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script>
        window.onscroll = function () {
            scrollFunction(),
                backTop()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 35 || document.documentElement.scrollTop > 35) {
                $(document).ready(function () {
                    $(".top_bar").hide('slow');
                });

            } else {
                $(document).ready(function () {
                    $(".top_bar").show();
                });
            }
        }

        $(function () {
            $("#tabs").tabs();
        });

        $(document).ready(function () {
            $(".search__item").click(function () {
                $(".input_search").toggle("slow");
            });
        })
    </script>
</head>
<body>
<div id="wrapper">
    <!-- Header -->
    <header class="header">
        <!-- Top Bar -->
        <div class="top_bar">
            <div class="bar__info">
                <div class="phone">0978150336</div>
                <div class="social">
                    <ul class="social_list">
                        <li class="social_list_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social_list_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="bar__user">
                <div class="bar__user-login"><a href="#">login</a></div>
                <div class="bar__user-regis"><a href="#">register</a></div>
            </div>
        </div>

        <div class="main_nav">
            <div class="main_nav__logo"><a href="#"><img src="{{asset('images/logo.png')}}" alt="logo"> ALEX</a></div>
            <div class="main_nav__menu">
                <ul class="main_nav__list">
                    <li class="main_nav__item"><a href="index.html">HOME PAGE</a></li>
                    <li class="main_nav__item"><a href="about.html">INTRODUCE</a></li>
                    <li class="main_nav__item"><a href="offers.html">ENDOW</a></li>
                    <li class="main_nav__item"><a href="blog.html">NEWS</a></li>
                    <li class="main_nav__item"><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <div class="main_nav__search">
                <form action=""><input class="input_search" type="text"></form>
                <div class="search__item"><i class="fas fa-search"></i></div>
            </div>
        </div>
    </header>
    <div class="main">
        <!--slider-->
        <div class="main__slide">
            <div class="home_slide__item">
                <div class="home_slide__background"
                     style="background-image: url({{asset('images\bana-slide.jpg')}})"></div>
                <div class="home_slider__content">
                    <div class="home_slider_content_inner animated bounceInLeft">
                        <h1>Interior</h1>
                        <h1>Design</h1>
                        <div class="button home_slider__button">
                            <div class="button_bcg"></div>
                            <a href="#">Watch now<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <div class="home_slide__item">
                <div class="home_slide__background"
                     style="background-image: url({{asset('css/images/hoian-slide.jpg')}})"></div>
                <div class="home_slider__content">
                    <div class="home_slider_content_inner animated bounceInRight">
                        <h1>tour</h1>
                        <h1>Hoi An</h1>
                        <div class="button home_slider__button">
                            <div class="button_bcg"></div>
                            <a href="#">Watch now<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <div class="home_slide__item">
                <div class="home_slide__background"
                     style="background-image: url('{{asset('css/images/phuquoc_slide.jpg')}}')"></div>
                <div class="home_slider__content">
                    <div class="home_slider_content_inner animated bounceInDown">
                        <h1>tour</h1>
                        <h1>Phu Quoc</h1>
                        <div class="button home_slider__button">
                            <div class="button_bcg"></div>
                            <a href="#">Watch now<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <div class="main_slide__nav nav__prev"><i onclick="plusSlides(-1)" class="fas fa-chevron-circle-left"></i>
            </div>
            <div class="main_slide__nav nav__next"><i onclick="plusSlides(1)"
                                                      class="fas fa-chevron-circle-right"></i></i>
            </div>
            <div class="main_slide__dots">
                <ul class="customs_dots">
                    <li class="customs_dot active" onclick="currentSlide(1)">01.</li>
                    <li class="customs_dot" onclick="currentSlide(2)">02.</li>
                    <li class="customs_dot" onclick="currentSlide(3)">03.</li>
                </ul>
            </div>
        </div>
        <div class="main_search">
            <div id="tabs" class="main_search__tabs">
                <ul class="search_tabs__list">
                    <li class="search_tabs__item"><a href="#tabs-1"><i
                            class="fas fa-hotel"></i><span>House</span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-2"><i
                            class="fas fa-car"></i><span>Living room</span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-3"><i class="fas fa-plane"></i><span>Bedroom</span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-4"><i
                            class="fas fa-umbrella-beach"></i><span>Kitchen</span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-5"><i
                            class="fas fa-ship"></i><span>Overview</span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-6"><i class="fas fa-hiking"></i><span>Activity</span></a>
                    </li>
                </ul>
                <div id="tabs-1" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Location</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Start</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>The end</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Adults</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Kids</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Search <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <div id="tabs-2" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Location</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Start</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>The end</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Adults</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Kids</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Search <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <div id="tabs-3" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Adults</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Start</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>The end</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Adults</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Kids</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Search <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <div id="tabs-4" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Location</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Start</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>The end</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Adults</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Kids</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Search <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <div id="tabs-5" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Location</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Start</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>The end</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Adults</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Kids</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Search <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <div id="tabs-6" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Location</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Start</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>The end</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Adults</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Kids</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Search <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>

            </div>
        </div>

        <!--        Intro-->
        <div class="main_intro">
            <h2>The best house</h2>
            <p>Here are our best designs right now.</p>
            <p>You will be satisfied when you sign up for the services below.</p>
            <div class="main_intro__items">
                <div class="intro_item">
                    <div class="intro_item__backgroud" style="background-image: url(https://images.pexels.com/photos/5998119/pexels-photo-5998119.jpeg?auto=compress&cs=tinysrgb&w=600)"></div>
                    <div class="intro_item__content">
                        
                        <div class="intro_text">
                            <h1>Living room</h1>
                            <div class="intro_price">Price: 1,200,000đ</div>
                            <div class="rating rating_4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div>
                            <a href="#">Watch now<span></span><span></span><span></span></a></div>
                    </div>
                </div>
                <div class="intro_item">
                    <div class="intro_item__backgroud" style="background-image: url(https://images.pexels.com/photos/5644353/pexels-photo-5644353.jpeg?auto=compress&cs=tinysrgb&w=600)"></div>
                    <div class="intro_item__content">
                        
                        <div class="intro_text">
                            <h1>Kitchen</h1>
                            <div class="intro_price">Price: 1,200,000đ</div>
                            <div class="rating rating_4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div>
                            <a href="#">Watch now<span></span><span></span><span></span></a></div>
                    </div>
                </div>
                <div class="intro_item">
                    <div class="intro_item__backgroud" style="background-image: url(https://media.istockphoto.com/id/1168256209/vi/anh/ph%C3%B2ng-ng%E1%BB%A7-%C4%91a-ch%E1%BB%A9c-n%C4%83ng-v%C3%A0-n%E1%BB%99i-th%E1%BA%A5t-kh%C3%B4ng-gian-l%C3%A0m-vi%E1%BB%87c-v%E1%BB%9Bi-gi%C6%B0%E1%BB%9Dng-v%C3%A0-b%C3%A0n-l%C3%A0m-vi%E1%BB%87c.jpg?b=1&s=612x612&w=0&k=20&c=3rtxt1p8jEjmHAUlQa1Zm2Ky41prfBdHYLPu_3jyNHM=)"></div>
                    <div class="intro_item__content">
                        
                        <div class="intro_text">
                            <h1>Bad room</h1>
                            <div class="intro_price">Price: 1,200,000đ</div>
                            <div class="rating rating_4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div>
                            <a href="#">Watch now<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--        CTA-->
        <div class="main_cta" style="background-image: url(styles/images/cta.jpg)">
            <div class="box main_cta__box">
                <div class="slider" id="single_item">
                    <div>
                        <div class="cta_item">
                            <div class="cta_item__title">Luxury interior design package</div>
                            <div class="cta_item__text">Our premium interior design package includes home interior design package, living room design, bedroom design, bathroom design and more. Furniture products will be donated according to the needs of customers. Offers up to 15 years of repair warranty. Free garden design if customers need.
                            </div>
                            <div class="button cta_button">
                                <div class="button_bcg"></div>
                                <a href="#">See more <span></span> <span></span> <span></span> <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="cta_item">
                            <div class="cta_item__title">Luxury Da Nang tour package</div>
                            <div class="cta_item__text">Da Nang tour 4 days 3 nights brings visitors to a city
                                city in the South Central region, Vietnam. This is the center of economy, culture, education, science
                                major science and technology of the Central - Central Highlands region. Da Nang is now one of 13
                                Grade 1 city is also one of the five centrally-run cities in Vietnam. Source
                                The origin of the word "Da Nang" is a variation of the ancient Cham word "DAKNAN", which means a large area of water or
                                "big river", "big river mouth". In 1835, with the decree of King Minh Mang, Cua Han (named Da
                                Nang at that time) became the largest trading port in the Central region.
                            </div>
                            <div class="button cta_button">
                                <div class="button_bcg"></div>
                                <a href="#">See more <span></span> <span></span> <span></span> <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--        Offers-->
        <div class="main_offers">
            <div class="box main_offers__box">
                <h2 class="offers_title">The best deals</h2>
                <div class="offers_items">
                    <div class="offers_item">
                        <div class="offers_image">
                            <div class="offers_image_background"
                                 style="background-image: url(https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=600)"></div>
                            <div class="offers_name"><a href="#">Fully furnished</a></div>
                        </div>
                        <div class="offers_content">
                            <div class="offers_price">7,000,000đ</div>
                            <div class="rating rating_4 offers_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                                <p class="offers_text">Interior design of the living room is fully furnished and comes with a sofa or TV set.</p>
                           
                            <div class="offers_link"><a href="offers.html">Read more</a></div>
                        </div>
                    </div>
                    <div class="offers_item">
                        <div class="offers_image">
                            <div class="offers_image_background"
                                 style="background-image: url(https://images.pexels.com/photos/1571458/pexels-photo-1571458.jpeg?auto=compress&cs=tinysrgb&w=600)"></div>
                            <div class="offers_name"><a href="#">Living Room</a></div>
                        </div>
                        <div class="offers_content">
                            <div class="offers_price">8,690,000đ</div>
                            <div class="rating rating_4 offers_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="offers_text">With a luxurious and unique design with a modern style, this design enhances the fashion sense of the owner.</p>
                            
                            <div class="offers_link"><a href="offers.html">Read more</a></div>
                        </div>
                    </div>
                    <div class="offers_item">
                        <div class="offers_image">
                            <div class="offers_image_background"
                                 style="background-image: url(https://images.pexels.com/photos/1454806/pexels-photo-1454806.jpeg?auto=compress&cs=tinysrgb&w=600)"></div>
                            <div class="offers_name"><a href="#">Bedroom</a></div>
                        </div>
                        <div class="offers_content">
                            <div class="offers_price">7,299,000đ</div>
                            <div class="rating rating_4 offers_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="offers_text"> Smart bedroom design saves maximum space, helps homeowners have a good night's sleep, gives homeowners a feeling of relaxation every time they wake up.</p>
                            
                            <div class="offers_link"><a href="offers.html">Read more</a></div>
                        </div>
                    </div>
                    <div class="offers_item">
                        <div class="offers_image">
                            <div class="offers_image_background"
                                 style="background-image: url(https://images.pexels.com/photos/3965521/pexels-photo-3965521.jpeg?auto=compress&cs=tinysrgb&w=600)"></div>
                            <div class="offers_name"><a href="#">Bathroom</a></div>
                        </div>
                        <div class="offers_content">
                            <div class="offers_price">9,900,000đ</div>
                            <div class="rating rating_4 offers_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="offers_text">Today, the bathroom is not only a place to shower but also a place for us to relax after a day of work.</p>
                            
                            <div class="offers_link"><a href="offers.html">Read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        testmonials-->
        <div class="main_testimonials">
            <div class="box main_testimonials__box">
                <h2>What do customers say about us?</h2>
                <div id="testimonials" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
                    <div>
                        <div class="test_item">
                            <div class="test_item_box">
                                <div class="test_image"><img src="https://wallpaperaccess.com/full/3032282.jpg" alt="">
                                </div>
                                <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">Beckham</div>
                                            <div class="test_date">29-03-2022</div>
                                        </div>
                                        <div class="test_quote_title">"A Great!!! "</div>
                                        <p class="test_quote_text">I really had a good experience, your decoration makes me happy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="test_item">
                            <div class="test_item_box">
                                <div class="test_image"><img src="https://inkythuatso.com/uploads/thumbnails/800/2022/05/3-hinh-nen-dien-thoai-messi-inkythuatso-25-15-30-01.jpg" alt="">
                                </div>
                                <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">Messi</div>
                                            <div class="test_date">26-03-2022</div>
                                        </div>
                                        <div class="test_quote_title">" A Great!!! "</div>
                                        <p class="test_quote_text">I really had a good experience, your decoration makes me happy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="test_item">
                            <div class="test_item_box">
                                <div class="test_image"><img src="https://i.pinimg.com/originals/9c/7f/8d/9c7f8d596fc2cac4a074f7603a75005b.jpg" alt="">
                                </div>
                                <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">Ronaldo</div>
                                            <div class="test_date">15-10-2022</div>
                                        </div>
                                        <div class="test_quote_title">"A Great!!! "</div>
                                        <p class="test_quote_text">I really had a good experience, your decoration makes me happy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="test_item">
                            <div class="test_item_box">
                                <div class="test_image"><img src="styles/images/test.jpg" alt="">
                                </div>
                                <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">Hoàng Yen Chibi</div>
                                            <div class="test_date">12-04-2022</div>
                                        </div>
                                        <div class="test_quote_title">" Wonderful vacation !!! "</div>
                                        <p class="test_quote_text">The sights are so beautiful that I can't forget
                                            Okay. I am very satisfied with ALEX's translation tools.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        Hotel-->
        <div class="main_hotel">
            <div class="box main_hotel__box">
                <h2 class="main_hotel_title">Most popular designs</h2>
                <div class="hotel_items">
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="https://images.pexels.com/photos/17479300/pexels-photo-17479300/free-photo-of-d-cu-ban-phong-retro.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Classical</a></div>
                            <div class="hotel_price">1,000,000đ</div>
                            <div class="hotel_location">Hai Chau, Da Nang</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Modern</a></div>
                            <div class="hotel_price">3,000,000đ</div>
                            <div class="hotel_location">Hai Chau, Da Nang</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_3.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Wild</a></div>
                            <div class="hotel_price">1,900,00đ</div>
                            <div class="hotel_location">Ha Noi</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_4.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Asia</a></div>
                            <div class="hotel_price">4,100,000đ</div>
                            <div class="hotel_location">district 1, HCM</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_1.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Europe</a></div>
                            <div class="hotel_price">1,000,000đ</div>
                            <div class="hotel_location">Hai Chau, Da Nang</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_2.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Simple</a></div>
                            <div class="hotel_price">3,000,000đ</div>
                            <div class="hotel_location">Hai Chau, Da Nang</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_3.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Fussy</a></div>
                            <div class="hotel_price">1,900,00đ</div>
                            <div class="hotel_location">Ha Noi</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_4.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">High fashioned</a></div>
                            <div class="hotel_price">4,100,000đ</div>
                            <div class="hotel_location">district 1, HCM</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <button onclick="topFunction()" id="back_top" title="Go to top"><i class="fas fa-rocket"></i></button>
        <div class="box footer__box">
            <div class="footer__about">
                <div class="footer__logo">
                    <div class="logo">
                        <a href="#"><img src="styles/images/logo.png" alt="">ALEX</a>
                    </div>
                </div>
                <p class="footer_about__text">
                    ALEX is proud to be a typical unit in the field of furniture receiving prestigious awards for the Vietnamese business community.
                </p>
                <ul class="footer_social_list">
                    <li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="footer_social_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="footer__blog">
                <div class="footer_title">news</div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="https://images.pexels.com/photos/4352247/pexels-photo-4352247.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Selling products</a></div>
                        <div class="footer_blog__date">30/04/2022</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="https://images.pexels.com/photos/447592/pexels-photo-447592.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Favorite products</a></div>
                        <div class="footer_blog__date">30/04/2022</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="https://images.pexels.com/photos/3926542/pexels-photo-3926542.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Designs</a></div>
                        <div class="footer_blog__date">30/04/2022</div>
                    </div>
                </div>
            </div>
            <div class="footer__tags">
                <div class="footer_title">Tags</div>
                <ul class="tags_list">
                    <li class="tags_item"><a href="#">Northern</a></li>
                    <li class="tags_item"><a href="#">Central</a></li>
                    <li class="tags_item"><a href="#">South</a></li>
                    <li class="tags_item"><a href="#">Da Nang</a></li>
                    <li class="tags_item"><a href="#">Quang Nam</a></li>
                    <li class="tags_item"><a href="#">Quang Binh</a></li>
                </ul>
            </div>
            <div class="footer__contact">
                <div class="footer_title">Contact</div>
                <ul class="contact_list">
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact_text">50 Nguyen Tu Gian, Da Nang</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-phone-square"></i></div>
                        <div class="contact_text">0978150336</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact_text">namdhbd00103@fpt.edu.vn</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-globe-asia"></i></div>
                        <div class="contact_text">ALEX</div>
                    </li>

                </ul>
            </div>
        </div>
    </footer>

</div>

</body>
<script src="styles/js/main_js.js"></script>
<script>

    $("#single_item").slick({
        dots: true
    });
    $("#testimonials").slick({
        dots: false
    });
</script>

</html>
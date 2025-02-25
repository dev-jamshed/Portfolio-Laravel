<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/frontend')}}/assets/images/favicon.svg">
    <title>Home One Reeni - Personal Portfolio</title>
    
    @include('frontend.layouts.styles')

    {{-- // Dynamic Styles --}}
    @yield('styles')


</head>

<body>

    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-one header--sticky header--transparent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-content">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-dark" src="{{asset('assets/frontend')}}/assets/images/logo/white-logo-reeni.png" alt="logo">
                                <img class="logo-white" src="{{asset('assets/frontend')}}/assets/images/logo/logo-white.png" alt="logo">
                            </a>
                        </div>
                        <nav class="tmp-mainmenu-nav d-none d-xl-block">
                            <ul class="tmp-mainmenu">
                                <li class="has-dropdown">
                                    <a href="#">Home
                                        <i class="fa-regular fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-02.html">Home 02</a></li>
                                        <li><a href="index-03.html">Home 03</a></li>
                                        <li><a href="index-04.html">Home 04</a></li>
                                        <li><a href="index-05.html">Home 05</a></li>
                                        <li><a href="index-06.html">Home 06</a></li>
                                        <li><a href="index-07.html">Home 07</a></li>
                                        <li><a href="index-08.html">Home 08</a></li>
                                        <li><a href="index-09.html">Home 09</a></li>
                                        <li><a href="index-10.html">Home 10</a></li>
                                        <li><a href="index-11.html">Home 11</a></li>
                                        <li><a href="index-12.html">Home 12</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Services
                                        <i class="fa-regular fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Blog
                                        <i class="fa-regular fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog Classic</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Project
                                        <i class="fa-regular fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="project.html">Project</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>

                        </nav>
                        <div class="tmp-header-right">
                            <div class="social-share-wrapper d-none d-md-block">
                                <div class="social-link">
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="actions-area">
                                <div class="tmp-side-collups-area d-none d-xl-block">
                                    <button class="tmp-menu-bars tmp_button_active"><i class="fa-regular fa-bars-staggered"></i></button>
                                </div>
                                <div class="tmp-side-collups-area d-block d-xl-none">
                                    <button class="tmp-menu-bars humberger_menu_active"><i class="fa-regular fa-bars-staggered"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- tpm-header-area end -->

    <div class="d-none d-xl-block">
        <div class="tmp-sidebar-area tmp_side_bar">
            <div class="inner">
                <div class="top-area">
                    <a href="index.html" class="logo">
                        <img class="logo-dark" src="{{asset('assets/frontend')}}/assets/images/logo/white-logo-reeni.png" alt="logo">
                        <img class="logo-white" src="{{asset('assets/frontend')}}/assets/images/logo/logo-white.png" alt="logo">
                    </a>
                    <div class="close-icon-area">
                        <button class="tmp-round-action-btn close_side_menu_active">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <div class="content-wrapper">
                    <div class="image-area-feature">
                        <a href="index.html">
                            <img src="{{asset('assets/frontend')}}/assets/images/logo/man.png" alt="personal-logo">
                        </a>
                    </div>
                    <h5 class="title mt--30">Freelancer delivering exceptional Webflow, and Next.js solutions.</h5>
                    <p class="disc">I am a skilled freelancer specializing in Webflow development, Figma design, and Next.js projects. I deliver creative, dynamic, and user-centric web solutions.
                    </p>
                    <div class="short-contact-area">
                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-phone"></i>
                            <div class="information tmp-link-animation">
                                <span>Call Now</span>
                                <a href="#" class="number">+92 (8800) - 98670</a>
                            </div>
                        </div>
                        <!-- single contact information end -->

                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="information tmp-link-animation">
                                <span>Mail Us</span>
                                <a href="#" class="number">example@info.com</a>
                            </div>
                        </div>
                        <!-- single contact information end -->

                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <div class="information tmp-link-animation">
                                <span>My Address</span>
                                <span class="number">66 Broklyant, New York 3269</span>
                            </div>
                        </div>
                        <!-- single contact information end -->
                    </div>
                    <!-- social area start -->
                    <div class="social-wrapper mt--20">
                        <span class="subtitle">find with me</span>
                        <div class="social-link">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <!-- social area end -->
                </div>
            </div>
        </div>
        <a class="overlay_close_side_menu close_side_menu_active" href="javascript:void(0);"></a>
    </div>

    <div class="d-block d-xl-none">
        <div class="tmp-popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html" class="logo-area">
                            <img class="logo-dark" src="{{asset('assets/frontend')}}/assets/images/logo/white-logo-reeni.png" alt="logo">
                            <img class="logo-white" src="{{asset('assets/frontend')}}/assets/images/logo/logo-white.png" alt="logo">
                        </a>

                    </div>
                    <div class="close-menu">
                        <button class="close-button tmp-round-action-btn">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <ul class="tmp-mainmenu">
                    <li class="has-dropdown">
                        <a href="#">Home
                            <i class="fa-regular fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="index-02.html">Home 02</a></li>
                            <li><a href="index-03.html">Home 03</a></li>
                            <li><a href="index-04.html">Home 04</a></li>
                            <li><a href="index-05.html">Home 05</a></li>
                            <li><a href="index-06.html">Home 06</a></li>
                            <li><a href="index-07.html">Home 07</a></li>
                            <li><a href="index-08.html">Home 08</a></li>
                            <li><a href="index-09.html">Home 09</a></li>
                            <li><a href="index-10.html">Home 10</a></li>
                            <li><a href="index-11.html">Home 11</a></li>
                            <li><a href="index-12.html">Home 12</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Services
                            <i class="fa-regular fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Blog
                            <i class="fa-regular fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="blog.html">Blog Classic</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Project
                            <i class="fa-regular fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="project.html">Project</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>


                <div class="social-wrapper mt--40">
                    <span class="subtitle">find with me</span>
                    <div class="social-link">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>
                <!-- social area end -->



            </div>
        </div>
    </div>

  
    {{-- // Dynamic Content --}}
    @yield('content')



    <!-- Start Footer Area  -->
    <!-- Start Footer Area  -->
    <footer class="footer-area footer-style-one-wrapper bg-color-footer bg_images tmp-section-gap">
        <div class="container">
            <div class="footer-main footer-style-one">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6">
                        <div class="single-footer-wrapper border-right mr--20">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{asset('assets/frontend')}}/assets/images/logo/white-logo-reeni.png" alt="logo">
                                </a>
                            </div>
                            <p class="description"><span>Get Ready</span> To Create Great</p>
                            <form action="#" class="newsletter-form-1 mt--40">
                                <input type="email" placeholder="Email Adress">
                                <span class="form-icon"><i class="fa-regular fa-envelope"></i></span>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-wrapper quick-link-wrap">
                            <h5 class="ft-title">Quick Link</h5>
                            <ul class="ft-link tmp-link-animation">
                                <li>
                                    <a href="about.html">About Me</a>
                                </li>
                                <li>
                                    <a href="service.html">Service</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Me</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog Post</a>
                                </li>
                                <li>
                                    <a href="contact.html">Pricing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-wrapper contact-wrap">
                            <h5 class="ft-title">Contact </h5>
                            <ul class="ft-link tmp-link-animation">
                                <li><span class="ft-icon"><i class="fa-solid fa-envelope"></i></span><a href="#">example@gmail.com</a></li>
                                <li><span class="ft-icon"><i class="fa-solid fa-location-dot"></i></span>3891 Ranchview Dr. Richardson</li>
                                <li><span class="ft-icon"><i class="fa-solid fa-phone"></i></span><a href="#">01245789321</a></li>
                            </ul>
                            <div class="social-link footer">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="copyright-area-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-wrapper">
                        <p class="copy-right-para tmp-link-animation"> ©<a href="#">ThemesPark </a>
                            <script>
                                document.write(new Date().getFullYear())
                            </script> | All Rights Reserved
                        </p>
                        <ul class="tmp-link-animation">
                            <li><a href="#">Trams & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area  -->
    <!-- End Footer Area  -->


    <!-- ready chatting option via email -->
    <div class="ready-chatting-option tmp-ready-chat">
        <input type="checkbox" id="click">
        <label for="click">
            <i class="fab fa-facebook-messenger"></i>
            <i class="fas fa-times"></i>
        </label>
        <div class="wrapper">
            <div class="head-text">
                Let's chat with me? - Online
            </div>
            <div class="chat-box">
                <div class="desc-text">
                    Please fill out the form below to start chatting with me directly.
                </div>
                <form class="tmp-dynamic-form" action="#">
                    <div class="field">
                        <input class="input-field" name="name" placeholder="Your Name" type="text" required>
                    </div>
                    <div class="field">
                        <input class="input-field" name="email" placeholder="Your Email" type="email" required>
                    </div>
                    <div class="field textarea">
                        <textarea class="input-field" placeholder="Your Message" name="message" required></textarea>
                    </div>
                    <div class="field">
                        <button name="submit" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ready chatting option via email end -->


    <!-- progress area start -->
    <div class="scrollToTop" style="display: block;">
        <div class="arrowUp">
            <i class="fa-light fa-arrow-up"></i>
        </div>
        <div class="water" style="transform: translate(0px, 87%);">
            <svg viewBox="0 0 560 20" class="water_wave water_wave_back">
                <use xlink:href="#wave"></use>
            </svg>
            <svg viewBox="0 0 560 20" class="water_wave water_wave_front">
                <use xlink:href="#wave"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 560 20" style="display: none;">
                <symbol id="wave">
                    <path d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z" fill="#FF014F"></path>
                    <path d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z" fill="#FF014F"></path>
                    <path d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z" fill="#FF014F"></path>
                    <path d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z" fill="#FF014F"></path>
                </symbol>
            </svg>

        </div>
    </div>
    <!-- progress area end -->
 


    @include('frontend.layouts.scripts')
    
    {{-- // Dynamic Scripts --}}
    @yield('scripts')


</body>


</html>
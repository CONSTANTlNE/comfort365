@extends('site.components.layout')

@section('index')
    @push('css')

        <style>

            .banner-cleaning-area {
                background-image: url({{asset('frontendAssets/images/hero/2.jpg')}});
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                height: 900px;
            }

            .banner-cleaning-area.two {
                background-image: url({{asset('frontendAssets/images/hero/11.jpg')}});
            }

            .banner-cleaning-area.three {
                background-image: url({{asset('frontendAssets/images/hero/electric.jpg')}});
            }

            .banner-cleaning-area.four {
                background-image: url({{asset('frontendAssets/images/hero/firesafety.jpg')}});
            }

        </style>
    @endpush
    <!-- banner area cleaning home start -->
    <div class="cleaning-home-banner-wrapper-one">
        <div class="swiper mySwiper-banner-cleaning">
            <div class="swiper-wrapper">
                <section class="swiper-slide">
                    <!-- cleaning home banner start -->
                    <div class="main-cleaning-wrapper-main-swiper">
                        <div class="shape-area-left">
                            <img class="full" src="frontendAssets/images/banner/10.png" alt="shape-image">
                            <img class="left-b" src="frontendAssets/images/banner/11.png" alt="shape-image">
                            <img class="left-t" src="frontendAssets/images/banner/12.png" alt="shape-image">
                            <img class="right-b" src="frontendAssets/images/banner/09.png" alt="shape-image">
                        </div>
                        <div class="banner-cleaning-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner-cleaning-content text-center">
                                            <span class="pre">ლიცენზირებული გაზის კომპანია</span>
                                            <h1 class="title">გაზის სამუშაოები</h1>
                                            <a aria-label="contact mobile phone" href="tel:593365365" class="rts-btn btn-primary">დაგვიკავშირდით</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cleaning home banner end -->
                </section>
                <section class="swiper-slide">
                    <!-- cleaning home banner start -->
                    <div class="main-cleaning-wrapper-main-swiper ">
                        <div class="shape-area-left">
                            <img class="full" src="frontendAssets/images/banner/10.png" alt="shape-image">
                            <img class="left-b" src="frontendAssets/images/banner/11.png" alt="shape-image">
                            <img class="left-t" src="frontendAssets/images/banner/12.png" alt="shape-image">
                            <img class="right-b" src="frontendAssets/images/banner/09.png" alt="shape-image">
                        </div>
                        <div class="banner-cleaning-area two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner-cleaning-content text-center">
                                            <span class="pre">ლიცენზირებული გაზის კომპანია</span>
                                            <h1 class="title">სანტექნიკა</h1>
                                            <a  aria-label="contact mobile phone" href="tel:593365365" class="rts-btn btn-primary">დაგვიკავშირდით</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cleaning home banner end -->
                </section>
                <section class="swiper-slide">
                    <!-- cleaning home banner start -->
                    <div class="main-cleaning-wrapper-main-swiper">
                        <div class="shape-area-left">
                            <img class="full" src="frontendAssets/images/banner/10.png" alt="shape-image">
                            <img class="left-b" src="frontendAssets/images/banner/11.png" alt="shape-image">
                            <img class="left-t" src="frontendAssets/images/banner/12.png" alt="shape-image">
                            <img class="right-b" src="frontendAssets/images/banner/09.png" alt="shape-image">
                        </div>
                        <div class="banner-cleaning-area three">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner-cleaning-content text-center">
                                            <span class="pre">ლიცენზირებული გაზის კომპანია</span>
                                            <h1 class="title">ელექტრო სამუშაოები</h1>
                                            <a  aria-label="contact mobile phone" href="tel:593365365" class="rts-btn btn-primary">დაგვიკავშირდით</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cleaning home banner end -->
                </section>
                <section class="swiper-slide">
                    <!-- cleaning home banner start -->
                    <div class="main-cleaning-wrapper-main-swiper">
                        <div class="shape-area-left">
                            <img class="full" src="frontendAssets/images/banner/10.png" alt="shape-image">
                            <img class="left-b" src="frontendAssets/images/banner/11.png" alt="shape-image">
                            <img class="left-t" src="frontendAssets/images/banner/12.png" alt="shape-image">
                            <img class="right-b" src="frontendAssets/images/banner/09.png" alt="shape-image">
                        </div>
                        <div class="banner-cleaning-area four">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner-cleaning-content text-center">
                                            <span class="pre">ლიცენზირებული გაზის კომპანია</span>
                                            <h1 class="title">სახანძრო უსაფრთხოება</h1>
                                            <a  aria-label="contact mobile phone" href="tel:593365365" class="rts-btn btn-primary">დაგვიკავშირდით</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cleaning home banner end -->
                </section>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <!-- banner area cleaning home end -->

    <!-- rts about area start -->
    <section class="rts-cleaning-home-about rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr--70 pr_sm--0">
                    <div class="cleaning-home-about-left-img">
                        <div class="thumbnail">
                            <img src="frontendAssets/images/about/constrworker.png" alt="image-about">
                            <div style="width: 150px" class="shape">
{{--                                <img style="width: 50px" src="frontendAssets/images/about/shape.png" alt="shape">--}}
                                <div class="inner-content text-center">
                                    <p style="font-weight: bold;font-size: 22px;color: black">12</p>
                                    <p style="color: black!important;">წლიანი გამოცდილება</p>
                                </div>
                            </div>
                        </div>
{{--                        <div class="small-image images">--}}
{{--                            <img style="width: 230px;height: 230px" src="frontendAssets/images/about/gas.jpg" alt="images">--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6  pt_sm--30">
                    <div class="about-cleaning-right-content mt_md--30 mt_sm--30">
                        <div class="title-area-left text-center">
                            {{--                            <p class="pre">--}}
                            {{--                                <span>Quality Handyman</span> Solution--}}
                            {{--                            </p>--}}
                            <h2 class="title text-center">
                                მოკლედ ჩვენს შესახებ
                            </h2>
                        </div>
                        <div class="inner-content-about-cleaning">
                            <p class="disc text-center">
                                Comfort 365 არის სერტიფიცირებული გაზის კომპანია რომელიც დაკომპლექტებულია მრავალწლიანი
                                გამოცდილების მქონე კადრით.
                            </p>
                            <div style="align-items: center!important;" class="experience text-center justify-content-center align-middle">
                                <img style="height: 150px" src="frontendAssets/images/logo/logo_nobg.jpeg" alt="about">
                                <p class="exp">
                                    სახლის კომფორტი იწყება
                                    <br>
                                    გამართული კომუნიკაციებიდან
                                </p>
                            </div>
                            <div style="align-items: center!important;" class="short-cta">
                                <div class="call">
                                    <a  aria-label="contact mobile phone" href="tel:593365365">
                                        <img src="frontendAssets/images/about/call.png" alt="call">
                                    </a>
                                    <div class="info">
                                        <a  aria-label="contact mobile phone" href="tel:593365365" class="number">
                                            {{-- <span>Call Directly 24/7</span>--}}
                                            593-365-365
                                        </a>
                                    </div>
                                </div>
                                <a  aria-label="contact mobile phone" href="tel:593365365" class="rts-btn btn-primary">დაგვიგავშირდით</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rts about area end -->

    <!-- more about company area start -->

    <!-- more about company area end -->

    <!-- done project area start -->
    <div class="done-project-area rts-section-gap">

        <div class="container mb--150">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center">
                        {{--                        <p class="pre">--}}
                        {{--                            More About Diyer Company--}}
                        {{--                        </p>--}}
                        <h2 class="title">
                            მომსახურების <br>
                            <span>ჩამონათვალი</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--30 g-24">
                <section class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single project area start -->
                    <div class="single-cleaning-project">
                        <a style="max-height: 400px!important; object-fit: cover; display: block; overflow: hidden;"
                           href="#" onclick="this.preventDefault()" class="thumbnail">
                            <img style="max-height: 400px; width: 100%; object-fit: cover;"
                                 src="{{asset('frontendAssets/images/services/5.jpg')}}" alt="project">
                        </a>
                        <div style="padding-left: 5px" class="project-content-area">

                                <h1 style="font-size: 24px!important;line-height: normal" class="title text-center">გაზის შიდა
                                    ქსელების პროექტირება და მონტაჟი</h1>

                            <ul style="padding-left: 12px">
                                <li class="disc">პროექტირება</li>
                                <li class="disc">შიდა ქსელების მოწყობა</li>
                                <li class="disc">საინსპექციო ყუთების მოწყობა</li>
                            </ul>
                            {{--                            <p class="disc">--}}
                            {{--                                Air source heat pump system is that combines heating, cooling heating problem solutions.--}}
                            {{--                            </p>--}}
                            <div class="d-flex justify-content-center gap-4">
                                <a  aria-label="contact mobile phone" href="tel:593365365">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36"
                                         viewBox="0 0 512 512">
                                        <path fill="#8f9799"
                                              d="M345.744 12.715h-40.098a7.2 7.2 0 0 0-7.2 7.2v6.956a7.2 7.2 0 0 0 7.2 7.2h40.098a7.2 7.2 0 0 0 7.2-7.2v-6.956a7.2 7.2 0 0 0-7.2-7.2"></path>
                                        <path fill="#464a4c"
                                              d="M391.564 49.674V469.81c0 15.906-12.894 28.8-28.8 28.8H149.236c-15.906 0-28.8-12.894-28.8-28.8V49.674c0-15.906 12.894-28.8 28.8-28.8h213.528c15.906 0 28.8 12.894 28.8 28.8"></path>
                                        <path fill="#cad6d8"
                                              d="M371.645 67.215v349.969c0 7.953-6.447 14.4-14.4 14.4h-202.49c-7.953 0-14.4-6.447-14.4-14.4V67.215c0-7.953 6.447-14.4 14.4-14.4h202.49c7.953 0 14.4 6.447 14.4 14.4"></path>
                                        <path fill="#f4f9f9"
                                              d="M140.355 340.662V65.235c0-6.86 5.827-12.42 13.016-12.42h157.322z"></path>
                                        <path fill="#8f9799"
                                              d="M235.283 478.024h41.434c7.158 0 12.96-5.802 12.96-12.96v-.474c0-7.158-5.802-12.96-12.96-12.96h-41.434c-7.158 0-12.96 5.802-12.96 12.96v.474c0 7.158 5.802 12.96 12.96 12.96"></path>
                                    </svg>
                                </a>
                                <a aria-label="whatsapp contact" href="https://wa.me/995593365365">
                                    <svg viewBox="0 0 256 259" width="40" height="40" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid">
                                        <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                                              fill="#00E676"/>
                                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                                              fill="#FFF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single project area end -->
                </section>
                <section class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single project area start -->
                    <div class="single-cleaning-project">
                        <a style="max-height: 400px!important; object-fit: cover; display: block; overflow: hidden;"
                           href="#" onclick="event.preventDefault()" class="thumbnail">
                            <img style="max-height: 400px; width: 100%; object-fit: cover;"
                                 src="{{asset('frontendAssets/images/services/santeqnika.jpg')}}"
                                 alt="plumbing service">
                        </a>
                        <div style="padding-left: 5px;padding-right: 10px" class="project-content-area">
                            <a href="#" onclick="event.preventDefault()" >
                                <h1 style="font-size: 24px!important;line-height: normal" class="title text-center">სანტექნიკა</h1>
                            </a>
                            <ul style="padding-left: 12px">
                                <li class="disc">შიდა ქსელის მოწყობა</li>
                                <li class="disc">საკანალიზაციო ინფრასტრუქტურის სრული მოწყობა</li>
                                <li class="disc">წყლის ჭების მოწყობა</li>
                            </ul>
                            <div class="d-flex justify-content-center gap-4">
                                <a  aria-label="contact mobile phone" href="tel:593365365">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36"
                                         viewBox="0 0 512 512">
                                        <path fill="#8f9799"
                                              d="M345.744 12.715h-40.098a7.2 7.2 0 0 0-7.2 7.2v6.956a7.2 7.2 0 0 0 7.2 7.2h40.098a7.2 7.2 0 0 0 7.2-7.2v-6.956a7.2 7.2 0 0 0-7.2-7.2"></path>
                                        <path fill="#464a4c"
                                              d="M391.564 49.674V469.81c0 15.906-12.894 28.8-28.8 28.8H149.236c-15.906 0-28.8-12.894-28.8-28.8V49.674c0-15.906 12.894-28.8 28.8-28.8h213.528c15.906 0 28.8 12.894 28.8 28.8"></path>
                                        <path fill="#cad6d8"
                                              d="M371.645 67.215v349.969c0 7.953-6.447 14.4-14.4 14.4h-202.49c-7.953 0-14.4-6.447-14.4-14.4V67.215c0-7.953 6.447-14.4 14.4-14.4h202.49c7.953 0 14.4 6.447 14.4 14.4"></path>
                                        <path fill="#f4f9f9"
                                              d="M140.355 340.662V65.235c0-6.86 5.827-12.42 13.016-12.42h157.322z"></path>
                                        <path fill="#8f9799"
                                              d="M235.283 478.024h41.434c7.158 0 12.96-5.802 12.96-12.96v-.474c0-7.158-5.802-12.96-12.96-12.96h-41.434c-7.158 0-12.96 5.802-12.96 12.96v.474c0 7.158 5.802 12.96 12.96 12.96"></path>
                                    </svg>
                                </a>
                                <a aria-label="whatsapp contact" href="https://wa.me/995593365365">
                                    <svg viewBox="0 0 256 259" width="40" height="40" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid">
                                        <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                                              fill="#00E676"/>
                                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                                              fill="#FFF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single project area end -->
                </section>
                <section class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single project area start -->
                    <div class="single-cleaning-project">
                        <a  style="max-height: 400px!important; object-fit: cover; display: block; overflow: hidden;"
                            href="#" onclick="event.preventDefault()" class="thumbnail">
                            <img style="max-height: 400px; width: 100%; object-fit: cover;"
                                 src="{{asset('frontendAssets/images/services/gatboba.jpg')}}"
                                 alt="central heating and central cooling">
                        </a>
                        <div style="padding-left: 5px;padding-right: 10px" class="project-content-area">

                                <h1 style="font-size: 24px!important;line-height: normal" class="title">
                                    გათბობა-გაგრილების სისტემების მონტაჟი </h1>

                            <ul style="padding-left: 12px">
                                <li class="disc">საყოფაცხოვრებო ცენტრალური გათბობის ქვაბების მონტაჟი</li>
                                <li class="disc">ინდუსტრიული ცენტრალური გათბობის(საქვაბის) მონტაჟი</li>
                                <li class="disc">გაგრილების სისტემების(ფანკოილი, ჩილერი და სხვა)</li>
                                <li class="disc">წყლის მომარაგების ტუმბო სადგურები</li>
                            </ul>
                            {{--                            <p class="disc">--}}
                            {{--                                Air source heat pump system is that combines heating, cooling heating problem solutions.--}}
                            {{--                            </p>--}}
                            <div class="d-flex justify-content-center gap-4">
                                <a  aria-label="contact mobile phone" href="tel:593365365">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36"
                                         viewBox="0 0 512 512">
                                        <path fill="#8f9799"
                                              d="M345.744 12.715h-40.098a7.2 7.2 0 0 0-7.2 7.2v6.956a7.2 7.2 0 0 0 7.2 7.2h40.098a7.2 7.2 0 0 0 7.2-7.2v-6.956a7.2 7.2 0 0 0-7.2-7.2"></path>
                                        <path fill="#464a4c"
                                              d="M391.564 49.674V469.81c0 15.906-12.894 28.8-28.8 28.8H149.236c-15.906 0-28.8-12.894-28.8-28.8V49.674c0-15.906 12.894-28.8 28.8-28.8h213.528c15.906 0 28.8 12.894 28.8 28.8"></path>
                                        <path fill="#cad6d8"
                                              d="M371.645 67.215v349.969c0 7.953-6.447 14.4-14.4 14.4h-202.49c-7.953 0-14.4-6.447-14.4-14.4V67.215c0-7.953 6.447-14.4 14.4-14.4h202.49c7.953 0 14.4 6.447 14.4 14.4"></path>
                                        <path fill="#f4f9f9"
                                              d="M140.355 340.662V65.235c0-6.86 5.827-12.42 13.016-12.42h157.322z"></path>
                                        <path fill="#8f9799"
                                              d="M235.283 478.024h41.434c7.158 0 12.96-5.802 12.96-12.96v-.474c0-7.158-5.802-12.96-12.96-12.96h-41.434c-7.158 0-12.96 5.802-12.96 12.96v.474c0 7.158 5.802 12.96 12.96 12.96"></path>
                                    </svg>
                                </a>
                                <a aria-label="whatsapp contact" href="https://wa.me/995593365365">
                                    <svg viewBox="0 0 256 259" width="40" height="40" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid">
                                        <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                                              fill="#00E676"/>
                                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                                              fill="#FFF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single project area end -->
                </section>
                <section class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single project area start -->
                    <div class="single-cleaning-project">
                        <a  style="max-height: 400px!important; object-fit: cover; display: block; overflow: hidden;" href="#" onclick="event.preventDefault()" class="thumbnail">
                            <img style="max-height: 400px; width: 100%; object-fit: cover;" src="frontendAssets/images/project/detect.jpg" alt="leak detection">
                        </a>
                        <div style="padding-left: 5px;padding-right: 10px" class="project-content-area">

                                <h1 style="font-size: 24px!important;line-height: normal" class="title">დაზიანების
                                    დადგენა/აღმოფხვრა</h1>

                            <ul style="padding-left: 12px">
                                <li class="disc">გაზის და კანალიზაციის დაზიანების ადგილის დადგენა სპეციალური კამერით
                                </li>
                                <li class="disc">ცივი და ცხელი წყლის მილების დაზიანების დადგენა თერმო-სკანერული
                                    აპარატით
                                </li>
                                <li class="disc">გაზის გაჟონვის დადგენა ლაზერული აპარატის საშუალებით.</li>

                            </ul>
                            {{--                            <p class="disc">--}}
                            {{--                                Air source heat pump system is that combines heating, cooling heating problem solutions.--}}
                            {{--                            </p>--}}
                            <div class="d-flex justify-content-center gap-4">
                                <a  aria-label="contact mobile phone" href="tel:593365365">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36"
                                         viewBox="0 0 512 512">
                                        <path fill="#8f9799"
                                              d="M345.744 12.715h-40.098a7.2 7.2 0 0 0-7.2 7.2v6.956a7.2 7.2 0 0 0 7.2 7.2h40.098a7.2 7.2 0 0 0 7.2-7.2v-6.956a7.2 7.2 0 0 0-7.2-7.2"></path>
                                        <path fill="#464a4c"
                                              d="M391.564 49.674V469.81c0 15.906-12.894 28.8-28.8 28.8H149.236c-15.906 0-28.8-12.894-28.8-28.8V49.674c0-15.906 12.894-28.8 28.8-28.8h213.528c15.906 0 28.8 12.894 28.8 28.8"></path>
                                        <path fill="#cad6d8"
                                              d="M371.645 67.215v349.969c0 7.953-6.447 14.4-14.4 14.4h-202.49c-7.953 0-14.4-6.447-14.4-14.4V67.215c0-7.953 6.447-14.4 14.4-14.4h202.49c7.953 0 14.4 6.447 14.4 14.4"></path>
                                        <path fill="#f4f9f9"
                                              d="M140.355 340.662V65.235c0-6.86 5.827-12.42 13.016-12.42h157.322z"></path>
                                        <path fill="#8f9799"
                                              d="M235.283 478.024h41.434c7.158 0 12.96-5.802 12.96-12.96v-.474c0-7.158-5.802-12.96-12.96-12.96h-41.434c-7.158 0-12.96 5.802-12.96 12.96v.474c0 7.158 5.802 12.96 12.96 12.96"></path>
                                    </svg>
                                </a>
                                <a aria-label="whatsapp contact" href="https://wa.me/995593365365">
                                    <svg viewBox="0 0 256 259" width="40" height="40" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid">
                                        <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                                              fill="#00E676"/>
                                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                                              fill="#FFF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single project area end -->
                </section>
                <section class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single project area start -->
                    <div class="single-cleaning-project">
                        <a style="max-height: 400px!important; object-fit: cover; display: block; overflow: hidden;" href="#" onclick="event.preventDefault()" class="thumbnail">
                            <img style="max-height: 400px; width: 100%; object-fit: cover;" src="frontendAssets/images/project/electric.jpg" alt="electrician service">
                        </a>
                        <div style="padding-left: 5px;padding-right: 10px" class="project-content-area">

                                <h1 style="font-size: 24px!important;line-height: normal" class="title text-center">
                                    ელექტრო გაყვანილობის მონტაჟი
                                </h1>

                            <ul style="padding-left: 12px">
                                <li class="disc">პროექრირება</li>
                                <li class="disc">შიდა დაქსელვა</li>
                                <li class="disc">შიდა მრიცხველების მონტაჟი</li>

                            </ul>
                            {{--                            <p class="disc">--}}
                            {{--                                Air source heat pump system is that combines heating, cooling heating problem solutions.--}}
                            {{--                            </p>--}}
                            <div class="d-flex justify-content-center gap-4">
                                <a  aria-label="contact mobile phone" href="tel:593365365">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36"
                                         viewBox="0 0 512 512">
                                        <path fill="#8f9799"
                                              d="M345.744 12.715h-40.098a7.2 7.2 0 0 0-7.2 7.2v6.956a7.2 7.2 0 0 0 7.2 7.2h40.098a7.2 7.2 0 0 0 7.2-7.2v-6.956a7.2 7.2 0 0 0-7.2-7.2"></path>
                                        <path fill="#464a4c"
                                              d="M391.564 49.674V469.81c0 15.906-12.894 28.8-28.8 28.8H149.236c-15.906 0-28.8-12.894-28.8-28.8V49.674c0-15.906 12.894-28.8 28.8-28.8h213.528c15.906 0 28.8 12.894 28.8 28.8"></path>
                                        <path fill="#cad6d8"
                                              d="M371.645 67.215v349.969c0 7.953-6.447 14.4-14.4 14.4h-202.49c-7.953 0-14.4-6.447-14.4-14.4V67.215c0-7.953 6.447-14.4 14.4-14.4h202.49c7.953 0 14.4 6.447 14.4 14.4"></path>
                                        <path fill="#f4f9f9"
                                              d="M140.355 340.662V65.235c0-6.86 5.827-12.42 13.016-12.42h157.322z"></path>
                                        <path fill="#8f9799"
                                              d="M235.283 478.024h41.434c7.158 0 12.96-5.802 12.96-12.96v-.474c0-7.158-5.802-12.96-12.96-12.96h-41.434c-7.158 0-12.96 5.802-12.96 12.96v.474c0 7.158 5.802 12.96 12.96 12.96"></path>
                                    </svg>
                                </a>
                                <a aria-label="whatsapp contact" href="https://wa.me/995593365365">
                                    <svg viewBox="0 0 256 259" width="40" height="40" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid">
                                        <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                                              fill="#00E676"/>
                                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                                              fill="#FFF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single project area end -->
                </section>
                <section class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single project area start -->
                    <div class="single-cleaning-project">
                        <a style="max-height: 400px!important; object-fit: cover; display: block; overflow: hidden;"  href="#" onclick="event.preventDefault()" class="thumbnail">
                            <img style="max-height: 400px; width: 100%; object-fit: cover;" src="frontendAssets/images/project/fire.jpeg" alt="fire safety systems">
                        </a>
                        <div style="padding-left: 5px;padding-right: 10px" class="project-content-area">

                                <h1 style="font-size: 24px!important;line-height: normal" class="title text-center">სახანძრო
                                    უსაფრთხოების სიტემები</h1>

                            <ul style="padding-left: 12px">
                                <li class="disc">წყლის ტუმბოებისა და რეზერვუარების მონტაჟი</li>
                                <li class="disc">კვამლის სენსორების მონტაჟი</li>
                                <li class="disc">სუსტი დენები</li>

                            </ul>
                            {{--                            <p class="disc">--}}
                            {{--                                Air source heat pump system is that combines heating, cooling heating problem solutions.--}}
                            {{--                            </p>--}}
                            <div class="d-flex justify-content-center gap-4">
                                <a  aria-label="contact mobile phone" href="tel:593365365">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36"
                                         viewBox="0 0 512 512">
                                        <path fill="#8f9799"
                                              d="M345.744 12.715h-40.098a7.2 7.2 0 0 0-7.2 7.2v6.956a7.2 7.2 0 0 0 7.2 7.2h40.098a7.2 7.2 0 0 0 7.2-7.2v-6.956a7.2 7.2 0 0 0-7.2-7.2"></path>
                                        <path fill="#464a4c"
                                              d="M391.564 49.674V469.81c0 15.906-12.894 28.8-28.8 28.8H149.236c-15.906 0-28.8-12.894-28.8-28.8V49.674c0-15.906 12.894-28.8 28.8-28.8h213.528c15.906 0 28.8 12.894 28.8 28.8"></path>
                                        <path fill="#cad6d8"
                                              d="M371.645 67.215v349.969c0 7.953-6.447 14.4-14.4 14.4h-202.49c-7.953 0-14.4-6.447-14.4-14.4V67.215c0-7.953 6.447-14.4 14.4-14.4h202.49c7.953 0 14.4 6.447 14.4 14.4"></path>
                                        <path fill="#f4f9f9"
                                              d="M140.355 340.662V65.235c0-6.86 5.827-12.42 13.016-12.42h157.322z"></path>
                                        <path fill="#8f9799"
                                              d="M235.283 478.024h41.434c7.158 0 12.96-5.802 12.96-12.96v-.474c0-7.158-5.802-12.96-12.96-12.96h-41.434c-7.158 0-12.96 5.802-12.96 12.96v.474c0 7.158 5.802 12.96 12.96 12.96"></path>
                                    </svg>
                                </a>
                                <a aria-label="whatsapp contact" href="https://wa.me/995593365365">
                                    <svg viewBox="0 0 256 259" width="40" height="40" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid">
                                        <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                                              fill="#00E676"/>
                                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                                              fill="#FFF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single project area end -->
                </section>
                <section class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single project area start -->
                    <div class="single-cleaning-project">
                        <a   style="max-height: 400px!important; object-fit: cover; display: block; overflow: hidden;" href="#" onclick="event.preventDefault()" class="thumbnail">
                            <img style="max-height: 400px; width: 100%; object-fit: cover;"  src="frontendAssets/images/project/saventilacio.jpeg" alt="Ventilation systems">
                        </a>
                        <div style="padding-left: 5px;padding-right: 10px" class="project-content-area">

                                <h1 style="font-size: 24px!important;line-height: normal" class="title text-center">სავენტილაციო
                                    არხების მოწყობა</h1>

                            <ul style="padding-left: 12px">
                                <li class="disc">საჰაერო მილები</li>
                                <li class="disc">ჰაერის გამწოვი და შემშვები</li>
                                <li class="disc">ჰაერის ფილტრები</li>

                            </ul>
                            {{--                            <p class="disc">--}}
                            {{--                                Air source heat pump system is that combines heating, cooling heating problem solutions.--}}
                            {{--                            </p>--}}
                            <div class="d-flex justify-content-center gap-4">
                                <a  aria-label="contact mobile phone" href="tel:593365365">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36"
                                         viewBox="0 0 512 512">
                                        <path fill="#8f9799"
                                              d="M345.744 12.715h-40.098a7.2 7.2 0 0 0-7.2 7.2v6.956a7.2 7.2 0 0 0 7.2 7.2h40.098a7.2 7.2 0 0 0 7.2-7.2v-6.956a7.2 7.2 0 0 0-7.2-7.2"></path>
                                        <path fill="#464a4c"
                                              d="M391.564 49.674V469.81c0 15.906-12.894 28.8-28.8 28.8H149.236c-15.906 0-28.8-12.894-28.8-28.8V49.674c0-15.906 12.894-28.8 28.8-28.8h213.528c15.906 0 28.8 12.894 28.8 28.8"></path>
                                        <path fill="#cad6d8"
                                              d="M371.645 67.215v349.969c0 7.953-6.447 14.4-14.4 14.4h-202.49c-7.953 0-14.4-6.447-14.4-14.4V67.215c0-7.953 6.447-14.4 14.4-14.4h202.49c7.953 0 14.4 6.447 14.4 14.4"></path>
                                        <path fill="#f4f9f9"
                                              d="M140.355 340.662V65.235c0-6.86 5.827-12.42 13.016-12.42h157.322z"></path>
                                        <path fill="#8f9799"
                                              d="M235.283 478.024h41.434c7.158 0 12.96-5.802 12.96-12.96v-.474c0-7.158-5.802-12.96-12.96-12.96h-41.434c-7.158 0-12.96 5.802-12.96 12.96v.474c0 7.158 5.802 12.96 12.96 12.96"></path>
                                    </svg>
                                </a>
                                <a aria-label="whatsapp contact" href="https://wa.me/995593365365">
                                    <svg viewBox="0 0 256 259" width="40" height="40" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid">
                                        <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                                              fill="#00E676"/>
                                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                                              fill="#FFF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single project area end -->
                </section>
                <section class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single project area start -->
                    <div class="single-cleaning-project">
                        <a style="max-height: 400px!important; object-fit: cover; display: block; overflow: hidden;"
                           href="#" onclick="event.preventDefault()" class="thumbnail">
                            <img style="max-height: 400px; width: 100%; object-fit: cover;"
                                 src="{{asset('frontendAssets/images/services/documents.jpeg')}}"
                                 alt="help with documentation">
                        </a>
                        <div style="padding-left: 5px;padding-right: 10px" class="project-content-area">

                                <h1 style="font-size: 24px!important;line-height: normal" class="title text-center">დახმარება
                                    ნებართვის მიღებაში</h1>

                            <ul style="padding-left: 12px">
                                <li class="disc">განაცხადის მომზადება</li>
                                <li class="disc">საბუთების შეგროვება</li>
                                <li class="disc">გადაგზავნა შესაბამის ორგანოში</li>

                            </ul>
                            {{--                            <p class="disc">--}}
                            {{--                                Air source heat pump system is that combines heating, cooling heating problem solutions.--}}
                            {{--                            </p>--}}
                            <div class="d-flex justify-content-center gap-4">
                                <a  aria-label="contact mobile phone" href="tel:593365365">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36"
                                         viewBox="0 0 512 512">
                                        <path fill="#8f9799"
                                              d="M345.744 12.715h-40.098a7.2 7.2 0 0 0-7.2 7.2v6.956a7.2 7.2 0 0 0 7.2 7.2h40.098a7.2 7.2 0 0 0 7.2-7.2v-6.956a7.2 7.2 0 0 0-7.2-7.2"></path>
                                        <path fill="#464a4c"
                                              d="M391.564 49.674V469.81c0 15.906-12.894 28.8-28.8 28.8H149.236c-15.906 0-28.8-12.894-28.8-28.8V49.674c0-15.906 12.894-28.8 28.8-28.8h213.528c15.906 0 28.8 12.894 28.8 28.8"></path>
                                        <path fill="#cad6d8"
                                              d="M371.645 67.215v349.969c0 7.953-6.447 14.4-14.4 14.4h-202.49c-7.953 0-14.4-6.447-14.4-14.4V67.215c0-7.953 6.447-14.4 14.4-14.4h202.49c7.953 0 14.4 6.447 14.4 14.4"></path>
                                        <path fill="#f4f9f9"
                                              d="M140.355 340.662V65.235c0-6.86 5.827-12.42 13.016-12.42h157.322z"></path>
                                        <path fill="#8f9799"
                                              d="M235.283 478.024h41.434c7.158 0 12.96-5.802 12.96-12.96v-.474c0-7.158-5.802-12.96-12.96-12.96h-41.434c-7.158 0-12.96 5.802-12.96 12.96v.474c0 7.158 5.802 12.96 12.96 12.96"></path>
                                    </svg>
                                </a>
                                <a aria-label="whatsapp contact" href="https://wa.me/995593365365">
                                    <svg viewBox="0 0 256 259" width="40" height="40" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid">
                                        <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                                              fill="#00E676"/>
                                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                                              fill="#FFF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single project area end -->
                </section>
                <section class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single project area start -->
                    <div class="single-cleaning-project">
                        <a style="max-height: 400px!important; object-fit: cover; display: block; overflow: hidden;"
                           href="#" onclick="event.preventDefault()" class="thumbnail">
                            <img style="max-height: 400px; width: 100%; object-fit: cover;"
                                 src="{{asset('frontendAssets/images/services/miwa.jpeg')}}" alt="ground works">
                        </a>
                        <div style="padding-left: 5px;" class="project-content-area">

                                <h1 style="font-size: 24px!important;line-height: normal" class="title text-center">მიწის
                                    სამუშაოები</h1>

                            <ul style="padding-left: 12px">
                                <li class="disc">თხრილების გაჭრა</li>
                                <li class="disc">სანიაღვრე არხების მოწყობა</li>
                                <li class="disc">საკანალიზაციო ჭის მოწყობა</li>
                            </ul>
                            {{--                            <p class="disc">--}}
                            {{--                                Air source heat pump system is that combines heating, cooling heating problem solutions.--}}
                            {{--                            </p>--}}
                            <div class="d-flex justify-content-center gap-4">
                                <a  aria-label="contact mobile phone" href="tel:593365365">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36"
                                         viewBox="0 0 512 512">
                                        <path fill="#8f9799"
                                              d="M345.744 12.715h-40.098a7.2 7.2 0 0 0-7.2 7.2v6.956a7.2 7.2 0 0 0 7.2 7.2h40.098a7.2 7.2 0 0 0 7.2-7.2v-6.956a7.2 7.2 0 0 0-7.2-7.2"></path>
                                        <path fill="#464a4c"
                                              d="M391.564 49.674V469.81c0 15.906-12.894 28.8-28.8 28.8H149.236c-15.906 0-28.8-12.894-28.8-28.8V49.674c0-15.906 12.894-28.8 28.8-28.8h213.528c15.906 0 28.8 12.894 28.8 28.8"></path>
                                        <path fill="#cad6d8"
                                              d="M371.645 67.215v349.969c0 7.953-6.447 14.4-14.4 14.4h-202.49c-7.953 0-14.4-6.447-14.4-14.4V67.215c0-7.953 6.447-14.4 14.4-14.4h202.49c7.953 0 14.4 6.447 14.4 14.4"></path>
                                        <path fill="#f4f9f9"
                                              d="M140.355 340.662V65.235c0-6.86 5.827-12.42 13.016-12.42h157.322z"></path>
                                        <path fill="#8f9799"
                                              d="M235.283 478.024h41.434c7.158 0 12.96-5.802 12.96-12.96v-.474c0-7.158-5.802-12.96-12.96-12.96h-41.434c-7.158 0-12.96 5.802-12.96 12.96v.474c0 7.158 5.802 12.96 12.96 12.96"></path>
                                    </svg>
                                </a>
                                <a aria-label="whatsapp contact" href="https://wa.me/995593365365">
                                    <svg viewBox="0 0 256 259" width="40" height="40" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid">
                                        <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                                              fill="#00E676"/>
                                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                                              fill="#FFF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single project area end -->
                </section>
                <section class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- single project area start -->
                    <div class="single-cleaning-project text-center">
                        <a style="max-height: 400px!important; object-fit: cover; display: block; overflow: hidden;"
                           href="#" onclick="event.preventDefault()" class="thumbnail">
                            <img style="max-height: 400px; width: 100%; object-fit: cover;"
                                 src="{{asset('frontendAssets/images/services/weldng.jpg')}}" alt="welding services">
                        </a>
                        <div style="padding-left: 5px;padding-right: 10px;margin-left: 0" class="project-content-area">

                                <h1 style="font-size: 24px!important;line-height: normal" class="title text-center">
                                    აირშედუღების, ელექტროშედუღების
                                    და პოლიეთილენის მილების შედუღების მომსახურება</h1>

                            <p>შედუღების ყველა სამუშაო იწარმოება ლიცენზირებული პროფესიონალების მიერ</p>
                            {{--                            <ul style="padding-left: 12px">--}}
                            {{--                                <li class="disc">შედუღების ყველა სამუშაო იწარმოება ლიცენზირებული პროფესიონალების მიერ--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}
                            {{--                            <p class="disc">--}}
                            {{--                                Air source heat pump system is that combines heating, cooling heating problem solutions.--}}
                            {{--                            </p>--}}
                            <div class="d-flex justify-content-center gap-4">
                                <a  aria-label="contact mobile phone" href="tel:593365365">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36"
                                         viewBox="0 0 512 512">
                                        <path fill="#8f9799"
                                              d="M345.744 12.715h-40.098a7.2 7.2 0 0 0-7.2 7.2v6.956a7.2 7.2 0 0 0 7.2 7.2h40.098a7.2 7.2 0 0 0 7.2-7.2v-6.956a7.2 7.2 0 0 0-7.2-7.2"></path>
                                        <path fill="#464a4c"
                                              d="M391.564 49.674V469.81c0 15.906-12.894 28.8-28.8 28.8H149.236c-15.906 0-28.8-12.894-28.8-28.8V49.674c0-15.906 12.894-28.8 28.8-28.8h213.528c15.906 0 28.8 12.894 28.8 28.8"></path>
                                        <path fill="#cad6d8"
                                              d="M371.645 67.215v349.969c0 7.953-6.447 14.4-14.4 14.4h-202.49c-7.953 0-14.4-6.447-14.4-14.4V67.215c0-7.953 6.447-14.4 14.4-14.4h202.49c7.953 0 14.4 6.447 14.4 14.4"></path>
                                        <path fill="#f4f9f9"
                                              d="M140.355 340.662V65.235c0-6.86 5.827-12.42 13.016-12.42h157.322z"></path>
                                        <path fill="#8f9799"
                                              d="M235.283 478.024h41.434c7.158 0 12.96-5.802 12.96-12.96v-.474c0-7.158-5.802-12.96-12.96-12.96h-41.434c-7.158 0-12.96 5.802-12.96 12.96v.474c0 7.158 5.802 12.96 12.96 12.96"></path>
                                    </svg>
                                </a>
                                <a aria-label="whatsapp contact" href="https://wa.me/995593365365">
                                    <svg viewBox="0 0 256 259" width="40" height="40" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid">
                                        <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                                              fill="#00E676"/>
                                        <path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                                              fill="#FFF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single project area end -->
                </section>
            </div>
        </div>
    </div>
    <!-- done project area end -->

    <!-- rts team area cleanign home -->

    <!-- rts team area cleanign home end -->

    <!-- why choose us section start -->
    <div style="padding-bottom: 0px" class="why-choose-us-section-cleaning rts-section-gap bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us-cleaing">
                        <div class="title-area-left">

                            <h2 class="title text-center">
                                რატომ უნდა აგვირჩიოთ ?
                            </h2>
                        </div>
                        <div class="inner-content">
                            <p class="disc text-center w-100">
                                უპირველეს ყოვლისა ხარისხი! ყველა ჩვენს ნამუშევარზე ვიძლევით შესაბამის გარანტიას და
                                ვიღებთ პასუხისმგებლობას!
                            </p>
                            <!-- service we provide area start -->
                            <div class="service-area-inner-short text-center justify-content-start justify-content-lg-center">
                                <!-- single -->
                                <div style="margin-right:20px " class="single-c ">
                                    <div class="icon">
                                        <i class="fa-regular fa-check"></i>
                                    </div>
                                    <p class="s_v">
                                        ხარისხიანი შესრულება
                                    </p>
                                </div>
                                <!-- single end -->
                                <!-- single -->
                                <div  style="margin-right:20px " class="single-c">
                                    <div class="icon">
                                        <i class="fa-regular fa-check"></i>
                                    </div>
                                    <p class="s_v">
                                        გარანტია
                                    </p>
                                </div>
                                <!-- single end -->
                                <!-- single -->
                                <div class="single-c">
                                    <div class="icon">
                                        <i class="fa-regular fa-check"></i>
                                    </div>
                                    <p class="s_v">
                                        მოკლე ვადები
                                    </p>
                                </div>
                                <!-- single end -->
                                <!-- single -->
                                <div class="single-c">
                                    <div class="icon">
                                        <i class="fa-regular fa-check"></i>
                                    </div>
                                    <p class="s_v">
                                        კომფორტი
                                    </p>
                                </div>
                                <!-- single end -->
                            </div>
                            <!-- service we provide area end -->
                            <div class="d-flex justify-content-center">
                            <a  aria-label="contact mobile phone" href="tel:593365365" class="rts-btn btn-primary">დაგვიკავშირდით</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--30 mt_sm--30">
                    <div class="thumbnail-cleaning-choose-us">
                        <div class="thumbnail">
                            <img src="frontendAssets/images/about/constrworker.png" alt="service">
                        </div>
{{--                        <div class="sm-img images">--}}
{{--                            <img style="height: 150px" src="frontendAssets/images/logo/logo_nobg.jpeg" alt="about">--}}

{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>

        <!-- why choose us section end -->

        <!-- project area start -->
        <!-- project area end -->

        <!-- client feedd back area start -->
        <!-- client feedback area end -->

        <!-- rts blog area start -->
        <div class="rts-blog-area rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-center">
{{--                            <p class="pre">--}}
{{--                                More About Diyer Company--}}
{{--                            </p>--}}
                            <h2 class="title">
                                ჩვენი ნამუშევრები
                            </h2>
                        </div>
                    </div>
                </div>


                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach($works as $work)
                                <li style="max-width: 400px" class="glide__slide">
                                        <div style="max-width: 400px" class="rts-cl-home-blog">
                                            <a  href="{{route('gallery')}}" class="thumbnail">
                                                <img  src="{{$work->media->first()->getUrl()}}" alt="blog-area">
                                            </a>
                                            <div class="content-area text-center">
                                                <div class="body text-center">
                                                    <a href="blog-details.html">
                                                        <p class="title text-center">
                                                            {{$work->category}}
                                                        </p>
                                                    </a>
                                                    <a href="{{route('gallery')}}" class="rts-btn btn-primary">
                                                        გალერეა
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts blog area end -->

        <!-- header style two -->
        <div id="side-bar" class="side-bar header-two">
            <button aria-label="choose us" class="close-icon-menu"><i class="far fa-times"></i></button>
            <!-- inner menu area desktop start -->
            <div class="inner-main-wrapper-desk">
                <div class="thumbnail">
                    <img src="frontendAssets/images/banner/04.jpg" alt="elevate">
                </div>
                <div class="inner-content">
                    <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                    <p class="disc">
                        We successfully cope with tasks of varying complexity, provide long-term guarantees and
                        regularly
                        master new technologies.
                    </p>
                    <div class="footer">
                        <h4 class="title">Got a project in mind?</h4>
                        <a href="contact.html" class="rts-btn btn-primary">Let's talk</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- header style two End -->


        <!-- header style two -->

@endsection
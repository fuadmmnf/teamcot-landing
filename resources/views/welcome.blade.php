@extends('layouts.master')

@section('title', 'Teamcot Bangladesh Ltd')
<!-- slider -->
@section('content')

    <section id="slider" class="full-screen no-padding travel-agency-slider">
        <div id="owl-demo" class="owl-carousel owl-theme light-pagination">
            <!-- slider item -->
            <div class="item owl-bg-img" style="background-image:url('/images/newimg/1.jpg');">
                <div class="slider-overlay bg-black"></div>
                <div class="container full-screen position-relative">
                    <div class="col-md-12 slider-typography">
                        <div class="slider-text-middle-main pull-left text-left">
                            <div class="slider-text-middle">
                                <h1 class="white-text margin-five">Welcome To<br>Teamcot Bangladesh</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- slider item -->
            <div class="item owl-bg-img" style="background-image:url('/images/newimg/9.jpg');">
                <div class="slider-overlay bg-black"></div>
                <div class="container full-screen position-relative">
                    <div class="col-md-12 slider-typography">
                        <div class="slider-text-middle-main pull-left text-left">
                            <div class="slider-text-middle">
                                <h1 class="white-text margin-five">A cotton<br>agency in Bangladesh</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- slider item -->
            <div class="item owl-bg-img" style="background-image:url('/images/newimg/2.jpg');">
                <div class="slider-overlay bg-black"></div>
                <div class="container full-screen position-relative">
                    <div class="col-md-12 slider-typography">
                        <div class="slider-text-middle-main pull-left text-left">
                            <div class="slider-text-middle">
                                <h1 class="white-text margin-five">20 years working<br>experience in this trade</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
    </section>
    <!-- end slider -->
    <!-- about section -->
    <section class="no-padding-bottom wow fadeIn" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center center-col">
                    <img class="about-logo" src="/images/newimg/logo.png">
                    <span class="margin-three no-margin-top display-block letter-spacing-2">EST. 2001</span>
                    <h1>ABOUT TEAMCOT BANGLADESH LTD</h1>
                    <p class="text-med width-90 center-col margin-five no-margin-bottom">Teamcot Bangladesh Ltd is a
                        cotton agency in Bangladesh having more than 20 years working experience in this trade. We
                        mainly deal with raw cotton. Our motto is to work with only ethical buyers and sellers with the
                        view of establishing safe trading.</p>
                    <div class="row margin-five no-margin-bottom">
                        <!-- features grid -->
                        <!-- features item -->
                        <div class="col-md-4 col-xs-6 text-center features-box-style1 sm-margin-bottom-ten">
                            <h3 class="margin-ten no-margin-top xs-margin-bottom-five">Our Mission</h3>
                            <p>We strongly believe in working with excellence to both of our shipper and buyers by
                                providing right information, market knowledge, professional attitude and guiding towards
                                win-win deals among all parties.</p>
                        </div>
                        <!-- end features item -->
                        <!-- features item -->
                        <div class="col-md-4 col-xs-6 text-center features-box-style1 sm-margin-bottom-ten">
                            <h3 class="margin-ten no-margin-top xs-margin-bottom-five">Well Trained Team</h3>
                            <p>Our whole sales team individually completed "Complete Cotton Course" arranged by
                                International Cotton Association (ICA), Liverpool, UK.</p>
                        </div>
                        <!-- end features item -->
                        <!-- features item -->
                        <div class="col-md-4 col-xs-6 text-center features-box-style1 xs-margin-bottom-ten">
                            <h3 class="margin-ten no-margin-top xs-margin-bottom-five">Our Portfolio</h3>
                            <p>In our portfolio, we have world reputed merchants who can source cotton from all over the
                                world. We have been working successfully with almost all A1 spinning mills in
                                Bangladesh.</p>
                        </div>
                        <!-- end features item -->
                        <!-- end features grid -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
    <section class="padding-three title-bc">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 xs-margin-bottom-four">
                    <span class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Our
                        Team</span>
                </div>
                <!-- end section title -->
                <!-- section highlight text -->
                <div class="col-md-6 col-sm-6 text-right xs-text-left">
                </div>
                <!-- end section highlight text -->
            </div>
        </div>
    </section>

    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
            @foreach($teammembers as $teammember)
                <!-- team member -->
                    <div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp"
                         data-wow-duration="300ms">
                        <img src="{{$teammember->data()['photo_url']}}" alt=""/>
                        <figure class="position-relative bg-white">
                        <span
                            class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">{{$teammember->data()['name']}}</span>
                            <span
                                class="team-post text-uppercase letter-spacing-2 display-block">{{$teammember->data()['designation']}}</span>
                        </figure>
                    </div>
                    <!-- end team member -->
                @endforeach
            </div>
        </div>
    </section>


    <section class="padding-three title-bc" id="report">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 xs-margin-bottom-four">
                    <span
                        class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Report</span>
                </div>
                <!-- end section title -->
                <!-- section highlight text -->
                <div class="col-md-6 col-sm-6 text-right xs-text-left">
                </div>
                <!-- end section highlight text -->
            </div>
        </div>
    </section>
    <section id="new-project" class="new-project wow fadeIn">
        <div class="container">
            <div class="row center-col text-center">
                <h5 class="wow fadeInDown">Want to see/download our reports?</h5>
                <a class="btn highlight-button-black-border margin-four no-margin-bottom wow fadeInUp"
                   href="{{$reports[1]->data()['file_url']}}" target="_blank">Local Report</a> <span>
                    <a class="btn highlight-button-black-border margin-four no-margin-bottom wow fadeInUp"
                       href="{{$reports[0]->data()['file_url']}}" target="_blank">International Report</a> </span>

            </div>
        </div>
    </section>

    <section class="padding-three title-bc" id="links">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 xs-margin-bottom-four">
                    <span
                        class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Important
                        Links</span>
                </div>
                <!-- end section title -->
                <!-- section highlight text -->
                <div class="col-md-6 col-sm-6 text-right xs-text-left">
                </div>
                <!-- end section highlight text -->
            </div>
        </div>
    </section>
    <section class=" wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 text-center center-col">
                    <div class="col-md-6 col-sm-6 col-xs-4 footer-link2">
                        <ul class="ul-a-font">
                            @foreach(array_slice($linkslist, 0, ceil(count($linkslist) / 2)) as $link)
                                <li><a href="{{$link->data()['link']}}" class="link-list"
                                       target="_blank">{{$link->data()['title']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-4 footer-link2">
                        @foreach(array_slice($linkslist, ceil(count($linkslist) / 2)) as $link)
                            <li><a href="{{$link->data()['link']}}" class="link-list"
                                   target="_blank">{{$link->data()['title']}}</a></li>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="padding-three title-bc" id="links">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 xs-margin-bottom-four">
                    <span
                        class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Rules and Arbitration</span>
                </div>
                <!-- end section title -->
                <!-- section highlight text -->
                <div class="col-md-6 col-sm-6 text-right xs-text-left">
                </div>
                <!-- end section highlight text -->
            </div>
        </div>
    </section>
    <!-- highlight section -->
    <section class="bg-fast-yellow no-padding wow fadeInUp" id="rules">
        <div class="container">
            <div class="row padding-eight-new sm-text-center">
                <div class="col-md-6 no-padding">
                    <span
                        class="text-med text-uppercase letter-spacing-2 margin-two black-text font-weight-600 xs-margin-top-six xs-margin-bottom-six display-block">Please take a look at Rules and Arbitration</span>
                </div>
                <div class="col-md-6 no-padding">
                    <a class="highlight-button-dark btn btn-medium button xs-margin-bottom-five xs-no-margin-right"
                       href="{{$rules[0]->data()['file_url']}}" target="_blank">ICA Rule Book</a>
                    <a class="highlight-button btn btn-medium button xs-margin-bottom-five xs-no-margin-right"
                       href="{{$rules[1]->data()['file_url']}}" target="_blank">Value Difference Sheet</a>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-three title-bc" id="news">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 xs-margin-bottom-four">
                <span
                    class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">News</span>
                </div>
                <!-- end section title -->
                <!-- section highlight text -->
                <div class="col-md-6 col-sm-6 text-right xs-text-left">
                </div>
                <!-- end section highlight text -->
            </div>
        </div>
    </section>
    <!-- content section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row blog-3col">
            @php
                $embed = new \Embed\Embed();
            @endphp
            @foreach($newslist as $news)
                <!-- post item -->
                    @php
                        $thumbnail = $embed->get($news->data()['link'])->image;
                    @endphp
                    <div class="col-md-4 col-sm-6 col-xs-6 blog-listing wow fadeInUp" data-wow-duration="300ms">
                        <div class="blog-image"><a href=""><img
                                    src="{{'https://'. $thumbnail->getHost() . $thumbnail->getPath()}}"
                                    alt="{{$news->data()['title']}}"/></a></div>
                        <div class="blog-details">
                            <div class="blog-title"><a href="{{$news->data()['link']}}">{{$news->data()['title']}}</a>
                            </div>
                            <div class="separator-line bg-black no-margin-lr"></div>
                        </div>
                    </div>
                    <!-- end post item -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- end content section -->
    <section class="padding-three title-bc" id="gallery">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 xs-margin-bottom-four">
                <span
                    class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Gallery</span>
                </div>
                <!-- end section title -->
                <!-- section highlight text -->
                <div class="col-md-6 col-sm-6 text-right xs-text-left">
                </div>
                <!-- end section highlight text -->
            </div>
        </div>
    </section>
    <!-- content section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row blog-3col">
            @foreach($galleries as $gallery)
                <!-- post item -->
                    <div class="col-md-4 col-sm-6 col-xs-6 blog-listing wow fadeInUp" data-wow-duration="300ms">
                        <div class="blog-image"><a href="{{route('gallery', ['slug' => $gallery->id()])}}"><img
                                    src="{{$gallery->data()['photo_urls'][0]}}" alt="$gallery->data()['title']"/></a>
                        </div>
                        <div class="blog-details">
                            <div class="blog-title"><a
                                    href="{{route('gallery', ['slug' => $gallery->id()])}}">{{$gallery->data()['title']}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- end post item -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- end content section -->

    <section class="padding-three title-bc" id="contact">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 xs-margin-bottom-four">
                    <span
                        class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Contact Us</span>
                </div>
                <!-- end section title -->
                <!-- section highlight text -->
                <div class="col-md-6 col-sm-6 text-right xs-text-left">
                </div>
                <!-- end section highlight text -->
            </div>
        </div>
    </section>


    <!-- contact us section -->
    <section id="contact-us" class="xs-onepage-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 text-center center-col">
                    <div class="col-md-4 col-sm-4 text-center"><i class="icon-phone medium-icon black-text"></i>
                        <h6 class="black-text margin-two no-margin-bottom">+880-2-9330214</h6>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center"><i class="icon-map-pin medium-icon black-text"></i>
                        <h6 class="black-text margin-two no-margin-bottom">8/C, Al-Haj Shamsuddin Mansion, 17 New
                            Eskaton
                            Road, Dhaka-1000</h6>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center"><i class="icon-envelope medium-icon black-text"></i>
                        <h6 class="black-text margin-two no-margin-bottom"><a class="black-text"
                                                                              href="mailto:teamcot.bd@gmail.com">teamcot.bd@gmail.com</a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- form -->
                <form id="contactusform" method="POST">
                    {{ csrf_field() }}
                    <div class="col-md-10 col-sm-12 center-col">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="wide-separator-line margin-ten"></div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div id="success"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input name="name" type="text" placeholder="Your Name"/>
                            <input name="email" type="text" placeholder="Your Email"/>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <textarea name="message" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="col-md-6 col-sm-6 no-padding-left"><span class="required">*Please complete all
                                    fields correctly</span></div>
                            <div class="col-md-3 col-sm-6 f-right no-padding-right">
                                <input id="contact-us-button"
                                       name="send message" type="button"
                                       value="send message"
                                       class="btn btn-black no-margin-top f-right no-margin-lr">
                            </div>
                        </div>
                    </div>

                </form>
                <!-- end form -->
            </div>
        </div>
    </section>
    <section>
        <div id="map">
            <div class="row">
                <div class="col-md-12">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14607.917151138381!2d90.402763!3d23.748118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x790d8925c92d4242!2sAlhaz%20Shamsuddin%20Mansion!5e0!3m2!1sen!2sus!4v1611762652942!5m2!1sen!2sus"
                                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact us section -->
@endsection

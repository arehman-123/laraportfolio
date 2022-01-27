@extends('layouts.frontend.master')


@section('content')

        <!-- main-area -->
        <main>

            @component('frontend.pages.components.breadcrumb',['name'=>'Portfolio'])
            @endcomponent

            <!-- portfolio-area -->
            <section class="portfolio__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="portfolio__inner__nav">
                                <button class="active" data-filter="*">all</button>
                                <button data-filter=".cat-one">mobile apps</button>
                                <button data-filter=".cat-two">website Design</button>
                                <button data-filter=".cat-three">ui/kit</button>
                                <button data-filter=".cat-four">Landing page</button>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio__inner__active">
                        <div class="portfolio__inner__item grid-item cat-two cat-three">
                            <div class="row gx-0 align-items-center">
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__thumb">
                                        <a href="portfolio-details.html">
                                            <img src="assets/img/portfolio/portfolio__img01.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__content">
                                        <h2 class="title"><a href="portfolio-details.html">Ecommerce Product Apps</a></h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                            hidden in the middle of text</p>
                                        <a href="portfolio-details.html" class="link">View Case Study</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__inner__item grid-item cat-one cat-three cat-four">
                            <div class="row gx-0 align-items-center">
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__thumb">
                                        <a href="portfolio-details.html">
                                            <img src="assets/img/portfolio/portfolio__img02.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__content">
                                        <h2 class="title"><a href="portfolio-details.html">Cryptocurrency web Application</a></h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                            hidden in the middle of text</p>
                                        <a href="portfolio-details.html" class="link">View Case Study</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__inner__item grid-item cat-one cat-four">
                            <div class="row gx-0 align-items-center">
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__thumb">
                                        <a href="portfolio-details.html">
                                            <img src="assets/img/portfolio/portfolio__img03.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__content">
                                        <h2 class="title"><a href="portfolio-details.html">Making 3d Illustration</a></h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                            hidden in the middle of text</p>
                                        <a href="portfolio-details.html" class="link">View Case Study</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__inner__item grid-item cat-two">
                            <div class="row gx-0 align-items-center">
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__thumb">
                                        <a href="portfolio-details.html">
                                            <img src="assets/img/portfolio/portfolio__img04.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="portfolio__inner__content">
                                        <h2 class="title"><a href="portfolio-details.html">Hilon - Personal Portfolio</a></h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                            hidden in the middle of text</p>
                                        <a href="portfolio-details.html" class="link">View Case Study</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrap">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
            <!-- portfolio-area-end -->


            <!-- contact-area -->
            <section class="homeContact homeContact__style__two">
                <div class="container">
                    <div class="homeContact__wrap">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section__title">
                                    <span class="sub-title">07 - Say hello</span>
                                    <h2 class="title">Any questions? Feel free <br> to contact</h2>
                                </div>
                                <div class="homeContact__content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                    <h2 class="mail"><a href="/cdn-cgi/l/email-protection#e6af888089a69183848b878f8ac885898b"><span class="__cf_email__" data-cfemail="3871565e57784f5d5a55595154165b5755">[email&#160;protected]</span></a></h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="homeContact__form">
                                    <form action="#">
                                        <input type="text" placeholder="Enter name*">
                                        <input type="email" placeholder="Enter mail*">
                                        <input type="number" placeholder="Enter number*">
                                        <textarea name="message" placeholder="Enter Massage*"></textarea>
                                        <button type="submit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->


@endsection

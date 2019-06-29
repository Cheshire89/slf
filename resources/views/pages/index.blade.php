@extends('layouts.app')

@section('content')

<!-- Main Slider start -->
<section class="at-main-slider">
    <div class="flexslider">
        <ul class="slides">
            <li data-thumb="images/slider/1.jpg">
                <img src="images/slider/1.jpg" alt="">
                <p class="flex-caption">Get your dream home from <span>HOMY</span>
                </p>
            </li>
            <li data-thumb="images/slider/2.jpg">
                <img src="images/slider/2.jpg" alt="">
                <p class="flex-caption">We know your <span>dreams</span>
                </p>
            </li>
            <li data-thumb="images/slider/3.jpg">
                <img src="images/slider/3.jpg" alt="">
                <p class="flex-caption">awesome decorated <span>bathroom</span>
                </p>
            </li>
            <li data-thumb="images/slider/4.jpg">
                <img src="images/slider/4.jpg" alt="">
                <p class="flex-caption">Get your <span>dream home</span> today</p>
            </li>
            <li data-thumb="images/slider/5.jpg">
                <img src="images/slider/5.jpg" alt="">
                <p class="flex-caption">house <span>interior</span> design ideas</p>
            </li>
        </ul>
    </div>
</section>
<!-- Main Slider end -->

<!-- Main Search start from here -->
<section class="main-search-field">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <select>
                        <option value="0" selected>Location</option>
                        <option value="1">Alabama</option>
                        <option value="2">Alaska</option>
                        <option value="3">California</option>
                        <option value="4">Colorado</option>
                        <option value="5">Delaware</option>
                        <option value="6">District of Columbia</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <select class="div-toggle" data-target=".my-info-1">
                        <option value="0" data-show=".acitveon" selected>Property Status</option>
                        <option value="1" data-show=".sale">For Sale</option>
                        <option value="2" data-show=".rent">For Rent</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <input class="at-input" type="text" name="min-area" placeholder="Squre Fit Min">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <input class="at-input" type="text" name="max-area" placeholder="Squre Fit Max">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <select>
                        <option value="0" selected>Bedroom</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <select>
                        <option value="0" selected>Bathroom</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <div class="at-pricing-range">
                        <div class="my-info-1">
                            <h4>At first select Property Status</h4>
                            <div class="acitveon sale hide">
                                <label>Price : </label>
                                <input type="text" class="amount at-input-price" readonly>
                                <div class="slider-range"></div>
                            </div>
                            <div class="rent hide">
                                <label>Price : </label>
                                <input type="text" class="amount-two at-input-price" readonly>
                                <div class="slider-range-two"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="at-col-default-mar">
                    <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Search End -->

<!-- About start from here -->
<section class="at-about-sec">
    <div class="container">
        <div class="row animatedParent animateOnce">
            <div class="col-lg-7 col-md-12">
                <div class="at-about-col at-col-default-mar">
                    <div class="at-about-title">
                        <h1>Few description<br> <span>about Homy</span></h1>
                        <h6>Real Estate</h6>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p> <br>

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-lg-5 hidden-md">
                <div class="at-about-col animated fadeInRightShort slow delay-250">
                    <img src="images/about/1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

@include('partials.call')

<!-- Property start from here -->
<section class="at-property-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="at-sec-title at-sec-title-left">
                    <h2>Awesome <span>Property</span></h2>
                    <div class="at-heading-under-line">
                        <div class="at-heading-inside-line"></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam et dolores voluptatem porro tempore temporibus ducimus</p>
                </div>
            </div>
        </div>
        <div class="row animatedParent animateOnce">
            @foreach($properties as $property)
                @include('pages.properties.property-block', ['property' => $property])
            @endforeach
            <div class="text-center"><a class="btn btn-default hvr-bounce-to-right" href="properties-col-3.html" role="button">More Properties</a>
            </div>
        </div>
    </div>
</section>
<!-- Property End -->

<!-- Agents start from here -->
<section class="at-agents-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="at-sec-title">
                    <h2>Our valuable <span>Agents</span></h2>
                    <div class="at-heading-under-line">
                        <div class="at-heading-inside-line"></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam et dolores voluptatem porro tempore temporibus ducimus</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="agent-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1}'>
                    <div class="at-agent-col">
                        <div class="at-agent-img">
                            <img src="images/agents/1.png" alt="">
                            <div class="at-agent-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                <div class="at-agent-call">
                                    <p>+101 4326 0055</p>
                                </div>
                            </div>
                        </div>
                        <div class="at-agent-info">
                            <h4><a href="agents-details.html">Martin Guptil</a></h4>
                            <p>sales executive</p>
                        </div>
                    </div>
                    <div class="at-agent-col">
                        <div class="at-agent-img">
                            <img src="images/agents/2.png" alt="">
                            <div class="at-agent-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                <div class="at-agent-call">
                                    <p>+101 4326 0055</p>
                                </div>
                            </div>
                        </div>
                        <div class="at-agent-info">
                            <h4><a href="agents-details.html">Jesica Mile</a></h4>
                            <p>sales executive</p>
                        </div>
                    </div>
                    <div class="at-agent-col">
                        <div class="at-agent-img">
                            <img src="images/agents/3.png" alt="">
                            <div class="at-agent-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                <div class="at-agent-call">
                                    <p>+101 4326 0055</p>
                                </div>
                            </div>
                        </div>
                        <div class="at-agent-info">
                            <h4><a href="agents-details.html">Thomas Jons</a></h4>
                            <p>sales executive</p>
                        </div>
                    </div>
                    <div class="at-agent-col">
                        <div class="at-agent-img">
                            <img src="images/agents/4.png" alt="">
                            <div class="at-agent-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                <div class="at-agent-call">
                                    <p>+101 4326 0055</p>
                                </div>
                            </div>
                        </div>
                        <div class="at-agent-info">
                            <h4><a href="agents-details.html">Cris Jordan</a></h4>
                            <p>sales executive</p>
                        </div>
                    </div>
                    <div class="at-agent-col">
                        <div class="at-agent-img">
                            <img src="images/agents/5.png" alt="">
                            <div class="at-agent-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                <div class="at-agent-call">
                                    <p>+101 4326 0055</p>
                                </div>
                            </div>
                        </div>
                        <div class="at-agent-info">
                            <h4><a href="agents-details.html">Marri Guptil</a></h4>
                            <p>sales executive</p>
                        </div>
                    </div>
                    <div class="at-agent-col">
                        <div class="at-agent-img">
                            <img src="images/agents/6.png" alt="">
                            <div class="at-agent-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                <div class="at-agent-call">
                                    <p>+101 4326 0055</p>
                                </div>
                            </div>
                        </div>
                        <div class="at-agent-info">
                            <h4><a href="agents-details.html">Martin Mozina</a></h4>
                            <p>sales executive</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Agents End -->

<!-- Blog start from here -->
<section class="at-blog-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="at-sec-title at-sec-title-left">
                    <h2>Our <span>Blog</span></h2>
                    <div class="at-heading-under-line">
                        <div class="at-heading-inside-line"></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam et dolores voluptatem porro tempore temporibus ducimus</p>
                </div>
            </div>
        </div>
        <div class="row animatedParent animateOnce">
            <div class="col-md-4 col-sm-6">
                <div class="at-blog-box at-col-default-mar animated fadeInUpShort slow">
                    <div class="at-blog-img">
                        <img src="images/blog/1.jpg" alt="">
                        <div class="at-blog-date">
                            <ul>
                                <li><i class="icofont icofont-businessman"></i><a href="#">Mark Jonson</a>
                                </li>
                                <li><i class="icofont icofont-calendar"></i><a href="#">June 28, 2017</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-blog-content">
                        <h4><a href="blog-details.html">latest design of house</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                        <a href="blog-details.html">Read More <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="at-blog-box at-col-default-mar animated fadeInUpShort slow delay-250">
                    <div class="at-blog-img">
                        <img src="images/blog/2.jpg" alt="">
                        <div class="at-blog-date">
                            <ul>
                                <li><i class="icofont icofont-businessman"></i><a href="#">Thomas Roy</a>
                                </li>
                                <li><i class="icofont icofont-calendar"></i><a href="#">June 29, 2017</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-blog-content">
                        <h4><a href="blog-details.html">strong house project</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                        <a href="blog-details.html">Read More <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="at-blog-box at-col-default-mar animated fadeInUpShort slow delay-500">
                    <div class="at-blog-img">
                        <img src="images/blog/3.jpg" alt="">
                        <div class="at-blog-date">
                            <ul>
                                <li><i class="icofont icofont-businessman"></i><a href="#">Nelson Monika</a>
                                </li>
                                <li><i class="icofont icofont-calendar"></i><a href="#">June 30, 2017</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-blog-content">
                        <h4><a href="blog-details.html">popular design of house</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                        <a href="blog-details.html">Read More <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->


@include('partials.newsletter')

@include('partials.brand')

@endsection
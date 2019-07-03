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
                    @include('pages.agents.agents-block');
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
                @if(count($posts) > 1)
                    @foreach($posts as $post)
                        <div class="col-md-4 col-sm-6">
                            @include('pages.blog.blog-block', ['post' => $post])
                        </div>
                    @endforeach
                @else
                    <p>Well this sucks</p>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- End -->


@include('partials.newsletter')

@include('partials.brand')

@endsection
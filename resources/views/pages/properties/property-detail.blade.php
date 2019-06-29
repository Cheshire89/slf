@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => 'Property'])

<!-- Property start from here -->
<section class="at-property-sec at-property-right-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="at-property-details-col">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="../images/slider/slider-1.jpg" alt="">
                                <div class="carousel-caption">
                                    <h2>NEW SUPERB VILLA</h2>
                                </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                                <img src="../images/slider/slider-2.jpg" alt="">
                                <div class="carousel-caption">
                                    <h2>nice guest room</h2>
                                </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                                <img src="../images/slider/slider-3.jpg" alt="">
                                <div class="carousel-caption">
                                    <h2>Well bathroom</h2>
                                </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                                <img src="../images/slider/slider-4.jpg" alt="">
                                <div class="carousel-caption">
                                    <h2>awesome bedroom</h2>
                                </div>
                            </div>
                            <!-- End Item -->
                        </div>
                        <!-- End Carousel Inner -->
                        <ul class="nav nav-pills nav-justified">
                            <li data-target="#myCarousel" data-slide-to="0" class="active">
                                <a href="#"><img src="../images/slider/slider-1.jpg" alt="">
                                </a>
                            </li>
                            <li data-target="#myCarousel" data-slide-to="1">
                                <a href="#"><img src="../images/slider/slider-2.jpg" alt="">
                                </a>
                            </li>
                            <li data-target="#myCarousel" data-slide-to="2">
                                <a href="#"><img src="../images/slider/slider-3.jpg" alt="">
                                </a>
                            </li>
                            <li data-target="#myCarousel" data-slide-to="3">
                                <a href="#"><img src="../images/slider/slider-4.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Carousel -->
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                    <div class="at-sec-title at-sec-title-left">
                        <h2>Property <span>Features</span></h2>
                        <div class="at-heading-under-line">
                            <div class="at-heading-inside-line"></div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam et dolores voluptatem porro tempore temporibus ducimus</p>
                    </div>
                    <div class="row at-property-features">
                        <div class="col-md-6 clearfix">
                            <ul>
                                <li>Property ID : <span class="pull-right">AB-010234</span>
                                </li>
                                <li>Full Area : <span class="pull-right">520 sqft</span>
                                </li>
                                <li>Bedrooms : <span class="pull-right">6</span>
                                </li>
                                <li>Bathrooms : <span class="pull-right">3</span>
                                </li>
                                <li>Garages : <span class="pull-right">1</span>
                                </li>
                                <li>swimming pool : <span class="pull-right">Yes</span>
                                </li>
                                <li>Party Rooms : <span class="pull-right">Yes</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Status : <span class="pull-right"> for Sale</span>
                                </li>
                                <li>Kitchen : <span class="pull-right">2</span>
                                </li>
                                <li>AC Rooms: <span class="pull-right">4</span>
                                </li>
                                <li>Internet : <span class="pull-right">Yes</span>
                                </li>
                                <li>Cable TV : <span class="pull-right">Yes</span>
                                </li>
                                <li>Balcony : <span class="pull-right">Yes</span>
                                </li>
                                <li>Pool : <span class="pull-right">Yes</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="at-comment-row">
                                <h3><a href="#">Comment(3)</a></h3>
                                <div class="at-comment-item">
                                    <a class="pull-right" href="#">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                    </a>
                                    <img src="../images/comment/1.jpg" alt="">
                                    <h5>Alin Max</h5>
                                    <span>3 hours ago</span>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="at-form-area">
                            <div class="col-md-12">
                                <form id="contact_form" action="contact.php" method="post">
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Write message here"></textarea>
                                        <button class="btn btn-default hvr-bounce-to-right" type="submit">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="at-sidebar at-col-default-mar">
                    <div class="at-sidebar-search at-sidebar-mar">
                        <form method="post">
                            <div class="input-group">
                                <input placeholder="Search Here....." class="form-control" name="search-field" type="text">
                                <span class="input-group-btn">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="at-categories clearfix">
                        <h3 class="at-sedebar-title">categories</h3>
                        <ul>
                            <li><a href="#">new building</a> <span class="pull-right">(10)</span>
                            </li>
                            <li><a href="#">modern design</a> <span class="pull-right">(08)</span>
                            </li>
                            <li><a href="#">best design</a> <span class="pull-right">(29)</span>
                            </li>
                            <li><a href="#">popular design</a> <span class="pull-right">(33)</span>
                            </li>
                            <li><a href="#">strong building</a> <span class="pull-right">(23)</span>
                            </li>
                            <li><a href="#">old design</a> <span class="pull-right">(22)</span>
                            </li>
                            <li><a href="#">popular design</a> <span class="pull-right">(29)</span>
                            </li>
                            <li><a href="#">best design</a> <span class="pull-right">(11)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="at-latest-news">
                        <h3 class="at-sedebar-title">latest news</h3>
                        <ul>
                            <li>
                                <div class="at-news-item">
                                    <img src="../images/blog/s1.jpg" alt="">
                                    <h4><a href="#">Popular building design</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis unde</p>
                                </div>
                            </li>
                            <li>
                                <div class="at-news-item">
                                    <img src="../images/blog/s2.jpg" alt="">
                                    <h4><a href="#">Best building design</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis unde</p>
                                </div>
                            </li>
                            <li>
                                <div class="at-news-item">
                                    <img src="../images/blog/s3.jpg" alt="">
                                    <h4><a href="#">Building in city</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis unde</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="at-sidebar-tags">
                        <a href="#">Responsive</a>
                        <a href="#">Web Design</a>
                        <a href="#">Best</a>
                        <a href="#">Modern Design</a>
                        <a href="#">Popular</a>
                        <a href="#">Servar</a>
                        <a href="#">Javascript</a>
                        <a href="#">Jquery</a>
                    </div>
                    <div class="at-preview">
                        <h3 class="at-sedebar-title">preview</h3>
                        <img src="../images/property/preview.jpg" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- Property End -->

@include('partials.newsletter')

@include('partials.brand')

@endsection
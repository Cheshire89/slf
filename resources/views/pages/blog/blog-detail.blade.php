@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => $post->title])

    <!-- Property start from here -->
<section class="at-blog-sec at-blog-details-sec">
    <div class="container">
        <div class="row animatedParent animateOnce">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="at-blog-box at-col-default-mar">
                            <div class="at-blog-img at-blog-big-img">
                                <img src="images/blog/big.jpg" alt="">
                                <div class="at-blog-date">
                                    <ul>
                                        <li><i class="icofont icofont-businessman"></i><a href="#">Mark Jonson</a>
                                        </li>
                                    <li><i class="icofont icofont-calendar"></i><a href="#">{{ date_format($post->created_at, "F j, Y") }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h4><a href="blog-details.html">latest design of house</a></h4>
                            <p>{{ $post->body }}</p>
                        </div>
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
                                <img src="images/comment/1.jpg" alt="">
                                <h5>Alin Max</h5>
                                <span>3 hours ago</span>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that. </p>
                            </div>
                            <div class="at-comment-item">
                                <a class="pull-right" href="#">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <img src="images/comment/2.jpg" alt="">
                                <h5>Max Julio</h5>
                                <span>2 hours ago</span>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that. </p>
                            </div>
                            <div class="at-comment-item">
                                <a class="pull-right" href="#">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                                <img src="images/comment/3.jpg" alt="">
                                <h5>Ross Tailor</h5>
                                <span>5 hours ago</span>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                </div>
            </div>
            <div class="col-md-4">
                <div class="at-sidebar">
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
                                    <img src="images/blog/s1.jpg" alt="">
                                    <h4><a href="#">Popular building design</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis unde</p>
                                </div>
                            </li>
                            <li>
                                <div class="at-news-item">
                                    <img src="images/blog/s2.jpg" alt="">
                                    <h4><a href="#">Best building design</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis unde</p>
                                </div>
                            </li>
                            <li>
                                <div class="at-news-item">
                                    <img src="images/blog/s3.jpg" alt="">
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Property End -->


@endsection
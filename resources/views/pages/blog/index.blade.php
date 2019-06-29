@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => 'Blog'])

<!-- Property start from here -->
<section class="at-blog-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    @if(count($posts) > 1)
                        @foreach($posts as $post)
                            @include('pages.blog.blog-block', ['post' => $post])
                        @endforeach
                    @else
                        <p>Well this sucks</p>
                    @endif
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
        <div class="at-pagination at-pagination-right ">
            <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                </li>
                <li><a href="#">1</a>
                </li>
                <li><a href="#">2</a>
                </li>
                <li><a href="#">3</a>
                </li>
                <li><a href="#">4</a>
                </li>
                <li><a href="#">5</a>
                </li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Property End -->
@endsection

@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => 'About'])

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

<!-- Future Plan start from here -->
<section class="at-plan-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="at-sec-title at-sec-title-left">
                    <h2>Our <span>future plan</span></h2>
                    <div class="at-heading-under-line">
                        <div class="at-heading-inside-line"></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam et dolores voluptatem porro tempore temporibus ducimus</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="at-plan-box at-col-default-mar">
                    <ul>
                        <li>Lorem Ipsum is simply dummy text of the printing.</li>
                        <li>text of the printing and typesetting industry.</li>
                        <li>text of the printing and typesetting industry.</li>
                        <li>Recusandae necessitatibus odit dolorum </li>
                        <li>orem Ipsum has been the standard dummy </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="at-plan-box at-col-default-mar">
                    <ul>
                        <li>Lorem Ipsum is simply dummy text of the printing.</li>
                        <li>text of the printing and typesetting industry.</li>
                        <li>text of the printing and typesetting industry.</li>
                        <li>Recusandae necessitatibus odit dolorum </li>
                        <li>orem Ipsum has been the standard dummy </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="at-col-default-mar">
                    <img src="images/meeting.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Future Plan end -->

@include('partials.newsletter')

@include('partials.brand')

@endsection
@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => 'Services'])
<!-- Services start from here -->
<section class="at-service-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="at-service-content">
                    <h2>Few words about Our<br> <span>exclusive services</span></h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="at-service-content">
                    <img src="images/service.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="at-service-item">
                    <div class="at-service-icon">
                        <i class="icofont icofont-ui-home"></i>
                    </div>
                    <h4>we made best home</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="at-service-item">
                    <div class="at-service-icon">
                        <i class="icofont icofont-road"></i>
                    </div>
                    <h4>we made best home</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="at-service-item">
                    <div class="at-service-icon">
                        <i class="icofont icofont-police-car-alt-1"></i>
                    </div>
                    <h4>we made best home</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="at-service-item">
                    <div class="at-service-icon">
                        <i class="icofont icofont-tree-alt"></i>
                    </div>
                    <h4>we made best home</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="at-service-item">
                    <div class="at-service-icon">
                        <i class="icofont icofont-field"></i>
                    </div>
                    <h4>we made best home</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="at-service-item">
                    <div class="at-service-icon">
                        <i class="icofont icofont-golf-field"></i>
                    </div>
                    <h4>we made best home</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services End -->

@include('partials.newsletter')

@endsection
@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => 'Agent Detail'])

<!-- Agents Details start from here -->
<section class="at-agents-details-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="at-singel-agent  at-col-default-mar">
                    <img src="images/agents/1.png" alt="">
                </div>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="at-agents-details-col">
                    <h4>Martin Guptil</h4>
                    <p>Phone : +101 4326 0055</p>
                    <p>Email : yourmail@gmail.com</p>
                    <p>Skype : your.skypename</p>
                    <p>Experience : 5 years</p>
                    <div class="at-agent-socil-contact">
                        <a href="#" tabindex="0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" tabindex="0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" tabindex="0"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#" tabindex="0"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                    </div>
                    <div class="at-start">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>other agents</h3>
            </div>
            <div class="col-md-3 col-sm-6">
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
            </div>
            <div class="col-md-3 col-sm-6">
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
            </div>
            <div class="col-md-3 col-sm-6">
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
            </div>
            <div class="col-md-3 col-sm-6">
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
            </div>
        </div>
    </div>
</section>
<!-- Agents End -->

@endsection
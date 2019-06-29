@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => 'Contact'])

<!-- Contact Start from here -->
<section class="at-contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="at-contact-form at-col-default-mar">
                    <div id="form-messages"></div>
                    <form id="ajax-contact" method="post" action="php/contact.php">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
                        <button class="btn btn-default hvr-bounce-to-right" type="submit">Sent Message</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="at-info-box at-col-default-mar">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <p>mailaddress@gmail.com</p>
                </div>
                <div class="at-info-box at-col-default-mar">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>+0123 (123) 6719900</p>
                </div>
                <div class="at-info-box at-col-default-mar">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>99, Big Building, Glasgow, United Kingdom.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Contact end-->

<div id="googleMap" style="width:100%; height:400px;"></div>

<!-- Google map -->
<script type="text/javascript" src="js/google-map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdEPAHqgxFK5pioDAB3rsvKchAtXxRGO4&callback=myMap"></script>
@endsection
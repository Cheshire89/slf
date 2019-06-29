@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => 'Sign Up'])

<!-- Account start from here -->
<section class="at-account-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Sing In</a>
                        </li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sing Up</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <form>
                                <input type="text" class="form-control" placeholder="Username">
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="checkbox clearfix">
                                    <label class="pull-left">
                                        <input type="checkbox"> Remember Me
                                    </label>
                                    <p class="pull-right"><a href="#">Forgot Your Psassword?</a>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-default hvr-bounce-to-right" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <form>
                                <input type="text" class="form-control" placeholder="First Name">
                                <input type="text" class="form-control" placeholder="Last Name">
                                <input type="text" class="form-control" placeholder="Username">
                                <input type="email" class="form-control" placeholder="Your Email Address">
                                <input type="password" class="form-control" placeholder="Password">
                                <input type="password" class="form-control" placeholder="Confirm Password">
                                <div class="text-center">
                                    <button class="btn btn-default hvr-bounce-to-right" type="submit">sing up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->
@endsection
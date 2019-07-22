
@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => 'Properties'])

@include('partials.main-search');

<!-- Property start from here -->
<section class="at-property-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                @include('pages.properties.property-block')
            </div>
        </div>

        @include('partials.pagination')
    </div>
</section>
<!-- Property End -->

@endsection

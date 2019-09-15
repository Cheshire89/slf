
@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => 'Properties'])

@include('partials.main-search');

<!-- Property start from here -->
<section class="at-property-sec">
    <div class="container-fluid">
        <div class="row">
            @foreach($properties as $property)
                <div class="col-md-3 col-sm-6">
                    @include('pages.properties.property-block', ['property' => $property])
                </div>
            @endforeach
        </div>
        <div class="row at-pagination">
            <div class="col-xs-12 text-center">
                {!! $properties->links() !!}
            </div>
        </div>
    </div>
</section>
<!-- Property End -->

@endsection

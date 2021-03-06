@extends('layouts.app')

@section('content')
@include('partials.inner-heading', ['title' => 'Agents'])

<!-- Agents start from here -->
<section class="at-agents-sec at-agents-sec-three">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                @include('pages.agents.agents-block');
            </div>
        </div>

        @include('partials.pagination');
    </div>
</section>
<!-- Agents End -->

@endsection
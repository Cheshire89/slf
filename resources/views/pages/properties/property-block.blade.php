{{-- fadeInUpShort --}}
<div class="at-property-item at-col-default-mar animated slow">
    <div class="at-property-img">
        @if($property['MainImage'])
            <img src="{{ $property['MainImage'] }}" alt="">
        @else
            <img src="images/property/no_image.jpg" alt="">
        @endif
        <div class="at-property-overlayer"></div>
    <a class="btn btn-default at-property-btn" href="/property/{{ $property['MLSNumber'] }}" role="button">View Details</a>
        <h4>{{ $property['TransactionType'] }}</h4>
    <h5>${{ $property['ListPrice'] }}</h5>
    </div>
    <div class="at-property-dis">
        <ul>
            <li><i class="fa fa-object-group" aria-hidden="true"></i> {{ $property['SqftTotal'] }} sq ft</li>
        <li><i class="fa fa-bed" aria-hidden="true"></i> {{ $property['BedsTotal'] }}</li>
        <li><i class="fa fa-bath" aria-hidden="true"></i> {{ $property['BathsTotal'] }}</li>
        </ul>
    </div>
    <div class="at-property-location">
        <h4>
            <i class="fa fa-home" aria-hidden="true"></i>
            <a href="properties-details.html">
                {{ $property['MainTitle'] }}
            </a>
        </h4>
        <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $property['CompleteAddress'] }}</p>
    </div>
</div>

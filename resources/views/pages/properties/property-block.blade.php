<div class="col-md-4 col-sm-6">
    <div class="at-property-item at-col-default-mar animated fadeInUpShort slow">
        <div class="at-property-img">
            @if($property->get('MainImage'))
                <img src="{{$property->get('MainImage')}}" alt="">
            @else
                <img src="images/property/no_image.jpg" alt="">
            @endif
            <div class="at-property-overlayer"></div>
        <a class="btn btn-default at-property-btn" href="/property/{{$property->get('MLSNumber')}}" role="button">View Details</a>
            <h4>{{$property->get('TransactionType')}}</h4>
        <h5>${{number_format($property->get('ListPrice'))}}</h5>
        </div>
        <div class="at-property-dis">
            <ul>
                <li><i class="fa fa-object-group" aria-hidden="true"></i> {{number_format($property->get('SqftTotal'))}} sq ft</li>
            <li><i class="fa fa-bed" aria-hidden="true"></i> {{$property->get('BedsTotal')}}</li>
            <li><i class="fa fa-bath" aria-hidden="true"></i> {{$property->get('BathsTotal')}}</li>
            </ul>
        </div>
        <div class="at-property-location">
        <h4><i class="fa fa-home" aria-hidden="true"></i>
            <a href="properties-details.html">
                @if($property->get('BuildingName'))
                    {{ $property->get('BuildingName') }}
                @else
                    {{ $property->get('PropertyType') }}
                @endif
            </a></h4>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$property->get('CompleteAddress')}}</p>
        </div>
    </div>
</div>
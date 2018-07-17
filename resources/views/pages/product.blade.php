@extends('layouts.master')
@section('master')

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQfW76o6gBozk-7VMRR4oLZK5Qe7nJ5_w&callback=initialize&sensor=false"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <br/>
    <div class="wrapper row">
        <div class="preview col-md-6">
            <div class="preview-pic tab-content">
                @if(count($product->images) > 0)
                    @for ($i = 0; $i < count($product->images) ; $i++)
                        <div class="tab-pane <?php if($i == 0) echo 'active' ?>" id="{{$i}}">
                            <img src="{{ url('/images/product/'.$product->images[$i])}}" />
                        </div>
                    @endfor
                @endif
            </div>
            <ul class="preview-thumbnail nav nav-tabs">
                @if(count($product->images) > 0)
                    @for ($i = 0; $i < count($product->images) ; $i++)
                        <li class="<?php if($i == 0) echo 'active' ?>">
                            <a data-target="{{ '#'.$i }}" data-toggle="tab">
                                <img src="{{ url('/images/product/'.$product->images[$i])}}" />
                            </a>
                        </li>
                    @endfor
                @endif
            </ul>

        </div>
        <div class="details col-md-6">
            <h3 class="product-title">
                @if(Cookie::get('lang') == 'kh')
                    {{ $product->title }}
                @else
                    {{ $product->title_en }}
                @endif
            </h3>
            <h5>Description:</h5>
            <p class="product-description">
                @if(\Illuminate\Support\Facades\Cookie::get('lang') === 'kh')
                    {{ $product->desc }}
                @else
                    {{ $product->desc_en }}
                @endif
            </p>
            <h5>Price: <span>$ {{ $product->price  }}</span></h5>
            <h5>Tel:
                @if($product->phones[0] != null)
                    <span data-toggle="tooltip" title="small">{{$product->phones[0]}}</span>
                @endif
                 |
                @if($product->phones[1] != null)
                     <span data-toggle="tooltip" title="medium">{{$product->phones[1]}}</span>
                @endif
            </h5>
            <h5>Email:
                @if($product->email != null)
                <span class="email">{{$product->email}}</span>
                @endif
            </h5>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div id="myMap" style="height: 350px;"></div>
        </div>
        <script type="text/javascript">
            var lat = "<?php echo $product->latitude;?>";
            var lon = "<?php echo $product->longitude;?>";
            var map;
            var marker;
            var myLatlng = new google.maps.LatLng(lat,lon);
            var geocoder = new google.maps.Geocoder();
            var infowindow = new google.maps.InfoWindow();
            function initialize(){
                var mapOptions = {
                    zoom: 18,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

                marker = new google.maps.Marker({
                    map: map,
                    position: myLatlng,
                    draggable: true
                });

                geocoder.geocode({'latLng': myLatlng }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#latitude,#longitude').show();
                            $('#address').val(results[0].formatted_address);
                            $('#latitude').val(marker.getPosition().lat());
                            $('#longitude').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });

                google.maps.event.addListener(marker, 'dragend', function() {

                    geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                $('#address').val(results[0].formatted_address);
                                $('#latitude').val(marker.getPosition().lat());
                                $('#longitude').val(marker.getPosition().lng());
                                infowindow.setContent(results[0].formatted_address);
                                infowindow.open(map, marker);
                            }
                        }
                    });
                });

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </div>
    <br>
@endsection
@extends('layouts.master')
@section('master')

    <br/>
    <div class="row">
        @if(count($products) > 0)
            @foreach ($products as $product)
                <a href="{{ url('product'.'/'.$product->id) }}">
                    <div class="col-sm-3">
                        <div class="col-item cart">
                            <div class="photo">
                                <img src="{{ url('/images/product/'.$product->images[0]) }}" class="img-responsive" alt="a"/>
                            </div>
                            <div class="info">
                                <div class="row">
                                    <div class="price col-md-12">
                                        <h5 class="text">{{ $product->title }}</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="price-text-color">${{ $product->price }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        var lg = "<?php echo $product->latitude; ?>";
                        console.log("Data :", lg)
                    </script>
                </a>
            @endforeach
        @else
            <center><h5>Product Empty</h5></center>
        @endif
    </div>
    {{ $products->links() }}
    <br/>



@endsection
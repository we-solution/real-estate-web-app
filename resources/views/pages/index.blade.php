@extends('layouts.master')
@section('master')
   <br/>
    <div class="row">
        @foreach ($products as $product)
            <a href="{{ url('product'.'/'.$product->id) }}">
                <div class="col-md-3 col-sm-6 cart">
                    <div class="col-item">
                        <div class="photo">
                            <img src="{{ url('/images/product/'.$product->images[0]) }}" class="img-responsive" alt="a"/>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-12">
                                    <h5 class="text">
                                        @if(Cookie::get('lang') == 'kh')
                                            {{ $product->title }}
                                        @else
                                            {{ $product->title_en }}
                                        @endif
                                    </h5>
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
    </div>
   <br/>
   {{ $products->links() }}
@endsection
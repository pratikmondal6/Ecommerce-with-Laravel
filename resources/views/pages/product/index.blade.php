@extends('layouts.master')

@section('content')

    {{-- start sidebar + content--}}
    <div class="container margin-top">
        <div class="row">

            <div class="col-md-4">
                @include('partials.product-slidebar');
            </div>

            <div class="col-md-8">
                <div class="widget">
                    <h3>All Products</h3>
                    <div class="row">

                        @foreach($products as $product)
                        <div class="col-md-3">
                            <div class="card">
                                @php $i=1;
                                @endphp
                                @foreach($product->images as $image)
                                    @if($i > 0)
                                    <img class="card-img-top " src="{{asset('images/products/'. $image->image)}}" alt="Card image ">
                                    @endif
                                    @php $i--; @endphp
                                @endforeach
                                <div class="card-body">
                                    <h4 class="card-title">{{$product->title}}</h4>
                                    <p class="card-text"> {{$product->price}}</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>


            </div>





        </div>
    </div>
    {{-- end sidebar + content--}}
@endsection


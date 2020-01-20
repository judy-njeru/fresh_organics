@extends('layouts.app', ['body_class' => 'home'])

@section('content')



<div class="container wrapper">
    <div class="row ">
        <div class="col-md-12">
            <h1> Order Summary</h1>
            @if(count($orders) <= 0) <p>Currently you don't have any orders</p>

                @else
                <p>Below is a summary of your orders</p>

                @foreach($orders as $key=> $order)

                <div class="order-container">
                    <div class="row header">
                        <div class="col-sm-3 hd-dt">
                            <div>order placed</div>
                            <div>17 November 2019</div>
                        </div>
                        <div class="col-sm-3 hd-dt">
                            <div>total</div>
                            <div>DKK 42,47 </div>
                        </div>
                        <div class="col-sm-3 hd-dt">
                            <div>customer name</div>
                            <div>Judy Murugi Njeru</div>
                        </div>
                        <div class="col-sm-3 hd-dt">
                            <div>order number</div>
                            <div>#222</div>
                        </div>
                    </div>
                    <div class="order-overview">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="{{url('/uploads/boxes')}}/{{$order->image}}">
                            </div>
                            <div class="col-sm-9">
                                <div>{{$order->name}} Meal Box</div>
                                <div>DKK {{$order->price}}</div>
                                <div>{{$order->quantity}}</div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach



                @endif
        </div>
    </div>
</div>

@include('cart')

@endsection
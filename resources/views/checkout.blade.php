@extends('layouts.app', ['body_class' => 'checkout'])

@section('content')


<div class="container checkout module-padding">
    @if (session()->has('success_message'))
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
    @endif

    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
        @csrf
        <h2>Billing Details</h2>
        <div class="form-wrapper">
            <div class="form-group">
                <label for="email">Email Address</label>
                @if (auth()->user())
                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                @else
                <input type="email" class="form-control" id="email" name="email" value="" required>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name')  }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{old('address') }}">
            </div>

            <div class="half-form">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                </div>
                <div class="form-group">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}">
                </div>
            </div> <!-- end half-form -->

            <div class="half-form">
                <div class="form-group">
                    <label for="postalcode">Postal Code</label>
                    <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                </div>
            </div> <!-- end half-form -->
        </div>

        <h2>Payment Details</h2>
        <div class="form-wrapper">
            <div class="form-group">
                <label for="name_on_card">Name on Card</label>
                <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="judy">
            </div>

            <div class="form-group">
                <label for="card-element">
                    Credit or debit card
                </label>
                <div id="card-element">
                    <!-- a Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors -->
                <div id="card-errors" role="alert"></div>
            </div>
            <button type="submit" id="complete-order" class="button full-width">Complete Order</button>
        </div>
    </form>
</div>
@endsection

@section('extra-js')

<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src=" {{ URL::to('/js/checkout.js') }} "></script>

@endsection
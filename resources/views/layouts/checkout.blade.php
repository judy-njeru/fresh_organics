@extends('app')

@section('content')

<div class="container checkout module-padding">
    <div class="row">
        <div class="col-md-12">
            <h1>Where do we deliver?</h1>
        </div>
        <div class="col-md-12 address">
            <div class="title">Home Address</div>

            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Street Address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    <label for="exampleFormControlInput1">Apartment Number</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <button class="button">Confirm and Order</button>
            </form>
        </div>
    </div>
</div>
@endsection
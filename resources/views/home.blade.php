@extends('layouts.app', ['body_class' => 'home'])

@section('content')
<pre>


<?php
foreach ($orders as $key => $value) {
    var_dump($value);
}

?>
</pre>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <h1> Order Summary</h1>
            <p>Below is a summary of your orders</p>
        </div>
    </div>
</div>

@include('cart')

@endsection
@extends('welcome')
@section('page_title', 'PayPal')
@section('Payment')
<h1>PayPal</h1>
<form action="{{route('payment')}}" method="post" class="form">
    @csrf
    <input type="hidden" name="paypal">
    <input type="text" name="amount" placeholder="amount"><br>
    <input type="text" name="currency" placeholder="Currency" value="USD"><br>
    <input type="text" name="confirmation_number" placeholder="Confirmation Number"
           value="{{Str::random()}}"><br>
    <input type="submit" name="pay"><br>
</form>
@endsection

@extends('welcome')

@section('page_title', 'Coupon')

@section('Payment')
<h1>Coupon</h1>
<form action="{{route('payment')}}" method="post" class="form">
    @csrf
    <input type="hidden" name="coupon">
    <input type="text" name="amount" placeholder="amount"><br>
    <input type="text" name="coupon" placeholder="coupon"><br>
    <input type="submit" name="pay"><br>
</form>
    @endsection

@extends('welcome')
@section('page_title', 'Credit')
@section('Payment')
<h1>Credit</h1>
<form action="{{route('payment')}}" method="post" class="form">
    @csrf
    <input type="hidden" name="credit">
    <input type="text" name="amount" placeholder="amount"><br>
    <input type="text" name="currency" placeholder="currency" value="RY"><br>
    <input type="text" name="card_number" placeholder="card number"
           value="{{ Str::random(4).'-'. Str::random(4).'-'. Str::random(4).'-'. Str::random(4) }}"><br>
    <input type="submit" name="pay"><br>
</form>
@endsection

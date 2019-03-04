@extends('layoutbook')

@section('title', 'Detail')

@section('content')
<div class="container">
<h1>Detail</h1>
</div>
<hr>
<div class="container">

    <div class="card">
        <div class="card-block">
            {{--<h1 class="card-title">Detail</h1>--}}
            <p><b>ID:</b> {{$book->id}}</p>
            <p><b>Name:</b> {{$book->a}}</p>
            <p><b>Writer:</b>{{$book->name}}</p>
            <p><b>Price:</b>{{$book->price}} THB</p>
        </h1>
    </div>
<hr>
<form action="{{route('search.sale')}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" value="{{$book->id}}" name="bookId">
    Type : 
    <select name="DiscountType">
        <option value="percent">percent</option>
        <option value="baht">baht</option>
    </select> <br>
    Discount :
    <input type="number" name="discount" >
    <button type="submit">Discount</button>
</form>
@stop
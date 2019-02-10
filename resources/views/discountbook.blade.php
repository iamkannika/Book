@extends('layoutbook')

@section('title', 'Discount book')

@section('content')
    <h1>Discount Book</h1>
    <hr>

    <form action="discountpercent" method="get">

        Type:
        <select name="typeDiscount">
            <option value="percent">Percent</option>
            <option value="baht">Baht</option>
        </select><br>

        Discount:<input type="number" name="priceofdiscount"> <br>
        <input type="submit" name="submit">
        <input type="hidden" name="id" value="{{$id}}">
        <input type= "hidden" name="name" value="{{$name}}">
        <input type= "hidden" name="writer" value="{{$writer}}">
        <input type= "hidden" name="price" value="{{$price}}">

    </form>

    <p><b>ID: </b>{{$id}}</p>
    <p><b>Name:</b> {{$name}}</p>
    <p><b>Writer:</b>{{$writer}}</p>
    <p><b>Price:</b> {{$price}} </p>
    @if(isset($discounted_price))
        <p><b>Total Price:</b> {{$discounted_price}} </p>
    @endif
    <a href="search">
        <button>Back to Search page</button>
    </a>


@stop
@extends('layoutbook')

@section('title', 'Discount book')

@section('content')
<h1>Discount Book</h1>
<hr>

<form action="book" method="post">
@csrf
Type:
<select name="typeDiscount">
  <option value="bath">Baht</option>
  <option value="percent">Percent</option>  
</select><br> 

Price:<input type="number" name="priceofdiscount"> <br>
<input type="submit" name="submit" >
</form>
ID: {{$id}}
<p><b>Name:</b> {{$name}}</p>
<p><b>Writer:</b>{{$writer}}</p>
<p><b>Price:</b> {{$price}} </p>

<a href="search">
<button>Back to Search page</button>
</a>


@stop
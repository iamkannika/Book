@extends('layoutbook')
@section('title', 'DiscountPercentForm')

@section('content')
<form action="book" method="get">
<!-- @csrf -->
id: <input type="text" name="bookId"> <br>
name:<input type="text" name="bookname"> <br>

<input type="submit"  >
</form>

@stop

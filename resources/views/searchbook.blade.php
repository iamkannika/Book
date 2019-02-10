@extends('layoutbook')
@section('title', 'SeachBook')

@section('content')
<form action="book" method="get">
<!-- @csrf -->
    id: <input type="text" name="bookId"> <br>
    name:<input type="text" name="bookname"> <br>

    <input type="submit"  >
</form>

@stop

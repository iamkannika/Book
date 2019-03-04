@extends('layoutbook')

@section('title', 'Bill')

@section('content')
<h1>Bill</h1>
{{ csrf_field() }}
<hr>
<p><b>ID:</b> {{$book->id}}</p>
<p><b>Name:</b> {{$book->a}}</p>
<p><b>Writer:</b>{{$book->name}}</p>
<p><b>Price:</b>{{$book->price}} </p>
<p><b>Discount:</b> ....... </p>
<p><b>Lastprice:</b> ....... </p>
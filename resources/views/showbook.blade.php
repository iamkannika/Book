@extends('layoutbook')

@section('title', 'Show book')

@section('content')
<h1>Show Book</h1>
<hr>
ID: {{$id}}
<p><b>Name:</b> {{$name}}</p>
<p><b>Writer:</b>{{$writer}}</p>
<p><b>Price:</b> {{$price}} </p>

<a href="search">
<button>Back to Search page</button>
</a>
<form action="discount" method="get">
<input type="hidden" name="id" value="{{$id}}">
<button type="submit">Submit Form</button>
</form>

<a href="discount?id={{$id}}&mook=hahaha">
<button> Go to Discount</button>
</a>

@stop
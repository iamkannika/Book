@extends('layoutbook')

@section('title', 'Show book')

@section('content')

<h1>Show Book</h1>
<hr>
@foreach($results as $result)
<p><b>ID:</b> {{$result['id']}}</p>
<p><b>Name:</b> {{$result['name']}}</p>
<p><b>Writer:</b>{{$result['writer']}}</p>
<p><b>Price:</b> {{$result['price']}} </p>
<form action="discount" method="get">
    <input type="hidden" name="id" value="{{$result['id']}}">
    <input type="hidden" name="name" value="{{$result['name']}}">
    <input type="hidden" name="writer" value="{{$result['writer']}}">
    <input type="hidden" name="price" value="{{$result['price']}}">
    <button type="submit">Discount</button>

    <!--กดDiscountแล้วพัง -->
</form>
<hr>
@endforeach
<br><br><br>
<a href="search">
<button>Back to Search page</button>

</a>


<!--<a href="discount"></a>-->





@stop
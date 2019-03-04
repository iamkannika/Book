@extends('layoutbook')

@section('title', 'SearchBook')

@section('content')
    <div class="container">
    <div class="row">
<form action="{{route('search.detail')}}" method="post">
        {{ csrf_field() }}
        id: <input type="text" name="bookId"> <br><br>
        <input type="submit"  >
    </form>
    </div>
    </div>
@stop
    
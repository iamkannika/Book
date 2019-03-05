@extends('layoutbook')

@section('title', 'SearchBook')

@section('content')

<div class="container">

        <div class="row justify-content-md-center">

            <div class="form-group" >
                 <form action="{{route('search.detail')}}" method="post">
{{--<form action="{{route('search.detail')}}" method="post">--}}
            {{ csrf_field() }}
                {{--<label for ="id"> Search :</label>--}}
                <input type="text" class="form-control" id="id" name="bookId" placeholder="Search by title or ID">
                <br><br>
                <input type="submit" >
           </form>

        </div>
    </div>
</div>


@stop
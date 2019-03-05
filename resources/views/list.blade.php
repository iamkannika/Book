@extends('layoutbook')

@section('title', 'List')

@section('content')
    <div class="container">
<h1>List</h1>
<hr>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>Buy</th>
        </tr>
        </thead>
            @foreach($lists as $list)
            <tr>
                <td> {{$list['id']}}</td>
                <td>{{$list['name']}}</td>
                <td>{{$list['price']}}</td>
                <td></td>
            </tr>
            @endforeach


</table>
    </div>
@stop
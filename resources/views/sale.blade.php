@extends('layoutbook')

@section('title', 'Sale')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
        <h1>Sale</h1>
        </div>
    </div>
</div>

<hr>
<div class="container">
    <div class="card">
        <div class="col-sm-4">
<p><b>ID:</b> {{$book->id}}</p>
<p><b>Name:</b>{{$book->name}}</p>
<p><b>Writer:</b>{{$book->a}}</p>
<p><b>Price:</b>{{$book->price}}THB</p>
<p><b>LastPrice:</b>{{$discount}}THB</p>
        </div>
    </div>
</div>

<hr>
<div class="container">
    <div class="row">
<form action="bill" method="get">
    {{ csrf_field() }}
    Sale : 
    <select name="saleperson">
        <option value="meow">Meow</option>
        <option value="aof">Aof</option>
        <option value="petch">Petch</option>
        <option value="kriang">Kriang</option>
    </select> <br> <br>
    <button type="submit">Save</button>
</form>
    </div>
</div>
@stop
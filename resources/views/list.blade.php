@extends('layoutbook')

@section('title', 'List')

@section('content')
<h1>List</h1>
<hr>
<table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>writer</th>
            <th>price</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>14</td>
            <td>Equate pain and fever</td>
            <td>Ryun Brunone</td>
            <td>555</td>
            <td><a href="">detail</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Oxygen</td>
            <td>Margeaux Wittey</td>
            <td>812</td>
            <td><a href="">detail</a></td>
        </tr>
</table>
@stop
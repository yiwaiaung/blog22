@extends('layouts.app2')

@section('content2')
<h1>Customer index list Here</h1>
<table>
    <thead>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    </thead>
    <tbody>

    @foreach($customers as $customer)
            <tr>
                <th>{{$customer->id}}</th>
                <th><a href="/customerdetail/{{$customer->id}}">{{$customer->name}}</a></th>
                <th>{{$customer->email}}</th>

            </tr>
        @endforeach
    </tbody>
</table>
@endsection

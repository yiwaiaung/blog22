@extends('layouts.app2')

@section('content2')
<form action="/customerupdate" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$customer->id}}">
    <label name="customername">Customer name</label>
    <input type="text" name="name" id="name" value="{{$customer->name}}"> <p></p>
    <label name="Customeremail">Customer email</label>
    <input type="text" name="email" id="email" value="{{$customer->email}}"><p></p>
    <label name="password">Password</label>
    <input type="text" name="password" id="password" value="{{$customer->password}}"><p></p>
    <input type="submit" value="Add">

</form>
@endsection

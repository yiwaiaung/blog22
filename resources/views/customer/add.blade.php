@extends('layouts.app2')

@section('content2')
<h1>Hello customer</h1>
<form action="/customeradd" method="post">
@csrf
<label name="customername">Customer name</label>
<input type="text" name="name" id="name"> <p></p>
<label name="Customeremail">Customer email</label>
<input type="text" name="email" id="email"><p></p>
<label name="password">Password</label>
<input type="password" name="password" id="pass"><p></p>
<input type="submit" value="Add">

</form>
@endsection

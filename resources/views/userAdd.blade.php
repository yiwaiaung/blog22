@extends('layouts.app')

@section('content')

<form action="/userAdd" method="post">
    @csrf
 <div class="container" >
<div class="form-group row">
    <div class="col-sm-2">
    <label name="Username">User name</label>
    </div>
    <div class="col-sm-5">
    <input type="text" class="form contorl" name="name"  id="name">
    </div>
</div>

    <label name="Useremail">User email</label>
    <input type="text" name="email" id="email"><p></p>
    <label name="password">Password</label>
    <input type="password" name="password" id="password"><p></p>

     <div class="col-sm-2">
    <input type="submit" class="btn btn-primary" value="Add">
     </div>

 </div>
</form>
@endsection

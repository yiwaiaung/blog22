@extends('layouts.app2')
@section('content2')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>title </th>
                    <th>content</th>
                    <th>customer name</th>
                    <th>customer email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td class="py-1">
                        <img src="{{asset('storage/'.$post->image)}}" alt="image" /> </td>
                    <td><a href="/posts/{{$post->id}}" >{{$post->title}}</a></td>
                    <td>{{$post->content}}
                    </td>
                    <td>{{$post->customer->name}}</td>
                    <td> {{$post->customer->email}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

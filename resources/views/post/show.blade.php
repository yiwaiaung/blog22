@extends('layouts.app2')

@section('content2')
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="mt-5">
            <div class="text-center">
                <div class="col-sm-8  d-flex align-items-stretch grid-margin">
                    <div class="row flex-grow">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    Title:{{$post->title}}<p></p>
                                    Content:{{$post->content}}<p></p>
                                    Customer Name:{{$post->customer->name}}<p></p>
                                    Customer Email:{{$post->customer->email}}<p></p>

                                    <p>Image:</p>
                                    <img src="{{asset('storage/'.$post->image)}}" class="rounded-circle"  width="100" height="100">

                                    <form action="/posts/{{$post->id}}" id="delete-task" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <a href="/posts/{{$post->id}}/edit"><button class="btn btn-primary">Update</button></a>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="form-group btn btn-danger" form="delete-task">Delete</button>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection

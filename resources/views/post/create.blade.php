@extends('layouts.app2')

@section('content2')

    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                         <h1>Hello Create</h1><p></p>
                          <form action="/posts" method="post" enctype="multipart/form-data">
                                @csrf
                                @include('post.form')
                              <div class="col-sm-4">
                                 <button type="submit" class="btn btn-success mr-2">Submit</button>
                              </div>
                          </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

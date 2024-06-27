@extends('layouts.master')
@section('content')
<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Show Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{route('posts.create')}}" class="btn btn-success mx-1">Create</a>
                    <a href="" class="btn btn-warning mx-1">Trash</a>
                </div>
            </div>
        </div>
        <div class="card-body ">
            <table class="table table-striped">
              
                    <tr>
                        <td>Id</td>
                        <td>{{$post->id}}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><img src="{{asset($post->image)}}" alt="" width="300px"></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{$post->title}}</td>
                    </tr>
                    <tr>
                        <td>description</td>
                        <td>{{$post->description}}</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>{{$post->category_id}}</td>
                    </tr>
                    <tr>
                        <td>Publish Date</td>
                        <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>
                    </tr>
              
            </table>
        </div>
    </div>
</div>
@endsection
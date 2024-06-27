@extends('layouts.master')
@section('content')
<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4> All Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{route('posts.create')}}" class="btn btn-success mx-1">Create</a>
                    <a href="{{route('posts.trashed')}}" class="btn btn-warning mx-1">Trash</a>
                </div>
            </div>
        </div>
        <div class="card-body ">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th style="width:10%">Image</th>
                        <th style="width:20%">Title</th>
                        <th style="width:30%">Desciption</th>
                        <th style="width:10%">Category</th>
                        <th style="width:10%">Publish Date</th>
                        <th style="width:20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img src="{{asset($post->image)}}" alt="" width="150px"></td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->category->name}}</td>
                        <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>
                        <td>
                            <div class="d-flex mt-1">
                                <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{asset(route('posts.show',$post->id))}}" class="btn btn-success">Show</a>
                            <form action="{{route('posts.destroy',$post->id)}}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
             
            </table>
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
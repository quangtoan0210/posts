@extends('layouts.master')
@section('content')
<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4> Edit Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="" class="btn btn-success mx-1">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body ">
            <form action="">
                <div class="form-group">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Category</label>
                    <select name="" id="" class="form-control">
                        <option value="">Test1</option>
                        <option value="">Test2</option>
                        <option value="">Test3</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Desciption</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
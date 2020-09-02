@extends('admin.master')

@section('body')
    <div class="container-fluid">
        @if(Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session::get('message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            <h2>Add Category</h2>
            <div class="col-md-12">
                <form action="{{route('new-category')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="cat_name" class="form-control" placeholder="Enter Category Name">
                        <span style="color:red ">{{$errors->has('cat_name') ? $errors->first('cat_name') : ''}}</span>
                    </div>
                    <div class="form-group">
                        <label>Category Description</label>
                        <textarea class="form-control" name="cat_desc"  placeholder="Category Description"></textarea>
                         <span style="color:red ">{{$errors->has('cat_desc') ? $errors->first('cat_desc') : ''}}</span>
                    </div>
                    <div class="form-group">
                        <label>Publication Status</label>
                        <input type="radio" name="status" value="1">
                        <label>Published</label>
                        <input type="radio" name="status" value="0">
                        <label>Unpublished</label><br>
                        <span style="color:red ">{{$errors->has('status') ? $errors->first('status') : ''}}</span>
                    </div>
                    <button type="submit" name="btn" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div>
@endsection
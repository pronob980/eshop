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
            <h2>Add Brand</h2>
            <div class="col-md-12">
                <form action="{{route('new-brand')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Brand Name</label>
                        <input type="text" name="brand_name" class="form-control" placeholder="Enter Brand Name">
                        <span style="color:red">{{$errors->has('brand_name') ? $errors->first('brand_name'):''}}</span>
                    </div>
                    <div class="form-group">
                        <label>Brand Description</label>
                        <textarea class="form-control" name="brand_desc"  placeholder="Brand Description"></textarea>
                        <span style="color:red">{{$errors->has('brand_desc') ? $errors->first('brand_desc') :''}}</span>
                    </div>
                    <div class="form-group">
                        <label>Brand Image</label>
                       <input type="file" name="brand_image" class="form-control-file" id="profile-img">
                       <img src="" id="profile-img-tag" width="200px" />
                       <span style="color:red">{{$errors->has('brand_image') ? $errors->first('brand_image') :''}}</span>
                    </div>
                    <div class="form-group">
                        <label>Publication Status</label>
                        <input type="radio" name="status" value="1">
                        <label>Published</label>
                        <input type="radio" name="status" value="0">
                        <label>Unpublished</label><br>
                        <span style="color:red">{{$errors->has('brand_image') ? $errors->first('brand_image') :''}}</span>
                    </div>
                    <button type="submit" name="btn" class="btn btn-primary">Add Brand</button>
                </form>
            </div>
        </div>
    </div>
@endsection
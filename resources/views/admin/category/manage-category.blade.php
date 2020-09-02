@extends('admin.master')
@section('body')
<div class="container">
    @if(Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session::get('message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$category->cat_name}}</td>
                                    <td>{{$category->cat_desc}}</td>
                                    <td>{{$category->status==1?'published':'Unpublished'}}</td>
                                    <td>
                                        @if($category->status==1)
                                        <a href="{{route('published-category',['id'=>$category->id])}}" class="btn btn-sm btn-info"> <i class="fas fa-arrow-up"></i></a>
                                        @else
                                        <a href="{{route('unpublished-category',['$id'=>$category->id])}}" class="btn btn-sm btn-warning"> <i class="fas fa-arrow-down"></i></a>
                                        @endif
                                        <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit{{$category->id}}"> <i class="fas fa-edit"></i></a>
                                        <a href="{{route('delete-category',['id'=>$category->id])}}" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></a>
                                        
                                    </td>
                                </tr>

                                @include('admin.category.edit-category')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
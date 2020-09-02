<div class="modal fade" id="edit{{$category->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('update-category')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" value="{{$category->cat_name}}" name="cat_name" class="form-control" placeholder="Enter Category Name">

                        <input type="hidden" value="{{$category->id}}" name="id" class="form-control" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                        <label>Category Description</label>
                        <textarea class="form-control" name="cat_desc"  placeholder="Category Description">{{$category->cat_desc}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Publication Status</label>
                        <input type="radio" name="status" value="1" {{$category->status == 1?'checked':''}}>
                        <label>Published</label>
                        <input type="radio" name="status" value="0" {{$category->status == 0?'checked':''}}>
                        <label>Unpublished</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn" class="btn btn-primary">Update Category</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
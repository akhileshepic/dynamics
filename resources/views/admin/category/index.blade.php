@extends('admin.includes.main')
@section('title')

<title> Admin | Category</title>

@endsection

@section('btitle')

<li class="breadcrumb-item">Category</li>

@endsection

@section('style')

<style type="text/css">
.table-status {

    width: 150px;
}

.table .active-color {

    color: darkgreen;
    font-weight: 600;
}

.table .inactive-color {
    color: maroon;
    font-weight: 600;
}

.table .fa-toggle-on {

    color: darkgreen;
}
</style>
@endsection

@section('body')

<div class="container-fluid">
    <div class="fade-in">
        <div class="row ">
            <div class="col-xl-12 col-md-12 d-flex justify-content-end">
                <button class="btn btn-sm btn-primary" id="add-school"><i class="fa fa-plus"></i>&nbspAdd
                    Category</button>
            </div>
        </div>
    </div>
    <div class="row bg-white mx-0 py-3 mt-2" style="display: block;overflow-x: auto;white-space: nowrap;">
        <div class="col-md-12">
            <table class="table " id="table-id">
                <thead>
                    <tr class="table-primary">

                        <th>Sr.No.</th>

                        <th> Image</th>

                        <th>Title</th>
                        <th>Description</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td><img src="{{ asset('public/images/category/'.$category->image ) }}" width="80"></td>
                        <td>{{ $category->title }} </td>

                        <td>{{ $category->description }} </td>
                        <td>
                            <a href="javascript:void(0)" class="service_delete"
                                data-url="{{ route('admin.delete_category',['id'=>$category->id]) }}"><i
                                    class="fa fa-trash" style="color: maroon;"></i></a>
                            <a title="Edit" href="javascript:void(0)" class="edit_category"
                                data-id="{{ $category->id }}"><i class="fa fa-pencil"
                                    style="color: #29b6f6;"></i></a>&nbsp&nbsp
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <!-- /.row-->
</div>
</div>

@endsection

@section('modal')

<div class="modal fade" id="add-school-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 800px;">
        <div class="modal-content">
            <div class="modal-header py-3">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="text-center">Add Category</h3>

                <form class="sform form" method="post" action="{{ route('admin.category') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row " style="padding: 30px;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input type="file" name="image" id="Image" required value="{{ old('image') }}">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="textbox" name="title" id="title" value="{{ old('title') }}"
                                    placeholder="Enter Title" data-parsley-required
                                    data-parsley-required-message="Title is required">
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="discription">Description</label>
                                <textarea name="description">{{old('description')}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">

                                <button type="submit" name="student-submit" class="btn btn-primary"
                                    style="float: right;">Save</button>

                                <button type="button" class="btn btn-danger" style="float: right;margin-right: 10px;"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="edit-school-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 800px;">
        <div class="modal-content">
            <div class="modal-header py-3">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="text-center">Edit Category</h3>
                <form class="sform form" method="post" action="{{ route('admin.update_category') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row " style="padding: 30px;">
                        <input type="text" name="category_id" value="" id="edit_category_id" hidden>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input type="file" name="image" id="edit_image" value="{{ old('image') }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="campus_size">Title</label>
                                <input type="text" name="title" id="edit_title" value="{{ old('title') }}"
                                    placeholder="Enter Title">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="discription">Description</label>
                                <textarea name="description" id="edit_description">{{old('description')}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">

                                <button type="submit" name="student-submit" class="btn btn-primary"
                                    style="float: right;">Save</button>

                                <button type="button" class="btn btn-danger" style="float: right;margin-right: 10px;"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



@section('script')

<script type="text/javascript">
$(document).ready(function() {

    $('#add-school').click(function() {

        $('#add-school-modal').modal('show');

    });

    $('.service_delete').click(function() {

        var url = $(this).data('url');

        swal({

            title: "Are you sure?",
            text: "You want to delete this School!",
            icon: "warning",
            buttons: [
                'No, cancel it!',
                'Yes, I am sure!'
            ],
            closeOnClickOutside: false,
            dangerMode: true,


        }).then(function(isConfirm) {

            if (isConfirm) {

                window.location.href = url;

            }

        });

    });



});


$('.edit_category').click(function(e) {

    e.preventDefault();
    var id = $(this).data('id');

    var token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({

        url: "{{ route('admin.edit_category') }}",
        method: 'POST',
        data: {

            _token: token,
            id: id

        },

        success: function(data) {

            if (data) {

                var data = $.parseJSON(data);
                $('#edit_category_id').val(data.id);

                $('#edit_title').val(data.title);
                $('#edit_description').val(data.description);



                $('#edit-school-modal').modal('show');

            }

        }

    });

})
</script>

@endsection
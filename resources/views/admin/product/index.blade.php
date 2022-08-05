@extends('admin.includes.main')
@section('title')

<title> Admin | Product</title>

@endsection

@section('title')

<li class="breadcrumb-item">Product</li>

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
                    Product</button>
            </div>
        </div>
    </div>
    <div class="row bg-white mx-0 py-3 mt-2" style="display: block;overflow-x: auto;white-space: nowrap;">
        <div class="col-md-12">
            <table class="table " id="table-id">
                <thead>
                    <tr class="table-primary">

                        <th>Sr.No.</th>

                        <th>Image</th>

                        <th>Title</th>
                        <th>Category</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td><img src="{{ asset('public/images/product/'.$product->image ) }}" width="80"></td>
                        <td>{{ $product->title }} </td>
                        <td>{{ @$product->Categoryproduct->title }} </td>

                        <td>
                            <a href="javascript:void(0)" class="product_delete"
                                data-url="{{ route('admin.delete_product',['id'=>$product->id]) }}"><i
                                    class="fa fa-trash" style="color: maroon;"></i></a>
                            <a title="Edit" href="javascript:void(0)" class="edit_product"
                                data-id="{{ $product->id }}"><i class="fa fa-pencil"
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
                <h3 class="text-center">Add Product</h3>

                <form class="sform form" method="post" action="{{ route('admin.product') }}"
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
                                <label for="school">Category</label>
                                <select class="form-control category" type="text" name="category_id" id="category_id"
                                    value="{{ old('category_id') }}">

                                    <option value="">Select Category</option>

                                    @foreach($categories as $category)

                                    <option value="{{ $category->id }}">{{ $category->title }}</option>

                                    @endforeach

                                </select>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="discription">Discription</label>
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
                <h3 class="text-center">Edit Product</h3>
                <form class="sform form" method="post" action="{{ route('admin.update_product') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row " style="padding: 30px;">
                        <input type="text" name="product_id" value="" id="edit_product_id" hidden>
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
                                <label for="school">Category</label>
                                <select class="form-control category" type="text" name="category_id"
                                    id="edit_category_id" value="{{ old('eproduct_id') }}">

                                    <option value="">Select Category</option>

                                    @foreach($categories as $category)

                                    <option value="{{ $category->id }}">{{ $category->title }}</option>

                                    @endforeach

                                </select>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="discription">Discription</label>
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
<script src="https://cdn.ckeditor.com/4.7.3/standard-all/ckeditor.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML"></script>
<script type="text/javascript">
CKEDITOR.replace('description', {
    extraPlugins: 'justify,colorbutton,panelbutton,colordialog,tabletools',
    filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'

});

CKEDITOR.replace('edit_description', {
    extraPlugins: 'justify,colorbutton,panelbutton,colordialog,tabletools',
    filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'

});


$(document).ready(function() {

    $('#add-school').click(function() {

        $('#add-school-modal').modal('show');

    });

    $('.product_delete').click(function() {

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


$('.edit_product').click(function(e) {

    e.preventDefault();
    var id = $(this).data('id');

    var token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({

        url: "{{ route('admin.edit_product') }}",
        method: 'POST',
        data: {

            _token: token,
            id: id

        },

        success: function(data) {

            if (data) {

                var data = $.parseJSON(data);
                $('#edit_product_id').val(data.id);

                $('#edit_title').val(data.title);
                $('#edit_category_id').val(data.category_id);
                CKEDITOR.instances['edit_description'].setData(data.description);


                $('#edit-school-modal').modal('show');

            }

        }

    });

})
</script>

@endsection
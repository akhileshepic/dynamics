@extends('admin.includes.main')
@section('title')

<title>Product Detail</title>

@endsection

@section('btitle1')

<li class="breadcrumb-item">Detail</li>

@endsection

@section('btitle2')

<li class="breadcrumb-item">View</li>

@endsection

@section('style')

<style type="text/css">
.preview-image img {

    width: 100px;
    height: 100px;
}

.cross {

    position: absolute;
    top: 0px;
    right: 0px;
}

.active-color {

    color: darkgreen;
    font-weight: 600;
}

.inactive-color {
    color: maroon;
    font-weight: 600;
}

.select2 {

    width: 82% !important;

}
</style>

@endsection

@section('body')

<div class="container-fluid">
    <div class="fade-in">
        <div class="row ">
            <div class="col-xl-12 col-md-12">

                <a href="{{ route('admin.product') }}" class="btn btn-primary float-right">Back</a>

            </div>
        </div>
        <div class="row bg-white mx-0 py-3 mt-2">
            <div class="col-md-12">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h5>Product DETAILS PAGE</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Product Name</label>
                        <h6>{{ $product->title }}</h6>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Category</label>
                        <h5>{{ @$product->Categoryproduct->title }}</h5>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Short Description</label>
                        <h5>{{ $product->shortdescription }}</h5>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Image</label>
                        <h5><img src="{{ asset('/public/images/product/'.$product->image) }}" width="200"></h5>
                    </div>


                </div>

            </div>
        </div>
        <div class="row  mt-2">
            <div class="col-xl-12 col-md-12">
                <button id="add_image" class="btn btn-primary float-right ">Add Image</button>
            </div>
        </div>
        <div class="row bg-white mx-0 py-3 mt-2">
            <div class="col-md-12">
                <table class="table table-responsive-sm table-bordered" id="table-id">
                    <thead>
                        <tr class="table-primary">
                            <th>Sr.No.</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product->Productimages as $gal)

                        <tr>

                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('public/images/product/'.@$gal->url) }}" width="200"> </td>


                            <td>
                                <a href="javascript:void(0)" class="schoolclass_delete"
                                    data-url="{{ route('admin.delete_image',['id'=>$gal->id]) }}"><i class="fa fa-trash"
                                        style="color: maroon;"></i></a>


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

<div class="modal fade" id="add-image-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 600px;">
        <div class="modal-content">
            <div class="modal-header py-3">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="text-center">Upload images</h3>
                <form class="sform form" method="post" action="{{ route('admin.add_images') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row " style="padding: 30px;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="product_id" value="{{ $product->id }}" hidden>
                                <label for="name">Images<span>*</span></label>
                                <input type="file" name="file[]" class="form-control" required multiple>
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
$('#add_image').on('click', function() {
    $('#add-image-modal').modal('show');
})
$('.schoolclass_delete').click(function() {

    var url = $(this).data('url');

    swal({

        title: "Are you sure?",
        text: "You want to delete class for this school !",
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

$(".select42").select2();
</script>

@endsection
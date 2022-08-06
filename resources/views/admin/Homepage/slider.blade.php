@extends('admin.includes.main')
@section('title')

<title>Management | Slider</title>

@endsection

@section('btitle')

<li class="breadcrumb-item">Slider</li>

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
                    Slider</button>
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
                        <th>Heading</th>
                        <th>Sub Heading</th>
                        <th>Description</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($sliders as $slider)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('public/images/slider/'.$slider->image ) }}" width="80"></td>
                        <td>{{ $slider->head }} </td>
                        <td>{{ $slider->sub_head }} </td>
                        <td>{{ $slider->description }} </td>
                        <td>
                            <a href="javascript:void(0)" class="slider_delete"
                                data-url="{{ route('admin.delete_slider',['id'=>$slider->id]) }}"><i class="fa fa-trash"
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
                <h3 class="text-center">Add Slider</h3>
                <form class="sform form" method="post" action="{{ route('admin.sliderpost') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row " style="padding: 30px;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Heading<span>*</span></label>
                                <input class="form-control" type="text" name="head" id="name" value="{{ old('head') }}"
                                    placeholder="Enter Heading" data-parsley-required
                                    data-parsley-required-message="Heading is required.">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Sub Heading</label>
                                <input class="form-control" type="text" name="sub_head" id="address"
                                    value="{{ old('sub_head') }}" placeholder="Enter Sub Heading">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Upload Image<span>*</span></label>
                                <input type="file" name="image" id="image" value="{{ old('image') }}" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="discription">Description<span>*</span></label>
                                <textarea name="description" required>{{old('description')}}</textarea>
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

    $('.slider_delete').click(function() {

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
</script>

@endsection
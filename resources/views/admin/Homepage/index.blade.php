@extends('admin.includes.main')
@section('style')
<style>
</style>
@endsection
@section('body')

<section id="contact" class="contact-section aos-init aos-animate" data-aos="fade-down" data-aos-easing="ease-out-c">
    <div class="container my-3">

        <div class="card">
            <div class="card-header">
                <!-- START TABS DIV -->
                <div class="tabbable-responsive">
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="second-tab" data-toggle="tab" href="#second" role="tab"
                                    aria-controls="second" aria-selected="true">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab"
                                    aria-controls="third" aria-selected="false">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourth" role="tab"
                                    aria-controls="fourth" aria-selected="false">Fourth Tab</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="fifth-tab" data-toggle="tab" href="#fifth" role="tab"
                                    aria-controls="fifth" aria-selected="false">Fifth Tab</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sixth-tab" data-toggle="tab" href="#sixth" role="tab"
                                    aria-controls="sixth" aria-selected="false">Sixth Tab</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">


                <div class="tab-content">

                    <div class="tab-pane fade show active" id="second" role="tabpanel" aria-labelledby="second-tab">
                        <h5 class="card-title">About Section</h5>

                        <form class="sform form" method="post" action="{{ route('admin.abouts') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @if(@$aboutus->id)
                            <input type="text" name="about_id" value="{{@$aboutus->id}}" hidden>
                            @endif
                            <div class="row " style="padding: 30px;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Heading<span>*</span></label>
                                        <input class="form-control" type="text" name="heading" id="icons"
                                            value="  @if(@$aboutus->id){{ $aboutus->heading }} @else {{ old('heading')}} @endif"
                                            placeholder="Ex fa fa-users" data-parsley-required
                                            data-parsley-required-message="Heading is required.">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Sub Heading<span>*</span></label>
                                        <input class="form-control" type="text" name="sub_heading" id="address"
                                            value="@if(@$aboutus->id){{ $aboutus->sub_heading }} @else {{ old('sub_heading')}} @endif"
                                            placeholder="Enter Sub Heading">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Image<span>*</span></label>
                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                name="image">
                                            <label class="custom-file-label" for="validatedCustomFile">Choose
                                                file...</label>
                                            <img src="{{asset('public/images/about/'.@$aboutus->image)}}"
                                                style="width: 53px; position: absolute;    right: 5px;z-index: 4;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="discription">Description<span>*</span></label>
                                        <textarea name="description"
                                            required>@if(@$aboutus->id){{ $aboutus->description }} @else {{old('description')}} @endif</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <button type="submit" name="student-submit" class="btn btn-primary"
                                            style="float: right;">Save</button>

                                        <button type="button" class="btn btn-danger"
                                            style="float: right;margin-right: 10px;" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                        <h5 class="card-title">Services</h5>
                        <div class="container">
                            <form class="sform form" method="post" action="{{route('admin.homesectioncount')}}">
                                @csrf()
                                @if(@$servicecount->id)
                                <input type="text" name="service_id" value="{{$servicecount->id}}" hidden>
                                @endif
                                <div class="row">
                                    <div class="col">
                                        <label for="name">Heading<span>*</span></label>
                                        <input class="form-control mb-1" type="text" name="heading" id="name"
                                            placeholder="Heading..."
                                            value="@if(@$servicecount->id){{ $servicecount->heading }} @else {{old('heading')}} @endif" />
                                    </div>
                                    <div class="col">
                                        <label for="address">Number of services</label>
                                        <input class="form-control" type="text" name="noofservice" id="address"
                                            placeholder="Number of services..."
                                            value="@if(@$servicecount->id){{ $servicecount->noofservice }} @else {{old('noofservice')}} @endif" />
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>


                </div>
</section>
@endsection

@section('script')
<script>

</script>

@endsection
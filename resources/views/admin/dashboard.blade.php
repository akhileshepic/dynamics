@extends('admin.includes.main')
@section('title')

<title>Dashboard</title>

@endsection

@section('btitle')

<li class="breadcrumb-item">Dashboard</li>

@endsection

@section('body')

<style type="text/css">
.anchor a:hover {

    text-decoration: none;
}

.card .fa,
.card .fas {

    font-size: 60px;
    color: darkblue;

}
</style>

<div class="container-fluid">
    <div class="fade-in">
        <div class="row anchor">
            @if(Auth::user()->role=='admin')
            <div class="col-sm-6 col-lg-3">

            </div>
            <div class="col-sm-6 col-lg-3">

            </div>
            <div class="col-sm-6 col-lg-3">

            </div>
            <div class="col-sm-6 col-lg-3">

            </div>
            @endif
            <!-- /.col-->

            <!-- /.row-->
        </div>
    </div>

    @endsection
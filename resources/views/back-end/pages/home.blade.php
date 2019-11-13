@extends('back-end.master')
@section('title')
    Custom home
@endsection
@section('body')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12 mt-5">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Author Info</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <form role="form" action="{{ route('update-home') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" name="custom_home_title" value="{{ $home->custom_home_title }}" class="form-control" id="exampleInputEmail1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea class="form-control" name="custom_home_description">{{ $home->custom_home_description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Facebook Address</label>
                                        <input type="text" value="{{ $home->facebook }}" name="facebook" class="form-control" id="exampleInputEmail1">
                                        <input type="hidden" value="{{ $home->id }}" name="id" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Twitter Address</label>
                                        <input type="text" name="twitter" value="{{ $home->twitter }}"  class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">instagram Address </label>
                                        <input type="text" name="instagram" value="{{ $home->instagram }}"  class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Signature</label>
                                        <input type="text" name="signature" value="{{ $home->signature }}"  class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Slider Image 1</label>
                                        <img src="{{ asset($home->slider_img_1) }}" height="250px" width="250px">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="slider_img_1" class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Slider Image 2</label>
                                        <img src="{{ asset($home->slider_img_2) }}" height="250px" width="250px">

                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="slider_img_2" class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Home</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </section>
    </div>
@endsection
@extends('back-end.master')
@section('title')
    About me
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
                                <h3 class="card-title">About me</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <form role="form" action="{{ route('update-about') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text"  name="about_title" value="{{ $about->about_title }}" class="form-control" id="exampleInputEmail1">
                                        <input type="hidden" name="id" value="{{ $about->id }}" class="form-control" id="exampleInputEmail1">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                     <textarea name="about_description" class="form-control">{{ $about->about_description }}</textarea>

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Author name</label>
                                        <input type="text"  disabled value="{{ $author->author_name }}" class="form-control" id="exampleInputEmail1">
                                        <input type="hidden" name="id" value="{{ $author->id }}" class="form-control" id="exampleInputEmail1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">facebook</label>
                                        <input type="text" disabled  value="{{ $author->author_facebook }}"  class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Twitter</label>
                                        <input type="text" disabled  value="{{ $author->author_twitter }}"  class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Instagram</label>
                                        <input type="text" disabled  value="{{ $author->author_instagram }}" class="form-control" id="exampleInputEmail1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Signature</label>
                                        <input type="text" disabled value="{{ $author->author_name }}"  class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <img src="{{ asset($author->author_image) }}" height="300px" width="300px">
                                        <label for="exampleInputFile">Author Image</label>

                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update About</button>
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

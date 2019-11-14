@extends('back-end.master')
@section('title')
    Manage Author info
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
                                <h3 class="card-title">Manage Author info</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <form role="form" action="{{ route('new-author') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Author name</label>
                                        <input type="text" name="author_name" value="{{ $author->author_name }}" class="form-control" id="exampleInputEmail1">
                                        <input type="hidden" name="id" value="{{ $author->id }}" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="text" name="author_email_address" value="{{ $author->author_email_address }}"  class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone number</label>
                                        <input type="text" name="author_phone_number"  value="{{ $author->author_phone_number }}" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">facebook</label>
                                        <input type="text" name="author_facebook" value="{{ $author->author_facebook }}"  class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Twitter</label>
                                        <input type="text" name="author_twitter" value="{{ $author->author_twitter }}"  class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Instagram</label>
                                        <input type="text" name="author_instagram"  value="{{ $author->author_instagram }}" class="form-control" id="exampleInputEmail1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <textarea class="form-control" name="author_address"> {{ $author->author_address }} </textarea>
                                    </div>

                                    <div class="form-group">
                                        <img src="{{ asset($author->author_image) }}" height="300px" width="300px">
                                        <label for="exampleInputFile">Author Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="author_image" class="custom-file-input" id="exampleInputFile" accept="image/*">
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
                                    <button type="submit" class="btn btn-primary">Add Author</button>
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
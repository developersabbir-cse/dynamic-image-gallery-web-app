@extends('back-end.master')
@section('title')
    Image Gallery
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
                                <h3 class="card-title">Add Image Gallery</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <form role="form" action="{{ route('new-gallery') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <select name="category_id" class="form-control">
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image Title</label>
                                        <input type="text" name="image_title" class="form-control" id="exampleInputEmail1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image Description</label>
                                        <textarea class="form-control" name="image_description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="gallery_image" class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Publication Status</label><br>
                                        <input type="radio" id="published" name="publication_status" value="1"><label for="published">Published</label>
                                        <input type="radio" id="Unpublished" name="publication_status" value="0"><label for="Unpublished">Unpublished</label>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add Category</button>
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

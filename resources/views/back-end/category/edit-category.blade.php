@extends('back-end.master')
@section('title')
    Edit Category
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
                                <h3 class="card-title">Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <form role="form" action="{{ route('update-category') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" value="{{ $category->category_name }}" name="category_name" class="form-control" id="exampleInputEmail1">
                                        <input type="hidden" name="id" class="form-control" value="{{ $category->id }}" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Category Description</label>
                                        <textarea class="form-control" name="category_description">{{ $category->category_description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Publication Status</label>
                                        <input type="radio" id="published" {{ $category->publication_status==1?'checked':'' }} name="publication_status" value="1"><label for="published">Published</label>
                                        <input type="radio" id="Unpublished" name="publication_status" value="0"  {{ $category->publication_status==0?'checked':'' }}><label for="Unpublished"  >Unpublished</label>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
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
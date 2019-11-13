@extends('back-end.master')
@section('title')
    Mange Category
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
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example ">
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Category Name</th>
                                                        <th>Category Description</th>
                                                        <th>Publication Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    @php($i=1)
                                                    <tbody>
                                                    @foreach($categories as $category)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $category->category_name }}</td>
                                                            <td>{{ $category->category_description }}</td>
                                                            <td>{{ $category->publication_status }}</td>
                                                            <td>
                                                                <a href="{{ route('edit-category',['id' =>$category->id]) }}">Edit</a>
                                                                <a href="" onclick="event.preventDefault();document.getElementById('deleteCategory{{ +$category->id }}').submit()">Delete</a>
                                                                <form action="{{ route('delete-category') }}" method="post" id="deleteCategory{{ +$category->id }}">                            <input type="hidden" value="{{ $category->id }}" name="id">
                                                                    @csrf
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </section>

                        </div>

@endsection















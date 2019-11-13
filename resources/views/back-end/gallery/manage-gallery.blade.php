@extends('back-end.master')
@section('title')
    Mange Category
@endsection

@section('body')
    <section class="content">
        <div class="container-fluid">

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-sm-8" style="margin: 0% 24%;">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC EXAMPLE
                            </h2>

                        </div>
                        <div class="body">
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example ">
                                    <tr>
                                        <th>SL</th>
                                        <th>Category Name</th>
                                        <th>Image title</th>
                                        <th>Image description</th>
                                        <th>Gallery image</th>
                                        <th>Publication status</th>
                                        <th>Action</th>
                                    </tr>
                                    @php($i=1)
                                    <tbody>
                                    @foreach($galleries as $gallery)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $gallery->category_name }}</td>
                                            <td>{{ $gallery->image_title }}</td>
                                            <td>{{ $gallery->image_description }}</td>
                                            <td><img src="{{ asset($gallery->gallery_image) }}" height="100" width="100"></td>
                                            <td>{{ $gallery->publication_status==1?'Published':'Unpublished' }}</td>
                                            <td>
                                                <a href="{{ route('edit-gallery',['id' =>$gallery->id]) }}">Edit</a>
                                                <a href="" onclick="event.preventDefault();document.getElementById('deleteGallery{{ +$gallery->id }}').submit()">Delete</a>
                                                                <form action="{{ route('delete-gallery') }}" method="post" id="deleteGallery{{ +$gallery->id }}">                            <input type="hidden" value="{{ $gallery->id }}" name="id">
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
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->

            <!-- #END# Exportable Table -->
        </div>
    </section>
@endsection

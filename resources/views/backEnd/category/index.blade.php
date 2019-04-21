@extends('backEnd.master')
@section('page-title','category')
@section('page-heading','Mange Category')
@section('content')
    <section class="content">
        <div class="col-xs-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->category_publication_status == 1 ? "publish" : "un publish"}}</td>
                </tr>
                    <td>
                        <div class="btn-group">
                        <a href="{{route('category.edit', $category->id)}}" class="btn  btn-primary">Edit</a>
                        <a href="{{route('category.delete', $category->id)}}" class="btn  btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    @endsection
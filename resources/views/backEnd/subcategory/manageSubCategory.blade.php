@extends('backEnd.master')
@section('page-title','Sub category')
@section('page-heading','Mange Sub Category')
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
                    @foreach($subcategory as $key => $data)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$data->subcategory_name}}</td>
                        <td>{{$data->subcategory_status == 1 ? "Publish" : "UnPublish"}}</td>

                    <td>
                        <div class="btn-group">
                            <a href="{{route('edit.subcategory',$data->id)}}" class="btn  btn-primary">Edit</a>
                            <a href="{{route('delete.subcategory',$data->id)}}" class="btn  btn-danger">Delete</a>
                        </div>
                    </td>
                    </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
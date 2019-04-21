@extends('backEnd.master')
@section('page-title','category')
@section('page-heading','Edit category')
@section('content')
    <section class="content">
        <div class="col-xs-12">
            <form id="editCategoryForm" action="{{route('category.update',$category->id)}}" method="get" >
                {{csrf_field()}}
                <div class="form-group">
                    <input class="form-control" type="text" name="category_name" value="{{$category->category_name}}">
                </div>
                <div class="form-group">
                    <select class="form-control" name="category_publication_status" id="">
                        <option value="1">Publish</option>
                        <option value="0">UnPublish</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Update Category" class="btn btn-block btn-success">
                </div>
            </form>
        </div>
    </section>
    <script type="text/javascript">
        document.forms['editCategoryForm'].elements['category_publication_status'].value = {{$category->category_publication_status}}
    </script>
    @endsection
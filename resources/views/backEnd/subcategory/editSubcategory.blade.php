@extends('backEnd.master')
@section('page-title','sub category')
@section('page-heading','Manage sub Category')
@section('content')
    <section class="content">
        <div class="col-xs-12">
            <form action="{{route('update.subcategory',$subcategory->id)}}" method="post" id="editSubcategory">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Sub Category</label>
                    <input name="sub_category_name" class="form-control" value="{{$subcategory->subcategory_name}}" type="text" placeholder="Enter Your Sub Category Name">
                </div>
                <div class="form-group">
                    <select name="categoryId" class="form-control">
                        <option>Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="sub_category_publication_status" id="" class="form-control">
                        <option>Status</option>
                        <option value="1">Publish</option>
                        <option value="0">Un Publish</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="submit" class="btn-primary btn-block">
                </div>
            </form>
        </div>
    </section>
    <script type="text/javascript">
        document.forms['editSubcategory'].elements['sub_category_publication_status'].value = {{$subcategory->subcategory_status}}
        document.forms['editSubcategory'].elements['categoryId'].value = {{$subcategory->category_id}}
    </script>
@endsection
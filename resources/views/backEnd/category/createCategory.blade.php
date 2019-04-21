@extends('backEnd.master')
@section('page-title','category')
@section('page-heading','Manage Category')
@section('content')
   <section class="content">
       <div class="col-xs-12">
           <form action="{{route('category.store')}}" method="POST">
               {{csrf_field()}}
               <div class="form-group">
                   <label for="">Category</label>
                   <input name="category_name" class="form-control" type="text" placeholder="Enter Your Category Name">
               </div>
               <div class="form-group">
                   <select name="category_publication_status" id="" class="form-control">
                       <option>Status</option>
                       <option value="1"> Publish</option>
                       <option value="0">UnPublish</option>
                   </select>
               </div>
               <div class="form-group">
                   <input type="submit" value="submit" class="btn-primary btn-block">
               </div>
           </form>
       </div>
   </section>
@endsection
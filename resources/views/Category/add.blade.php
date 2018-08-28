@extends('Layout.admin')
@section('content')
<div class="col-md-12">
    <div class="x_panel">
           
    <div class="header ">
        <span class="">Thêm Loại Món</span>
    </div>
@include('Element.error')
<hr/>
<div>
    <form class="form-horizontal" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Tên:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="title" id="title" placeholder="Tên loại món ăn" value="{{isset($category->title)?$category->title:''}}">
            </div>
        </div>    
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Mô tả:</label>
            <div class="col-sm-9">
                <textarea type="text" class="form-control" name="description" id="description" placeholder="Mô tả">{{isset($category->description)?$category->description:''}}</textarea>
            </div>
        </div>    
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9" style="text-align:center;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
@stop
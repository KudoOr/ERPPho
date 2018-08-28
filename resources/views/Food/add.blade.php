@extends('Layout.admin')
@section('content')
<div class="col-md-12">
    <div class="x_panel">
           
    <div class="header ">
        <span class="">Thêm Món Ăn</span>
    </div>
@include('Element.error')
<hr/>
<div>
    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Tên:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="title" id="title" placeholder="Tên món ăn" value="{{isset($food->title)?$food->title:''}}">
            </div>
        </div>    
        <div class="form-group">
            <label class="control-label col-sm-2" for="description">Mô tả:</label>
            <div class="col-sm-9">
                <textarea type="text" class="form-control" name="description" id="description" placeholder="Mô tả">{{isset($food->description)?$food->description:''}}</textarea>
            </div>
        </div>    
        <div class="form-group">
            <label class="control-label col-sm-2" for="image">Hình ảnh:</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" name="image" id="image" />
            </div>
        </div>    
        <div class="form-group">
            <label class="control-label col-sm-2" for="price">Đơn giá:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="price" id="price" />
            </div>
        </div> 
        <label class="control-label col-sm-2" for="title">Loại Món:</label>
            <div class="col-sm-9">
                <select name="category_id" class="form-control col-sm-9">
                    <option value="0">Hãy chọn loại món</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
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
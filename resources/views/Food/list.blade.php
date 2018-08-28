@extends('Layout/admin')
@section('content')
<div class="col-md-12">
        <div class="x_panel">
           
<div class="header">
    <span class="">Categories</span>
    <span class="pull-right"><a href="add" title="Thêm Category"><i class="fa fa-plus-circle"></i></a></span>
</div>
<div class="content">
@include('Element.error')
<div class="col-sm-12">
    <table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th style="max-width:80px;">Hình ảnh</th>
            <th>Món ăn</th>
            <th>Đơn giá</th>
            <th>Loại</th>
            <th>Mô tả</th>
            <th>Hành động</th>
		</tr>
	</thead>
	<tbody>
    @foreach($foods as $food) 
		<tr>
            <td>{{ $food->id }}</td>
			<td style="max-width:125px;"><img src="{{ URL::to('/'). $food->url }}" width="200" height="100" /></td>
			<td>{{ $food->title }}</td>
			<td>{{ $food->price }}</td>
			<td>{{ $food->category_title }}</td>
			<td>{{ $food->description }}</td>
            <td style="text-align:center;">
                <a href="edit/{{$food->id}}" class="btn btn-xs btn-warning">Sửa</a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="delete/{{$food->id}}" class="btn btn-xs btn-danger">Delete</a>
            </td>
		</tr>
    @endforeach
	</tbody>
</table>
{{ $foods->links() }}
</div>
</div>
</div>
</div>
@stop
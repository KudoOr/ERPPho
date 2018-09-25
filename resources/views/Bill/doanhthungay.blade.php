@extends('Layout/admin')
@section('content')
<div class="col-md-12">
        <div class="x_panel">
           
<div class="header">
    <span class="">Tổng doanh thu hôm nay : <strong class="text-danger">{{ $sum_doanhthu->sum_doanhthu }}</strong> VNĐ </span>
    <span class="pull-right"><a href="add" title="Thêm bill"><i class="fa fa-plus-circle"></i></a></span>
</div>
<div class="content">
@include('Element.error')
<div class="col-sm-12">
    <table class="table table-hover table-bordered">
	<thead>
		<tr>	
			<th>STT</th>
            <th>Tiền thu</th>
            <th>Bàn số</th>
            <th>Thời gian</th>
            <th>Hành Động</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$i=0;
	?>
    @foreach($bills as $bill) 
	<?php $i++; ?>
		<tr>
            <td>{{ $i }}</td>
			<td>{{ $bill->sum_price }}</td>
			<td>{{ $bill->number_table }}</td>
			<td>{{ $bill->created_at }}</td>
            <td style="text-align:center;">
                <a href="{{URL::to('/')}}/cacmon/{{$bill->id}}" class="btn btn-xs btn-warning">Xem các món</a>
                <a onclick="return confirm('Bạn có chắc chắn xóa?')" href="{{URL::to('/')}}/delete/{{$bill->id}}" class="btn btn-xs btn-danger">Xóa</a>
            </td>
		</tr>
    @endforeach
	</tbody>
</table>
{{ $bills->links() }}
</div>
</div>
</div>
</div>
@stop
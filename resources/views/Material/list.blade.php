@extends('Layout/admin')
@section('content')
<div class="col-md-12">
        <div class="x_panel">
           
<div class="header">
    <h3 class="">Thịt bò nhập chín</h3>
</div>
<div class="content">
@include('Element.error')
<div class="col-sm-12">
    <form class="form-inline" method="GET">
     <div class="form-group">
        <label class="control-label col-sm-3" for="title">Từ ngày:</label>
         <div class="col-sm-2">
           <input class="form-control" type="date" name="from_day">
         </div>
     </div>
     <div class="form-group">
        <label class="control-label col-sm-3" for="title">Tới ngày:</label>
         <div class="col-sm-2">
           <input class="form-control" type="date" name="to_day">
         </div>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>ID</th>
            <th>Ngày tháng</th>
            <th>Lấy vào</th>
            <th>Sau luộc</th>
            <th>% Hao</th>
            <th>Hành động</th>
		</tr>
	</thead>
	<tbody>
	<?php
	  $sum_before = 0;
	  $sum_after = 0;
	  $sum_percen = 0;
	 ?>
    @foreach($materials as $me)
    <?php
        $sum_before += $me->weigh_before;
        $sum_after += $me->weigh_after;
        $sum_percen += $me->percen;
     ?>
		<tr>
            <td>{{ $me->id }}</td>
			<td>{{ $me->created_at }}</td>
			<td>{{ $me->weigh_before }}</td>
			<td>{{ $me->weigh_after }}</td>
			<td>{{ $me->percen }}%</td>
            <td style="text-align:center;">
                <a href="" class="btn btn-xs btn-warning">Sửa</a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="delete/{{$me->id}}" class="btn btn-xs btn-danger">Delete</a>
            </td>
		</tr>
    @endforeach
    <?php
        $tmp = count($materials);
        if($tmp == 0){
            $average_percen = 0;
        }else{
            $average_percen = $sum_percen/count($materials);
        }
    ?>
        <tr>
            <th>Tổng</th>
            <th>#</th>
            <th>{{ $sum_before }}</th>
            <th>{{ $sum_after }}</th>
            <th>{{ $average_percen }}%</th>
            <th style="text-align:center;">
            </th>
        </tr>
	</tbody>
</table>
{{ $materials->links() }}
</div>
</div>
</div>
</div>
@stop
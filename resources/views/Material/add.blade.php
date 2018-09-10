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
                <input type="text" disabled class="form-control" name="title" id="title" placeholder="Tên loại món ăn" value="Số lượng mua hao">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Lúc đầu:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="weigh_before" id="weigh_before" placeholder="Khối lượng lúc đầu(kg)" value=0 />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Sau khi luộc:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="weigh_after" id="weigh_after" placeholder="Sau khi luộc(Kg)" value=0 />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">% Hao:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="percen" id="percen" value='0%' />
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
@section('custom-script')
<script>
    $(document).ready(function(){
        $('#weigh_before').keyup(function(){
            var weigh_before = $('#weigh_before').val();
            var weigh_after = $('#weigh_after').val();
            percen = (weigh_before - weigh_after)/weigh_before;
            $('#percen').val(percen*100);
        });
        $('#weigh_after').keyup(function(){
            var weigh_before = $('#weigh_before').val();
            var weigh_after = $('#weigh_after').val();
            percen = (weigh_before - weigh_after)/weigh_before;
            $('#percen').val(percen*100);
        });
     });
</script>
@stop
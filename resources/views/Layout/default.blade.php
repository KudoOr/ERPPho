<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Phở Lý Quốc Sư</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href={{ asset("public/css/style.css") }} />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="container">
        <div id="header">
            <ul class="nav nav-tabs">
                <li data="menu0" class="menu0 active menu-common"><a data-toggle="tab" href="#menu0">Hóa đơn</a></li>
                @foreach($categories as $cate)
                    <li data="menu{{$cate->id}}" class="menu{{$cate->id}} menu-common"><a data-toggle="tab" href="#menu{{$cate->id}}">Phở nước</a></li>
                @endforeach
            </ul>
        </div>
        <div class="tab-content-left">
            <div id="menu0" class="tab-pane fade in active">
                <a class="themhoadon" data-toggle="tab" data="menu{{$categories[0]->id}}" href="#menu{{$categories[0]->id}}">
                    <div class="item">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Thêm hóa đơn</div>
                            <div class="panel-body">
                                <i class="fa fa-5x fa-money"> </i>
                                <i class="fa fa-5x fa-money"> </i>
                            </div>
                        </div> 
                    </div>          
                </a>
            </div>
            @foreach($categories as $cate)
                <div id="menu{{$cate->id}}" class="tab-pane fade">
                @foreach($foods as $food)
                    @if($food->category_id == $cate->id)
                        <div class="pull-left" > 
                            <div class="item" data-food="{{ $food->id }}" style="display:none;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">{{ $food->title }}</div>
                                    <div class="panel-body">
                                        <i class="fa fa-5x fa-money"> </i>
                                        <i class="fa fa-5x fa-money"> </i>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    @endif
                @endforeach    
                </div>
            @endforeach
        </div>
        <div class="content-right">
            <div class="header-right"> 
                <div class="chon-ban">
                    <div class="form-group">
                        <select class="form-control" id="chonban" name="chonban">
                            <option value="" >Chọn bàn</option>
                            @for($i = 0;$i<=30;$i++)
                                <option value={{ $i }}>Bàn số {{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
            <div class="food-right">
                <table class="table table-hover">
                    <tr style="display:none" class="table-food">
                    </tr>
                     <tr class="sum-money-right" style="display:none;">
                        <td style='width:250px;'>Tổng tiền</td>
                        <td class='sum_money' style='width:100px;' >0</td>
                        <td><button class='btn btn-small btn-success'>Lưu</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <footer id="footer">
                <span class="text_info"><marquee>Phở 10 Lý Quốc Sư Cơ Sở 1 : 40 Trần Cung - Cơ Sở 2 : 120 Thành Công.</marquee></span>
        </footer>
    </div>
    <script>
        $(document).ready(function(){
        var list_foods = [];
            $(".themhoadon").on('click',function(){
                menu = $(this).attr('data');
                $('.'+menu).addClass("active");
                $(".menu0").removeClass("active");
                $('#'+menu+ ' .item').css('display','block');
            });
            $('.menu-common').on('click',function(){
                menu = $(this).attr('data');
                $('.item').css('display','none');
                $('#'+menu+ ' .item').css('display','block');
            });
            $('.item').on('click',function(){
                var sum_price = 0;
                cate_id = $(this).attr('data-food');
                if (cate_id !== undefined){
                    $.ajax({
                        url: "foods/getFoodsById/"+cate_id,
                        success:function (res) {
                            data = JSON.parse(res);
                            list_foods.push(data);
                            $(".table-food").after("<tr class='one-food'><td style='width:250px;'>"+ data.title +"</td><td style='width:150px;'>"+ data.price +"</td><td><button class='btn btn-small btn-danger'>Xóa</button></td></tr>");
                            if(list_foods.length > 0){
                                for(var i=0; i< list_foods.length; i++){
                                    sum_price += list_foods[i].price;
                                }
                                $('.sum_money').text(sum_price);
                                $('.sum-money-right').show();
                            }
                        },
                        error:function (data) {
                            alert('error');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
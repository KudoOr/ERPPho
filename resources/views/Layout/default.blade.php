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
                <li class="menu0 active"><a data-toggle="tab" href="#home">Hóa đơn</a></li>
                <li class="menu1"><a data-toggle="tab" href="#menu1">Phở nước</a></li>
                <li><a data-toggle="tab" href="#menu2">Đồ thêm</a></li>
                <li><a data-toggle="tab" href="#menu3">Cơm rang- Phở xào</a></li>
                <li><a data-toggle="tab" href="#menu4">Đồ uống</a></li>
            </ul>
        </div>
        <div class="tab-content-left">
            <div id="home" class="tab-pane fade in active">
                <a class="themhoadon" data-toggle="tab" href="#menu1">
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
            <div id="menu1" class="tab-pane fade">
               <div class="pull-left" > 
                    <div class="item">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Thêm hóa đơn</div>
                            <div class="panel-body">
                                <i class="fa fa-5x fa-money"> </i>
                                <i class="fa fa-5x fa-money"> </i>
                            </div>
                        </div> 
                    </div>
               </div>
               <div class="pull-left" > 
                   <div class="item">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Thêm hóa đơn</div>
                            <div class="panel-body">
                                <i class="fa fa-5x fa-money"> </i>
                                <i class="fa fa-5x fa-money"> </i>
                            </div>
                        </div> 
                    </div>
                </div>
               <div class="pull-left" > 
                   <div class="item">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Thêm hóa đơn</div>
                            <div class="panel-body">
                                <i class="fa fa-5x fa-money"> </i>
                                <i class="fa fa-5x fa-money"> </i>
                            </div>
                        </div> 
                    </div>
                </div>
               <div class="pull-left" > 
                   <div class="item">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Thêm hóa đơn</div>
                            <div class="panel-body">
                                <i class="fa fa-5x fa-money"> </i>
                                <i class="fa fa-5x fa-money"> </i>
                            </div>
                        </div> 
                    </div>
                </div>
               <div class="pull-left" > 
                   <div class="item">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Thêm hóa đơn</div>
                            <div class="panel-body">
                                <i class="fa fa-5x fa-money"> </i>
                                <i class="fa fa-5x fa-money"> </i>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
            <div id="menu4" class="tab-pane fade">
                <h3>Menu 4</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
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
            <div class="bottom-right btn btn-primary">Lưu hóa đơn</div>
        </div>
        <footer id="footer">
                <span class="text_info"><marquee>Phở 10 Lý Quốc Sư Cơ Sở 1 : 40 Trần Cung - Cơ Sở 2 : 120 Thành Công.</marquee></span>
        </footer>
    </div>
    <script>
        $(document).ready(function(){
            $(".themhoadon").on('click',function(){
                $(".menu1").addClass("active");
                $(".menu0").removeClass("active");
            })
        });
    </script>
</body>
</html>
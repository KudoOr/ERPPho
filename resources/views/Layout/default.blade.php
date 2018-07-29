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
	<link rel="stylesheet" href={{ asset("public/css/style.css") }} />
	<link rel="stylesheet" href={{ asset("public/css/app.css") }} />
	<link rel="stylesheet" href={{ asset("public/js/app.js") }} />
</head>
<body>
    <div id="container">
        <div id="header">

        </div>
        <div id="body">
            @yield('body')
        </div>
        <footer id="footer">
            this
        </footer>
    </div>
</body>
</html>
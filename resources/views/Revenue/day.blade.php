@extends('Layout/admin')
@section('content')
    <div id="chartContainer" style="height: 370px; margin: 0px auto;"></div>
@stop
@section('custom-script')
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    zoomEnabled: true,
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Doanh thu theo ngày"
	},
	axisY:{
		includeZero: true,
		title:"Tiền (VND)",
	},axisX:{
		includeZero: true,
		title:"Ngày",
	},
	data: [{
		type: "line",
		dataPoints: [
			{ y: 450,label:'2018-01-01' },
			{ y: 414,label:'2018-01-01'},
			{ y: 460 ,label:'2018-01-01'},
			{ y: 450 ,label:'2018-01-01'},
			{ y: 500 ,label:'2018-01-01'},
			{ y: 480 ,label:'2018-01-01'},
			{ y: 480 ,label:'2018-01-01'},
			{ y: 500 ,label:'2018-01-01'},
			{ y: 480 ,label:'2018-01-01'},
			{ y: 510 ,label:'2018-01-01'}
		]
	}]
});
chart.render();

}
$('.canvasjs-chart-credit').hide();
 var limit = 10000;    //increase number of dataPoints by increasing this

    var y = 0;
    var data = []; var dataSeries = { type: "line" };
    var dataPoints = [];
    for (var i = -limit/2; i <= limit/2; i++) {
     y += (Math.random() * 10 - 5);
     dateTime = new Date(1960, 08, 15);

     //dateTime.setMilliseconds(dateTime.getMilliseconds() + i);
     //dateTime.setSeconds(dateTime.getSeconds() + i);
     //dateTime.setMinutes(dateTime.getMinutes() + i);
     //dateTime.setHours(dateTime.getHours() + i);
     dateTime.setDate(dateTime.getDate() + i);
     //dateTime.setMonth(dateTime.getMonth() + i);
     //dateTime.setFullYear(dateTime.getFullYear() + i);

     dataPoints.push({
         //x: (i+1) % 50 === 0 ? dateTime.getTime() : dateTime,
         //x: i + 345345,
         x: dateTime,
         y: y
       });
    }

     dataSeries.dataPoints = dataPoints;
     data.push(dataSeries);

  </script>
@stop
<script src="{{ Illuminate\Support\Facades\URL::asset('public/js/canvasjs.min.js') }}"></script>
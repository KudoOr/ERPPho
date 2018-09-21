@extends('Layout/admin')
@section('content')
    <div id="chartContainer" style="height: 370px; margin: 0px auto;"></div>
@stop
@section('custom-script')
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
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
$('.canvasjs-chart-credit').hide();
}
</script>
@stop
<script src="{{ Illuminate\Support\Facades\URL::asset('public/js/canvasjs.min.js') }}"></script>
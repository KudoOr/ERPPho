<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Food;
use Symfony\Component\HttpFoundation\Cookie;
class PhoController extends Controller
{
	public function pho(){
		$categories =Category::all();
		$foods =Food::all();
		$bill_count = DB::table('bills')
                ->where('created_at','>',date("Y-m-d 00:00:00"))
                ->where('created_at','<',date("Y-m-d 23:59:59"))
                ->count();
		return view('Pho.list',['categories'=>$categories,'foods'=>$foods,'bill_count'=>$bill_count]);
	}
	public function quanly (Request $request){
		return view('Pho.quanly');
	}
}

<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Validator;	
class BillsController extends Controller
{
	public function saveData(Request $request){
		try{
			$input = Input::all();
			$data_food = $input['data'];
			$number_table = $input['number_table'];
			$sum_price = $input['sum_price'];
			$id_foods = array();
			foreach($data_food as $food){
				array_push($id_foods,$food['id']);
			}
			$id_food = implode(',',$id_foods);
			DB::table('bills')->insert(
				[
					'sum_price' => $sum_price,
					'number_table' => $number_table,
					'id_foods' => $id_food,
					'created_at'=>date("Y-m-d H:i:s")
				]
			);
			return json_encode(array(
				'code' => 200,
				'message'=> 'Success'
			));
		}catch(Exception $e){
			return json_encode(array(
				'code' => 500,
				'message'=> $e->getMessage()
			));
		}
	}
	public function doanhthungay(){
		$bills = DB::table('bills')
                ->where('created_at','>',date("Y-m-d 00:00:00"))
                ->where('created_at','<',date("Y-m-d 23:59:59"))
                ->paginate(10);
		$sum_doanhthu = DB::table('bills')
					->select(DB::raw('sum(sum_price) as sum_doanhthu'))
					->where('created_at','>',date("Y-m-d 00:00:00"))
					->where('created_at','<',date("Y-m-d 23:59:59"))
					->first();	
		return view("Bill.doanhthungay",['bills'=>$bills,'sum_doanhthu'=>$sum_doanhthu]);
	}
}
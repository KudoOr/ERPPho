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
					'id_foods' => $id_food
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
}

<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Validator;
class MaterialsController extends Controller
{
    public function add(Request $request){
		if($request->isMethod('post')){
			$input = Input::all();
			$validator = Validator::make($input, [
				'weigh_before' => 'required'
            ]);
			if($validator->fails()){
				return redirect('/materials/add')
				->withErrors($validator)
				->withInput();
			}else{
				DB::table('materials')->insert(
                    [
//                        'title' => 'Số lượng mua hao',
						'weigh_before' => $input['weigh_before'],
						'weigh_after' => $input['weigh_after'],
						'percen' => $input['percen'],
						'created_at'=> date('Y-m-d H:i:s'),
						'updated_at'=> date('Y-m-d H:i:s')
                    ]
                );
				\Session::flash('success','Lưu thành công.');
				return redirect('/materials/list');
			}
		}
		return view('Material.add');
	}
	public function list(Request $request){
	$input = Input::all();

		if(isset($input['from_day'])){
            $materials = DB::table('materials')
                ->where('created_at','>',$input['from_day'])
                ->where('created_at','<',$input['to_day'])
                ->paginate(10);
		}else{
		    $materials = DB::table('materials')
                ->paginate(10);
		}

            return view('Material.list',['materials'=>$materials]);
	}
	public function edit(Request $request,$id){
		if(!empty($id)){
			$food = DB::table('foods')->join('categories', 'foods.category_id', '=', 'categories.id')
			->select('foods.*', 'categories.title as category_title')
			->where('foods.id', '=', $id)->first();
			if($request->isMethod('post')){
			$input = Input::all();
			DB::table('foods')
            ->where('id', $id)
            ->update([
				'title' => $input['title'],
				'description' => $input['description'],
				'url' => $url,
				'price' => $input['price'],
				'category_id' => $input['category_id']
				]);
				\Session::flash('success','Lưu thành công.');
				return redirect('foods/list');
			}

			$categories = DB::table('categories')->get();
			return view("Food.edit",['food'=>$food,'categories'=>$categories]);
		}
	}
	public function delete($id){
		if(!empty($id)){
			DB::table('foods')->where('id', '=', $id)->delete();
			\Session::flash('success','Xóa thành công.');
			return redirect('foods/list');
		}
	}
	public function getFoodsById($id){
	    if(!empty($id)){
	        $food = DB::table('foods')->where('id', '=', $id)->first();
	        return json_encode($food);
	    }
	}
	public function saveData(Request $request){
	    dd(Input::all());
	}
	public function day(){
	    return view("Revenue.day");
	}

}

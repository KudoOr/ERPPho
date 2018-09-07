<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Validator;	
class FoodsController extends Controller
{
    public function add(Request $request){
		if($request->isMethod('post')){
			$input = Input::all();
			$validator = Validator::make($input, [
				'title' => 'required|unique:foods'
            ]);
			if($validator->fails()){
				return redirect('/foods/add')
				->withErrors($validator)
				->withInput();
			}else{
				$url = '';
				if($request->hasFile('image')){
					$image = $request->file('image');
					$name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
					$destinationPath = public_path('/uploads/img');
					$imagePath = "/public/uploads/img/".  $name;
					$image->move($destinationPath, $name);
					$url = $imagePath;
				}
				DB::table('foods')->insert(
                    [
                        'title' => $input['title'],
						'description' => $input['description'],
						'url'	=> $url,
						'price' => $input['price'],
						'category_id' => $input['category_id']
                    ]
                );
				\Session::flash('success','Lưu thành công.');
				return redirect('/foods/list');
			}
		}
		$categories = DB::table('categories')->get();
		return view('Food.add',['categories'=>$categories]);
	}
	public function list(){
		$foods = DB::table('foods')
		->join('categories', 'foods.category_id', '=', 'categories.id')
		->select('foods.*', 'categories.title as category_title')
		->paginate(10);
            return view('Food.list',['foods'=>$foods]);
	}
	public function edit(Request $request,$id){
		if(!empty($id)){
			$food = DB::table('foods')->join('categories', 'foods.category_id', '=', 'categories.id')
			->select('foods.*', 'categories.title as category_title')
			->where('foods.id', '=', $id)->first();
			if($request->isMethod('post')){
			$input = Input::all();
			$url =$food->url;
			if($request->hasFile('image')){
				$image = $request->file('image');
				$name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
				$destinationPath = public_path('/uploads/img');
				$imagePath = "/public/uploads/img/".  $name;
				$image->move($destinationPath, $name);
				$url = $imagePath;
			}
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
}

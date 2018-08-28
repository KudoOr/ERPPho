<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Validator;	
class CategoryController extends Controller
{
    public function add(Request $request){
		if($request->isMethod('post')){
			$input = Input::all();
			$validator = Validator::make($input, [
				'title' => 'required|unique:categories'
            ]);
			if($validator->fails()){
				return redirect('/categorys/add')
				->withErrors($validator)
				->withInput();
			}else{
				DB::table('categories')->insert(
                    [
                        'title' => $input['title'],
                        'description' => $input['description']
                    ]
                );
				\Session::flash('success','Lưu thành công.');
				return redirect('/categorys/list');
			}
		}
		return view('Category.add');
	}
	public function list(){
		$categories = DB::table('categories')->paginate(10);
            return view('Category.list',['categories'=>$categories]);
	}
	public function edit(Request $request,$id){
		if(!empty($id)){
			if($request->isMethod('post')){
			$input = Input::all();
			DB::table('categories')
            ->where('id', $id)
            ->update([
				'title' => $input['title'],
				'description' => $input['description'],
				]);
				\Session::flash('success','Lưu thành công.');
				return redirect('categorys/list');
			}
			$category = DB::table('categories')->where('id', '=', $id)->first();
			return view("Category.add",['category'=>$category]);
		}
	}
	public function delete($id){
		if(!empty($id)){
			DB::table('categories')->where('id', '=', $id)->delete();
			\Session::flash('success','Xóa thành công.');
			return redirect('categorys/list');
		}
	}
}

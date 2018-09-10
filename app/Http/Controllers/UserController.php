<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Cookie;

class UserController extends Controller
{
    public function login(Request $request){
		if($request->isMethod('post')){
			$input = Input::all();
			if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
				// The user is active, not suspended, and exists.
				return redirect('/quanly')->cookie('isLogin', true, 43200);
			}else{
				\Session::flash('error','Sai email hoặc password');
			}
			
		}
		return view('User.login');
	}
	public function creatUser(){
		$array = array(
			'name' =>'admin',
			'email' =>'pholyquocsu@pholyquocsu.com',
                'password' => Hash::make('pholyquocsu@123')
		);
		DB::table('users')->insert($array);
		echo "success";
	}
}

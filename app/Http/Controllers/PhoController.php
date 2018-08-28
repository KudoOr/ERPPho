<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class PhoController extends Controller
{
	public function pho(){
		return view('Pho.list');
	}
	public function quanly (){
		return view('Pho.quanly');
	}
}

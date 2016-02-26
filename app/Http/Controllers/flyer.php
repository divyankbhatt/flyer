<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class flyer extends Controller {

	public function index(){
		return view('layout');
	}
public function home(){


	return view('flyer.home');

}
}

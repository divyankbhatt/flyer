<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class testcontroller extends Controller {

	public function test(){
$name='Divyank bhatt';
		$myarray=['divyank','pritesh','jagruti'];

		return view('testview/test')->with('name',$name)->with('myarray',$myarray);

	}

}

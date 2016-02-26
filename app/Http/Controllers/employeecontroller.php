<?php namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\employee;
use App\company;
use App\Http\Requests\createEmployeeRequest;
use Intervention\Image\Facades\Image;

class employeecontroller extends Controller
{

	public function index()
	{
		$employee = employee::latest()->get();
		return view('employee.empinfoview')->with('employee', $employee);


	}

	public function show($id)
	{
		$employee = employee::find($id);
		return view('employee.showdetailview')->with('empdetails', $employee);

	}

public function create(){

	return view('employee.createview');
}
	public function store(createEmployeeRequest $request)
	{

		$input=$request->all();
		$employee=new employee();

		//dd($employee::find(4)->created_at->addDays(8)->diffForHumans());

		$employee->e_name=$input['e_name'];
		$employee->salary=$input['salary'];
		$employee->save();
\Session::flash('flash_message',"data inserted successfully");

	return redirect('employee');


	}
	public function getByCompany($id){

$art=company::with('employee')->find($id)->toArray();

		return view('employee.bycompany')->with('art',$art);



	}
	public function get($id){
		return company::locatedAt($id);
	}

	public function multiUpload(){
return view('files.fileuploadview');

	}
	public function multiUploadimage(Request $request){

		$file=$request->file('file');
		$name=time().$file->getClientOriginalName();

       $file->move("files/images",$name);

		// code for creating thumbnail
		$th='files/images/th'.$name;
		$path='files/images/'.$name;

		Image::make($path)->fit('200')->save($th);

		return "done";

	}
	public function photoGallary(){

		return view('photo.photogallaryview');
	}
	public function photoSwipe(){

		return view('photo.photoswipeview');
	}

}

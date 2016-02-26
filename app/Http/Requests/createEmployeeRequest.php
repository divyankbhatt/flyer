<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class createEmployeeRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'e_name'=>'required|min:2|unique:employees',// unique:employee, fieldname (if fieldname is different)
			'salary'=>'required',
			'published_at'=>'numericarray'//'required|date'
//date|after:tomorrow

		];
	}

}

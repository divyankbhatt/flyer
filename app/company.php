<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model {

	public function employee(){

		return $this->hasMany('App\employee');
	}
	public function scopeLocatedAt($query,$id){
		return $query->find($id) ;
	}

}

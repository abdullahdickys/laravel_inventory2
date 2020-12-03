<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
	protected $table = 'suppliers';
	protected $guarded = [];
	// protected $primaryKey = 'id supplier';

	public function product(){
		return $this->hasMany('App\product','supplier_id','id');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{	
	// protected $primaryKey = 'id product';  
    protected $table = 'products';
	protected $guarded = [];

	public function supplier() {
		return $this->belongsTo('App\supplier','supplier_id','id');
	}
}

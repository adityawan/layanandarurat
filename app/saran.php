<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saran extends Model
{
    protected $table = 'saran';
    protected $guarded = ['id'];

    public function pengguna(){
		return $this->belongsTo(pengguna::class);
	}
}

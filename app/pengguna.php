<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['pengguna_id','saran_id'];
    protected $guarded = ['id'];

    public function saran(){
		return $this->hasMany(saran::class);
	}
}

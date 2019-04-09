<?php

namespace App;

use Storage;
use Illuminate\Database\Eloquent\Model;

class FormRecruit extends Model
{
    protected $table = 'form_recruit';
    protected $guarded = ['id'];
    protected $appeds = ['avatar'];

    public function studyRecruit()
    {
    	return $this->hasOne('App\StudyRecruit', 'name_id');
    }

	public function files()
	{
		return $this->hasMany('App\Files', 'name_id');
	}
}

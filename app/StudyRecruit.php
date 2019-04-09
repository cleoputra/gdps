<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyRecruit extends Model
{
    protected $table = 'study_recruits';
    protected $fillable = ['name_id', 'pendidikan', 'jurusan'];
    public $incrementing = false;

    public function user()
    {
    	return $this->belongsTo('App\FormRecruit');
    }
}

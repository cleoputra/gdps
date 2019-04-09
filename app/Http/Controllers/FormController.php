<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormsRequest;
use App\FormRecruit;
use App\StudyRecruit;
use App\Files;
use Storage;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Auth\AuthManager;

class FormController extends Controller
{
    public function form(){
    	return view('form');
    }

    public function submit(FormsRequest $request){

    	$formRecruit = FormRecruit::create([
    	 'name' => $request->input('name'),
    	 'nationality' => $request->input('nationality'),
    	 'born_date' => $request->input('born_date'),
    	 'nik' => $request->input('nik'),
    	 'email' => $request->input('email'),
    	 'phone' => $request->input('phone'),
    	 'address' => $request->input('address'),
    	]);
    	
        $formRecruit->studyRecruit()->create([
         'pendidikan' => $request->input('pendidikan'),
         'jurusan' => $request->input('jurusan'),
        ]);

        $id = FormRecruit::max('id');

    	$files = [
    		'cv',
    		'ktp',
    	];

    	foreach ($files as $fileItems) {
    		$uploadedFile = $request->file($fileItems);
    		$path = $uploadedFile->store('public/files');
    		
    		$formRecruit->files()->create([
    		'title' => $uploadedFile->getClientOriginalName(),
			'filename' => $path
    		]);
    	}

            return back()->with('success', 'Berhasil submit!'); 
    }
}

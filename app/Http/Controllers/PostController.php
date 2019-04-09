<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormRequest;
use App\Files;
use App\StudyRecruit;
use DB;
use Storage;
use Illuminate\Http\RedirectResponse;
use App\FormRecruit;
use Carbon\Carbon;
use App\Http\Requests\FileRequest;

class PostController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$formRecruit = FormRecruit::all();
    	return view('adminPage.dashboard', [
    		'formRecruit' => $formRecruit,
    	]);
    }

    public function detail(FormRecruit $formRecruit)
    {
    	$files = Files::ofFormRecruit($formRecruit)->orderBy('title', 'ASC')->paginate(30);

    	return view('adminPage.detail', [
    		'formRecruit' => $formRecruit,
    		'files' => $files,
    	]);
    }

    public function delete(FormRecruit $formRecruit)
    {
    	$formRecruit->delete();
    	return redirect()->route('admin.dash');
    }
        /**
     * Download file directly.
     *
     * @param File $file
     * @return void
     */

    public function download(Files $file, FileRequest $request)
    {
    	return Storage::download($file->filename, $file->title);
    }
}

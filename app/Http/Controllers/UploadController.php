<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
	public function getIndex() {
		return view('general.upload');
	}

	public function postUpload(Request $request) {
		ini_set('memory_limit', '-1');
		ini_set('upload_max_filesize', '799M');
		ini_set('post_max_size', '800M');
		ini_set('max_file_uploads', '1');

		$request->file('uploadFile')->storeAs('uploads', now()->timestamp.'-'.$request->file('uploadFile')->getClientOriginalName());

		return view('general.upload')->with('uploaded', true);
	}
}

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
		$request->file('uploadFile')->storeAs('uploads', now()->timestamp.'-'.$request->file('uploadFile')->getClientOriginalName());

		return view('general.upload')->with('uploaded', true);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function getIndex() {
		return redirect()->route('get-masthead');
	}

	public function getMasthead() {
		return view('general.masthead');
	}

	public function getPrivacy() {
		return view('general.privacy');
	}
}

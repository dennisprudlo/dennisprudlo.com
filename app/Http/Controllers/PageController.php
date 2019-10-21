<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function getIndex() {
		return view('index');
	}

	public function getMasthead() {
		return view('general.masthead');
	}

	public function getPrivacy() {
		return view('general.privacy');
	}
}

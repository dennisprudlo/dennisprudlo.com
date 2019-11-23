<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{
	public function getIndex() {
		$portfolio = [
			'HTW Mate' => (object) [
				'appIconUrl'	=> url('/images/projects/htwmate/icon.png'),
				'imageUrls'		=> [
					url('/images/projects/htwmate/preview1.png'),
					url('/images/projects/htwmate/preview2.png'),
					url('/images/projects/htwmate/preview3.png')
				],
				'description'	=> 'HTW Mate is a simple app for the university I\'m studying at. You can find articles and events, view the cafeteria\'s menu, view your grades and much more.'
			]
		];

		$images = [
			'https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/64887803_514027852470265_8776174369259711903_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=101&oh=862eca592f74308311ac736a71028940&oe=5E67DFE1' => Carbon::create(2019,  6, 30, 13, 24, 55, 'Europe/Berlin'),
			'https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/64531051_2336896319858748_1414173876376209719_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=100&oh=8b7c33584a7d44b6389dbc92a78694c3&oe=5E859ADD' => Carbon::create(2019,  6, 23, 19, 12, 55, 'Europe/Berlin'),
			'https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/53034702_331999484000364_4198757688388099132_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=100&oh=29aa501e392cde66436c365368413635&oe=5E815A33' => Carbon::create(2019,  3, 23, 18, 59, 04, 'Europe/Berlin'),
			'https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/e35/53539954_1129142043913522_1585111614850325282_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=110&oh=8d1952a0875dd246138677b0b44ca06d&oe=5E73FD42' => Carbon::create(2019,  3, 10, 19, 05, 48, 'Europe/Berlin'),
			'https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/40547060_2096578727258063_3543945352431595695_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=111&oh=97f8059f787d7ab19fe96316d83feaab&oe=5E701CA7' => Carbon::create(2018,  9,  9, 19, 05, 48, 'Europe/Berlin'),
		];

		return view('index')
			->withPortfolio($portfolio)
			->withImages($images);
	}

	public function getMasthead() {
		return view('general.masthead');
	}

	public function getPrivacy() {
		return view('general.privacy');
	}
}

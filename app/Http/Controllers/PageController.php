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
			'https://scontent-ber1-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/64887803_514027852470265_8776174369259711903_n.jpg?_nc_ht=scontent-ber1-1.cdninstagram.com&_nc_cat=101&_nc_ohc=KkJDj1-XNLsAX-PShb4&oh=76c5347e4375deb8602aff928fd23ed5&oe=5EDC7E2A' => Carbon::create(2019,  6, 30, 13, 24, 55, 'Europe/Berlin'),
			'https://scontent-ber1-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/64531051_2336896319858748_1414173876376209719_n.jpg?_nc_ht=scontent-ber1-1.cdninstagram.com&_nc_cat=100&_nc_ohc=CxfQHbiLljMAX8Yowpn&oh=8324083e4816635c56a9d2edbd38450a&oe=5EDAE167' => Carbon::create(2019,  6, 23, 19, 12, 55, 'Europe/Berlin'),
			'https://scontent-ber1-1.cdninstagram.com/v/t51.2885-15/e35/53034702_331999484000364_4198757688388099132_n.jpg?_nc_ht=scontent-ber1-1.cdninstagram.com&_nc_cat=100&_nc_ohc=wIw99S4-KzQAX98MQbD&oh=d82a71cc50a1ed2a30828b9e68a52d64&oe=5EDAE9AA' => Carbon::create(2019,  3, 23, 18, 59, 04, 'Europe/Berlin'),
			'https://scontent-ber1-1.cdninstagram.com/v/t51.2885-15/e35/53539954_1129142043913522_1585111614850325282_n.jpg?_nc_ht=scontent-ber1-1.cdninstagram.com&_nc_cat=110&_nc_ohc=zKiG4gs0AHMAX8rrS-U&oh=dd74627c783f8c84ea680469f1fb70a6&oe=5ED9953E' => Carbon::create(2019,  3, 10, 19, 05, 48, 'Europe/Berlin'),
			'https://scontent-ber1-1.cdninstagram.com/v/t51.2885-15/e35/40547060_2096578727258063_3543945352431595695_n.jpg?_nc_ht=scontent-ber1-1.cdninstagram.com&_nc_cat=111&_nc_ohc=sGwjjtkBvWUAX8jIwb4&oh=c7541dc612fd5d12642d386c22c3e7dc&oe=5EDCE6E3' => Carbon::create(2018,  9,  9, 19, 05, 48, 'Europe/Berlin'),
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

<?php

namespace App\Http\Controllers;

class PostsController extends Controller {

	public function welcome() {

		return view('/welcome');
	}

	public function contact() {

		return view('/contact');
	}

	public function portfolio() {
		return view('/portfolio');
	}

	public function about() {

		return view('/about');
	}

	public function ghetto() {

		return view('/ghetto');
	}
}

<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

	public function getIndex() {
		$posts =  Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
		# process variable data or params
		# talk to the model
		# recieve from the model
		# compile or process the data from the model if needed
		# pass that data to the correct view

	}

	public function getAbout() {
		$first = 'Alin';
		$last = 'Niculescu';

		$fullname = $first . " " . $last;
		$email = 'alin.niculescu@yahoo.com';
		$data =[];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
		

	}

	public function getContact() {
		return view('pages.contact');
	}

}
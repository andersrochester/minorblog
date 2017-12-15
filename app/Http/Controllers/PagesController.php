<?php
// Varfor anvanda punkt ist for slash
	namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;

	use App\Http\Requests;
	use App\Post;
	use Session;

	class PagesController extends Controller {
			public function getIndex() {
					$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
					return view('pages.welcome')->withPosts($posts);
			}

			public function getAbout() {
					$first = 'Anders';
					$last = 'Rochester';
					$full = $first . " " . $last;

					$email = 'anders@rochester.se';
					$data =[];
					$data['fullname'] = $full;
					$data['email'] = $email;
					return view('pages.about')->with('data',$data);
			}

			public function getContact() {
					return view('pages.contact');
			}

			public function getEnterpost() {
					return view('pages.enterpost');
			}

			public function getListofposts() {
					return view('pages.listofposts');
			}
	}
				

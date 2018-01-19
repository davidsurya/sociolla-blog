<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Tag;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	private $post_model;
	private $tag_model;

	function __construct($foo = null)
	{
		$this->post_model = new Post;

		$this->tag_model = new Tag;
	}

	public function getDashboardHome()
	{
		$my_post = $this->post_model->get_my_post();

		return view('dashboard.home', [
			'my_post_total' => $my_post->count()
		]);
	}

	public function getNewBlog()
	{
		$all_tag = Tag::pluck('tag_name');


		return view('dashboard.new_post', ['tags' => $all_tag]);
	}

	public function postNewBlog(Request $request)
	{
		$tags = $request->get('tags');

		if (count($tags) > 0) {
			foreach ($tags as $tag) {
				$this->tag_model->sync_tag($tag);
			}
		}

		\Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required'
        ]);

		$data['title'] = $request->get('title');
		$data['body']  = $request->get('body');
		$data['tags'] = $request->get('tags');

		$success = $this->post_model->create_new_post($data);

		return $success ? redirect('dashboard') : redirect()->back();
	}
}
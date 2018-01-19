<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	private $post_model;

	function __construct()
	{
		$this->post_model = new Post;
	}

    public function getHomeBlog()
    {
    	$all_post = Post::all();

    	$archive_date = $this->post_model->get_archive_date();

        return view('content.partials.content_post', [
        	'posts' => $all_post,
        	'archive_date' => $archive_date
        ]);
    }

    public function getPostByTag($tag_name)
    {
    	$post_by_tag = $this->post_model->get_post_by_tag($tag_name);

    	$archive_date = $this->post_model->get_archive_date();

    	return view('content.partials.content_post', [
    		'posts' => $post_by_tag,
    		'archive_date' => $archive_date
    	]);
    }

    public function getPostByArchiveDate($date)
    {
    	$month = date('m', strtotime($date));
    	$year = date('Y', strtotime($date));

    	$post_by_archive = $this->post_model->get_post_by_archive($month, $year);

    	$archive_date = $this->post_model->get_archive_date();

    	return view('content.partials.content_post', [
    		'posts' => $post_by_archive,
    		'archive_date' => $archive_date
    	]);
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table 		= 'tbl_post';
	protected $primaryKey 	= 'id_post';
	protected $fillable 	= ['id', 'id_user', 'tags', 'title', 'body'];

	public function get_my_post()
	{
		return \Auth::user()->post()->get();
	}

	public function create_new_post($data = array())
	{
		$data['tags'] = isset($data['tags']) ? json_encode($data['tags']) : '';

		return \Auth::user()->post()->create($data);
	}

	public function get_archive_date()
	{
		return $this->selectRaw('DATE_FORMAT(created_at, "%Y-%m") AS date_number, DATE_FORMAT(created_at, "%M %Y") AS date_name')->groupBy('date_number','date_name')->get();
	}

	public function get_post_by_tag($tag_name = '')
	{
		return $this->where('tags', 'LIKE', '%'.$tag_name.'%')->get();
	}

	public function get_post_by_archive($month, $year)
	{
		return $this->whereMonth('created_at', $month)->whereYear('created_at', $year)->get();
	}

	public function user()
	{
		return $this->belongsTo('App\User', 'id_user', 'id');
	}
}
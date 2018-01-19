<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table 		= 'tbl_tag';
	protected $primaryKey 	= 'id_tag';
	protected $fillable 	= ['id_tag', 'tag_name'];

	public function sync_tag($tag = '')
	{
		$is_exist_tag = $this->where('tag_name', $tag)->get();

		return $is_exist_tag->count() > 0 ? false : $this->create(['tag_name' => $tag]);
	}
}
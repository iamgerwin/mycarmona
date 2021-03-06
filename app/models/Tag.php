<?php

class Tag extends \Eloquent {
	protected $table = 'tags';
	public $timestamps = false;
	protected $fillable = ['name'];

	public function articles()
	{
		return $this->belongsToMany('Article','article_tag','tag_id','article_id');
	}
}
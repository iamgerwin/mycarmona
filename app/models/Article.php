<?php

class Article extends \Eloquent {
	protected $table = 'articles';
	protected $fillable = ['title','content','created_at'];

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}
}
<?php

class Cctv extends \Eloquent {
	protected $table = 'cctvs';
	protected $fillable = ['name','description','link','location','active'];
	public $timestamps = false;
}
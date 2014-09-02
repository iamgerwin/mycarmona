<?php

class DashboardController extends \BaseController {

	public function dashboardPage()
	{

	}

	public function cctvsPage()
	{

	}

	public function articlesPage()
	{

	}

	public function cctvPage($id)
	{

	}

	public function articlePage($id)
	{

	}

	public function newArticlePage()
	{

	}

	public function newCctvPage()
	{
		return View::make('dashboard.cctv.new');
	}

}
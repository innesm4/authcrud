<?php

class SearchController extends BaseController {

	public function index()
	{

        return View::make('search.index')
            ->with('title', 'Search');
	}
}
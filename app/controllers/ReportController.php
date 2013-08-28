<?php

class ReportController extends BaseController {

	public function index()
	{

        return View::make('Reports.index')
            ->with('title', 'Reports');
	}
}
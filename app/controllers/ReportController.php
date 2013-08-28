<?php

class ReportController extends PluginsController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{
        return View::make('reports.index')
            ->with('title', 'Reports - List of reports');
	}
	/**
	 * Display all plugins sorted by name
	 *
	 * @return Response
	 */
	public function all()
	{
	    $plugins = Plugin::where('id','>=',1) ->orderBy('name')->paginate(10, array('name'));

        return View::make('reports.all')
            ->with('title', 'Reports - List of all plugins')
            ->with('plugins', $plugins);
	}
	/**
	 * Display all plugins sorted by name
	 *
	 * @return Response
	 */
	public function developers()
	{
	    $plugins = Plugin::where('id','>=',1) ->orderBy('developer')->paginate(10, array('developer'));

        return View::make('reports.developers')
            ->with('title', 'Reports - List of all Developers')
            ->with('plugins', $plugins);
	}
}
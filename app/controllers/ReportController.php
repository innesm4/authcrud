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
	    $dev = Plugin::where('id','>=',1)->orderBy('developer')->paginate(10, array('developer'));

	    $plugins = DB::table('plugins')->select('developer')->orderBy('developer')->get();	

        return View::make('reports.developers')
            ->with('title', 'Reports - List of all Developers')
            ->with('plugins', $plugins);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function search()
	{
        return View::make('reports.search')
            ->with('title', 'Search - Enter your query');
	}

	 public function results()
	{
	    $name = Input::get('name');
	    $plugins = DB::table('plugins')->select('name')->where('name', 'LIKE', '%'.$name.'%')->get();
	   	
	   	/*
	    $plugins = DB::table('plugins')->select('developer')->orderBy('developer')->get();	
	    */
	    return View::make('reports.results')
	        ->with('title', 'Search - Results')
	        ->with('plugins', $name)
	        ->with('plugins', $plugins);
	}
	/*
	public function search() {
		
		$results['plugins'] = SphinxSearch::search('Bjorn Borresen', 'pluginindex')->get();

		$data['plugins'] = $results;    
		
		return View::make('reports.search')
			->with('title', 'Reports - Search of all Developers')
			->with('plugins', $results);
	}
	
	public function search()
    {
        if(Input::get('id'))
        {
           return Redirect::action('ReportsController@search', array(Input::get('id')));
        }
        else 
        {
        $plugins = $this->id->all();
        return View::make('plugins.results', compact('plugins'));
        }
    }
    */
}
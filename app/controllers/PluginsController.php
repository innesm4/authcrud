<?php

class PluginsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    $plugins = Plugin::where('id','>=',1)->paginate(5);

        return View::make('plugins.index')
            ->with('title', 'Plugins - List')
            ->with('plugins', $plugins);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('plugins.create')
            ->with('title', 'Plugins - Add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$plugin = new Plugin;
        $plugin->add();

        if($plugin){
            return Redirect::route('plugins.index')
                ->with('title', 'Plugins - List')
                ->with('success', 'Plugin is Inserted Successfully');  
        }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$plugin = Plugin::find($id);

        return View::make('plugins.show')
            ->with('title', 'Plugins - View')
            ->with('plugin', $plugin);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		 $plugin = Plugin::find($id);

        return View::make('plugins.edit')
            ->with('title', 'Plugins - Edit')
            ->with('plugin', $plugin);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$plugin = new Plugin;
        $plugin->edit($id);

        if($plugin){
            return Redirect::route('plugins.index')
                ->with('title', 'Plugins - List')
                ->with('success', 'Plugin is Updated Successfully');  
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$plugin = new Plugin;
        $plugin->del($id);

        if($plugin){
            return Redirect::route('plugins.index')
                ->with('title', 'Plugins - List')
                ->with('success', 'Plugin is Deleted Successfully');  
        }
	}

}

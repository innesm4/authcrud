<?php

class Plugin extends Eloquent {
	protected $guarded = array();
	protected $table = 'plugins';

	public static $rules = array();

	public function add(){

        $plugin = new Plugin;
        $plugin->name = Input::get('name');
        $plugin->url = Input::get('url');
        $plugin->price = Input::get('price');
        $plugin->description = Input::get('description');
        $plugin->developer = Input::get('developer');
        $plugin->type = Input::get('type');
        $plugin->latestversion = Input::get('latestversion');
        $plugin->documentationurl = Input::get('documentationurl');
        $plugin->changelogurl = Input::get('changelogurl');
        $plugin->created_at = date('Y-m-d H:i:s');
        $plugin->save();
    }

    public function edit($id){

        $plugin = Plugin::find($id);
		$plugin->name = Input::get('name');
        $plugin->url = Input::get('url');
        $plugin->price = Input::get('price');
        $plugin->description = Input::get('description');
        $plugin->developer = Input::get('developer');
        $plugin->type = Input::get('type');
        $plugin->latestversion = Input::get('latestversion');
        $plugin->documentationurl = Input::get('documentationurl');
        $plugin->changelogurl = Input::get('changelogurl');
        $plugin->updated_at = date('Y-m-d H:i:s');
        $plugin->save();
    }

    public function del($id){
        
        $plugin = Plugin::find($id);
        $plugin->delete();
    }

    public function developer()
    {
        return $this->hasOne('Developer','developer_id');
    }


}
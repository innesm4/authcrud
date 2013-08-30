<?php

class Developer extends Eloquent {
	
	public function plugin()
    {
        return $this->belongsToMany('Plugin');
    }

}
<?php

class Project extends Eloquent {

	protected $table = 'products'; // the name of the table in the database

    public $timestamps = false; // ignore this


    // add any queries that you would reuse here in this EXACT format


    // make sure to use the 'scope' prefix here, but not when you call it


    // see product controller for example on calling these

    public function scopeProductsOver1000($query)
    {
        $query->where("price",">","1000");
    }
    public function scopeProductsOver($query, $minumum)
    {
        $query->where("price",">",$minumum);
    }

}

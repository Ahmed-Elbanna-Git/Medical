<?php
namespace App\Helper;

use Schema;
trait SearchTrait{

    public function scopeSearch($query){
    	/*
			check if user select specific columns to search in 
    	*/
        if (request()->has('search_query') && !empty(request()->search_query) && request()->has('search_columns') && !empty(request()->search_columns) ) {
        	$query = $this->getQuery($query , request()->search_columns , request()->search_query );
        }else{
        	if (request()->has('search_query') && !empty(request()->search_query)) {
        		$query = $this->getQuery($query , $this->fillable , request()->search_query );
        	}
        }

      
        
      
      
        
        return $query;
    }

    private function getQuery($query , $searchFields = [] , $searchValue = ''){
    	foreach($searchFields as $searchColumn){
            if (is_array($searchValue)) {
                $query = $query->orWhereIn($searchColumn,$searchValue);
            }else{
                $query = $query->orWhere($searchColumn,'LIKE','%'.$searchValue.'%');
            }
        }
        return $query;
    }
}
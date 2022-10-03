<?php
namespace App\Validation;

class CustomRules{

  // Rule is to validate mobile number digits
	public function arrayEmpty(array $data) : bool
	{
		foreach($data as $key){
        	if($key == null || $key ==false){
            	return FALSE;
        	}
        }
    	return TRUE;
	}

	public function checkNumber(array $data) : bool
	{

			if(array_reduce($data, function($c, $v){return $c & (int)is_numeric($v);}, 1)){
				return true;
			}
	    return false;

	}
}
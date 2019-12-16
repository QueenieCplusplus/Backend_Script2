<?php

// below functions shall encapsulated in Class.

$response = array();    

//Response
function setResponse($key, $value) {

    $this->response[$key] = $value;
        
}

//Success Response
function successResponse($response_code = null) {
    
    //Set Success Status
	$this->response['return_code'] = 1;
	$this->response['return_value'] = 'ok';

	//Response Code  Success
	if (!is_null($response_code))
	    $this->response['error_code'] = $response_code;

	die(json_encode($this->response));
}
    
//Error Response
function errorResponse($response_msg = '', $response_code = null) {

	//Error Status
	$this->response['return_code'] = 0;

	//Error Code
	if (!is_null($response_code))
			$this->response['error_code'] = $response_code;

	//Response Message
	if ($response_msg !== '')
		$this->response['return_value'] = $response_msg;

    die(json_encode($this->_response));
    
}


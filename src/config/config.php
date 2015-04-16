<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Your Salesforce credentials
    |--------------------------------------------------------------------------
    |
    |
    */

    // production
    'username'    => env('SALESFORCE_USER', ''),
	'password' => env('SALESFORCE_PASSWORD', ''),
	'token' => env('SALESFORCE_TOKEN', ''),
    'wsdl' => app_path() . '/wsdl/enterprise.wsdl.xml',


//    sandbox
//	  'username'    => env('SALESFORCE_USER', ''),
//	  'password' => env('SALESFORCE_PASSWORD', ''),
//	  'token' => env('SALESFORCE_TOKEN', ''),
//    'wsdl' => app_path() . '/wsdl/enterprise.sandbox.wsdl.xml',
];;

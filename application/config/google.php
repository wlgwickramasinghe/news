<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '7966993108-buua3jk6vgclin1m9d7419dls2fuhhve.apps.googleusercontent.com';
$config['google']['client_secret']    = 'KCvAUrp0UynV8iAXcd8mnHxH';
$config['google']['redirect_uri']     = 'http://127.0.0.1/DSMS/index.php/web/';
$config['google']['application_name'] = 'Login to News Web';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();
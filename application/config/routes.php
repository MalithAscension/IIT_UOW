<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'welcome';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['default_controller'] = 'UserAuthController';
$route['register']['post'] = 'UserAuthController/register';
$route['login'] = 'UserAuthController/login';
$route['chackAuth']['post'] = 'UserAuthController/chackAuth';

$route['about_us'] = 'HomeController/about_us';
$route['my_profile'] = 'HomeController/my_profile';
$route['my_questions'] = 'HomeController/my_questions';
$route['update_myprofile']['post'] = 'HomeController/update_myprofile';

$route['home'] = 'HomeController/home';
$route['add_question']['post'] = 'HomeController/add_question';
$route['question_answers'] = 'HomeController/question_answers';
$route['add_answers'] = 'HomeController/add_answers';
$route['add_new_tag']['post'] = 'HomeController/add_new_tag';


$route['update_question']['post'] = 'HomeController/update_question';
$route['update_answer']['post'] = 'HomeController/update_answer';

// $route['home'] = 'home';
// $route['default_controller'] = 'UserAuthController/signup';
// $route['default_controller'] = 'UserAuthController/home';



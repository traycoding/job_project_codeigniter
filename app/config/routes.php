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
|   example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|   http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|   $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|   $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|   $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|       my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['users'] = 'auth/users';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['pos/(:num)'] = 'pos/index/$1';
$route['users/add'] = 'auth/create_user';
$route['logout/(:any)'] = 'auth/logout/$1';
$route['users/profile/(:num)'] = 'auth/profile/$1';


// Frontend routes
$route['frontend']               = 'main';
$route['sign_in']        		 = 'main/sign_in';
$route['sign_up']       		 = 'main/sign_up';
$route['about']       		 	 = 'main/about';
$route['services']       		 = 'main/services';
$route['pricing']       		 = 'main/pricing';
$route['career']       		 	 = 'main/career';
$route['advertising']       	 = 'main/advertising';
$route['contact_us']       		 = 'main/contact_us';
$route['blog']       		 	 = 'main/blog';
$route['blog_detail']       	 = 'main/blog_detail';
$route['post_a_job']       		 = 'main/post_a_job';
$route['faq']       		 	 = 'main/faqs';
$route['terms_and_conditions']   = 'main/terms_and_conditions';
$route['home']     				 = 'main/index';    




$route['browse_categories']       		 	     = 'main/browse_categories';
$route['browse_locations']       		 	     = 'main/browse_locations';
$route['coming_soon']       		 	         = 'main/coming_soon';
$route['job_grid']       		 	             = 'main/job_grid';
$route['job_listing']       		 	         = 'main/job_listing';
$route['job_detail']       		 	             = 'main/job_detail';
$route['job_listing_map']       		 	     = 'main/job_listing_map';


$route['employer_grid']       		 	         = 'main/employer_grid';
$route['employer_listing']       		 	     = 'main/employer_listing';
$route['employer_detail']       		 	     = 'main/employer_detail';
$route['employer_listing_map']       		 	 = 'main/employer_listing_map';
$route['employer']       		 	             = 'main/dashboard_employer';
$route['employer/my_profile']       		 	 = 'main/employer_profile';
$route['employer/change_password']        		 = 'main/change_password';
$route['employer/manage_candidates']       		 = 'main/employer_manage_candidates';
$route['employer/post_new_job']       		 	 = 'main/employer_post_new_job';
$route['employer/pricing']       		 	     = 'main/employer_pricing';
$route['employer/manage_jobs/(:any)']	 		 = 'main/employer_manage_jobs/$1';
$route['getEmployer']							 = 'main/getEmployer';
$route['employer_update/(:any)']				 = 'main/update_profile/$1';

$route['candidate_grid']       		 	         = 'main/candidate_grid';
$route['candidates_listing']       		 	     = 'main/candidates_listing';
$route['candidate_detail']       		 	     = 'main/candidate_detail';
$route['candidate_listing_map']       		 	 = 'main/candidate_listing_map';
$route['candidates/dashboard']                   = 'main/dashboard_candidate/';
$route['candidates/my_profile']       		 	 = 'main/candidate_profile';
$route['candidates/change_password']       		 = 'main/change_password';
$route['candidates/my_resume']       		 	 = 'main/candidate_my_resume';
$route['candidates/manage_jobs']       		 	 = 'main/candidate_manage_jobs';
$route['candidates/saved_jobs/(:any)']       	 = 'main/candidate_saved_jobs/$1';
$route['candidates/pricing']       		 	     = 'main/candidate_pricing';
$route['getCandidates']							 = 'main/getCandidates';
$route['edit_candidate/(:any)']					 = 'main/edit_candidate/$1';


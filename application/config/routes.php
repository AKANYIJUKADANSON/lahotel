<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'WebsiteController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/**
 * ----------------------------------------------------------------
 * ------------------------- ROOMS --------------------------------
 * ----------------------------------------------------------------
 */
$route['rooms'] = "WebsiteController/rooms";
$route['rooms/(:any)'] = "WebsiteController/single_room/$1";

/**
 * ----------------------------------------------------------------
 * ------------------------- BOOKING ------------------------------
 * ----------------------------------------------------------------
 */
$route['booking/(:any)'] = "WebsiteController/booking/$1";
$route['book'] = "WebsiteController/book";
$route['checkout'] = "WebsiteController/checkout";

/**
 * ----------------------------------------------------------------
 * ------------------------- CONTACTS -----------------------------
 * ----------------------------------------------------------------
 */
$route['contacts'] = "WebsiteController/contacts";
$route['subscribe'] = "WebsiteController/sendYimail";

/**
 * ----------------------------------------------------------------
 * ------------------------- EMAILING -------------------------
 * ----------------------------------------------------------------
 */

$route['yimail'] = "WebsiteController/yimail";
$route['sendmail'] = "WebsiteController/send_mail";


/**
 * ----------------------------------------------------------------
 * ------------------------- BLOG -------------------------
 * ----------------------------------------------------------------
 */
$route['blog'] = "WebsiteController/blog";
$route['posts/(:any)'] = "WebsiteController/single_post/$1";

/**
 * ----------------------------------------------------------------
 * ------------------------- MENU -------------------------
 * ----------------------------------------------------------------
 */
 $route['menu'] = "WebsiteController/menu";
 $route['menu/(:any)'] = "WebsiteController/menu_item/$1";

 /**
 * ----------------------------------------------------------------
 * ----------------------- GALLERY -------------------------
 * ----------------------------------------------------------------
 */
 $route['gallery'] = "WebsiteController/gallery";


 /**
 * *************************************************************************************
          		
                _____________		 ____	      _____		         _________	
		       / __________  \		|     \	     /	   |		   /  _______  \	
		      /	/	        \  \	|      \    /	   | 	      /  /	      \  \	
		     |  |	          \		|    	\  /	   |	     |	|
		     |	|			        |    |\  \/  /|	   |	     |  |		
		     |	|			        |    | \    / |	   |	      \  \_________	
		     |	|			        |    |	\  /  |	   |		   \_________  \	
		     |	|			        |    |	 \/   |	   |		         	  \  \	
		     |	|	        /		|    |        |	   |	      | |          | |	
		     \  \__________/  /		|    |	      |	   |	      \	\_________/  /	
		      \_____________ /		|____|	      |____|	       \____________/	        
  

 * *************************************************************************************
 */

/**
 * ----------------------------------------------------------------
 * ------------------------- ADMIN -------------------------------
 * ----------------------------------------------------------------
 */

/**
 * @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 
 * ------ AUTHENTICATION --------
 * @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
 */
$route['admin'] = "AuthController/index";
$route['admin/auth'] = "AuthController/login";
// $route['admin/logout'] = "AuthController/logout";
// $route['admin/forgot'] = "AuthController/forgot_password";
// $route['admin/reset'] = "AuthController/reset_password";

// -------------- Signing  Up ----------------
$route['admin/create'] = "AuthController/signup";
$route['admin/signup'] = "AuthController/register";

/**
 * @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 
 * ------- ADMIN PAGES ----------
 * @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
 */ 
$route['admin/dashboard'] = "AdminController/dashboard";
$route['admin/booking'] = "BookingController/index";
$route['admin/rooms'] = "BookingController/rooms";



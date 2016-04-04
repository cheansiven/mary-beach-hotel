<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller']                            = 'main';
$route['404_override']                                  = 'main/error404';
$route['404']                                 			= 'main/page404';
$route['translate_uri_dashes']                          = FALSE;

/*
 * Page
 */
$route['rooms-and-suites-otres.html']          			= 'main/sleepPage';
$route['rooms-and-suites-otres/junior-suite.html']      = 'main/singleRoomPage';
$route['sport-activities-otres-resort.html']        	= 'main/movePage';
$route['social-activities-otres-beach.html']          	= 'main/socialPage';
$route['otres-beach-cambodia.html']          			= 'main/otresPage';
$route['luxury-hotel-on-the-beach-otres.html']          = 'main/beachPage';
$route['spa-and-massage-otres-beach.html']             	= 'main/spaPage';
$route['contact-the-hotel-directly.html']               = 'main/contactPage';
$route['contact-the-hotel-directly/submitted.html']     = 'main/submitted';
$route['luxury-hotel-on-the-beach-otres.html']          = 'main/luxury_hotel';


/*
 * Restaurant page
 */
$route['restaurant-on-the-beach-cambodia.html']    		= 'main/eatPage';
$route['restaurant-room-service.html']    				= 'main/RestaurantRoomService';
$route['beach-restaurant.html']    						= 'main/beachRestaurant';
$route['coffee-shop.html']    							= 'main/coffeeShop';
$route['sushi-restaurant.html']    						= 'main/sushiRestaurant';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
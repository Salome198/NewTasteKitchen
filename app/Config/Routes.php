<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News;
use App\Controllers\ReviewsController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

 $routes->get('news', [News::class, 'index']);    
 $routes->get('news/new', [News::class, 'new']); 
 $routes->post('news', [News::class, 'create']);   
 $routes->get('news/(:segment)', [News::class, 'show']); 

 $routes->get('review/create', [ReviewsController::class, 'create']); 
 $routes->post('review/create', [ReviewsController::class, 'create']); 
 $routes->get('review', [ReviewsController::class, 'submitReview']);
 $routes->get('review/getReviews',[ReviewsController:: class, 'getReviews']);

 
 $routes->get('pages', [Pages::class, 'index']);
 
 $routes->get('menu', [Pages::class, 'menupage']);
 $routes->get('(:segment)', [Pages::class, 'view']);

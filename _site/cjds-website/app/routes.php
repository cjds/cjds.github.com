<?php

Route::get('/', function()
{
	return View::make('homepage');
});

Route::get('/resume', function()
{
	return View::make('resume');
});

Route::get('/projects', function()
{
	return View::make('projects');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('sotd', function()
{
	return View::make('sotd.home');
});


Route::get('sotd/{name}', function($name)
{
   if (View::exists('sotd.'.$name)){
    	return View::make('sotd.'.$name);
	}
	else{
		return View::make('sotd.home');
	}
});
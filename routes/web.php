<?php

    // Dashboard
    Route::resource('/','DashboardController');

    // Clients
    Route::resource('clients','ClientsController');
    Route::get('/clients/data','ClientsController@data')->name('clients.data');
   
    //Registration
    Route::view('/registration','registration.create');

    // Rooms
    Route::resource('rooms','RoomController');

    // Bookings
    Route::resource('booking','BookingController');
    // Cancel Bookings
    Route::post('booking/{room_id}/{booking_id}','BookingController@cancel')->name('booking.cancel');

    // Canceled Bookings
    Route::get('bookings/canceled','BookingController@canceledBookings')->name('booking.canceled');

    // Sessions
    Route::get('/login','SessionsController@create')->name('login');
    Route::post('/login','SessionsController@store');
    Route::get('/logout','SessionsController@destroy');

    // User
    Route::get('/user','UserController@index');
    


    Route::get('/register', function(){
        return view('session.register');
    })->name('register');
	
	// Email related routes
	Route::get('mail/send', 'MailController@send');
	
	


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
//routes for the event controller
Route::get('event/add','EventController@createEvent');
Route::post('event/add','EventController@store');
Route::get('event','EventController@calendar');
//Contact Us Form
   Route::get('contact', 'PagesController@getContact');
   Route::post('contact', 'PagesController@postContact');



?>

	
<?php
/*
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
    Route::get('/user','UserController@index');*/
    


    Route::get('/register', function(){
        return view('session.register');
    })->name('register');
	
	// Email related routes
    Route::get('mail/send', 'MailController@send');
    

    //Route::view('/', 'welcome');
    Auth::routes();

    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::resource('/','DashboardController');
    Route::post('/login/writer', 'Auth\LoginController@writerLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/writer', 'Auth\RegisterController@createWriter');

    Route::view('/', 'DashboardController')->middleware('auth');
    Route::view('/dashboard', 'dashboard');
    Route::view('/writer', 'writer');

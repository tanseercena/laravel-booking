<?php

Route::get('booking/test', function () {
    return 'Test';
});

Route::get('booking/hello', function () {
    return Booking::hello();
});

Route::get('booking', 'Tanseer\Booking\Http\BookingController@index');

Route::get('booking/view', function () {
    return view('tanseer-booking::index');
});

Route::get('booking/config', function () {
    return config('tanseer-booking-main.hello') .
           config('tanseer-booking-main.world');
});

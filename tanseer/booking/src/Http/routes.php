<?php

Route::get('booking/test', function () {
    return 'Test';
});

Route::get('booking/hello', function () {
    return Booking::hello();
});

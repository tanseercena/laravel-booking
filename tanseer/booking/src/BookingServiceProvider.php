<?php
namespace Tanseer\Booking;

use Illuminate\Support\ServiceProvider;

class BookingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('tanseer-booking', function() {
            return new Booking;
        });
    }

    public function boot()
    {
        require __DIR__ . '/Http/routes.php';
    }
}

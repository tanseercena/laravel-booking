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

        $this->mergeConfigFrom(
            __DIR__ . '/config/main.php', 'tanseer-booking-main'
        );
    }

    public function boot()
    {
        require __DIR__ . '/Http/routes.php';
        $this->loadViewsFrom(__DIR__ . '/views', 'tanseer-booking');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/tanseer-booking'),
            __DIR__ . '/config' => config_path('tanseer-booking'),
        ]);
    }
}

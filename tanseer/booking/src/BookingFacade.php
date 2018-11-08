<?php
namespace Tanseer\Booking;

use Illuminate\Support\Facades\Facade;

class BookingFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'tanseer-booking';
    }
}

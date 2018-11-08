<?php
namespace Tanseer\Booking\Http;

use Illuminate\Routing\Controller as BaseController;

class BookingController extends BaseController
{
    public function index()
    {
        return \Booking::hello() . ' from controller.';
    }
}

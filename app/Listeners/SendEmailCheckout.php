<?php

namespace App\Listeners;

use App\Events\Checkout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailCheckout
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Checkout $event): void
    {
        dd($event);
    }

}

<?php

namespace App\Providers;

use App\Events\Checkout;
use App\Listeners\SendEmailCheckout;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Os listeners de eventos da sua aplicação.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        // Checkout::class => [
        //     SendEmailCheckout::class
        // ]
    ];

    /**
     * Registrar qualquer evento para sua aplicação.
     */
    public function boot(): void
    {
        // Event::listen(Checkout::class,[SendEmailCheckout::class]);
        Event::listen(Checkout::class,function(Checkout $event){
            dd("AAAAAAA");
        });
    }

    /**
     * Ativar descoberta automática de eventos.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}

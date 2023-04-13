<?php

namespace App\Listeners;
use Illuminate\Support\Facades\Auth;
use App\Events\cartUpdate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class updateqnt
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
    public function handle(cartUpdate $event): void
    {

                    $user=Auth::user();
                    $user->cartqnt++;
                    $user->save();

    }
}

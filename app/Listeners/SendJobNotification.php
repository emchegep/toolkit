<?php

namespace App\Listeners;

use App\Events\JobCreated;
use App\Notifications\JobCreatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendJobNotification
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
    public function handle(JobCreated $event): void
    {
        Notification::send(auth()->user(), new JobCreatedNotification($event->job));
    }
}

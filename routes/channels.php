<?php

use App\Broadcasting\JobChannel;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('jobs.{job}', JobChannel::class);

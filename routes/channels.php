<?php

use App\Broadcasting\JobChannel;
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('jobs', JobChannel::class);

Broadcast::channel('job-created', function ($user) {
    return true;
});

Broadcast::channel('users.{id}', function (User $user, $id) {
    return (int) $user->id === (int) $id;
});

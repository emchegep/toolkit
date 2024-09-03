<?php

namespace App\Broadcasting;

use App\Models\Job;
use App\Models\User;

class JobChannel
{
    /**
     * Create a new channel instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     */
    public function join(User $user, Job $job): array|bool
    {
        return $user->employer->id === $job->employer_id;
    }
}

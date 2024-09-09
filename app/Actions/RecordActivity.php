<?php

namespace App\Actions;

class RecordActivity
{
    public function __invoke(string $message)
    {
        return auth()->user()->activities()->create([
            'ip' => request()->ip(),
            'description' => $message,
        ]);
    }
}

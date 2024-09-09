<?php

namespace App\Livewire\Jobs;

use App\Events\MessageSent;
use App\Models\Job;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.jobs.index')->with([
            'jobs' => Job::with(['employer','tags'])->latest()->get(),
        ]);
    }
}

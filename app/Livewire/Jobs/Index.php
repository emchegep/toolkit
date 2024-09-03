<?php

namespace App\Livewire\Jobs;

use App\Models\Job;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        ray('loading the jobs page');
        return view('livewire.jobs.index')->with([
            'jobs' => Job::with(['employer','tags'])->latest()->get(),
        ]);
    }
}

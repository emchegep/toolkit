<?php

namespace App\Livewire\User\Job;

use App\Models\Job;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.user.job.index')->with([
            'jobs' => Job::with('employer')->latest()->get(),
        ]);
    }
}

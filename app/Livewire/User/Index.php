<?php

namespace App\Livewire\User;

use App\Models\Activity;
use App\Models\Job;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.user.index')->with([
            'activities' => Activity::with('user')->latest()->paginate(5),
            'jobs' => Job::with('employer')->latest()->limit(5)->get(),
        ]);
    }
}

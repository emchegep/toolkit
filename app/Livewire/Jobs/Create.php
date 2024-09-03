<?php

namespace App\Livewire\Jobs;

use App\Actions\RecordActivity;
use App\Events\JobCreated;
use App\Livewire\Forms\JobForm;
use App\Models\Tag;
use App\Notifications\JobCreatedNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Create extends Component
{
    use WithFileUploads;

    public JobForm $form;
    
    public function save(RecordActivity $activity)
    {
        $job = $this->form->store();
        
        $activity('Created new job successfully - ['.$job->title.'].');
        
        JobCreated::dispatch($job);

       return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.jobs.create')->with([
            'tags' => Tag::all(),
        ]);
    }
}

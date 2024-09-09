<?php

namespace App\Livewire\Forms;

use App\Notifications\JobCreated;
use Illuminate\Support\Facades\Notification;
use Livewire\Attributes\Validate;
use Livewire\Form;


class JobForm extends Form
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $location = '';

    #[Validate('required')]
    public $type = '';

    #[Validate('required|active_url')]
    public $url = '';

    #[Validate('nullable')]
    public $salary = '';

    #[Validate('required')]
    public $employer = '';

    #[Validate('nullable')]
    public $tag = [];

    #[Validate('required')]
    public $logo = '';


    public function store()
    {
        $this->validate();

        $logoPath = $this->logo->store(path: 'photos');

        $employer = auth()->user()->employer()->where('name',$this->employer)->first();

        if (! $employer) {
            $employer = auth()->user()->employer()->create([
                'name' => $this->employer,
                'logo' => $logoPath,
            ]);
        }

        $job = $employer->jobs()->create($this->only(['title','location','type','url','salary']));

        foreach ($this->tag as $t) {
            $job->tag($t);
        }

        $this->reset();

        return $job;

    }

}

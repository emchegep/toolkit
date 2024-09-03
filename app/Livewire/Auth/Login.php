<?php

namespace App\Livewire\Auth;

use App\Actions\RecordActivity;
use App\Livewire\Forms\LoginForm;
use App\Models\Activity;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Login extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(RecordActivity $activity): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

         $activity('logged in to the system');
         
        if (auth()->user()->hasRole('admin')) {
            $this->redirectIntended(default: route('admin.dashboard', absolute: false), navigate: true);
        }
        else {
            $this->redirectIntended(default: route('home', absolute: false), navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}

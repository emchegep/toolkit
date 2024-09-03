<?php

namespace App\Livewire;

use App\Actions\RecordActivity;
use App\Livewire\Actions\Logout;
use Livewire\Component;

class Navigation extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout, RecordActivity $activity): void
    {
        $activity('logged out of the system');
        
        $logout();
        
        $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.navigation');
    }
}

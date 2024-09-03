<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;

class RegisterUser extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "register {email : The user's email} {name : The user's name} {password : The password to be used}";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register a new user.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         $user = User::create($this->data());

         $this->line('User registered successfully!.');
         
         return Command::SUCCESS;
    }

    private function data(): array
    {
        return [
            'email' => $this->argument('email'),
            'name' => $this->argument('name'),
            'password' => $this->argument('password')
        ];
    }
}

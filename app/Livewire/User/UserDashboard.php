<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

class UserDashboard extends Component
{
    #[Layout('components.layouts.main')]
    public function render()
    {
        return view('livewire.user.user-dashboard');
    }
}

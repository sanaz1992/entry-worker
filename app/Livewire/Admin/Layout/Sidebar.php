<?php

namespace App\Livewire\Admin\Layout;

use App\Models\User;
use Livewire\Component;

class Sidebar extends Component
{
     public User $user;
    public function mount()
    {
        $this->user = auth()->user();
    }
    public function render()
    {
        return view('livewire.admin.layout.sidebar');
    }
}

<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminBaseComponent extends Component
{
    protected function renderView($view, $data = [])
    {
        return view($view, $data)->layout('livewire.admin.layout.app');
    }
}

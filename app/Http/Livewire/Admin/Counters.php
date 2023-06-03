<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Counters extends Component
{
    public function render()
    {
        $adminsCount = User::where('role_id', 1)->count();
        $managersCount = User::where('role_id', 2)->count();
        $customersCount = User::where('role_id', 3)->count();
        $supportsCount = User::where('role_id', 4)->count();
        return view('livewire.admin.counters', compact('customersCount', 'managersCount', 'adminsCount', 'supportsCount'));
    }
}

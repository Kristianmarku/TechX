<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UsersTable extends Component
{
    public $roleFilter = 0;
    public $paginate = 10;

    public function render()
    {
        if($this->roleFilter != 0){
            $users = User::where('role_id', $this->roleFilter)->paginate($this->paginate);
        }else{
            $users = User::paginate($this->paginate);
        }

        return view('livewire.admin.users-table', compact('users'));
    }
}

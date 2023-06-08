<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notifications extends Component
{
    protected $notifications;

    protected $listeners = ['refreshComponent'];

    public function mount()
    {
        $this->notifications = $this->getUserNotifications();
    }

    public function refreshComponent()
    {
        $this->notifications = $this->getUserNotifications();
    }

    public function getUserNotifications()
    {
        $user = User::findOrFail(Auth::id());
        $notifications = $user->notifications()->get();
        return $notifications;
    }

    public function markNotificationAsRead($notificationId)
    {
        $user = User::findOrFail(Auth::id());
        $notification = $user->notifications()->find($notificationId);

        if ($notification) {
            $notification->markAsRead();
            $this->notifications = $this->getUserNotifications(); // Refresh notifications
        }
    }

    public function render()
    {
        return view('livewire.user.notifications', [
            'notifications' => $this->notifications,
        ]);
    }
}

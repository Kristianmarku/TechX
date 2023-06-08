<?php

namespace App\Http\Livewire\Support;

use App\Models\Order;
use App\Models\User;
use App\Notifications\OrderNotification;
use Livewire\Component;

class OrdersTable extends Component
{
    public $filterStatus;
    public function updateStatus($orderId, $newStatus)
    {
        // Find the order by ID and update its status
        $order = Order::findOrFail($orderId);
        $order->status = $newStatus;
        $order->save();

        toastr()->success('Status updated');

        // Fetch user who ordered
        $user = User::findOrFail($order->user_id);

        $message = 'Your order (#'.$order->id.') is ' . $newStatus . '.';
        $user->notify(new OrderNotification($message));

        // Refresh the component 
        $this->emit('refreshComponent');
    }

    public function render()
    {
        $query = Order::orderBy('created_at', 'desc');

        if($this->filterStatus && $this->filterStatus != 'All')
        {
            switch($this->filterStatus) {
                case 'Pending';
                    $query->where('status', 'Pending');
                    break;
                case 'Verified';
                    $query->where('status', 'Verified');
                    break;
                case 'Ready to Ship';
                    $query->where('status', 'Ready to Ship');
                    break;
                case 'Shipping';
                    $query->where('status', 'Shipping');
                    break;
                case 'Delivered';
                    $query->where('status', 'Delivered');
                    break;
                default: 
                    // default case
                break;
            }
        }

        $orders = $query->get();

        return view('livewire.support.orders-table', compact('orders'));
    }
}

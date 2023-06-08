<?php

namespace App\Http\Livewire\Support;

use App\Models\Issue;
use App\Models\Order;
use Livewire\Component;

class Counters extends Component
{
    public $newCount;
    public $inProgressCount;
    public $onHoldCount;
    public $resolvedCount;
    public $closedCount;

    public $pendingCount;
    public $verifiedCount;
    public $readyToShipCount;
    public $shippingCount;
    public $deliveredCount;

    protected $listeners = ['refreshComponent' => 'refreshData'];

    public function mount()
    {
        $this->refreshData();
    }
  
    public function refreshData()
    {
        /* Issues */
        $this->newCount = Issue::where('status', 'New')->count();
        $this->inProgressCount = Issue::where('status', 'In Progress')->count();
        $this->onHoldCount = Issue::where('status', 'On Hold')->count();
        $this->resolvedCount = Issue::where('status', 'Resolved')->count();
        $this->closedCount = Issue::where('status', 'Closed')->count();

        /* Orders */
        $this->pendingCount = Order::where('status', 'Pending')->count();
        $this->verifiedCount = Order::where('status', 'Verified')->count();
        $this->readyToShipCount = Order::where('status', 'Ready to Ship')->count();
        $this->shippingCount = Order::where('status', 'Shipping')->count();
        $this->deliveredCount = Order::where('status', 'Delivered')->count();
    }

    public function render()
    {
        $page = request()->is('home') ? 'home' : 'orders'; 

        return view('livewire.support.counters', [
            'page' => $page,
        ]);
    }

}

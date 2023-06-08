<?php

namespace App\Http\Livewire\Manager;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class Counters extends Component
{
    public $totalSales;
    public $todaySales;
    
    public function render()
    {
        $today = Carbon::today()->toDateString(); 
        $this->totalSales = Order::count();
        $this->todaySales = Order::whereDate('created_at', $today)->count();
        
        return view('livewire.manager.counters');
    }
}

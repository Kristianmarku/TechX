<?php

namespace App\Http\Livewire\Manager;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class RevenueCounters extends Component
{
    public $dailyRevenue;
    public $weeklyRevenue;
    public $monthlyRevenue;

    public function mount()
    {
        $this->dailyRevenue = $this->getTodaysRevenue();
        $this->weeklyRevenue = $this->getWeeklyRevenue();
        $this->monthlyRevenue = $this->getMonthlyRevenue();
    }
    
    public function getTotalRevenue()
    {
        // Fetch orders from database
        $orders = Order::all();

        // Set default total 
        $total = 0;

        // Iterate order records and sum their total amount
        foreach($orders as $order){
            $total += $order->total_amount;
        }
        return $total;
    }

    public function getTodaysRevenue() 
    {
        $today = Carbon::today()->toDateString();
        $orders = Order::whereDate('created_at', $today)->get();
        $total = 0;
        foreach($orders as $order){
            $total += $order->total_amount;
        }

        return $total;
    }

    public function render()
    {
        return view('livewire.manager.revenue-counters');
    }

    public function getWeeklyRevenue()
    {
        // Get the start and end dates of the current week
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        // Fetch orders within the current week from the database
        $orders = Order::whereBetween('created_at', [$startOfWeek, $endOfWeek])->get();

        $total = 0;
        foreach ($orders as $order) {
            $total += $order->total_amount;
        }

        return $total;
    }

    public function getMonthlyRevenue()
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $orders = Order::whereBetween('created_at', [$startOfMonth, $endOfMonth])->get();

        $total = 0;
        foreach ($orders as $order) {
            $total += $order->total_amount;
        }

        return $total;
    }


}

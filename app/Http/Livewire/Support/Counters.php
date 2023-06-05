<?php

namespace App\Http\Livewire\Support;

use App\Models\Issue;
use Livewire\Component;

class Counters extends Component
{
    public function render()
    {
        $newCount = Issue::where('status', 'New')->count();
        $inProgressCount = Issue::where('status', 'In Progress')->count();
        $onHoldCount = Issue::where('status', 'On Hold')->count();
        $resolvedCount = Issue::where('status', 'Resolved')->count();
        $closedCount = Issue::where('status', 'Closed')->count();
        return view('livewire.support.counters', compact('newCount', 'inProgressCount', 'onHoldCount', 'resolvedCount', 'closedCount'));
    }
}

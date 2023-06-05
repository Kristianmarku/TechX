<?php

namespace App\Http\Livewire\Support;

use App\Models\Issue;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IssuesTable extends Component
{
    public function render()
    {
        $support = User::find(Auth::id()); 
        
        // Retrieve the issue IDs that the support user has commented on
        $issueIds = $support->issueReplies()->pluck('issue_id')->unique();

        // Retrieve the actual issues based on the IDs
        $issues = Issue::whereIn('id', $issueIds)->get();
        
        return view('livewire.support.issues-table', compact('issues'));
    }
}

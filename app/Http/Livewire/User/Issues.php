<?php

namespace App\Http\Livewire\User;

use App\Models\Issue;
use App\Models\IssueReply;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Issues extends Component
{
    public $selectedIssueId;
    public $issue;

    protected $listeners = ['fetchIssue'];

    public $replyMessage;

    public function render()
    {
        $issues = Issue::orderBy('created_at', 'desc')->get();
        return view('livewire.user.issues', compact('issues'));
    }

    public function submitMessage()
    {
        try {
            $this->validate([
                'replyMessage' => 'required',
            ]);

            IssueReply::create([
                'issue_id' => $this->issue->id,
                'support_id' => Auth::id(),
                'message' => $this->replyMessage,
            ]);

            $this->reset(['replyMessage']);
            toastr()->success('Comment sent.');

        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
            
            foreach ($errors as $error) {
                toastr()->error($error);
            }
        }
        $this->fetchIssue($this->issue->id);
    }

    public function fetchIssue($issueId)
    {
        $this->selectedIssueId = $issueId;
        $this->issue = Issue::findOrFail($issueId);
    }
}

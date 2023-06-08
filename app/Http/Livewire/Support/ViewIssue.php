<?php

namespace App\Http\Livewire\Support;

use App\Models\Issue;
use App\Models\IssueReply;
use App\Models\User;
use App\Notifications\OrderNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ViewIssue extends Component
{
    public $issue, $priority, $status;
    public $replyMessage;
    public $editReplyMessage;
    public $editMode;
    public $editingCommentId;

    public function mount($id)
    {
        $this->issue = Issue::findOrFail($id);
        $this->priority = $this->issue->priority;
        $this->status = $this->issue->status;
    }

    // Handle priority updating
    public function updatedPriority()
    {
        $this->issue->priority = $this->priority;
        $this->issue->save();
        toastr()->success('Priority updated');
    }

    // Handle status updating
    public function updatedStatus()
    {
        $this->issue->status = $this->status;
        $this->issue->save();
        toastr()->success('Status updated');

        $user = User::findOrFail($this->issue->user_id);

        $message = 'Ticket (#'.$this->issue->id.') updated to '. $this->status;
        $user->notify(new OrderNotification($message));
    }

    // Handle Submitting a comment *issue reply*
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

    }

    // Handle editing comment
    public function toggleEdit($id) 
    {
        $this->editingCommentId = $id;
        $this->editMode = !$this->editMode;
        $reply = IssueReply::findOrFail($id);
        $this->editReplyMessage = $reply->message;
    }

    // Handle updating comment
    public function updateComment($id)
    {
        if ($this->editingCommentId !== $id) {
            return; 
        }
        
        $reply = IssueReply::findOrFail($id);
        $reply->message = $this->editReplyMessage;
        $reply->updated_at = now();
        $reply->save();
        toastr()->success('Comment updated');
        $this->editMode = false;
    }
    
    // Handle mark as resolved
    public function markAsResolved()
    {
        $this->issue->status = ($this->issue->status == "Resolved") ? "In Progress" : "Resolved";
        $message = ($this->issue->status == "Resolved") ? "Marked as Resolved" : "Marked In Progress";
        $this->issue->save();
        $this->status = $this->issue->status;
        toastr()->success($message);
    }
    

    public function render()
    {
        $issueReplies = $this->issue->issueReply()->orderBy('created_at', 'desc')->get();
        return view('livewire.support.view-issue', compact('issueReplies'));
    }
}

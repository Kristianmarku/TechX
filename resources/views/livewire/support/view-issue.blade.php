    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                        <h5 class="title">Issue #{{ $issue->id }}</h5>
                        <button wire:click="markAsResolved" class="btn {{ $issue->status == 'Resolved' ? 'btn-default' : 'btn-info' }} d-flex justify-content-center align-items-center">
                            @if($issue->status == 'Resolved')
                                <i class="fa-solid fa-circle-check pr-2" style="font-size: 20px"></i> Marked as Resolved
                            @else 
                                <i class="fa-solid fa-circle pr-2" style="font-size: 20px"></i> Mark as Resolved
                            @endif 
                        </button>
                        </div>
                        <span class="badge badge-success p-2">{{ $issue->status }}</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Topic</label>
                                <p class="form-control rounded-0">{{ $issue->title }}</p>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label>Issue Description</label>
                                <p class="form-control rounded-0">{{ $issue->description }}</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-header">
                    <h5>Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Reported by</label>
                        <p class="form-control">{{ $issue->user->firstname . ' ' . $issue->user->lastname }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Priority <span class="text-danger font-weight-bold">*</span></label>
                        <select wire:model="priority" class="form-control border-danger">
                            <option value="High">High</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Status <span class="text-danger font-weight-bold">*</span></label>
                        <select wire:model="status" class="form-control border-danger"> 
                            <option value="New">New</option>
                            <option value="In Progress">In Progress</option>
                            <option value="On Hold">On Hold</option>
                            <option value="Resolved">Resolved</option>
                            <option value="Closed">Closed</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>E-mail</label>
                                <p class="form-control">{{ $issue->user->email }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone</label>
                                <p class="form-control">{{ $issue->user->phone }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Role</label>
                                <p class="form-control">{{ $issue->user->role->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <p><strong>Reported at:</strong> {{ $issue->created_at->format('d.m.Y - h:i:s')}}</p>
                    <p>{{ $issue->created_at->diffForHumans() }}</p>
                </div>
                </div>
            </div>
        </div>

        <!-- Add Reply/Comment -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="">Your message</label>
                            <textarea wire:model.defer="replyMessage" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" wire:click="submitMessage">
                            <i class="fa-solid fa-plus pr-1"></i> Add Comment
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Reply -->

        <!-- Issue Replies -->
        <div class="row">
            <div class="col-md-2">
                <p class="badge badge-info">{{ $issueReplies->count() }} Comments</p>
            </div>
        </div>

        <div class="row">
            @foreach ($issueReplies as $reply)
                <div class="col-md-8">
                    <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="d-flex flex-column gap-2">
                        <h5 class="title mb-0">{{ $reply->support->firstname . ' ' . $reply->support->lastname }}</h5>
                        @if($reply->support->role->name == 'Admin') 
                            <div class="cold-md-2">
                                <p class="badge badge-success p-2">Admin</p>
                            </div>
                        @else  
                            <p>{{ $reply->support->role->name }}</p>
                        @endif
                        </div>
                        {{ $reply->created_at->diffForHumans() }}
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @if($editMode && $reply->id == $editingCommentId)
                                            <input wire:model="editReplyMessage" type="text" class="form-control rounded-0" wire:key="editReplyMessage">
                                        @else
                                            <input disabled class="form-control rounded-0" value="{{ $reply->message }}" style="cursor: pointer; font-weight:bolder;"></input>
                                        @endif 
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Auth::id() == $reply->support_id)
                            <div class="card-footer d-flex">
                                @if($editMode && $reply->id == $editingCommentId)
                                    <div class="pr-1">
                                        <button wire:click="toggleEdit({{ $reply->id }})" class="btn btn-info">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                    <div>
                                        <button wire:click="updateComment({{ $reply->id }})" class="btn btn-success" wire:key="updateCommentBtn">
                                            <i class="fa-solid fa-check"></i>
                                        </button>
                                    </div>
                                @else
                                    <div class="pr-1">
                                        <button wire:click="toggleEdit({{ $reply->id }})" class="btn btn-info">
                                            <i class="fa-solid fa-pencil"></i>
                                        </button>
                                    </div>
                                    <div>
                                        <button onclick="confirmDelete({{ $reply->id }})" class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                @endif 
                                <form id="deleteForm_{{ $reply->id }}" action="{{ route('delete.reply', $reply->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        @endif 
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Issue Replies -->
    </div>
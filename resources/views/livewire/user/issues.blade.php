<div>
    @if ($issue)
        <div wire:loading.class="fullscreen-container">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 30px; display:flex; justify-content: space-between;">
                    <a class="issue-btn-danger" href="{{ url()->previous() }}">Close Page</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 50px;">
                    <div class="card">
                        <div class="card-header bg-dark" style="display: flex; justify-content:space-between;">
                            <h4 class="text-light">(#{{ $issue->id }}) {{ $issue->title }}</h4>
                            <p class="issue-btn-warning">{{ $issue->status }}</p>
                        </div>
                        <div class="card-body">
                            <p>{{ $issue->description }}</p>
                        </div>
                        <div class="card-footer bg-dark">
                            <p class="text-light">Reported: {{ $issue->created_at->diffForhumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4 class="text-light"> {{ $issue->issueReply->count() ?: 0 }} Comments</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    @if($issue->issueReply)
                        @foreach($issue->issueReply as $reply)
                            <div class="card" style="margin-top: 15px;">
                                <div class="card-header bg-dark" style="display: flex; justify-content: space-between;">
                                    <p class="text-light">{{ $reply->support->firstname . ' ' . $reply->support->lastname }}</p>
                                    <span class="issue-btn-warning">{{ $reply->support->role->name }}</span>
                                </div>
                                <div class="card-body">
                                    <p>{{ $reply->message }}</p>
                                </div>
                            </div>
                        @endforeach 
                    @endif 
                </div>
                <div class="col-md-6">
                    <div class="card" style="margin-top: 15px;">
                        <div class="card-header bg-dark">
                            <h3 class="text-light" style="padding: 1rem;">Reply:</h3>
                            <div class="row" style="padding: 1rem;">
                                <textarea wire:model.lazy="replyMessage" type="text" placeholder="Type your message..." rows="10" cols="30" style="padding: 1rem;"></textarea>
                            </div>
                            <div class="row" style="padding: 1rem;">
                                <button wire:click="submitMessage" class="issue-btn-warning">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($issues->count() > 0)
        <div wire:loading.remove>
            @foreach ($issues as $issue)
                <div class="issue-card">
                    <div class="issue-head">
                        (#{{ $issue->id }}) {{ Str::limit($issue->title, 50) }}
                        <button id="issue-btn-{{ $issue->id }}">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </button>
                    </div>
                    <div class="issue-body">
                        <span class="
                            @switch($issue->status)
                                @case('New')
                                    issue-btn-warning
                                    @break
                                @case('In Progress')
                                    issue-btn-success
                                    @break
                                @case('On Hold')
                                    issue-btn-warning
                                    @break
                                @case('Resolved')
                                    issue-btn-success
                                    @break
                                @case('Closed')
                                    issue-btn-danger
                                    @break
                                @default
                            @endswitch">
                            {{ $issue->status == 'New' ? 'Pending' : $issue->status }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
        
    @else
        <div wire:loading.remove>
            <p class="text-light">You haven't sent any messages.</p>
        </div>
    @endif
    <div wire:loading>
         <!-- ***** Preloader Start ***** -->
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->
    </div>
</div>

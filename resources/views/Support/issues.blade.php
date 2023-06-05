@extends('layouts.staff.main')
@section('title', 'Issues')

@section('content')
  <div class="panel-header panel-header-sm"></div>
  <div class="content">
    <div class="row">
      @forelse ($issues as $issue)
      <div class="col-md-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            Reported by {{ $issue->user->firstname . ' ' . $issue->user->lastname . ' (' .  $issue->user->email .  ') '}}
            <p>{{ $issue->created_at->diffForHumans() }}</p>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h3>{{ $issue->title }}</h3>
            </div>
            {{ $issue->description }}
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-between">
              <div>
                  <!-- Priority -->
                  @switch($issue->priority)
                    @case('High')
                        <p class="badge badge-danger p-2">
                            <i class="fa-solid fa-arrow-up"></i> High
                        </p>
                        @break
                    @case('Medium')
                        <p class="badge badge-warning text-light p-2">
                            <i class="fa-solid fa-triangle-exclamation"></i> Medium
                        </p>
                        @break
                    @default
                        <p class="badge badge-dark p-2">
                            <i class="fa-solid fa-arrow-down"></i> Low
                        </p>
                  @endswitch


                  <!-- Status -->
                  @switch($issue->status)
                    @case('New')
                        <p class="badge badge-success p-2">New</p>
                        @break
                    @case('In Progress')
                        <p class="badge badge-info p-2">In Progress</p>
                        @break
                    @case('On Hold')
                        <p class="badge badge-danger p-2">On Hold</p>
                        @break
                    @case('Resolved')
                        <p class="badge badge-success p-2">Resolved</p>
                        @break
                    @case('Closed')
                        <p class="badge badge-danger p-2">Closed</p>
                        @break
                    @default
                        <!-- Handle default case here -->
                  @endswitch
                </div>
              <a href="{{route('view.issue', $issue->id )}}" class="btn btn-primary">Open Issue</a>
            </div>
          </div>
        </div>
      </div>
      @empty
       <div class="card">
        <div class="card-header">
          <p class="text-danger">No reported issues at the moment</p>
        </div>
       </div>
      @endforelse

    </div>
  </div>
@endsection
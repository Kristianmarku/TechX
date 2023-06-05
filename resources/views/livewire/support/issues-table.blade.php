<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Engaged in Issues</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th>ID</th>
                <th>User</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Priority</th>
              </thead>
              <tbody>
                @forelse ($issues as $issue)
                <tr>
                  <td>#{{ $issue->id }}</td>
                  <td>{{ $issue->user->firstname . ' ' . $issue->user->lastname }}</td>
                  <td>{{ $issue->title }}</td>
                  <td class="w-25">{{ $issue->description }}</td>
                  <td>
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
                  </td>
                  <td>
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
                  </td>
                  <td></td>
                  <td>
                    <a href={{ route('view.issue', $issue->id) }} class="btn btn-info">Open</a>
                  </td>
                </tr>
                @empty
                <tr>
                    <td class="text-danger" colspan="8">
                        You haven't engaged in any issues yet.
                    </td>
                </tr>
                @endforelse 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
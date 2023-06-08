<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Users</h4>
            <div class="d-flex">
              <div class="col-md-2 d-flex flex-column">
                <p class="mb-1">Filter by Role</p>
                <select wire:model="roleFilter" class="form-control">
                  <option value="0">All</option>
                  <option value="3">Customer</option>
                  <option value="2">Manager</option>
                  <option value="4">Support</option>
                  <option value="1">Admin</option>
                </select>
              </div>
              <div class="col-md-2 d-flex flex-column">
                <p class="mb-1">Entries</p>
                <select wire:model="paginate" class="form-control">
                  <option value="10">10</option>
                  <option value="20">20</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
              </div>
            </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                {{-- <th>Status</th> --}}
                <th>Phone</th>
                <th>Role</th>
                <th>Updated</th>
                {{-- <th>Action</th> --}}
              </thead>
              <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>
                            <div class="badge badge-success p-2">
                                {{ $user->active }}
                            </div>
                        </td> --}}
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>{{ $user->created_at->format('d.m.Y - h:i:s') }}</td>
                        <td>
                            <a href="{{ route('edit.user', $user->id) }}" class="btn bg-dark">
                              <i class="fa-solid fa-pen"></i>
                            </a>
                            <button onclick="confirmDelete({{ $user->id }})" class="btn btn-danger">
                              <i class="fa-solid fa-trash"></i>
                            </button>
                            <form id="deleteForm_{{ $user->id }}" action="{{ route('delete.user', $user->id) }}" method="POST" style="display: none;">
                              @csrf
                              @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="6">
                        <p class="badge badge-warning p-2">None available</p>
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
<div class="card">
    <div class="card-header">
      <h5 class="card-category">Categories</h5>
      <h4 class="card-title">All Categories</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <th>Name</th>
            <th>Description</th>
            <th></th>
          </thead>
          <tbody>
            @forelse ($categories as $cat)
                <tr>
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->description }}</td>
                    <td>
                        <button onclick="confirmDelete({{ $cat->id }})" class="btn btn-danger">
                          <i class="fa-solid fa-trash"></i>
                        </button>
                        <form id="deleteForm_{{ $cat->id }}" action="{{ route('delete.category', $cat->id) }}" method="POST" style="display: none;"> 
                          @csrf
                          @method('DELETE')
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3"><p class="text-danger">No data available</p></td>    
                </tr>                
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
</div>
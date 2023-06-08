<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <div>
            <h4 class="card-title">Orders</h4>
          </div>
          <div>
            <select wire:model="filterStatus" class="form-control">
              <option value="All">All</option>
              <option value="Pending">Pending</option>
              <option value="Verified">Verified</option>
              <option value="Ready to Ship">Ready to Ship</option>
              <option value="Shipping">Shipping</option>
              <option value="Delivered">Delivered</option>
            </select>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th>Order ID</th>
                <th>User</th>
                <th>Total Amount</th>
                <th>Date</th>
                <th class="text-center">Status</th>
                <th></th>
              </thead>
              <tbody>
                @forelse ($orders as $order)
                  <tr>
                    <td>#{{ $order->id }}</td>
                    <td class="font-weight-bold">
                      {{ $order->user->firstname . ' ' . $order->user->lastname }} <br> 
                      <small class="font-weight-bold">{{ $order->user->email }}</small>
                    </td>
                    <td>{{ $order->total_amount }}€</td>
                    <td>
                      <p class="badge badge-dark p-2">
                        {{ $order->created_at->isToday() ? 'Today at ' . $order->created_at->format('h:i:s') : $order->created_at->format('d.m.Y - h:i:s') }}  
                      </p>
                    </td>
                    <td class="d-flex justify-content-center" style="gap: 10px; font-size: 16px">
                        <p wire:click="updateStatus({{$order->id}}, 'Pending')" class="badge {{ $order->status == 'Pending' ? 'badge-success' : 'badge-dark' }} p-2" style="cursor: pointer;">Pending</p>
                        <p wire:click="updateStatus({{$order->id}}, 'Verified')" class="badge {{ $order->status == 'Verified' ? 'badge-success' : 'badge-dark' }} p-2" style="cursor: pointer;">Verified</p>
                        <p wire:click="updateStatus({{$order->id}}, 'Ready to Ship')" class="badge {{ $order->status == 'Ready to Ship' ? 'badge-success' : 'badge-dark' }} p-2" style="cursor: pointer;">Ready to Ship</p>
                        <p wire:click="updateStatus({{$order->id}}, 'Shipping')" class="badge {{ $order->status == 'Shipping' ? 'badge-success' : 'badge-dark' }} p-2" style="cursor: pointer;">Shipping</p>
                        <p wire:click="updateStatus({{$order->id}}, 'Delivered')" class="badge {{ $order->status == 'Delivered' ? 'badge-success' : 'badge-dark' }} p-2" style="cursor: pointer;">Delivered</p>
                    </td>
                    <td>
                      <button onclick="confirmDelete({{ $order->id }})" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                      </button>
                      <form id="deleteForm_{{ $order->id }}" action="{{ route('admin.delete.order', $order->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                      </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-danger" colspan="8">
                        There aren't any orders yet.
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
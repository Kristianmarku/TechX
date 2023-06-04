<div class="card">
    <div class="card-header d-flex justify-content-between">
      <div class="d-flex">
        <h4 class="card-title">All Products</h4>
      </div>
      <div class="d-flex">
        <div class="input-group no-border mx-2">
          <input type="text"  wire:model="search" class="form-control" placeholder="Search products..." />
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="now-ui-icons ui-1_zoom-bold"></i>
            </div>
          </div>
        </div>

        <div class="input-group no-border mx-2">
          <select wire:model="filterCategory" class="form-control">
            <option value="All">All</option>
            @forelse ($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @empty
            No data available                
            @endforelse
          </select>
          <div class="input-group-append">
            <div class="input-group-text"></div>
          </div>
        </div>

        <div class="input-group no-border mx-2">
          <select wire:model="filterSale" class="form-control">
            <option value="All">All</option>
            <option value="onSale">Sale</option>
            <option value="outOfSale">Regular Price</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <th>ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Category</th>
            <th>Price</th>
            <th>Sale Price</th>
            <th>Sale Validation</th>
            <th>Status</th>
            <th></th>
          </thead>
          <tbody>
            @forelse ($products as $pro)
            <tr>
                <td>{{ $pro->id }}</td>
                <td>{{ $pro->name }}</td>
                <td>{{ $pro->description }}</td>
                <td>{{ $pro->quantity }}</td>
                <td>{{ $pro->category->name }}</td>
                <td>{{ $pro->price }}€</td>
                <td>
                  @if ($pro->productSale?->sale_price)
                    {{ $pro->productSale->sale_price }}€
                  @endif
                </td>
                <td>
                  @if ($pro->productSale )
                    Valid From: {{ $pro->productSale->start_date->format('d.m.Y') }} <br>
                    Valid Until: {{ $pro->productSale->end_date->format('d.m.Y') }} <br>
                  @endif
                </td>
                <td>
                    @if ($pro->productSale )
                      @if(!now()->between($pro->productSale->start_date, $pro->productSale->end_date))
                        <div class="badge badge-danger p-2">
                          Inactive
                        </div>
                      @else 
                        <div class="badge badge-success p-2">
                          Active
                        </div>
                      @endif 
                    @endif
                </td>
                <td>
                  <button onclick="confirmDelete({{ $pro->productSale?->id }})" class="btn btn-danger">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                  <form id="deleteForm_{{ $pro->productSale?->id ?? '' }}" action="{{ route('delete.sale', $pro->productSale?->id ?? '') }}" method="POST" style="display: none">
                    @csrf
                    @method('DELETE')
                  </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="10"><p class="text-danger">No data available</p></td>
            </tr>                
            @endforelse
          </tbody>
        </table>
        {{ $products->links() }}
      </div>
    </div>
  </div>
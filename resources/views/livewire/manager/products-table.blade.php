<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category">Products</h5>
          <h4 class="card-title">All Products</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th>Thumbnail</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Price</th>
                <th>Action</th>
              </thead>
              <tbody>
                @forelse ($products as $pro)
                    <tr>
                        <td id="thumbnail-image-{{ $pro->id }}"><img src="{{ asset('storage/cover_images/' . $pro->cover_image) }}" width="50" alt="Product Image"></td>
                        <td>{{ $pro->name }}</td>
                        <td class="w-50">{{ $pro->description }}</td>
                        <td>{{ $pro->quantity }}</td>
                        <td>{{ $pro->category->name }}</td>
                        <td>{{ $pro->price }}€</td>
                        <td>
                        <a href="{{ route('edit.product', $pro->id) }}" class="btn btn-warning">Edit</a>
                        <button onclick="confirmDelete({{ $pro->id }})" type="button" class="btn btn-danger">Delete</button>
                        <form id="deleteForm_{{ $pro->id }}" action="{{ route('delete.product', $pro->id) }}" method="POST" style="display: none;">
                          @csrf
                          @method('DELETE')
                        </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">
                            <p class="text-danger">None available</p>
                        </td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>

        <div id="fullscreen-image">
            <img src="" alt="Full Screen Image">
        </div>

      </div>
    </div>
  </div>

  
<style>
    #fullscreen-image {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }
  
    #fullscreen-image img {
      max-width: 100%;
      max-height: 100%;
      transform: scale(2);
    }
</style>
  
@push('scripts')
<script>
  const thumbnailImages = document.querySelectorAll('[id^="thumbnail-image-"]');
  const fullscreenImage = document.querySelector('#fullscreen-image');

  thumbnailImages.forEach(function(thumbnailImage) {
    thumbnailImage.addEventListener('click', function() {
      const imageSrc = this.querySelector('img').src;
      fullscreenImage.querySelector('img').src = imageSrc;
      fullscreenImage.style.display = 'flex';
    });
  });

  fullscreenImage.addEventListener('click', function() {
    fullscreenImage.style.display = 'none';
  });
</script>
@endpush

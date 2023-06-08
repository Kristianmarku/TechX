<div class="container">
    <ul class="trending-filter">
        <li>
            <a wire:click="updateFilterCategory(0)" class="{{ $this->filterCategory == 0 ? 'is_active' : ''}}" style="cursor:pointer;">All</a>
        </li>

        <li>
            @if ($currentCategoryIndex > 0)
                <a wire:click="updateCategoryIndex('prev')" class="prev-arrow" style="cursor:pointer;">
                    <i class="fa fa-angle-left"></i>
                </a>
            @endif
        </li>
            

        @foreach($latestCategories as $cat)
            <li>
                <a wire:click="updateFilterCategory({{ $cat->id }})" class="{{ $this->filterCategory == $cat->id ? 'is_active' : ''}}" style="cursor:pointer;">{{ $cat->name }}</a>
            </li>
        @endforeach

        <li>
            @if (($currentCategoryIndex + 1) * $categoriesPerPage < $totalCategories)
                <a wire:click="updateCategoryIndex('next')" class="next-arrow" style="cursor:pointer;">
                    <i class="fa fa-angle-right"></i>
                </a>
            @endif
        </li>

        <div class="row">
            <div class="searchContainer">
                <input wire:model.debounce.200ms="search" type="text" placeholder="Search products..." class="searchBox">
            </div>
        </div>
    </ul>

    <div class="row trending-box">
        @forelse($products as $pro)
            <div class="col-lg-3 align-self-center mb-30 trending-items">
                <div class="item">
                    <div class="thumb">
                        <a href="{{ route('product.details', $pro->id) }}">
                            <img src="{{ asset('storage/cover_images/'. $pro->cover_image) }}" alt="Product Image">
                        </a>
                        <div class="outOfStock" style="display: {{ $pro->quantity == 0 ? 'block' : 'none' }}">
                            <i class="fa-solid fa-face-frown"></i> Out of Stock
                        </div>
                        <span class="price">
                            @if ($pro->productSale && now()->between($pro->productSale->start_date, $pro->productSale->end_date))
                                <em>{{ $pro->price ?? '-' }}</em>
                                {{ $pro->productSale->sale_price }}€
                            @else
                                {{ $pro->price }}€
                            @endif
                        </span>
                    </div>
                    <div class="down-content">
                        <span class="category">{{ $pro->category->name }}</span>
                        <h4>{{ $pro->name }}</h4>
                        <a href="#"><i class="fa fa-shopping-bag"></i></a>
                    </div>
                </div>
            </div>
        @empty
            <div class="card text-danger" style="border: none; text-align:center;">
                <div class="card-header">
                    There aren't any products available at the moment. Please check back later!
                </div>
            </div>
        @endforelse
    </div>
    
    {{-- <div class="row">
        <div class="col-lg-12">
            <ul class="pagination">
                <li><a href="#"> &lt; </a></li>
                <li><a href="#">1</a></li>
                <li><a class="is_active" href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"> &gt; </a></li>
            </ul>
        </div>
    </div> --}}
</div>

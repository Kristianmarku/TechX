<div class="row ml-3 d-flex flex-wrap">
    <div class="col-md-3">
        <div class="card">
          <div class="card-header text-center">
            <h3 class="title">Total Products</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <h1>{{ $totalProductsCount }}</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
          <div class="card-header text-center">
            <h3 class="title">Instock Products</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center" >
              <h1>{{ $inStockProductsCount }}</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
          <div class="card-header text-center">
            <h3 class="title">Sold Out Products</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center" >
              <h1>{{ $outOfStockProductsCount }}</h1>
            </div>
          </div>
        </div>
    </div>
  </div>
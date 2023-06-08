<div class="row ml-3 d-flex flex-wrap">
    <div class="col-md-2">
        <div class="card">
          <div class="card-header text-center">
            <h3 class="title">Today's Sales</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <h1>{{ $todaySales }}</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="card">
          <div class="card-header text-center">
            <h3 class="title">Total Sales</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <h1>{{ $totalSales }}</h1>
            </div>
          </div>
        </div>
    </div>
  </div>
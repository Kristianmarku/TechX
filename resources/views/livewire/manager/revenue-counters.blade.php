<div class="row d-flex flex-wrap">
    <div class="col-md-3">
        <div class="card bg-light text-dark">
          <div class="card-header text-center">
            <h3 class="title">Today's Revenue</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <h1>{{ $this->getTodaysRevenue() }}€</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-light text-dark">
          <div class="card-header text-center">
            <h3 class="title">Weekly Revenue</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <h1>{{ $this->getWeeklyRevenue() }}€</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-light text-dark">
          <div class="card-header text-center">
            <h3 class="title">Monthly Revenue</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <h1>{{ $this->getMonthlyRevenue() }}€</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-light text-dark">
          <div class="card-header text-center">
            <h3 class="title">Total Revenue</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <h1>{{ $this->getTotalRevenue() }}€</h1>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12">
      <div class="card bg-light text-dark">
          <div class="card-header text-center">
              <h3 class="title">Revenue Chart</h3>
          </div>
          <div class="card-body">
              <div class="d-flex justify-content-center align-items-center">
                  <div class="chart-container" style="position: relative; width: 100%;">
                      <canvas id="revenueChart"></canvas>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        var dailyRevenue = {{ $dailyRevenue }};
        var weeklyRevenue = {{ $weeklyRevenue }};
        var monthlyRevenue = {{ $monthlyRevenue }};

        var ctx = document.getElementById('revenueChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Daily', 'Weekly', 'Monthly'],
                datasets: [{
                    label: 'Revenue',
                    data: [dailyRevenue, weeklyRevenue, monthlyRevenue],
                    backgroundColor: ['rgba(54, 162, 235, 0.5)', 'rgba(75, 192, 192, 0.5)'],
                    borderColor: ['rgba(54, 162, 235, 1)', 'rgba(75, 192, 192, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        ticks: {
                            color: 'black'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: 'black'
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: 'black'
                        }
                    }
                }
            }
        });
    });
</script>
@endpush

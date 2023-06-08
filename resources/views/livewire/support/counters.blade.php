<div class="row ml-3">
    <div class="d-flex">
        @if($page === 'home')
            <div class="col-md-3">
                <a href="{{route('issues')}}">
                <div class="card">
                    <div class="card-header text-center">
                    <h3 class="title">New</h3>
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <h1>{{ $newCount }}</h1>
                    </div>
                    </div>
                </div>
                </a>
            </div>


            <div class="col-md-3">
                <a href="{{route('issues')}}">
                    <div class="card">
                    <div class="card-header text-center">
                        <h3 class="title">In Progress</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                        <h1>{{ $inProgressCount}}</h1>
                        </div>
                    </div>
                    </div>
                </a>
            </div>


            <div class="col-md-3">
                <a href="{{route('issues')}}">
                    <div class="card">
                        <div class="card-header text-center">
                        <h3 class="title">On Hold</h3>
                        </div>
                        <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <h1>{{ $onHoldCount }}</h1>
                        </div>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-3">
                <a href="{{route('issues')}}">
                    <div class="card">
                    <div class="card-header text-center">
                        <h3 class="title">Resolved</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                        <h1>{{ $resolvedCount }}</h1>
                        </div>
                    </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{route('issues')}}">
                    <div class="card">
                    <div class="card-header text-center">
                        <h3 class="title">Closed</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                        <h1>{{ $closedCount }}</h1>
                        </div>
                    </div>
                    </div>
                </a>
            </div>
        @elseif($page === 'orders')
            <div class="col-md-3">
                <a href="">
                <div class="card">
                    <div class="card-header text-center">
                    <h3 class="title">Pending</h3>
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <h1>{{ $pendingCount }}</h1>
                    </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="">
                <div class="card">
                    <div class="card-header text-center">
                    <h3 class="title">Verified</h3>
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <h1>{{ $verifiedCount }}</h1>
                    </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="">
                <div class="card">
                    <div class="card-header text-center">
                    <h3 class="title">Ready to Ship</h3>
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <h1>{{ $readyToShipCount }}</h1>
                    </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="">
                <div class="card">
                    <div class="card-header text-center">
                    <h3 class="title">Shipping</h3>
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <h1>{{ $shippingCount }}</h1>
                    </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="">
                <div class="card">
                    <div class="card-header text-center">
                    <h3 class="title">Delivered</h3>
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <h1>{{ $deliveredCount }}</h1>
                    </div>
                    </div>
                </div>
                </a>
            </div>
        @endif
    </div>
</div>
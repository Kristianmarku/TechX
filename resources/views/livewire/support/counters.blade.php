<div class="row ml-3">
    <div class="d-flex">
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
    </div>
</div>
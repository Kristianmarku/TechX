@extends('layouts.staff.main')
@section('title', 'Orders')

@section('content')
        <div class="panel-header panel-header-lg">
            @livewire('support.counters')
        </div>
        <div class="content">
          @livewire('support.orders-table')
        </div>
      </div>
@endsection
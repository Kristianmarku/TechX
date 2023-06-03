@extends('layouts.staff.main')
@section('title', 'Dashboard')

@section('content')
        <div class="panel-header panel-header-lg">
          @livewire('admin.counters')
        </div>
        <div class="content">
          @livewire('admin.users-table')
        </div>
      </div>
@endsection
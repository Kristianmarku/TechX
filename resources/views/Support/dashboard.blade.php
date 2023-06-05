@extends('layouts.staff.main')
@section('title', 'Dashboard')

@section('content')
        <div class="panel-header panel-header-lg">
         @livewire('support.counters')
        </div>
        <div class="content">
          @livewire('support.issues-table')
        </div>
      </div>
@endsection
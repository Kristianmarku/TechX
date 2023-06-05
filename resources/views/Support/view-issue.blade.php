@extends('layouts.staff.main')
@section('title', 'Issues')

@section('content')
        <div class="panel-header panel-header-sm"></div>
        @livewire('support.view-issue', ['id' => $issue->id])
@endsection
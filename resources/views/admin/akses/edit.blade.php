@extends('layout.app')
    @section('content')
    <div class="app-content hor-content">
        <div class="container">
            <livewire:admin.akses.akses-update :id="$id">
        </div>
    </div>
    @endsection
@section('js')

@endsection
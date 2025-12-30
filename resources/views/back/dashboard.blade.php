@extends('back.layout.app')
@section('title', 'Dashboard')
@section('page-header')
    <x-page-header pretitle="Overview" title="Dashboard" />
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row gy-2">
            <div class="col-sm-12">
                <div class="card p-4">
                    <h1>Welcome,
                        {{ auth()->user()->name }}!
                        Thank you for using the admin panel.
                    </h1>
                    <p class="text-muted mb-2">This is the dashboard for the admin panel.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
@endpush
@push('script')
@endpush

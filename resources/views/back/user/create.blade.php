@extends('back.layout.app')
@section('title', 'User Create')
@section('page-header')
    <x-page-header pretitle="Create" title="User" />
@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-12">
            <form class="card" method="POST" action="{{ route('back.user.store') }}">
                @csrf
                <div class="card-body">
                    <h3 class="card-title">Create User</h3>
                    <div class="row row-cards">
                        <div class="col-sm-6">
                            <label class="form-label required" for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                            @error('name')
                                <span class="text-danger mt-2 d-inline-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label required" for="email">Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                @error('email')
                                    <span class="text-danger mt-2 d-inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label required" for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                @error('password')
                                    <span class="text-danger mt-2 d-inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label required" for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Confirm Password">
                                @error('password_confirmation')
                                    <span class="text-danger mt-2 d-inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('back.user.index') }}" class="btn btn-link">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>
    </div>
@endsection

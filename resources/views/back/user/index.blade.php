@extends('back.layout.app')
@section('title', 'Users List')
@section('page-header')
    <x-page-header pretitle="List" title="User" />
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row gy-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Users</h3>
                        <a href="{{ route('back.user.create') }}" class="btn btn-primary">Add User</a>
                    </div>
                    {{-- <div class="card-body border-bottom py-3">
                        <div class="d-flex">
                            <div class="text-secondary">
                                Show
                                <div class="mx-2 d-inline-block">
                                    <input type="text" class="form-control form-control-sm" value="8" size="3"
                                        aria-label="Invoices count">
                                </div>
                                entries
                            </div>
                            <div class="ms-auto text-secondary">
                                Search:
                                <div class="ms-2 d-inline-block">
                                    <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="table-responsive">
                        <table class="table table-selectable card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>

                                    <th class="w-1">
                                        No.
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-sm icon-thick icon-2">
                                            <path d="M6 15l6 -6l6 6"></path>
                                        </svg>
                                    </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($users as $user)
                                    <tr>
                                        <td><span class="text-secondary">{{ $i++ }}</span></td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format(' d M Y, g:i A') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($user->updated_at)->format(' d M Y, g:i A') }}</td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <a class="btn btn-primary"
                                                    href="{{ route('back.user.edit', $user) }}">Edit</a>
                                                <form method="POST" action="{{ route('back.user.delete', $user) }}"
                                                    class="d-inline ms-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-danger"
                                                        onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
@endpush
@push('script')
@endpush

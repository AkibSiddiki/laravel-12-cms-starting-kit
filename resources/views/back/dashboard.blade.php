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
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Invoices</h3>
                        <a href="#" class="btn btn-primary">Add invoice</a>
                    </div>
                    <div class="card-body border-bottom py-3">
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
                    </div>
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
                                    <th>Invoice Subject</th>
                                    <th>Client</th>
                                    <th>VAT No.</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="text-secondary">001401</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                                    <td>
                                        <span class="flag flag-xs flag-country-us me-2"></span>
                                        Carlson Limited
                                    </td>
                                    <td>87956621</td>
                                    <td>15 Dec 2017</td>
                                    <td><span class="badge bg-success me-1"></span> Paid</td>
                                    <td>$887</td>
                                    <td class="d-flex justify-content-around align-items-center">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="#"> Action </a>
                                                <a class="dropdown-item" href="#"> Another action </a>
                                            </div>
                                        </span>
                                        <button class="btn">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-secondary">001402</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                                    <td>
                                        <span class="flag flag-xs flag-country-gb me-2"></span>
                                        Adobe
                                    </td>
                                    <td>87956421</td>
                                    <td>12 Apr 2017</td>
                                    <td><span class="badge bg-warning me-1"></span> Pending</td>
                                    <td>$1200</td>
                                    <td class="d-flex justify-content-around align-items-center">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="#"> Action </a>
                                                <a class="dropdown-item" href="#"> Another action </a>
                                            </div>
                                        </span>
                                        <button class="btn">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-secondary">001403</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                                    <td>
                                        <span class="flag flag-xs flag-country-de me-2"></span>
                                        Bluewolf
                                    </td>
                                    <td>87952621</td>
                                    <td>23 Oct 2017</td>
                                    <td><span class="badge bg-warning me-1"></span> Pending</td>
                                    <td>$534</td>
                                    <td class="d-flex justify-content-around align-items-center">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="#"> Action </a>
                                                <a class="dropdown-item" href="#"> Another action </a>
                                            </div>
                                        </span>
                                        <button class="btn">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-secondary">001404</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                                    <td>
                                        <span class="flag flag-xs flag-country-br me-2"></span>
                                        Salesforce
                                    </td>
                                    <td>87953421</td>
                                    <td>2 Sep 2017</td>
                                    <td><span class="badge bg-secondary me-1"></span> Due in 2 Weeks</td>
                                    <td>$1500</td>
                                    <td class="d-flex justify-content-around align-items-center">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="#"> Action </a>
                                                <a class="dropdown-item" href="#"> Another action </a>
                                            </div>
                                        </span>
                                        <button class="btn">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-secondary">001405</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a>
                                    </td>
                                    <td>
                                        <span class="flag flag-xs flag-country-pl me-2"></span>
                                        Printic
                                    </td>
                                    <td>87956621</td>
                                    <td>29 Jan 2018</td>
                                    <td><span class="badge bg-danger me-1"></span> Paid Today</td>
                                    <td>$648</td>
                                    <td class="d-flex justify-content-around align-items-center">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="#"> Action </a>
                                                <a class="dropdown-item" href="#"> Another action </a>
                                            </div>
                                        </span>
                                        <button class="btn">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-secondary">001406</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a>
                                    </td>
                                    <td>
                                        <span class="flag flag-xs flag-country-br me-2"></span>
                                        Tabdaq
                                    </td>
                                    <td>87956621</td>
                                    <td>4 Feb 2018</td>
                                    <td><span class="badge bg-secondary me-1"></span> Due in 3 Weeks</td>
                                    <td>$300</td>
                                    <td class="d-flex justify-content-around align-items-center">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="#"> Action </a>
                                                <a class="dropdown-item" href="#"> Another action </a>
                                            </div>
                                        </span>
                                        <button class="btn">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-secondary">001407</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo &amp; Print</a>
                                    </td>
                                    <td>
                                        <span class="flag flag-xs flag-country-us me-2"></span>
                                        Apple
                                    </td>
                                    <td>87956621</td>
                                    <td>22 Mar 2018</td>
                                    <td><span class="badge bg-success me-1"></span> Paid Today</td>
                                    <td>$2500</td>
                                    <td class="d-flex justify-content-around align-items-center">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="#"> Action </a>
                                                <a class="dropdown-item" href="#"> Another action </a>
                                            </div>
                                        </span>
                                        <button class="btn">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-secondary">001408</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                                    <td>
                                        <span class="flag flag-xs flag-country-pl me-2"></span>
                                        Tookapic
                                    </td>
                                    <td>87956621</td>
                                    <td>13 May 2018</td>
                                    <td><span class="badge bg-success me-1"></span> Paid Today</td>
                                    <td>$940</td>
                                    <td class="d-flex justify-content-around align-items-center">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="#"> Action </a>
                                                <a class="dropdown-item" href="#"> Another action </a>
                                            </div>
                                        </span>
                                        <button class="btn">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row g-2 justify-content-center justify-content-sm-between">
                            <div class="col-auto d-flex align-items-center">
                                <p class="m-0 text-secondary">Showing <strong>1 to 8</strong> of <strong>16
                                        entries</strong></p>
                            </div>
                            <div class="col-auto">
                                <ul class="pagination m-0 ms-auto">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-1">
                                                <path d="M15 6l-6 6l6 6"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-1">
                                                <path d="M9 6l6 6l-6 6"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <form class="card">
                    <div class="card-body">
                        <h3 class="card-title">Edit Profile</h3>
                        <div class="row row-cards">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Company</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Company"
                                        value="Creative Code Inc.">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" value="michael23">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="Company" value="Chet">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address"
                                        value="Melbourne, Australia">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" placeholder="City" value="Melbourne">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Postal Code</label>
                                    <input type="test" class="form-control" placeholder="ZIP Code">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Country</label>
                                    <select class="form-control form-select">
                                        <option value="">Germany</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 mb-0">
                                    <label class="form-label">About Me</label>
                                    <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="reset" class="btn btn-link">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">HTTP Request</h3>
                    </div>
                    <div class="card-body">
                        <div class="row row-cards">
                            <div class="mb-3 col-sm-4 col-md-2">
                                <label class="form-label required">Method</label>
                                <select class="form-select">
                                    <option value="GET">GET</option>
                                    <option value="POST">POST</option>
                                    <option value="PUT">PUT</option>
                                    <option value="HEAD">HEAD</option>
                                    <option value="DELETE">DELETE</option>
                                    <option value="PATCH">PATCH</option>
                                </select>
                            </div>
                            <div class="mb-3 col-sm-8 col-md-10">
                                <label class="form-label required">URL</label>
                                <input name="url" type="text" class="form-control"
                                    value="https://content.googleapis.com/discovery/v1/apis/surveys/v2/rest">
                            </div>
                        </div>
                        <div class="form-label">Assertions</div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Source</th>
                                        <th>Property</th>
                                        <th>Comparison</th>
                                        <th>Target</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-select">
                                                <option value="STATUS_CODE" selected="">Status code</option>
                                                <option value="JSON_BODY">JSON body</option>
                                                <option value="HEADERS">Headers</option>
                                                <option value="TEXT_BODY">Text body</option>
                                                <option value="RESPONSE_TIME">Response time</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <select class="form-select">
                                                <option value="EQUALS" selected="">Equals</option>
                                                <option value="NOT_EQUALS">Not equals</option>
                                                <option value="HAS_KEY">Has key</option>
                                                <option value="NOT_HAS_KEY">Not has key</option>
                                                <option value="HAS_VALUE">Has value</option>
                                                <option value="NOT_HAS_VALUE">Not has value</option>
                                                <option value="IS_EMPTY">Is empty</option>
                                                <option value="NOT_EMPTY">Is not empty</option>
                                                <option value="GREATER_THAN">Greater than</option>
                                                <option value="LESS_THAN">Less than</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="200">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-select">
                                                <option value="STATUS_CODE">Status code</option>
                                                <option value="JSON_BODY" selected="">JSON body</option>
                                                <option value="HEADERS">Headers</option>
                                                <option value="TEXT_BODY">Text body</option>
                                                <option value="RESPONSE_TIME">Response time</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="parameters.alt.type">
                                        </td>
                                        <td>
                                            <select class="form-select">
                                                <option value="EQUALS">Equals</option>
                                                <option value="NOT_EQUALS">Not equals</option>
                                                <option value="HAS_KEY">Has key</option>
                                                <option value="NOT_HAS_KEY">Not has key</option>
                                                <option value="HAS_VALUE" selected="">Has value</option>
                                                <option value="NOT_HAS_VALUE">Not has value</option>
                                                <option value="IS_EMPTY">Is empty</option>
                                                <option value="NOT_EMPTY">Is not empty</option>
                                                <option value="GREATER_THAN">Greater than</option>
                                                <option value="LESS_THAN">Less than</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="string">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-select">
                                                <option value="STATUS_CODE">Status code</option>
                                                <option value="JSON_BODY">JSON body</option>
                                                <option value="HEADERS">Headers</option>
                                                <option value="TEXT_BODY">Text body</option>
                                                <option value="RESPONSE_TIME" selected="">Response time
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <select class="form-select">
                                                <option value="EQUALS">Equals</option>
                                                <option value="NOT_EQUALS">Not equals</option>
                                                <option value="HAS_KEY">Has key</option>
                                                <option value="NOT_HAS_KEY">Not has key</option>
                                                <option value="HAS_VALUE">Has value</option>
                                                <option value="NOT_HAS_VALUE">Not has value</option>
                                                <option value="IS_EMPTY">Is empty</option>
                                                <option value="NOT_EMPTY">Is not empty</option>
                                                <option value="GREATER_THAN">Greater than</option>
                                                <option value="LESS_THAN" selected="">Less than</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="500">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-select">
                                                <option value="STATUS_CODE">Status code</option>
                                                <option value="JSON_BODY">JSON body</option>
                                                <option value="HEADERS" selected="">Headers</option>
                                                <option value="TEXT_BODY">Text body</option>
                                                <option value="RESPONSE_TIME">Response time</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="content-type">
                                        </td>
                                        <td>
                                            <select class="form-select">
                                                <option value="EQUALS" selected="">Equals</option>
                                                <option value="NOT_EQUALS">Not equals</option>
                                                <option value="HAS_KEY">Has key</option>
                                                <option value="NOT_HAS_KEY">Not has key</option>
                                                <option value="HAS_VALUE">Has value</option>
                                                <option value="NOT_HAS_VALUE">Not has value</option>
                                                <option value="IS_EMPTY">Is empty</option>
                                                <option value="NOT_EMPTY">Is not empty</option>
                                                <option value="GREATER_THAN">Greater than</option>
                                                <option value="LESS_THAN">Less than</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control"
                                                value="application/json; charset=UTF-8">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="reset" class="btn btn-link">Cancel</button>
                        <button type="submit" class="btn btn-primary">Make request</button>
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

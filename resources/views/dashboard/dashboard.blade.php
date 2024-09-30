@extends('components.sideNavbar')
@section('content')
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-2xl font-semibold">Dashboard</li>
        </ol>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="card text-white bg-customOrange mb-4 rounded-lg">
                <div class="card-body p-6">
                    <h5 class="card-title">Total Users</h5>
                    <h2 class="text-4xl font-bold">1,245</h2>
                </div>
                <div class="card-footer p-4 flex items-center rounded-b-lg">
                    <a class="small text-white stretched-link mr-2" href="#">View Details</a>
                    <div class="small text-white">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="card text-white bg-customOrange mb-4 rounded-lg">
                <div class="card-body p-6">
                    <h5 class="card-title">Active Orders</h5>
                    <h2 class="text-4xl font-bold">320</h2>
                </div>
                <div class="card-footer p-4 flex items-center rounded-b-lg">
                    <a class="small text-white stretched-link mr-2" href="#">View Details</a>
                    <div class="small text-white">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="card text-white bg-customOrange mb-4 rounded-lg">
                <div class="card-body p-6">
                    <h5 class="card-title">Revenue</h5>
                    <h2 class="text-4xl font-bold">₱15,800</h2>
                </div>
                <div class="card-footer p-4 flex items-center rounded-b-lg">
                    <a class="small text-white stretched-link mr-2" href="#">View Details</a>
                    <div class="small text-white">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

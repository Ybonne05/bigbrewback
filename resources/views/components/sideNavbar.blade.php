<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Big Brew</title>

    <!-- CSS -->
    @vite('resources/css/app.css')

    <!-- FontAwesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        .sb-sidenav-collapse-arrow {
            transition: transform 0.3s ease;
        }
        .sb-sidenav-collapse-arrow.rotate {
            transform: rotate(180deg);
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            width: 100%;
        }

        /* Sidebar styles */
        .sidebar {
            width: 260px;
            height: 100vh;
            background-color: #343a40;
            position: fixed;
            top: 0;
            left: -260px; /* Initially hidden */
            transition: left 0.3s ease;
            padding-top: 80px;
            z-index: 1000;
        }

        .sidebar.show {
            left: 0;
        }

        /* Main content and navbar adjustments */
        .main-content {
            margin-left: 0;
            transition: margin-left 0.3s ease;
        }

        .main-content.shift {
            margin-left: 250px;
        }

        .navbar {
            width: 100%;
            position: fixed;
            z-index: 1100; /* Higher than sidebar */
            background-color: #343a40   ;
            padding: 1rem;
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: white;
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="navbar flex justify-between items-center">
        <a class="navbar-brand" href="{{ url('/dashboard') }}">BIGBREW</a>
        <button class="text-white" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <nav class="mt-4">
            <div class="px-4">
                <div class="nav">
                    <a class="flex items-center text-white py-2 px-4 hover:bg-gray-700" href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        Dashboard
                    </a>

                    <!-- Products Dropdown -->
                    <div>
                        <a class="flex items-center text-white py-2 px-4 hover:bg-gray-700" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                            <i class="fas fa-box mr-3"></i>
                            Products
                            <i class="fas fa-angle-down sb-sidenav-collapse-arrow ml-auto"></i>
                        </a>
                        <div class="collapse" id="collapseProducts">
                            <nav class="bg-gray-700 px-4">
                                {{-- Product Routes --}}
                            </nav>
                        </div>
                    </div>

                    <!-- Orders Dropdown -->
                    <div>
                        <a class="flex items-center text-white py-2 px-4 hover:bg-gray-700" data-bs-toggle="collapse" data-bs-target="#collapseOrders" aria-expanded="false" aria-controls="collapseOrders">
                            <i class="fas fa-shopping-cart mr-3"></i>
                            Orders
                            <i class="fas fa-angle-down sb-sidenav-collapse-arrow ml-auto"></i>
                        </a>
                        <div class="collapse" id="collapseOrders">
                            <nav class="bg-gray-700 px-4">
                                {{-- Order Routes --}}
                            </nav>
                        </div>
                    </div>

                    <a class="flex items-center text-white py-2 px-4 hover:bg-gray-700" href="message.html">
                        <i class="fas fa-envelope mr-3"></i>
                        Messages
                    </a>

                    <!-- Settings Dropdown -->
                    <div>
                        <a class="flex items-center text-white py-2 px-4 hover:bg-gray-700"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseSettings"
                        aria-expanded="false"
                        aria-controls="collapseSettings">
                            <i class="fas fa-cogs mr-3"></i>
                            Settings
                            <i class="fas fa-angle-down sb-sidenav-collapse-arrow ml-auto"></i>
                        </a>
                        <div class="collapse" id="collapseSettings">
                            <nav class="bg-gray-700 px-4">
                                <a class="text-white py-2 hover:bg-gray-600" href="AccountInformation.html">Account Information</a>
                                <a class="text-white py-2 hover:bg-gray-600" href="ShopInformation.html">Shop/Branch Information</a>

                                <!-- Store Status Toggle -->
                                <div class="flex items-center justify-between py-2">
                                    <span class="text-white" id="storeStatus">Store Closed</span>
                                    <div class="toggle-switch cursor-pointer" onclick="toggleStoreStatus()">
                                        <div class="slider bg-red-500 w-16 h-8 rounded-full relative transition-transform"></div>
                                    </div>
                                </div>
                                <a class="text-white py-2 hover:bg-gray-600" href="ChatSettings.html">Chat Settings</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content flex-grow pt-20" id="mainContent">
        @yield('content')
    </div>


    <!-- Footer -->
    @include('components.footer')

    <!-- Store Status Toggle Script -->
    <script>
        let storeOpen = false;
        function toggleStoreStatus() {
            storeOpen = !storeOpen;
            const statusElement = document.getElementById('storeStatus');
            const toggleSwitch = document.querySelector('.toggle-switch');
            const slider = document.querySelector('.toggle-switch .slider');
            if (storeOpen) {
                statusElement.textContent = 'Store Open';
                toggleSwitch.style.backgroundColor = 'green';
                slider.style.transform = 'translateX(100%)'; // Move to the right
            } else {
                statusElement.textContent = 'Store Closed';
                toggleSwitch.style.backgroundColor = 'red';
                slider.style.transform = 'translateX(0)'; // Move to the left
            }
        }

        document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(dropdown => {
            dropdown.addEventListener('click', function() {
                const targetId = this.getAttribute('data-bs-target');
                const collapseElement = document.querySelector(targetId);
                const arrow = this.querySelector('.sb-sidenav-collapse-arrow');

                // Toggle arrow rotation
                arrow.classList.toggle('rotate');

                // Toggle the collapse
                const isExpanded = this.getAttribute('aria-expanded') === 'true';

                // Update aria-expanded attribute
                this.setAttribute('aria-expanded', !isExpanded);

                // Toggle collapse instance
                const collapseInstance = bootstrap.Collapse.getInstance(collapseElement);
                if (isExpanded) {
                    collapseInstance.hide();
                } else {
                    collapseInstance.show();
                }
            });
        });

        // Sidebar toggle
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            sidebar.classList.toggle('show');
            mainContent.classList.toggle('shift');
        });
    </script>

    <!-- Scripts at the end of the body -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

{{-- <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand" href="{{ url('/dashboard') }}">Big Brew</a>

    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i>
    </button>
    </nav>
    <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Products
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProducts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('products.list') }}">List of Products</a>
                            <a class="nav-link" href="{{ route('products.delisted') }}">Delisted Products</a
                    <!-- Orders Section -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrders" aria-expanded="false" aria-controls="collapseOrders">
                        <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                        Orders
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseOrders" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="PendingOrders.html">Pending Orders</a>
                            <a class="nav-link" href="ProcessingOrders.html">Processing Orders</a>
                            <a class="nav-link" href="ProcessedOrders.html">Processed Orders</a>
                            <a class="nav-link" href="PickUpOrders.html">Pick Up Orders</a>
                            <a class="nav-link" href="DeliverOrders.html">Deliver Orders</a>
                            <a class="nav-link" href="CancelledOrders.html">Cancelled Orders</a>
                        </nav>
                    </div>
                    <!-- Messages -->
                    <a class="nav-link" href="message.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                        Messages
                    </a>
                    <!-- Settings -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                        <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                        Settings
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseSettings" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="AccountInformation.html">Account Information</a>
                            <a class="nav-link" href="ShopInformation.html">Shop/Branch Information</a>
                            <!-- Store Status -->
                            <div class="store-status-container">
                                <span id="storeStatus">Store Closed</span>
                                <div class="toggle-switch" onclick="toggleStoreStatus()">
                                    <div class="slider"></div>
                                </div>
                            </div>
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
                                        slider.style.transform = 'translateX(16px)';
                                    } else {
                                        statusElement.textContent = 'Store Closed';
                                        toggleSwitch.style.backgroundColor = 'red';
                                        slider.style.transform = 'translateX(0)';
                                    }
                                }
                            </script>
                            <style>
                                .store-status-container {
                                    display: flex;
                                    align-items: center;
                                    gap: 30px;
                                    padding-left: 16px;
                                }
                                #storeStatus {
                                    font-size: 16px;
                                }
                                .toggle-switch {
                                    position: relative;
                                    width: 40px;
                                    height: 24px;
                                    background-color: #ccc;
                                    border-radius: 24px;
                                    cursor: pointer;
                                    transition: background-color 0.4s;
                                }
                                .slider {
                                    position: absolute;
                                    height: 20px;
                                    width: 20px;
                                    background-color: white;
                                    border-radius: 50%;
                                    top: 2px;
                                    left: 2px;
                                    transition: transform 0.4s;
                                }
                            </style>
                            <a class="nav-link" href="ChatSettings.html">Chat Settings</a>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    </div> --}}





{{--Background for the page
.bg-custom-page-orange {
    background-color: #a46505;
}

/* Button styling */
.btn-register {
    background-color: #a46505;
    color: white;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 8px;
}

.btn-register:hover {
    background-color: #924f04; /* Darker shade for hover */
}

/* Sidebar and button animation */
#layoutSidenav_nav {
    position: relative;
    transition: transform 0.5s ease; /* Animates the sidebar */
}

.right-button {
    position: relative;
    margin-left: 95px;
    transition: transform 0.5s ease; /* Animates the movement */
}

.right-button.closed {
    transform: translateX(-100px); /* Moves the button to the left when closed */
}

#layoutSidenav_nav.closed {
    transform: translateX(-250px); /* Moves the sidebar to the left when closed */
}



.big-brew-brand {
    font-size: 20px; /* Palitan mo ng mas malaking value kung gusto mo pa itong palakihin */
    font-family: "Montserrat", "Oswald", sans-serif;
    font-weight: bold;
    letter-spacing: 2px; /* Adjust for spacing between letters */
}

/* General Styles */
body {
    font-family: Arial, sans-serif; /* Font for the dashboard */
    background-color: #f8f9fa; /* Light background color */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
}

/* Navbar Styles */
.navbar {
    background-color: #343a40; /* Dark background for the navbar */
    padding: 20px; /* Padding for navbar */
    position: fixed; /* Fix the navbar at the top */
    width: 100%; /* Full width */
    z-index: 1000; /* Ensure the navbar is above the sidenav */
}

.navbar-brand {
    color: #FF8C00; /* Brand color */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Text shadow */
}

.navbar-brand:hover {
    color: #e68a00; /* Lighter shade on hover */
}

.navbar .btn-link {
    color: white; /* Color for the toggle button */
}

/* Collapse and dropdown adjustments */
.collapse {
    transition: height 0.3s ease; /* Smooth height transition */
    overflow: hidden; /* Hide overflow to prevent spacing issues */
}

.collapse:not(.show) {
    height: 0; /* Set height to 0 when not showing */
    padding: 0; /* Remove padding */
}

.collapse.show {
    padding: 1rem; /* Optional: add padding when showing */
    /* or adjust according to your needs */
}

/* Side Navbar Styles */
.sb-sidenav {
    background-color: #343a40; /* Dark background for side navbar */
    height: 100vh; /* Full height */
    position: fixed; /* Fix position on the left */
    top: 0; /* Align to top */
    left: 0; /* Align to left */
    width: 260px; /* Width of the sidenav */
    padding-top: 80px; /* Adjust to account for the navbar height */
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.3); /* Shadow for depth */
    transition: width 0.3s; /* Smooth transition for width */
}


.sb-sidenav .nav {
    flex-direction: column; /* Stack links vertically */
}

.sb-sidenav .nav-link {
    color: #ffffff; /* Text color */
    padding: 10px 20px; /* Padding for links */
    margin: 5px 0; /* Space between links */
    border-radius: 5px; /* Rounded corners */
    transition: background-color 0.3s, color 0.3s; /* Transition effects */
}

.sb-sidenav .nav-link:hover {
    background-color: #495057; /* Background color on hover */
    color: #f8f9fa; /* Change text color on hover */
}

.sb-nav-link-icon {
    margin-right: 10px; /* Space between icon and text */
}

.nav-text {
    display: inline-block; /* Ensure the text behaves correctly */
}


/* Active link styling */
.sb-sidenav .nav-link.active {
    color: #fff; /* Active link text color */
}

/* Arrow rotation on collapse */
.sb-sidenav-collapse-arrow {
    margin-left: auto; /* Align the arrow to the right */
    margin-right: 5px;
    transition: transform 0.3s ease; /* Smooth transition for rotation */
    color: #ffffff; /* Arrow color */
}

/* Rotate arrow when the dropdown is open */
.collapse.show + .nav-link .sb-sidenav-collapse-arrow {
    transform: rotate(180deg); /* Rotate arrow when dropdown is open */
}

/* Ensure rotation resets when dropdown is closed */
.collapse:not(.show) + .nav-link .sb-sidenav-collapse-arrow {
    transform: rotate(0deg); /* Arrow points down when closed */
}


.nav-link {
    color: #ffffff; /* White text color for links */
    padding: 0.75rem 1rem; /* Padding for links */
    text-decoration: none; /* Remove underline */
    display: flex; /* Use flexbox to align items */
    align-items: center; /* Center items vertically */
}

.nav-link:hover {
    background-color: #FF8C00; /* Background color on hover */
    color: white; /* Text color on hover */
}

/* Store Status Toggle Styles */
.store-status-container {
    display: flex;
    align-items: center;
    gap: 30px;
    padding-left: 16px;
}

#storeStatus {
    font-size: 16px;
}

.toggle-switch {
    position: relative;
    width: 40px;
    height: 24px;
    background-color: #ccc;
    border-radius: 24px;
    cursor: pointer;
    transition: background-color 0.4s;
}

.toggle-switch .slider {
    position: absolute;
    height: 20px;
    width: 20px;
    background-color: white;
    border-radius: 50%;
    top: 2px;
    left: 2px;
    transition: transform 0.4s;
}

/* Main Content Area */
#layoutSidenav_content {
    margin-left: 250px; /* Margin to the left for the sidenav */
    padding: 80px 2rem 2rem 2rem; /* Adjusted padding for content area */
}

h1 {
    font-size: 2rem; /* Font size for main headers */
    color: #343a40; /* Dark color for headers */
}

.toggle-switch {
    width: 40px; /* Width of the toggle switch */
    height: 24px; /* Height of the toggle switch */
    background-color: #ccc; /* Default background color */
    border-radius: 24px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background-color 0.4s; /* Smooth color transition */
}

.slider {
    width: 20px; /* Width of the slider */
    height: 20px; /* Height of the slider */
    background-color: white; /* Slider color */
    border-radius: 50%; /* Rounded slider */
    transition: transform 0.4s; /* Smooth transition for slider */
}

/* Footer Styles */
footer {
    background-color: #e9ecef; /* Light background for footer */
    padding: 1rem 0; /* Padding for footer */
    text-align: center; /* Centered text */
}

footer .small {
    color: #6c757d; /* Text color in footer */
}

footer a {
    color: #007bff; /* Link color in footer */
    text-decoration: none; /* Remove underline */
}

footer a:hover {
    text-decoration: underline; /* Underline on hover */
}

/* Responsive Design */
@media (max-width: 768px) {
    .sb-sidenav {
        display: none; /* Hide sidenav on small screens */
    }

    #layoutSidenav_content {
        margin-left: 0; /* No left margin on small screens */
        padding: 1rem; /* Padding for content area */
    }

    .navbar {
        display: flex; /* Flexbox for navbar items */
        justify-content: space-between; /* Space out items */
    }

    .navbar-brand {
        font-size: 20px; /* Smaller brand font on mobile */
    }
}--}}

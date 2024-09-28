<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Show the dashboard view
    public function showDashboard()
    {
        return view('dashboard.dashboard');
    }

    // Show the list of products page
    public function showListOfProducts()
    {
        return view('ListOfProducts');
    }

    // Show the delisted products page
    public function showDelistedProducts()
    {
        return view('DelistedProducts');
    }

    // Show the pending orders page
    public function showPendingOrders()
    {
        return view('PendingOrders');
    }

    // Show the processing orders page
    public function showProcessingOrders()
    {
        return view('ProcessingOrders');
    }

    // Show the processed orders page
    public function showProcessedOrders()
    {
        return view('ProcessedOrders');
    }

    // Show the pickup orders page
    public function showPickUpOrders()
    {
        return view('PickUpOrders');
    }

    // Show the deliver orders page
    public function showDeliverOrders()
    {
        return view('DeliverOrders');
    }

    // Show the cancelled orders page
    public function showCancelledOrders()
    {
        return view('CancelledOrders');
    }

    // Show the messages page
    public function showMessages()
    {
        return view('message');
    }

    // Show the settings page (account information, etc.)
    public function showAccountInformation()
    {
        return view('AccountInformation');
    }

    public function showShopInformation()
    {
        return view('ShopInformation');
    }

    // Show the chat settings page
    public function showChatSettings()
    {
        return view('ChatSettings');
    }
}

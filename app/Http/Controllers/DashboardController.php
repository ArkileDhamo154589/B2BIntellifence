<?php
namespace App\Http\Controllers;

use App\Models\Company;

class DashboardController extends Controller
{
    public function index()
    {

        $stats = [
            'monthly_orders' => 1248,
            'pending_orders' => 42,
            'total_companies' => 156,
            'active_feeds' => 89
        ];

        $latest_orders = collect([
            (object)['id' => '#8842', 'company' => 'Φαρμακείο Γεωργίου', 'amount' => 120.50, 'status' => 'Pending'],
            (object)['id' => '#8841', 'company' => 'Medica AE', 'amount' => 450.00, 'status' => 'Completed'],
            (object)['id' => '#8840', 'company' => 'BioHealth O.E.', 'amount' => 89.90, 'status' => 'Shipped'],
        ]);

        return view('admin.dashboard', compact('stats', 'latest_orders'));
    }
}

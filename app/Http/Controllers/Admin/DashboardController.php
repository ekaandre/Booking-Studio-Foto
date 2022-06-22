<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index(request $request)
    {
        return view('pages.admin.dashboard', [
            'reservation' => Reservation::count(),
            'transaction' => Transaction::count(),
            'transaction_active' => Transaction::where('transaction_status' , 'ACTIVE')->count(),
            'transaction_success' => Transaction::where('transaction_status' , 'SUCCESS')->count()
        ]);
    }
}
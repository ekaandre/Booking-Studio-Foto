<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Auth;

class MyorderController extends Controller
{
    public function index()
    {
        $myorder = TransactionDetail::with('transaction.reservation')->where('username', 
        Auth::user()->username)->orderBy('id','Desc')->get();
        //dd($myorder);
        
        return view('pages.myorder', [
            'myorder' => $myorder
        ]);
    }

    public function show($id)
    {
        $myorder = TransactionDetail::with([
            'transaction.reservation.galleries'
        ])->findOrFail($id);
        //dd($myorder);
        return view ('pages.myorder-show',[
            'myorder' => $myorder
        ]);
    }

}
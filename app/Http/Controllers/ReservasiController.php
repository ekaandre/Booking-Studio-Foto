<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index(request $request)
    {
       $items = Reservation::with([
           'galleries'
       ])->get();
       return view('pages.reservasi', [
           'items' => $items
       ]);
    }
}
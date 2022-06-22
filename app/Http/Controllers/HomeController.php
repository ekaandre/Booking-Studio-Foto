<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(request $request)
    {
        $items = Reservation::with([
           'galleries'
       ])->paginate(4);
       return view('pages.home', [
           'items' => $items
       ]);
    }
}
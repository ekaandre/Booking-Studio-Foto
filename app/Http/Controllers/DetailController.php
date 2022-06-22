<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(request $request, $slug)
    {
        $item = Reservation::with(['galleries'])
            ->where('slug', $slug)
            ->firstOrFail();
       return view('pages.detail',[
           'item' => $item
       ]);
    }
}
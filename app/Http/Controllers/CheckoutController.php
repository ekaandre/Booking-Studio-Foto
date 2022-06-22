<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TransactionSuccess;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
   public function index(request $request, $id)
   {
      $item = Transaction::with(['details', 'reservation', 'user'])->findOrFail($id);
      return view('pages.checkout',[
         'item' => $item
      ]);
   }

   public function process(request $request, $id)
   {
   $reservation = Reservation::findOrFail($id);

   $transaction = Transaction::with('user')->create([
      'reservations_id' => $id,
      'reservations_title' => $reservation->title,
      'user_id' => Auth::user()->id,
      'transaction_total' => $reservation->price,
      'transaction_status' => 'IN_CART'
   ]);

   return redirect()->route('checkout', $transaction->id);
   }
   public function remove(request $request, $detail_id)
   {
   $item = TransactionDetail::findOrFail($detail_id);
   //dd($item);         
   $item->delete();

   return redirect()->route('checkout', $item->transactions_id);
   }
   
   public function create(request $request, $id)
   {
   
   $request->validate([
      'username' => 'required|string|exists:users,username',
      'phone' => 'required|string',
      'datetime' => 'required'
   ]);

   $data = $request->all();
   $data['transactions_id'] = $id;
   //dd($data);

   TransactionDetail::create($data);

   $transaction = Transaction::with(['reservation'])->find($id);
   

   return redirect()->route('checkout', $id);
   }

   public function success(request $request, $id)
   {

      $transaction = Transaction::with(['details', 'reservation.galleries', 'user'])
      ->findOrFail($id);
      $transaction->transaction_status = 'PENDING';

      $transaction->save();

      return view('pages.success')->with('success', 'Pemesanan Berhasil');
   }
}
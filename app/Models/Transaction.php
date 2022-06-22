<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'reservations_id', 'reservations_title',
        'transaction_total', 'transaction_status'
    ];

    protected $hidden = [

    ];

    //relasi ke galery dan reservasi
    public function details(){
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }
    public function reservation(){
        return $this->belongsTo(Reservation::class, 'reservations_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'reservations_id', 'image' , 
    ];

    protected $hidden = [

    ];

    //relasi ke galery dan reservasi
    public function reservation(){
        return $this->belongsTo(Reservation::class, 'reservations_id', 'id');
    }
    
}
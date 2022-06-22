<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title', 'slug' , 'category' , 'about', 'person',
        'price', 'duration'
    ];

    protected $hidden = [

    ];

    //relasi
    public function galleries(){
        return $this->hasMany(Gallery::class, 'reservations_id', 'id');
    }
    
}
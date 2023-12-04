<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model {
    use HasFactory;
    
    protected $table = 'flight';
    
    // No tiene timestamps
    public $timestamps = false;
    
	protected $fillable = ['cityOrigin', 'cityDestination', 'company', 'date', 'depureTime', 'arrivalTime', 'ability'];
}

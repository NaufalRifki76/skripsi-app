<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name'
    ];

    protected $table = 'rent_items';

    public function venue_rent_item()
    {
        return $this->belongsTo(VenueRentItems::class, 'item_id', 'id');
    }
}

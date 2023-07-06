<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueRentItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'item_qty',
        'item_rent_cost'
    ];

    protected $table = 'venue_rent_items';

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id', 'id');
    }

    public function rent_item()
    {
        return $this->hasOne(RentItems::class, 'id', 'item_id');
    }
}

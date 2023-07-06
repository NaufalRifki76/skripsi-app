<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\VenueRentItems;
use Illuminate\Http\Request;

class SewaPerlengkapanController extends Controller
{
    public function index(Request $request)
    {
        $venue_rent_items = null;
        $search = null;
        if(request()->isMethod('get')){
            return view('sewa-perlengkapan.index', compact('venue_rent_items', 'search'));
        }

        $search = $request->venue;

        $venue_rent_items = VenueRentItems::whereHas('venue', function ($q) use($request){
            $q->where('venue_name', 'LIKE', '%'.$request->venue.'%');
        })->with('venue', 'rent_item')->get();

        return view('sewa-perlengkapan.index', compact('venue_rent_items', 'search'));
    }
}

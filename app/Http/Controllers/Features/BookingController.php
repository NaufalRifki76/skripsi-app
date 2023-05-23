<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\FieldDetail;
use App\Models\RentHours;
use App\Models\RentHoursAvailable;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller{
    public function index(){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $venue = Venue::all();
            return view('lapangan.index', compact('venue'));
        }
    }

    public function venuedetail($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $venue = Venue::where('id', $id)->first();
            return view('lapangan.detail', compact('venue'));
        }
    }

    public function order($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $venue = Venue::where('id', $id)->first();
            $field = FieldDetail::where('venue_id', $id)->get();
            $field_photo = DB::table('field_detail_photos')
            ->join('field_detail', 'field_detail_photos.field_detail_id', '=', 'field_detail.id')
            ->join('venue', 'field_detail.venue_id', '=', 'venue.id')
            ->where('venue_id', '=', $id)
            ->pluck('field_detail_photos.field_photo_base64')
            ->toArray();
            return view('pesan-lapangan.index', compact('venue', 'field', 'field_photo'));
        }
    }

    public function orderdate($venueid, $fieldid){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $venue = Venue::where('id', $venueid)->first();
            $field = FieldDetail::where('id', $fieldid)->first();
            return view('pesan-lapangan.pesan', compact('venueid', 'fieldid', 'venue', 'field'));
        }
    }

    public function ordertime($venueid, $fieldid, Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $request->validate([
                'order_date' => 'required',
            ]);

            $availability = RentHours::where('order_date', $request->order_date)->first();
            $date = $request->order_date;
            $hours = RentHoursAvailable::where('venue_id', $venueid)->first();
            $venue = Venue::where('id', $venueid)->first();
            $field = FieldDetail::where('id', $fieldid)->first();
            // dd($availability);
            return view('pesan-lapangan.pilih-jam', compact('venueid', 'fieldid', 'venue', 'field', 'date', 'hours', 'availability'));
        }
    }
}
